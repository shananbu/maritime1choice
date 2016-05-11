
$(document).ready(function () {
    var eventTable = $('#eventTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": false,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "simple_numbers",
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    getEventImages();

    $('#saveOrUpdateEventGallery').click(function () {
        if ($('#eventName').val() == "" && $('#eventId').val() == "") {
            $.alert("Please enter event name.");
        } else {
            Common.showOverlay();
            var fileData = $('#eventImage').prop('files')[0];
            var formData = new FormData();
            formData.append('eventImage', fileData);
            formData.append('action', 'addEventImage');

            formData.append('eventName', $('#eventName').val());
            formData.append('eventStatus', $('#eventStatus').val());
            formData.append('eventId', $('#eventId').val());

            var eventTable = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                dataType: "text",
                contentType: false,
                processData: false,
                success: function (resultData) {
                    Common.hideOverlay();
                    $.alert(resultData);
                    getEventImages();
                    reset();
                }
            });
            eventTable.error(function () {
                Common.hideOverlay();
                $.alert("Something went wrong while adding event image");
            });
        }
    });

    $('#eventTable').on( 'click', 'td:not(:last-child)', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = eventTable.row(this).data();
            $( "#eventId" ).val(row[4]);
            $( "#eventName" ).val(row[0]);
            $( "#eventStatus" ).val(row[3]);
        }
    });

    $('#resetNews').click(function () {
        reset();
    });

    function reset() {
        $('#eventId').val("");
        $('#eventName').val("");
        $('#eventStatus').val("");
    }

    function getEventImages() {
        var requestMap = new Object();
        requestMap["action"] = 'getEventImage';
        var clientCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                eventTable.clear();
                $.each(resultData, function (i, item) {
                    var viewImage = "<img src='" + item.imageFileName +"'>"
                    eventTable.row.add([item.name, getStatusById(item.status), viewImage , item.status, item.id]).draw();
                });
            }
        });
        clientCall.error(function () {
            $.alert("Something went wrong while loading event");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }
});

