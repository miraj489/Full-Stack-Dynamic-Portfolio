document.addEventListener('DOMContentLoaded', function () {
    const navButtons = document.querySelectorAll('navbar, .navbar a, .navbar ul li a');

    navButtons.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            const href = btn.getAttribute('href');
            if (href && href !== '#') {
                e.preventDefault();
                window.alert('You are being redirected to: ' + href);
                window.location.href = href;
            }
        });
    });
});