$('#container').imagesLoaded( { background: true }, function(instance) {
    $('#container').addClass('loaded');
});
$('#retry').on('click', function() {
    $('#container').toggleClass('loaded');
});
