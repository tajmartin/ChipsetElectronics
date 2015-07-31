/**
 * Created by odin on 7/30/15.
 */

function checkPassword() {
    //alert("Test alert!");
    if (document.getElementById("password").value != document.getElementById("password2").value) {
        alert("Passwords do not match!");
        return false;
    }
    else {
        return true;
    }
}

function recoverPassword() {
    alert("Recovery instructions sent to your email!");
    return true;
}