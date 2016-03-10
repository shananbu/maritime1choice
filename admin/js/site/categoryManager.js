$(document).ready(function () {
    var categoryTable = $('#categoryTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": false,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "simple_numbers",
        "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 3 ],
                "visible": false
            }
        ]
    });


    getAllCategories();

    $('#saveOrUpdateButton').click(function () {
        if ($('#categoryName').val() == "" && $('#categoryId').val() == "") {
            alert("Please enter category.");
        } else {
            var formData = new FormData();
            formData.append('categoryId', $('#categoryId').val());
            formData.append('categoryName', $('#categoryName').val());
            formData.append('categoryStatus', $('#categoryStatus').val());
            formData.append('action', 'addCategory');

            var saveCategory = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                dataType: "text",
                contentType: false,
                processData: false,
                success: function (resultData) {
                    alert(resultData);
                    getAllCategories();
                    reset();
                }
            });
            saveCategory.error(function () {
                alert("Something went wrong while adding category");
            });
        }
    });


    $('#categoryTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = categoryTable.row(this).data();
            $( "#categoryId" ).val(row[3]);
            $( "#categoryName" ).val(row[0]);
            $( "#categoryStatus" ).val(row[2]);
        }
    } );

    $('#resetCategoryButton').click(function () {
        reset();
    });

    function reset() {
        $('#categoryName').val("");
        $('#categoryId').val("");
    }

    function getAllCategories() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllCategories';
        var saveCategory = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                categoryTable.clear();
                $.each(resultData, function (i, item) {
                    categoryTable.row.add([item.name, getStatusById(item.status), item.status, item.id]).draw(false);
                });
            }
        });
        saveCategory.error(function () {
            alert("Something went wrong while loading category");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

});