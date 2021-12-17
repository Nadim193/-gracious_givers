const NGO_Owner_Name = document.getElementById('NGO_Owner_Name');
const NGO_Name = document.getElementById('NGO_Name');
const Type_Of_NGO = document.getElementById('Type_Of_NGO');
const Email_Address = document.getElementById('Email_Address');
const Present_Address = document.getElementById('Present_Address');
const Permanent_Address = document.getElementById('Permanent_Address');
const NGOs_Web_Link = document.getElementById('NGOs_Web_Link');
const form = document.getElementById('form');

const errorelement = document.getElementById('error');
const errorelement2 = document.getElementById('error2');
const errorelement3 = document.getElementById('error3');
const errorelement4 = document.getElementById('error4');
const errorelement5 = document.getElementById('error5');
const errorelement6 = document.getElementById('error6');
const errorelement7 = document.getElementById('error7');

form.addEventListener('submit', (e) => {

    let messages = [];
    let messages2 = [];
    let messages3 = [];
    let messages4 = [];
    let messages5 = [];
    let messages6 = [];
    let messages7 = [];

    if (NGO_Owner_Name.value === '' || NGO_Owner_Name.value == null) {
        messages.push('*Ngo owner name field is required');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorelement.innerText = messages.join(', ');
    }

    if (NGO_Name.value === '' || NGO_Name.value == null) {
        messages2.push('*Ngo name field is required');
    }

    if (messages2.length > 0) {
        e.preventDefault();
        errorelement2.innerText = messages2.join(', ');
    }

    if (Type_Of_NGO.value === '' || Type_Of_NGO.value == null) {
        messages3.push('*Ngo Type field is required');
    }

    if (messages3.length > 0) {
        e.preventDefault();
        errorelement3.innerText = messages3.join(', ');
    }

    if (Email_Address.value === '' || Email_Address.value == null) {
        messages4.push('*Email address field is required');
    }

    if (messages4.length > 0) {
        e.preventDefault();
        errorelement4.innerText = messages4.join(', ');
    }

    if (Present_Address.value === '' || Present_Address.value == null) {
        messages.push('*Present address field is required');
    }

    if (messages5.length > 0) {
        e.preventDefault();
        errorelement5.innerText = messages5.join(', ');
    }

    if (Permanent_Address.value === '' || Permanent_Address.value == null) {
        messages6.push('*Permanent address field is required');
    }

    if (messages6.length > 0) {
        e.preventDefault();
        errorelement6.innerText = messages6.join(', ');
    }

    if (NGOs_Web_Link.value === '' || NGOs_Web_Link.value == null) {
        messages7.push('*NGOs Web link field is required');
    }

    if (messages7.length > 0) {
        e.preventDefault();
        errorelement7.innerText = messages7.join(', ');
    }
});
$(document).ready(function() {
    $('#form').on('submit', function(event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "../Controller/Edit_Profile_Action.php",
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