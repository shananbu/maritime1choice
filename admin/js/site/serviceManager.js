$(document).ready(function () {

   // $("#serviceDesc").jqte();

    var serviceTable = $('#serviceTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": false,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "simple_numbers",
        "columnDefs": [
            {
                "targets": [ 5 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 7 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    getAllBusinessService();

    $('#saveOrUpdateService').click(function () {
        if ($('#serviceName').val() == "" && $('#serviceId').val() == "") {
            $.alert("Please enter category.");
        } else {
            Common.showOverlay();
            var formData = new FormData();
            formData.append('categoryId', $('#categoryId').val());
            formData.append('serviceName', $('#serviceName').val());
            formData.append('serviceStatus', $('#serviceStatus').val());
            formData.append('serviceDesc', $('#serviceDesc').val());
            formData.append('serviceId', $('#serviceId').val());
            formData.append('displayOrder', $('#displayOrder').val());
            formData.append('action', 'addService');

            var saveService = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "text",
                success: function (resultData) {
                    Common.hideOverlay();
                    $.alert(resultData);
                    getAllBusinessService();
                    reset();
                }
            });
            saveService.error(function () {
                Common.hideOverlay();
                $.alert("Something went wrong while adding service");
            });
        }
    });

    $('#serviceTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = serviceTable.row(this).data();
            $( "#categoryId" ).val(row[7]);
            $( "#serviceId" ).val(row[6]);
            $( "#serviceStatus" ).val(row[5]);
            $( "#serviceName" ).val(row[1]);
            $( "#serviceDesc" ).val(row[2]);
            $( "#displayOrder" ).val(row[4]);
        }
    } );

    $('#resetService').click(function () {
        reset();
    });

    function reset() {
        $('#categoryId').val(-1);
        $('#serviceId').val("");
        $('#serviceName').val("");
        $('#serviceStatus').val("");
        $('#serviceDesc').val("");
        $( "#displayOrder" ).val("");

    }

    function getAllBusinessService() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllBusinessService';
        var serviceCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                serviceTable.clear();
                $.each(resultData, function (i, item) {
                    serviceTable.row.add([item.categoryName, item.name, item.description, getStatusById(item.status), item.displayOrder, item.status, item.id, item.categoryId]).draw();
                });
            }
        });
        serviceCall.error(function () {
            $.alert("Something went wrong while loading services");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

});