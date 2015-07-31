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