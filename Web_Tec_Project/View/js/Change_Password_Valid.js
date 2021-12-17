const oldpassword = document.getElementById('oldpassword');
const newpassword = document.getElementById('newpassword');
const retypenew = document.getElementById('retypenew');
const form = document.getElementById('form');
const errorelement = document.getElementById('error');
const errorelement2 = document.getElementById('error2');
const errorelement3 = document.getElementById('error3');

form.addEventListener('submit', (e) => {
    let messages = [];
    let messages2 = [];
    let messages3 = [];
    if (oldpassword.value === '' || oldpassword.value == null) {
        messages.push('*Old Password field is required');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorelement.innerText = messages.join(', ');
    }

    if (newpassword.value === '' || newpassword.value == null) {
        messages2.push('*New Password field is required');
    }

    if (messages2.length > 0) {
        e.preventDefault();
        errorelement2.innerText = messages2.join(', ');
    }

    if (retypenew.value === '' || retypenew.value == null) {
        messages3.push('*Confirm Password field is required');
    }

    if (messages3.length > 0) {
        e.preventDefault();
        errorelement3.innerText = messages3.join(', ');
    }
});