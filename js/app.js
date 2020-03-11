/*************
Name: Chris Jacobi
Coding 05
Purpose: JavaScript file reconfigured for jQuery functionality - will be easier for programmer to write and for user to read.
*************/

// ready() function necessary to run program
$(document).ready(function () {

    /
    $("#submit-button").click(function () {
        var error = validate();

        if (error === "") {
            $("#greeting-box").html("Sending...")
            sendForm();
        } else {
            $("#greeting-box").html(error);
        }
    });

    // Function validates that input boxes are filled out, whitespace is trimmed, and all (if any) warnings are returned as this function's value for future use
    function validate() {
        var name = $("#name").val().trim();
        var email = $("#email").val().trim();
        var message = $("#message").val().trim();
        var warning = "";

        if (name === "") {
            warning += "Must supply a name. <br>";
        }

        if (!validEmail(email)) {
            warning += "Email address must be in a valid format. <br>"
        }

        if (email !== emailCheck) {
            warning += "Email addresses must match. <br>";
        }

        if (subject === "") {
            warning += "Must supply a subject. <br>"
        }

        if (message === "") {
            warning += "Must supply a message. <br>"
        }

        return warning;
    };

    // Function creates a URL string with returnd form data using the jQuery serialize() method. .ajax() performs an HTTP request with the URL string form data, the type of request, and the URL to which the request is sent. If successful, form data is cleared, the developer has response information (for peace of mind!) and the user is informed that the form has been sent. If there is an error, the form is cleared, the developer is informed of error specifics, and an error message is displayed to the user.
    function sendForm() {
        var myData = $("#send-form").serialize();

        $.ajax({
            data: myData,
            type: 'POST',
            url: 'contact.php',
            success: function (responseText) {
                console.log("response: " + responseText);
                $("#send-form input[type='text'], input[type='email'], textarea").val("");
                $("#greeting-box").text("Sent!");

                // Test to ensure correct form data is actually being sent
                // $("#warning-box").text(myData);
            },
            error: function (request, status) {
                console.log("status: " + request.status);
                console.log("response: " + request.responseText);
                $("#send-form input[type='text'], input[type='email'], textarea").val("");
                $("#greeting-box").text("Error!");
            },
        });
    };

    // Function provided that validates email addresses to ensure they are in valid format
    function validEmail(email) {
        var re =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\ -0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };
});