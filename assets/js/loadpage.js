$(document).ready(function() {
    // Function to load content dynamically
    function loadContent(page) {
        console.log(page);
        localStorage.setItem('active_menu',page);
        // lmenu();

        $('#content_page').load(page);
    }

    // Handle navigation clicks
    $('.menu_link').on('click', function(e) {
        e.preventDefault();
        $('.sidebar-item').removeClass('active');
        $(this).parent().addClass('active');

        const target = $(this).data('target');
        loadContent(target);
    });

    // Load default content
    // const hash = window.location.hash.substring(1);
    // if (hash) {
    //     loadContent(hash);
    // } else {
    // }
    loadContent(localStorage.getItem('active_menu')??'page/dashboard/dashboard.php');
});
