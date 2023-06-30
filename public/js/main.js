
//Carousel
$('.carousel-item:first').addClass('active');
$('.carousel-indicators li:first').addClass('active');


$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    console.log(4444);
    if (windscroll >= 100) {
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll - 20) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });

    } else {

        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

}).scroll();


var mapOptions = {
    center: [40.21452640742982, 44.52145498531859],
    zoom: 10
 }
 // Creating a map object
 var map = new L.map('map', mapOptions);

 // Creating a Layer object
 var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

 // Adding layer to the map
 map.addLayer(layer);

 $.ajax({
    url: '/markers',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
        $.each(data, function(index, element) {
            var marker = L.marker([element.latitude, element.longitude]).addTo(map);
            marker.bindPopup(element.address);
        });
    }
});
