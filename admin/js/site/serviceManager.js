$(document).ready(function () {

   // $("#serviceDesc").jqte();

    var serviceTable = $('#serviceTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": true,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "full_numbers",
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

    getAllBusinessService();

    $('#saveOrUpdateService').click(function () {
        if ($('#serviceName').val() == "" && $('#serviceId').val() == "") {
            alert("Please enter category.");
        } else {
            var requestMap = new Object();
            requestMap["categoryId"] = $('#categoryId').val();
            requestMap["serviceName"] = $('#serviceName').val();
            requestMap["serviceStatus"] = $('#serviceStatus').val();
            requestMap["serviceDesc"] = $('#serviceDesc').val();
            requestMap["serviceId"] = $('#serviceId').val();
            requestMap["action"] = 'addService';
            var saveService = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: $.param(requestMap),
                dataType: "text",
                success: function (resultData) {
                    alert(resultData);
                    getAllBusinessService();
                    reset();
                }
            });
            saveService.error(function () {
                alert("Something went wrong while adding service");
            });
        }
    });

    $('#serviceTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = serviceTable.row(this).data();
            $( "#categoryId" ).val(row[6]);
            $( "#serviceId" ).val(row[5]);
            $( "#serviceStatus" ).val(row[4]);
            $( "#serviceName" ).val(row[1]);
            $( "#serviceDesc" ).val(row[2]);
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
                    serviceTable.row.add([item.categoryName, item.name, item.description, getStatusById(item.status), item.status, item.id, item.categoryId]).draw();
                });
            }
        });
        serviceCall.error(function () {
            alert("Something went wrong while loading services");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

});