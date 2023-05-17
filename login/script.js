/* Click
const eyeIcon = document.getElementById('eye-icon');
const passwordInput = document.getElementById('password');

eyeIcon.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});

*/

/* Hold */
const eyeIcon = document.getElementById('eye-icon');
const passwordInput = document.getElementById('password');
let isMouseDown = false;

eyeIcon.addEventListener('mousedown', function() {
    isMouseDown = true;
    showPassword();
});

eyeIcon.addEventListener('mouseup', function() {
    isMouseDown = false;
    hidePassword();
});

function showPassword() {
    passwordInput.type = 'text';
}

function hidePassword() {
    passwordInput.type = 'password';
}

eyeIcon.addEventListener('mouseleave', function() {
    if (isMouseDown) {
        hidePassword();
    }
});


