// Script to toggle the menu on small devices when the menu icon is pressed
$(function() {
    $('.menu-icon').on('click', function() {
        $('.nav').toggleClass('displaying');
        $('.nav ul').toggleClass('displaying');
    });
});