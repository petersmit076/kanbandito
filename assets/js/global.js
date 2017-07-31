/**
 * Created by psmit on 14-7-2017.
 */

// Close sidebar
$('.close-menu').click(function () {
    $('#sidebar-navigation, #main-content').toggleClass('hide-nav');
    $(this).toggleClass('active');
});
$('.mobile-menu, .close-this').click(function () {
    $('#mobile-navigation').toggleClass('show');
});

// Toggle menu
$(".toggle-menu").click(function () {
    $(this).toggleClass('menu-open');
    $(".dropdown-menu-default").toggle('active');
});

//Toggle team-menu mobile
$('#team-toggle').click(function () {
    $('.team-menu').toggleClass('open');
});

// Handle drag & drop

$( function() {
    $( "#cards-1, #cards-2, #cards-3, #cards-4, ul.droptrue" ).sortable({
        connectWith: ".cards, ul",
        dropOnEmpty: true,
        placeholder: "ui-state-highlight"
    }).disableSelection();
} );

$( function() {
    $( "#board-1, #board-2, #board-3, #board-4, .col-md-3.droptrue" ).sortable({
        connectWith: ".col-md-3",
        dropOnEmpty: true,
        placeholder: "ui-state-highlight"
    }).disableSelection();
} );