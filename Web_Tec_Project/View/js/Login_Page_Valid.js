const uname = document.getElementById('username');
const pass = document.getElementById('pasword');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {

    if (uname.value === '' || uname.value == null) {
        alert("Enter Your Username");
        uname.focus();
    }

    if (pass.value === '' || pass.value == null) {
        alert("Enter Your Password");
        pass.focus();
    }
});