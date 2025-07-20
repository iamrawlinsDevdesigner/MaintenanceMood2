// Hide loader on window load
window.addEventListener('load', function () {
    const loader = document.getElementById('page-loader');
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);
});

// Reset button when page is loaded from cache
window.addEventListener('pageshow', function (event) {
    const loginBtn = document.getElementById('loginBtn');
    const btnText = document.getElementById('btnText');
    const btnSpinner = document.getElementById('btnSpinner');

    btnText.textContent = "Login";
    btnSpinner.classList.add('hidden');
    loginBtn.disabled = false;
});

// Spinner on form submit
const loginForm = document.querySelector('form');
loginForm.addEventListener('submit', function () {
    const loginBtn = document.getElementById('loginBtn');
    const btnText = document.getElementById('btnText');
    const btnSpinner = document.getElementById('btnSpinner');

    btnText.textContent = "Logging in...";
    btnSpinner.classList.remove('hidden');
    loginBtn.disabled = true;
});


