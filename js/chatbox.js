$(document).ready(function () {
    //chat box bubble listener
    $(".chat-box-pop").click(function(){
        $(this).fadeOut(150);
        $(".chat-box").fadeIn(200);
    });
    //close button listener
    $(".chat-box-close").click(function(){
        $(".chat-box").fadeOut(200);
        $(".chat-box-pop").fadeIn(200);
    });







    //if the user have tried
    let tried = false;
    //listener on submit button
    $(".contact-form").submit(function (e) {
        e.preventDefault();
        //set tried to true
        tried = true;
        //test if valid
        if (validateInput()) {
            this.submit();
            this.reset();
            $(".chat-box").fadeOut(200);
            $(".chat-box-pop").fadeIn(200);
        }
    });
    $(".form-input").blur(function () {
        if (tried) {
            validateInput();
        }
    });

    /**
     * test all the input to be valid
     * @returns if input are valid or not
     */
    function validateInput() {
        //valid to exit form
        let valid = true;
        //RegEx for all character
        const valid_letters = /^[A-Za-z]+$/;
        //RegEx for valid email
        const valid_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //inputs
        let fname = $("#form-firstname").val();
        let lname = $("#form-lastname").val();
        let email = $("#form-email").val();
        let subject = $("#form-subject").val();
        let msg = $("#form-message").val();

        //validating the inputs
        //first name
        if (fname == '') {
            valid = false;
            $("#error-fname").text("First name can not be empty");
        } else if (fname.length < 3) {
            valid = false;
            $("#error-fname").text("First name is too short");
        } else if (!fname.match(valid_letters)) {
            valid = false;
            $("#error-fname").text("First name must be all characters");
        } else {
            $("#error-fname").text("");
        }
        //last name 
        if (lname == '') {
            valid = false;
            $("#error-lname").text("Last name can not be empty");
        } else if (lname.length < 3) {
            valid = false;
            $("#error-lname").text("Last name is too short");
        } else if (!lname.match(valid_letters)) {
            valid = false;
            $("#error-lname").text("Last name must be all characters");
        } else {
            $("#error-lname").text("");
        }
        //email
        if (email == '') {
            valid = false;
            $("#error-email").text("Email can not be empty");
        } else if (!email.match(valid_email)) {
            valid = false;
            $("#error-email").text("Please enter a valid email");
        } else {
            $("#error-email").text("");
        }
        //subject
        if (subject == '') {
            valid = false;
            $("#error-subject").text("subject can not be empty");
        } else if (subject.length < 3) {
            valid = false;
            $("#error-subject").text("subject is too short");
        } else {
            $("#error-subject").text("");
        }
        //Message
        if (msg == '') {
            valid = false;
            $("#error-msg").text("Message can not be empty");
        } else {
            $("#error-msg").text("");
        }

        //returing if it is valid or not
        return valid;
    }
});