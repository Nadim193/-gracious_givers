const pname = document.getElementById('pname');
const ptype = document.getElementById('ptype');
const ramount = document.getElementById('ramount');
const rvolunteer = document.getElementById('rvolunteer');
const sdate = document.getElementById('sdate');
const stime = document.getElementById('stime');
const cdate = document.getElementById('cdate');
const ctime = document.getElementById('ctime');
const banumber = document.getElementById('banumber');
const bnumber = document.getElementById('bnumber');
const form = document.getElementById('form');
const errorelement = document.getElementById('error');
const errorelement2 = document.getElementById('error2');
const errorelement3 = document.getElementById('error3');
const errorelement4 = document.getElementById('error4');
const errorelement5 = document.getElementById('error5');
const errorelement6 = document.getElementById('error6');
const errorelement7 = document.getElementById('error7');
const errorelement8 = document.getElementById('error8');
const errorelement9 = document.getElementById('error9');
const errorelement10 = document.getElementById('error10');

form.addEventListener('submit', (e) => {
    let messages = [];
    let messages2 = [];
    let messages3 = [];
    let messages4 = [];
    let messages5 = [];
    let messages6 = [];
    let messages7 = [];
    let messages8 = [];
    let messages9 = [];
    let messages10 = [];
    if (pname.value === '' || pname.value == null) {
        messages.push('*Program Name field is required');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorelement.innerText = messages.join(', ');
    }

    if (ptype.value === '' || ptype.value == null) {
        messages2.push('*Program Type field is required');
    }

    if (messages2.length > 0) {
        e.preventDefault();
        errorelement2.innerText = messages2.join(', ');
    }

    if (ramount.value === '' || ramount.value == null) {
        messages3.push('*Requird Amount field is required');
    }

    if (messages3.length > 0) {
        e.preventDefault();
        errorelement3.innerText = messages3.join(', ');
    }

    if (rvolunteer.value === '' || rvolunteer.value == null) {
        messages4.push('*Reqired volunteer field is required');
    }

    if (messages4.length > 0) {
        e.preventDefault();
        errorelement4.innerText = messages4.join(', ');
    }

    if (sdate.value === '' || sdate.value == null) {
        messages5.push('*Start date field is required');
    }

    if (messages5.length > 0) {
        e.preventDefault();
        errorelement5.innerText = messages5.join(', ');
    }

    if (stime.value === '' || stime.value == null) {
        messages6.push('*Start Time field is required');
    }

    if (messages6.length > 0) {
        e.preventDefault();
        errorelement6.innerText = messages6.join(', ');
    }

    if (cdate.value === '' || cdate.value == null) {
        messages7.push('*Closed data field is required');
    }

    if (messages7.length > 0) {
        e.preventDefault();
        errorelement7.innerText = messages7.join(', ');
    }

    if (ctime.value === '' || ctime.value == null) {
        messages8.push('*Closed Time field is required');
    }

    if (messages8.length > 0) {
        e.preventDefault();
        errorelement8.innerText = messages8.join(', ');
    }

    if (banumber.value === '' || banumber.value == null) {
        messages9.push('*Bank Account Number field is required');
    }

    if (messages9.length > 0) {
        e.preventDefault();
        errorelement9.innerText = messages9.join(', ');
    }

    if (bnumber.value === '' || bnumber.value == null) {
        messages10.push('*Bkash number field is required');
    }

    if (messages10.length > 0) {
        e.preventDefault();
        errorelement10.innerText = messages10.join(', ');
    }
});


$(document).ready(function() {
    $('#form').on('submit', function(event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "../Controller/Program_Action.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            success: function(data) {
                if (data.error != '') {
                    $("#form")[0].reset();
                    $("#succ").html(data.error);
                }
            }
        })
    });
});