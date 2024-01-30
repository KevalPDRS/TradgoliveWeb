// // Add event listener to the "Delete" button within the modal
// document.getElementById('deleteAddressBtn').addEventListener('click', function () {
//     // Remove the associated MyAddressItem card when the "Delete" button in the modal is clicked
//     var myAddressItem = document.querySelector('.MyAddressItem');
//     myAddressItem.remove();
//     // Close the modal after deleting
//     var removeAddressModal = new bootstrap.Modal(document.getElementById('RemoveAddressModal'));
//     removeAddressModal.hide();
// });

function hideDiv(className) {
    // Get the elements with the specified class name
    var MyAddresssRemove = document.getElementsByClassName(className);

    // Hide each element with the specified class name
    for (var i = 0; i < MyAddresssRemove.length; i++) {
        MyAddresssRemove[i].style.display = 'none';
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});


// For Open Map
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 23.0225, lng: 72.5714 }, // Default to Ahmedabad coordinates
        zoom: 12
    });
}

// // Show Address
// function copyContent() {
//     var contentaddress = document.querySelector('.address').innerText;
//     document.querySelector('.ShowUserAddress').innerText = contentaddress;
// }
// setInterval(copyContent, 1000);


// FOR MyProfile Change Password --------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    let MyProfile_NewPassword = document.getElementById('MyProfile_NewPassword');
    let MyProfile_showNewPassword = document.getElementById('MyProfile_showNewPassword');
    let MyProfile_ConfirmNewPassword = document.getElementById('MyProfile_ConfirmNewPassword');
    let MyProfile_showConfirmNewPassword = document.getElementById('MyProfile_showConfirmNewPassword');

    MyProfile_showNewPassword.addEventListener('click', function () {
        if (MyProfile_NewPassword.type === 'password') {
            MyProfile_NewPassword.type = 'text'; // Show the password
            MyProfile_showNewPassword.classList.remove('far', 'fa-eye');
            MyProfile_showNewPassword.classList.add('fas', 'fa-eye-slash');
        } else {
            MyProfile_NewPassword.type = 'password'; // Hide the password
            MyProfile_showNewPassword.classList.remove('fas', 'fa-eye-slash');
            MyProfile_showNewPassword.classList.add('far', 'fa-eye');
        }
    });
    MyProfile_showConfirmNewPassword.addEventListener('click', function () {
        if (MyProfile_ConfirmNewPassword.type === 'password') {
            MyProfile_ConfirmNewPassword.type = 'text'; // Show the password
            MyProfile_showConfirmNewPassword.classList.remove('far', 'fa-eye');
            MyProfile_showConfirmNewPassword.classList.add('fas', 'fa-eye-slash');
        } else {
            MyProfile_ConfirmNewPassword.type = 'password'; // Hide the password
            MyProfile_showConfirmNewPassword.classList.remove('fas', 'fa-eye-slash');
            MyProfile_showConfirmNewPassword.classList.add('far', 'fa-eye');
        }
    });
});

// FOR MyProfile Change PIN --------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    let MyProfile_NewPIN = document.getElementById('MyProfile_NewPIN');
    let MyProfile_showNewPIN = document.getElementById('MyProfile_showNewPIN');
    let MyProfile_ConfirmNewPIN = document.getElementById('MyProfile_ConfirmNewPIN');
    let MyProfile_showConfirmNewPIN = document.getElementById('MyProfile_showConfirmNewPIN');

    MyProfile_showNewPIN.addEventListener('click', function () {
        if (MyProfile_NewPIN.type === 'password') {
            MyProfile_NewPIN.type = 'text'; // Show the PIN
            MyProfile_showNewPIN.classList.remove('far', 'fa-eye');
            MyProfile_showNewPIN.classList.add('fas', 'fa-eye-slash');
        } else {
            MyProfile_NewPIN.type = 'password'; // Hide the PIN
            MyProfile_showNewPIN.classList.remove('fas', 'fa-eye-slash');
            MyProfile_showNewPIN.classList.add('far', 'fa-eye');
        }
    });
    MyProfile_showConfirmNewPIN.addEventListener('click', function () {
        if (MyProfile_ConfirmNewPIN.type === 'password') {
            MyProfile_ConfirmNewPIN.type = 'text'; // Show the PIN
            MyProfile_showConfirmNewPIN.classList.remove('far', 'fa-eye');
            MyProfile_showConfirmNewPIN.classList.add('fas', 'fa-eye-slash');
        } else {
            MyProfile_ConfirmNewPIN.type = 'password'; // Hide the PIN
            MyProfile_showConfirmNewPIN.classList.remove('fas', 'fa-eye-slash');
            MyProfile_showConfirmNewPIN.classList.add('far', 'fa-eye');
        }
    });
});

// FOR MyProfile Delete Account --------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    let MyProfile_DeleteAccountPassword = document.getElementById('MyProfile_DeleteAccountPassword');
    let showDeleteAccountPassword = document.getElementById('showDeleteAccountPassword');
    let DeleteAccountMobileNumber = document.getElementById('DeleteAccountMobileNumber');

    showDeleteAccountPassword.addEventListener('click', function () {
        if (MyProfile_DeleteAccountPassword.type === 'password') {
            MyProfile_DeleteAccountPassword.type = 'text'; // Show the PIN
            showDeleteAccountPassword.classList.remove('far', 'fa-eye');
            showDeleteAccountPassword.classList.add('fas', 'fa-eye-slash');
        } else {
            MyProfile_DeleteAccountPassword.type = 'password'; // Hide the PIN
            showDeleteAccountPassword.classList.remove('fas', 'fa-eye-slash');
            showDeleteAccountPassword.classList.add('far', 'fa-eye');
        }
    });
});

// FOR open DeleteAccountModal --------------------------------------------------
function DeleteAccountValidate() {
    if (DeleteAccountMobileNumber.value === "" || MyProfile_DeleteAccountPassword.value === "") {
    }
    else {
        $('#DeleteAccountModal').modal('show');
    }
};

// FOR go index-2.html --------------------------------------------------
function deleteAndNavigateToIndex2() {
    window.location.href = 'index-2.html';
};