$(document).ready(function () {
    $('#clearContactForm').click(function () {
        reset();
    });
    $('#sendContactMail').click(function () {
        if ($('#personEmail').val() == "" || $('#personName').val() == "" || !isValidEmail($('#personEmail').val())) {
            alert("Please enter valid email id and name.");
        } else {
            Common.showOverlay();
            var formData = new FormData();
            formData.append('phoneNumber', $('#phoneNumber').val());
            formData.append('personName', $('#personName').val());
            formData.append('personEmail', $('#personEmail').val());
            formData.append('contactSubject', $('#contactSubject').val());

            formData.append('comments', $('#comments').val());

            var saveCareer = $.ajax({
                type: 'POST',
                url: "mailSender.php",
                data: formData,
                dataType: "text",
                contentType: false,
                processData: false,
                success: function (resultData) {
                    Common.hideOverlay();
                    alert(resultData);
                    reset();
                }
            });
            saveCareer.error(function () {
                Common.hideOverlay();
                alert("Something went wrong while sending mail.");
            });
        }
    });

    function reset() {
        $('#phoneNumber').val("");
        $('#personName').val("");
        $('#personEmail').val("");
        $('#contactSubject').val("");
        $('#comments').val("");
    }

    function isValidEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
});


