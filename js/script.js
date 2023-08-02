function toggleNavbar() {
    const navbar = document.getElementById('navbar');

    if (navbar.classList.contains('mobile')) {
        navbar.classList.remove('mobile');
        navbar.classList.add('desktop');
    } else {
        navbar.classList.remove('desktop');
        navbar.classList.add('mobile');
    }
}