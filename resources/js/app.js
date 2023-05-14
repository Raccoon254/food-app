require('./bootstrap');

function hello() {
    alert("hello")
}

/*$(document).ready(function() {
    // Move div with mouse
    $(document).mousemove(function(e) {
        $('#follow-mouse').css({
            'top': e.pageY - 10,
            'left': e.pageX - 10
        });
    });

    // Button hover effect
    $('button, .btn, a').mouseenter(function() {
        $('#follow-mouse').css({
            'transform': 'scale(2)',  // Double the size
            'mix-blend-mode': 'multiply'  // Change the blending mode
        });
    }).mouseleave(function() {
        $('#follow-mouse').css({
            'transform': 'scale(1)',  // Back to original size
            'mix-blend-mode': 'normal'  // Back to original blending mode
        });
    })
});*/
$(document).ready(function() {
    $('.category-link').click(function(e) {
        e.preventDefault();
        var category = $(this).data('category');
        $.ajax({
            url: '/products/by-category',
            method: 'GET',
            data: { category: category },
            success: function(data) {
                // Replace the products container with the new products
                $('.product-container').html(data);
            }
        });
    });

    $('.all-products-link').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/products/all',
            method: 'GET',
            success: function(data) {
                // Replace the products container with all products
                $('.product-container').html(data);
            }
        });
    });

    //menu assist
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.querySelector('.btn-ghost');
        const menu = document.querySelector('.dropdown-content');

        btn.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    });

    //add to cart


});



//hello()
