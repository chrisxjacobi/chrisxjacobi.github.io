$(document).ready(function () {


    $("#submit-button").click(function (e) {
        e.preventDefault();
        $("#greeting-box").html("thanks!");
        //sendForm();
    })

//    function sendForm() {
//        var request = new XMLHttpRequest();
//        var memberForm = document.getElementById("send-form");
//        var formData = new FormData(memberForm);
//        var greetingBox = document.getElementById("greeting-box");
//
//        request.addEventListener("load", function (e) {
//
//            if (e.target.responseText == "okay") {
//                if (e.target.status == 200) {
//                    //clear();
//                    greetingBox.innerHTML = "Sent!";
//                }
//            }
//        });
//
//        request.addEventListener("error", function (e) {
//
//            if (e.target.status >= 400) {
//                //clear();
//                greetingBox.innerHTML = "Error!;"
//            }
//        });
//
//        request.open('POST', 'email.php');
//        request.send(formData);
//    };


    // animate movement on page
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 750);
                    return false;
                }
            }
        });
    });


});
