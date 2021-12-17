function valide() {
    var ngousername = document.forms["RegForm"]["ngousername"];
    var ngopassword = document.forms["RegForm"]["ngopassword"];
    var confirmpassword = document.forms["RegForm"]["confirmpassword"];
    var ngoname = document.forms["RegForm"]["ngoname"];
    var ngoownername = document.forms["RegForm"]["ngoownername"];
    var presentaddress = document.forms["RegForm"]["presentaddress"];
    var permanentaddress = document.forms["RegForm"]["permanentaddress"];
    var emailaddress = document.forms["RegForm"]["emailaddress"];
    var ngoweblink = document.forms["RegForm"]["ngoweblink"];
    var typeofngo = document.forms["RegForm"]["typeofngo"];


    if (ngousername.value == "") {
        window.alert("Please enter your Username.");
        ngousername.focus();
        return false;
    }

    if (ngopassword.value == "") {
        window.alert("Please enter your password.");
        ngopassword.focus();
        return false;
    }

    if (confirmpassword.value == "") {
        window.alert("Please enter a Confirm password.");
        confirmpassword.focus();
        return false;
    }

    if (ngoname.value == "") {
        window.alert("Please enter your NGO name.");
        ngoname.focus();
        return false;
    }

    if (ngoownername.value == "") {
        window.alert("Please enter your NGO Ownername");
        ngoownername.focus();
        return false;
    }

    if (typeofngo.selectedIndex < 1) {
        alert("Please enter your NGO Type.");
        typeofngo.focus();
        return false;
    }

    if (presentaddress.value == "") {
        window.alert("Please enter your present address.");
        presentaddress.focus();
        return false;
    }

    if (permanentaddress.value == "") {
        window.alert("Please enter your permanent address.");
        permanentaddress.focus();
        return false;
    }

    if (emailaddress.value == "") {
        window.alert("Please enter a valid e-mail address.");
        emailaddress.focus();
        return false;
    }

    if (ngoweblink.value == "") {
        window.alert("Please enter your ngo web link.");
        ngoweblink.focus();
        return false;
    }


    return true;
}

function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function() {
            $("#previewImg").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
}