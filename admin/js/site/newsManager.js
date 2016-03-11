
$(document).ready(function () {
    var newsTable = $('#newsTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": false,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "simple_numbers",
        "columnDefs": [
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 5 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    getAllNews();

    $('#saveOrUpdateNews').click(function () {
        if ($('#newTitle').val() == "" && $('#newsId').val() == "") {
            $.alert("Please enter News title.");
        } else {
            Common.showOverlay();
            var formData = new FormData();
            formData.append('newTitle', $('#newTitle').val());
            formData.append('newStatus', $('#newStatus').val());
            formData.append('newDescription', $('#newDescription').val());
            formData.append('newsId', $('#newsId').val());
            formData.append('action', 'addNews');

            var saveNews = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "text",
                success: function (resultData) {
                    Common.hideOverlay();
                    $.alert(resultData);
                    getAllNews();
                    reset();
                }
            });
            saveNews.error(function () {
                Common.hideOverlay();
                $.alert("Something went wrong while adding news");
            });
        }
    });

    $('#newsTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = newsTable.row(this).data();
            $( "#newsId" ).val(row[5]);
            $( "#newTitle" ).val(row[0]);
            $( "#newDescription" ).val(row[1]);
            $( "#newStatus" ).val(row[4]);
        }
    });

    $('#resetNews').click(function () {
        reset();
    });

    function reset() {
        $('#newTitle').val("");
        $('#newStatus').val("");
        $('#newDescription').val("");
        $('#newsId').val("");
    }

    function getAllNews() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllNews';
        var serviceCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                newsTable.clear();
                $.each(resultData, function (i, item) {
                    newsTable.row.add([item.title, item.description, getStatusById(item.status), item.createdDate, item.status, item.id]).draw();
                });
            }
        });
        serviceCall.error(function () {
            $.alert("Something went wrong while loading news");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

});