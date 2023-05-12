require('./bootstrap');

function hello() {
    alert("hello")
}
// $(document).ready(function() {
//     // Move div with mouse
//     $(document).mousemove(function(e) {
//         $('#follow-mouse').css({
//             'top': e.pageY - 3,
//             'left': e.pageX - 3
//         });
//     });
//
//     // Button hover effect
//     $('button, .btn, a').hover(
//         function() { // Mouse enter
//             $('#follow-mouse').css({
//                 'transform': 'scale(2)',  // Double the size
//                 'mix-blend-mode': 'multiply'  // Change the blending mode
//             });
//         },
//         function() { // Mouse leave
//             $('#follow-mouse').css({
//                 'transform': 'scale(1)',  // Back to original size
//                 'mix-blend-mode': 'normal'  // Back to original blending mode
//             });
//         }
//     );
// });
$(document).ready(function() {
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
});



//hello()
