$(document).ready(function () {

    var careerTable = $('#careerTable').DataTable({
        "bJQueryUI": true,
        "bAutoWidth": true,
        "bSort": false,
        "bScrollCollapse": false,
        "sScrollY": "200px",
        "sPaginationType": "simple_numbers",
        "columnDefs": [
            {
                "targets": [ 8 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 9 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    getAllCareers();
    setNow();
    $('#saveOrUpdateJob').click(function () {
        if ($('#jobTitle').val() == "" && $('#jobId').val() == "") {
            $.alert("Please enter Job title.");
        } else {
            Common.showOverlay();
            var formData = new FormData();
            formData.append('jobTitle', $('#jobTitle').val());
            formData.append('location', $('#location').val());
            formData.append('qualification', $('#qualification').val());
            formData.append('experience', $('#experience').val());

            formData.append('jobStatus', $('#jobStatus').val());
            formData.append('numberOfPositions', $('#numberOfPositions').val());
            formData.append('validity', $('#validity').val());
            formData.append('jobDescription', $('#jobDescription').val());

            formData.append('jobId', $('#jobId').val());
            formData.append('action', 'addCareers');

            var saveCareer = $.ajax({
                type: 'POST',
                url: "adminController.php",
                data: formData,
                dataType: "text",
                contentType: false,
                processData: false,
                success: function (resultData) {
                    Common.hideOverlay();
                    $.alert(resultData);
                    getAllCareers();
                    reset();
                }
            });
            saveCareer.error(function () {
                Common.hideOverlay();
                $.alert("Something went wrong while adding career");
            });
        }
    });

    $('#careerTable').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            var row = careerTable.row(this).data();
            $( "#jobId" ).val(row[9]);
            $( "#jobTitle" ).val(row[0]);
            $( "#location" ).val(row[1]);
            $( "#qualification" ).val(row[2]);
            $( "#experience" ).val(row[3]);

            $( "#numberOfPositions" ).val(row[4]);
            $( "#validity" ).val( parseDate(row[5]));

            $( "#jobDescription" ).val(row[6]);
            $( "#jobStatus" ).val(row[8]);
        }
    } );

    $('#resetJob').click(function () {
        reset();
    });

    function reset() {
        $('#jobId').val("");
        $('#jobTitle').val("");
        $('#location').val("");
        $('#qualification').val("");
        $('#experience').val("");
        $('#numberOfPositions').val("");
        $('#validity').val("");
        $('#jobDescription').val("");
        $('#jobStatus').val("");
    }

    function getAllCareers() {
        var requestMap = new Object();
        requestMap["action"] = 'getAllCareers';
        var careerCall = $.ajax({
            type: 'POST',
            url: "adminController.php",
            data: $.param(requestMap),
            dataType: "json",
            success: function (resultData) {
                careerTable.clear();
                $.each(resultData, function (i, item) {
                    careerTable.row.add([item.title, item.location, item.qualification, item.experience,
                        item.noofpositions, item.validity, item.description,
                        getStatusById(item.status), item.status, item.id]).draw();
                });
            }
        });
        careerCall.error(function () {
            $.alert("Something went wrong while loading career");
        });
    }

    function getStatusById(status) {
        return (status == 1) ? 'Active' : 'InActive';
    }

    function parseDate(date) {
        var from = date.split("-");
        var day = ("0" + (from[2]).replace("00:00:00", "")).slice(-3);
        var month = ("0" + (Number(from[1]))).slice(-2);
        var today = from[0]+"-"+(month)+"-"+(day) ;
        return $.trim(today);
    }

    function setNow() {
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth())).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        $('#validity').val(today);
    }

});


