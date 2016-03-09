
$(document).ready(function () {
    var clientTable = $('#clientTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": true,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "full_numbers",
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
            }
        ]
    });

    getAllClients();

    $('#saveOrUpdateClient').click(function () {
        if ($('#clientName').val() == "" && $('#newsId').val() == "") {
            alert("Please enter client name.");
        } else {
            var requestMap = new Object();
            requestMap["clientName"] = $('#clientName').val();
            requestMap["referenceUrl"] = $('#referenceUrl').val();
            requestMap["clientStatus"] = $('#clientStatus').val();
            requestMap["clientDescription"] = $('#clientDescription').val();
            requestMap["clientLogo"] = $('#clientLogo').val();
            requestMap["clientId"] = $('#clientId').val();
            requestMap["action"] = 'addClient';

            var saveClient = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: $.param(requestMap),
                dataType: "text",
                success: function (resultData) {
                    alert(resultData);
                    getAllClients();
                    reset();
                }
            });
            saveClient.error(function () {
                alert("Something went wrong while adding client");
            });
        }
    });

    $('#clientTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = clientTable.row(this).data();
            $( "#clientId" ).val(row[6]);
            $( "#clientName" ).val(row[0]);
            $( "#referenceUrl" ).val(row[1]);
            $( "#clientStatus" ).val(row[5]);
            $( "#clientDescription" ).val(row[2]);
        }
    });

    $('#resetNews').click(function () {
        reset();
    });

    function reset() {
        $('#clientName').val("");
        $('#referenceUrl').val("");
        $('#clientStatus').val("");
        $('#clientDescription').val("");
        $('#clientLogo').val("");
        $('#clientId').val("");

    }

    function getAllClients() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllClients';
        var clientCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                clientTable.clear();
                $.each(resultData, function (i, item) {
                    clientTable.row.add([item.name, item.referenceUrl, item.description, getStatusById(item.status), item.logoFileName, item.status, item.id]).draw();
                });
            }
        });
        clientCall.error(function () {
            alert("Something went wrong while loading client");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

});
