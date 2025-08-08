document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('site-navigation');
    const toggle = document.querySelector('.menu-toggle'); // haetaan napin sijainti globaalisti

    if (nav && toggle) {

        // 🔹 Restore saved state on page load (both desktop & mobile)
        if (localStorage.getItem('menuToggled') === 'true') {
            nav.classList.add('toggled');
            toggle.setAttribute('aria-expanded', 'true');
        }

        // 🔹 Click listener for toggle button
        toggle.addEventListener('click', function () {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isExpanded));
            nav.classList.toggle('toggled');

            // Save state for all screen sizes
            localStorage.setItem('menuToggled', nav.classList.contains('toggled'));
        });
    }
});
