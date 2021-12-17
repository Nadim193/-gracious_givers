const newpass = document.getElementById('pass');
const conpass = document.getElementById('cpass');
const form = document.getElementById('form');
const errorelement = document.getElementById('error');
const errorelement2 = document.getElementById('error2');

form.addEventListener('submit', (e) => {
    let messages = [];
    let messages2 = [];
    if (newpass.value === '' || newpass.value == null) {
        messages.push('*New Password field is required');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorelement.innerText = messages.join(', ');
    }

    if (conpass.value === '' || conpass.value == null) {
        messages2.push('*Confirm Password field is required');
    }

    if (messages2.length > 0) {
        e.preventDefault();
        errorelement2.innerText = messages2.join(', ');
    }
});


// $(document).ready(function() {
//     $('#form').on('submit', function(event) {
//         event.preventDefault();
//         var form_data = $(this).serialize();
//         $.ajax({
//             url: "../Controller/Forget_Password_Action.php",
//             method: "POST",
//             data: form_data,
//             dataType: "JSON",
//             success: function(data) {
//                 if (data.error != '') {
//                     $("#form")[0].reset();
//                     $("#succ").html(data.error);
//                 }
//             }
//         })
//     });
// });