document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
    const menuContainer = document.getElementById('menu-container');

    menuItems.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            const menuItem = this.innerText;
            const menuContent = getMenuContent(menuItem);
            menuContainer.innerHTML = menuContent;
            menuContainer.style.display = 'block';
        });
    });

    document.addEventListener('click', function(e) {
        if (!menuContainer.contains(e.target) && e.target.classList.contains('menu-item')) {
            menuContainer.style.display = 'none';
        }
    });

    function getMenuContent(menuItem) {
        switch (menuItem) {
            case 'Locations':
                return '<ul><li>Chambres</li><li>Suites</li><li>Appartements</li></ul>';
            // ... Ajoutez les autres cas selon vos besoins
            default:
                return '';
        }
    }
});

