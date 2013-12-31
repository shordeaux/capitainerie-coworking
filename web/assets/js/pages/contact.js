var Contact = function () {

    return {

        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 44.01872,
				lng: 1.35507
			  });
			   var marker = map.addMarker({
					lat: 44.01872,
					lng: 1.35507,
		            title: 'Capitainerie Coworking'
		        });
			});
        }

    };
}();