
$(document).ready(function () {
    var feedbackTable = $('#feedbackTable').DataTable({
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
            },
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    getAllTestimonial();

    $('#saveOrUpdateFeedback').click(function () {
        if ($('#clientName').val() == "" && $('#newsId').val() == "") {
            $.alert("Please enter client name.");
        } else {
            Common.showOverlay();
            var formData = new FormData();
            formData.append('action', 'addTestimonial');
            formData.append('clientId', $('#clientId').val());
            formData.append('feedbackBy', $('#feedbackBy').val());
            formData.append('feedbackStatus', $('#feedbackStatus').val());
            formData.append('feedback', $('#feedbackText').val());
            formData.append('feedbackId', $('#feedbackId').val());

            var saveFeedback = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                dataType: "text",
                contentType: false,
                processData: false,
                success: function (resultData) {
                    Common.hideOverlay();
                    $.alert(resultData);
                    getAllTestimonial();
                    reset();
                }
            });
            saveFeedback.error(function () {
                Common.hideOverlay();
                $.alert("Something went wrong while adding testimonial");
            });
        }
    });

    $('#feedbackTable').on( 'click', 'td:not(:last-child)', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = feedbackTable.row(this).data();
            $( "#feedbackId" ).val(row[4]);
            $( "#clientId" ).val(row[6]);
            $( "#feedbackBy" ).val(row[1]);
            $( "#feedbackStatus" ).val(row[5]);
            $( "#feedbackText" ).val(row[2]);
        }
    });

    $('#resetFeedback').click(function () {
        reset();
    });

    function reset() {
        $('#clientId').val(-1);
        $('#feedbackBy').val("");
        $('#feedbackStatus').val("");
        $('#feedbackText').val("");
    }

    function getAllTestimonial() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllTestimonial';
        var clientCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                feedbackTable.clear();
                $.each(resultData, function (i, item) {
                    feedbackTable.row.add([item.name, item.testimonialBy, item.description, getStatusById(item.status), item.id, item.status, item.cid]).draw();
                });
            }
        });
        clientCall.error(function () {
            $.alert("Something went wrong while loading testimonial");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }
});

