function seterror(id, error) {
    document.getElementById(id);
    document.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm() {
    var returnval = true;

    var name = document.forms['myForm']["username"].value;

    if (name.length == 0) {
        seterror("username", "User name is required.");
        returnval = false;
    }

    return returnval;
}