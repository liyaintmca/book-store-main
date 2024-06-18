function validateUsername() {
    var letters = /^[A-Za-z]*$/;
    var regex = /^\s/;
    var username = document.getElementById("username");
    if (username.value.match(regex)) {
        document.getElementById("submit").disabled = true;
        return true;
    }
    if (username.value.match(letters) && username.value.length >= 3) {
        text = "";
        document.getElementById("name_err").innerHTML = text;
        document.getElementById("submit").disabled = false;
        return false;
    }
    else {
        text = "Please enter username minimum 3 character allowed"
        document.getElementById("name_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
}

function validateEmail() {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regex = /^\s/;
    var email = document.getElementById("email");
    if (email.value.match(regex)) {
        text = "Email is required";
        document.getElementById("email_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
    if (email.value.match(filter)) {
        text = "";
        document.getElementById("email_err").innerHTML = text;
        document.getElementById("submit").disabled = false;
        return false;
    }
    else {
        text = "Please enter valid email"
        document.getElementById("email_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
}

function validatePassword() 
{
    var pwd_expression = /^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-])/;
    var regex = /^\s/;
    var password = document.getElementById("password");
    if (password.value.match(regex)) {
        text = "Password is required";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
    if (password.value.length <= 6) {
        text = "Password minimum length is 6";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
    if (password.value.length >= 12) {
        text = "Password maximum length is 12";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
    if (password.value.match(pwd_expression)) {
        text = "";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("submit").disabled = false;
        return false;
    }

}
function validateRepass() {
    var regex = /^\s/;
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    console.log(password);
    console.log(repassword);
    if (repassword == password) {
        text = "";
        document.getElementById("repass_err").innerHTML = text;
        document.getElementById("submit").disabled = false;
        return false;
    }
    else {
        text = "Password does not match re-enter password";
        document.getElementById("repass_err").innerHTML = text;
        document.getElementById("submit").disabled = true;
        return true;
    }
}
