const searchBox = document.getElementById('searchBox');
    const searchBtn = document.getElementById('searchBtn');

    searchBtn.addEventListener('click', (e) => {
        e.preventDefault();
        searchBox.classList.add('active');
    });

    document.addEventListener('click', (e) => {
        if (!searchBox.contains(e.target)) {
            searchBox.classList.remove('active');
        }
    });

document.querySelectorAll('.menu-title').forEach(menuTitle => {
    menuTitle.addEventListener('click', function() {
        const menu = this.closest('.menu'); // Encontra o menu
        menu.classList.toggle('active'); // Alterna a classe "active"
    });
});
