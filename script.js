document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('site-navigation');
    const toggle = document.querySelector('.menu-toggle'); // haetaan napin sijainti globaalisti

    if (nav && toggle) {
        toggle.addEventListener('click', function () {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isExpanded));
            nav.classList.toggle('toggled');
        });
    }
});