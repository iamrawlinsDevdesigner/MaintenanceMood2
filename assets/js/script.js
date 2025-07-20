// Hide loader on window load
window.addEventListener('load', function () {
    const loader = document.getElementById('page-loader');
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500); // Wait for fade-out transition
});
