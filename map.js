		
		var map;
		var gmarkers = [];
		var gmarkers2 = [];
		var gmarkers3 = [];
		var gmarkers4 = [];
		var gmarkers5 = [];
		
			
		function validate(){
			
			var locations = [];
			var marker;
			var i;
			
			if (document.getElementById('jakarta_utara').checked && gmarkers.length == 0) {		
				
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Gunung Sahari, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.134347, 106.832034, 2],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Lodan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.130718, 106.825808, 3],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. RE Martadinata, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.125633, 106.850837, 4],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Danau Sunter, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.140346, 106.874128, 5],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Yos Sudarso, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.152297, 106.88832, 6],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Cakung Cilincing, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.134366, 106.923697, 7],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Enggano, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.109823, 106.88554, 8],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Tanjung Priok, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.132055, 106.871485, 9],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Boulevard Barat, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.157128, 106.899965, 10],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Pluit Raya, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.126925, 106.797701, 11],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Marunda, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.121351, 106.95562, 12],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Kebon Baru, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.114793, 106.921095, 13],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Gaya Motor, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.135222, 106.881775, 14]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
					if (i <= 4) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/2.png'
					  });
					}
					else if (i > 4 && i <= 8) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/3.png'
					  });
					}
					else {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/1.png'
					  });
					}
			  
					gmarkers.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_utara').checked){
				for(i=0; i < gmarkers.length; i++){
					gmarkers[i].setMap(null);
				}
				gmarkers = [];
			}
			
			if (document.getElementById('jakarta_barat').checked && gmarkers2.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Tomang Raya, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.17699, 106.800279, 15],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Tomang, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.182335, 106.79715, 16],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'STKA, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.165174, 106.704669, 17],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Beos, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.137847, 106.815772, 18],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Pos Pengumben, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.216116, 106.767781, 19],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Panjang, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.19865, 106.769049, 20],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.190071, 106.79719, 21],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Slipi, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.19356, 106.79745, 22],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Grogol, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.160856, 106.792766, 23],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Daan Mogot, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.1664, 106.782969, 24]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
					if (i <= 4) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/2.png'
					  });
					}
					else if (i > 4 && i <= 7) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/3.png'
					  });
					}
					else {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/1.png'
					  });
					}
			  
					gmarkers2.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_barat').checked){
				for(i=0; i < gmarkers2.length; i++){
					gmarkers2[i].setMap(null);
				}
				gmarkers2 = [];
			}
			
			if (document.getElementById('jakarta_timur').checked && gmarkers3.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Supriyadi, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.307608, 106.876386, 25],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Putaran 03, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.21754, 106.85953, 26],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Bogor, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.296629, 106.872492, 27],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Kramat Jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.273298, 106.869465, 28],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Mayjend. Sutoyo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.25566, 106.871114, 29],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Uki, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.25035, 106.87359, 30],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Kalimalang, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.247606, 106.92239, 31],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. I Gusti Ngurah Rai, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.218124, 106.941842, 32],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'KP. Melayu, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.224832, 106.868935, 33],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Kolonel Sugiono, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.229712, 106.910386, 34],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Jambul, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.347751, 106.875272, 35],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Condet, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.27768, 106.85495, 36],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Cibubur Junction, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.369851, 106.893992, 37],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Kebon Nanas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.233072, 106.882347, 38],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Jatinegara Barat, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.219105, 106.86435, 39],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Pondok Kopi, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.220123, 106.93957, 40],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Pondok Gede, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.290443, 106.88887, 41],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Terminal Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.183878, 106.908109, 42],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Bekasi, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.215408, 106.870695, 43],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.182629, 106.947666, 44],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Urip Sumoharjo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.21389, 106.863157, 45],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Polres Jakarta Timur, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.214711, 106.86284, 46]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
					if (i <= 9) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/2.png'
					  });
					}
					else if (i > 9 && i <= 15) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/3.png'
					  });
					}
					else {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/1.png'
					  });
					}
			  
					gmarkers3.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_timur').checked){
				for(i=0; i < gmarkers3.length; i++){
					gmarkers3[i].setMap(null);
				}
				gmarkers3 = [];
			}
			
			if (document.getElementById('jakarta_selatan').checked && gmarkers4.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Radio Dalam, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.263446, 106.788259, 47],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Pangeran Antasari, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.27271, 106.80881, 48],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Kapten Tendean, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.24012, 106.825925, 49],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. DR. Satrio, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.224149, 106.822455, 50],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Casablanca, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.224885, 106.840221, 51],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Terminal Lebak Bulus, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.28987, 106.774512, 52],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Ciputat Raya, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.281245, 106.771222, 53],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Pasar Pondok Labu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.312172, 106.793472, 54],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. DR. Supomo, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.231034, 106.846181, 55],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Pasar Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.264901, 106.844367, 56],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Buncit Raya, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.25662, 106.828036, 57],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Pertanian, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.29447, 106.82217, 58],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'JL. Raya Fatmawati, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.31474, 106.794028, 59]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
					if (i <= 3) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/2.png'
					  });
					}
					else if (i > 3 && i <= 6) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/3.png'
					  });
					}
					else {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/1.png'
					  });
					}
			  
					gmarkers4.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_selatan').checked){
				for(i=0; i < gmarkers4.length; i++){
					gmarkers4[i].setMap(null);
				}
				gmarkers4 = [];
			}
			
			if (document.getElementById('jakarta_pusat').checked && gmarkers5.length == 0) {
				locations = [
					['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Carolus, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.196844, 106.851111, 60],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Pintu Besi, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.159352, 106.833774, 61],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Roxy, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.164792, 106.815125, 62],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Caringin, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.171601, 106.809807, 63],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Simpang 5, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.213992, 106.899299, 64],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Bungur, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.171808, 106.848813, 65],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Raden Saleh, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.191402, 106.843091, 67],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'T. Benyamin Sueb, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.157289, 106.850937, 68],
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Titik Kemacetan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/traffic.png" width="83">' +
                      'Jatibaru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.18715, 106.812999, 69]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  if (i <= 2) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/2.png'
					  });
					}
					else if (i > 2 && i <= 5) {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/3.png'
					  });
					}
					else {
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						icon: 'icon/1.png'
					  });
					}
			  
					gmarkers5.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_pusat').checked){
				for(i=0; i < gmarkers5.length; i++){
					gmarkers5[i].setMap(null);
				}
				gmarkers5 = [];
			}
			
			// Event that closes the Info Window with a click on the map
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });
			
			// *
  // START INFOWINDOW CUSTOMIZE.
  // The google.maps.event.addListener() event expects
  // the creation of the infowindow HTML structure 'domready'
  // and before the opening of the infowindow, defined styles are applied.
  // *
  google.maps.event.addListener(infowindow, 'domready', function() {

    // Reference to the DIV that wraps the bottom of infowindow
    var iwOuter = $('.gm-style-iw');

    /* Since this div is in a position prior to .gm-div style-iw.
     * We use jQuery and create a iwBackground variable,
     * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
    */
    var iwBackground = iwOuter.prev();

    // Removes background shadow DIV
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

    // Removes white background DIV
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

    // Moves the shadow of the arrow 76px to the left margin.
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});


    // Changes the desired tail shadow color.
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

    // Reference to the div that groups the close button elements.
    var iwCloseBtn = iwOuter.next();

    // Apply the desired effect to the close button
    iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }

    // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
  });
			google.maps.event.addDomListener(window, 'load', initialize);
		}
		
		
		var gmarkers6 = [];
		var gmarkers7 = [];
		var gmarkers8 = [];
		var gmarkers9 = [];
		var gmarkers10 = [];
		
		function validate_jalan(){
			
			var locations = [];
			var marker;
			var i;
			
			if (document.getElementById('jakarta_utara2').checked && gmarkers6.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cilincing, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 42.56 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.106413, 106.941846, 70],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Koja, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 11.74 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.117664, 106.906349, 71],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kelapa Gading, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 16.12 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.160455, 106.905462, 72],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Tanjung Priok, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 16.12 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.132055, 106.871485, 73],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pademangan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 11.91 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.132596, 106.838487, 74],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Utara</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Utara</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Penjaringan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 35.98 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.126741, 106.782443, 75]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: 'icon/7.png'
				  });
			  
					gmarkers6.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_utara2').checked){
				for(i=0; i < gmarkers6.length; i++){
					gmarkers6[i].setMap(null);
				}
				gmarkers6 = [];
			}
			
			if (document.getElementById('jakarta_barat2').checked && gmarkers7.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 4.36 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.156668, 106.827189, 76],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Tambora, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 5.48 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.145332, 106.808755, 77],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 7.52 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.190071, 106.797190, 78],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Grogol Petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 11.46 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.160856, 106.792766, 79],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kebon Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 16.64 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.195942, 106.773595, 80],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 24.64 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.185432, 106.726962, 81],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 27.93 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.148665, 106.735258, 82],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Barat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Barat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kali Deres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 29.08 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.134294, 106.705773, 83]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: 'icon/8.png'
				  });
			  
					gmarkers7.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_barat2').checked){
				for(i=0; i < gmarkers7.length; i++){
					gmarkers7[i].setMap(null);
				}
				gmarkers7 = [];
			}
			
			if (document.getElementById('jakarta_timur2').checked && gmarkers8.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 4.85 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.203285, 106.862089, 84],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 14.98 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.181712, 106.897496, 85],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 10.64 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.230702, 106.882743, 86],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 22.81 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.229541, 106.918153, 87],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kramat Jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 13.34 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.273298, 106.869465, 88],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 21.64 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.271194, 106.894546, 89],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pasar Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 12.94 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.326164, 106.856188, 90],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 16.08 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.323116, 106.870940, 91],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 28.44 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.345750, 106.906400, 92],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Timur</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Timur</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 42.47 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.182629, 106.947666, 93]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: 'icon/9.png'
				  });
			  
					gmarkers8.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_timur2').checked){
				for(i=0; i < gmarkers8.length; i++){
					gmarkers8[i].setMap(null);
				}
				gmarkers8 = [];
			}
			
			if (document.getElementById('jakarta_selatan2').checked && gmarkers9.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 9.53 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.231860, 106.847338, 94],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kebayoran Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 12.91 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.243622, 106.800140, 95],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 13.47 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.247428, 106.761798, 96],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 18.2 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.284528, 106.800140, 97],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pasar Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 21.91 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.294358, 106.840958, 98],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 25.38 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.334917, 106.823737, 99],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Mampang Prapatan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 7.74 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.250614, 106.820788, 100],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 8.23 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.251887, 106.765111, 101],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Selatan</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Selatan</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 9.05 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.209889, 106.822346, 102]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: 'icon/10.png'
				  });
			  
					gmarkers9.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_selatan2').checked){
				for(i=0; i < gmarkers9.length; i++){
					gmarkers9[i].setMap(null);
				}
				gmarkers9 = [];
			}
			
			if (document.getElementById('jakarta_pusat2').checked && gmarkers10.length == 0) {
				locations = [
					  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 7.6 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.176656, 106.830584, 103],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 9.3 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.185782, 106.810820, 104],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 6.53 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.194031, 106.832587, 105],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 4.23 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.193456, 106.850288, 106],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Cempaka Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 4.69 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.174355, 106.876407, 107],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 7.13 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.160372, 106.847338, 108],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 6.22 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.153194, 106.832587, 109],
				  ['<div id="iw-container">' +
                    '<div class="iw-title">Luas Jalan di Jakarta Pusat</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Jakarta Pusat</div>' +
                      '<img src = "images/road.png" width="83">' +
                      'Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br><br>Luas Jalan 2.38 km2' +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>', -6.182986, 106.857344, 110]
					];

				var infowindow = new google.maps.InfoWindow();

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: 'icon/11.png'
				  });
			  
					gmarkers10.push(marker);

				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					  if (marker.getAnimation() != null) {
						marker.setAnimation(null);
					  } else {
						marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}
				  })(marker, i));
				}
			} 
			else if (!document.getElementById('jakarta_pusat2').checked){
				for(i=0; i < gmarkers10.length; i++){
					gmarkers10[i].setMap(null);
				}
				gmarkers10 = [];
			}
			
			// Event that closes the Info Window with a click on the map
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });
			
			// *
  // START INFOWINDOW CUSTOMIZE.
  // The google.maps.event.addListener() event expects
  // the creation of the infowindow HTML structure 'domready'
  // and before the opening of the infowindow, defined styles are applied.
  // *
  google.maps.event.addListener(infowindow, 'domready', function() {

    // Reference to the DIV that wraps the bottom of infowindow
    var iwOuter = $('.gm-style-iw');

    /* Since this div is in a position prior to .gm-div style-iw.
     * We use jQuery and create a iwBackground variable,
     * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
    */
    var iwBackground = iwOuter.prev();

    // Removes background shadow DIV
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

    // Removes white background DIV
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

    // Moves the shadow of the arrow 76px to the left margin.
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});


    // Changes the desired tail shadow color.
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

    // Reference to the div that groups the close button elements.
    var iwCloseBtn = iwOuter.next();

    // Apply the desired effect to the close button
    iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }

    // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
  });
			google.maps.event.addDomListener(window, 'load', initialize);
		}
		
		
		
		
		
		
		
		function validate_mrt(){
			
			var locations = [];
			var marker;
			var i;
			var line1;
			var line2;
			var line3;
			var line4;
			
			if (document.getElementsByName("validate_mrt") && document.getElementById('efektif').checked) {
				
				window.clearInterval(animateCircle1());
				window.clearInterval(animateCircle11());
				
				var lineCoordinates = [
					new google.maps.LatLng(-6.130718, 106.8258088),
					new google.maps.LatLng(-6.134347, 106.832034),
					new google.maps.LatLng(-6.132596, 106.838487),
					new google.maps.LatLng(-6.125633, 106.850837),
					new google.maps.LatLng(-6.132055, 106.871485),
					new google.maps.LatLng(-6.140346, 106.874128),
					new google.maps.LatLng(-6.152297, 106.88832)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line1 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'green',
					strokeWeight: 7,
					map: map
				  });
			  
				animateCircle1();
			  
				var lineCoordinates = [
					new google.maps.LatLng(-6.216116, 106.767781),
					new google.maps.LatLng(-6.195942, 106.773595),
					new google.maps.LatLng(-6.182335, 106.79715),
					new google.maps.LatLng(-6.17699, 106.800279),
					new google.maps.LatLng(-6.145332, 106.808755),
					new google.maps.LatLng(-6.137847, 106.815772)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line11 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'green',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle11();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.307608, 106.876386),
					new google.maps.LatLng(-6.296629, 106.872492),
					new google.maps.LatLng(-6.273298, 106.869465),
					new google.maps.LatLng(-6.25566, 106.871114),
					new google.maps.LatLng(-6.224832, 106.868935),
					new google.maps.LatLng(-6.21754, 106.85953)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'green',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle111();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.263446, 106.788259),
					new google.maps.LatLng(-6.27271, 106.80881),
					new google.maps.LatLng(-6.250614, 106.820788),
					new google.maps.LatLng(-6.24012, 106.825925),
					new google.maps.LatLng(-6.224149, 106.822455)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line1111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'green',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle1111();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.164792, 106.815125),
					new google.maps.LatLng(-6.159352, 106.833774),
					new google.maps.LatLng(-6.160372, 106.847338),
					new google.maps.LatLng(-6.174355, 106.876407)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line11111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'green',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle11111();
			}			
			else if (document.getElementsByName("validate_mrt") && document.getElementById('kurang_efektif').checked) {
				
				window.clearInterval(animateCircle2());
				window.clearInterval(animateCircle21());
				
				var lineCoordinates = [
					new google.maps.LatLng(-6.132055, 106.871485),
					new google.maps.LatLng(-6.109823, 106.88554),
					new google.maps.LatLng(-6.117664, 106.906349),
					new google.maps.LatLng(-6.134366, 106.923697)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line2 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'yellow',
					strokeWeight: 7,
					map: map
				  });
			  
				animateCircle2();
			  
				var lineCoordinates = [
					new google.maps.LatLng(-6.134294, 106.705773),
					new google.maps.LatLng(-6.165174, 106.704669),
					new google.maps.LatLng(-6.185432, 106.726962)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line21 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'yellow',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle21();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.271194, 106.894546),
					new google.maps.LatLng(-6.247606, 106.92239),
					new google.maps.LatLng(-6.229712, 106.910386),
					new google.maps.LatLng(-6.229541, 106.918153),
					new google.maps.LatLng(-6.220123, 106.93957),
					new google.maps.LatLng(-6.218124, 106.941842),
					new google.maps.LatLng(-6.182629, 106.947666)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line211 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'yellow',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle211();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.29447, 106.82217),
					new google.maps.LatLng(-6.264901, 106.844367),
					new google.maps.LatLng(-6.231860, 106.847338),
					new google.maps.LatLng(-6.224885, 106.840221)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line2111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'yellow',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle2111();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.171601, 106.809807),
					new google.maps.LatLng(-6.176656, 106.830584),
					new google.maps.LatLng(-6.171808, 106.848813),
					new google.maps.LatLng(-6.182986, 106.857344)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line21111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'yellow',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle21111();
			} 
			else if (document.getElementsByName("validate_mrt") && document.getElementById('tidak_efektif').checked) {
				
				window.clearInterval(animateCircle3());
				
				var lineCoordinates = [
					new google.maps.LatLng(-6.117664, 106.906349),
					new google.maps.LatLng(-6.114793, 106.921095),
					new google.maps.LatLng(-6.134366, 106.923697),
					new google.maps.LatLng(-6.121351, 106.95562)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line3 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'red',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle3();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.148665, 106.735258),
					new google.maps.LatLng(-6.1664, 106.782),
					new google.maps.LatLng(-6.160856, 106.792766)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line31 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'red',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle31();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.27768, 106.85495),
					new google.maps.LatLng(-6.233072, 106.882347),
					new google.maps.LatLng(-6.230702, 106.882743),
					new google.maps.LatLng(-6.215408, 106.870695),
					new google.maps.LatLng(-6.183878, 106.908109)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line311 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'red',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle311();
				  
				  var lineCoordinates = [
					new google.maps.LatLng(-6.185782, 106.810820),
					new google.maps.LatLng(-6.18715, 106.812999),
					new google.maps.LatLng(-6.194031, 106.832587),
					new google.maps.LatLng(-6.191402, 106.843091),
					new google.maps.LatLng(-6.193456, 106.850288),
					new google.maps.LatLng(-6.196844, 106.851111)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line3111 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'red',
					strokeWeight: 7,
					map: map
				  });

				  animateCircle3111();
			} 
			else if (document.getElementsByName("validate_mrt") && document.getElementById('sudah').checked) {
				
				window.clearInterval(animateCircle4());
				
				var lineCoordinates = [
					new google.maps.LatLng(-6.289428, 106.774642),
					new google.maps.LatLng(-6.292286, 106.795199),
					new google.maps.LatLng(-6.277014, 106.797645),
					new google.maps.LatLng(-6.264046, 106.797044),
					new google.maps.LatLng(-6.256538, 106.797044),
					new google.maps.LatLng(-6.245617, 106.798031),
					new google.maps.LatLng(-6.237213, 106.798718),
					new google.maps.LatLng(-6.229107, 106.797988),
					new google.maps.LatLng(-6.224542, 106.805842),
					new google.maps.LatLng(-6.214858, 106.818459),
					new google.maps.LatLng(-6.209909, 106.821506),
					new google.maps.LatLng(-6.201589, 106.822879),
					new google.maps.LatLng(-6.194379, 106.823008)
				  ];

				  // Define the symbol, using one of the predefined paths ('CIRCLE')
				  // supplied by the Google Maps JavaScript API.
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
					scale: 6,
					strokeColor: 'black'
				  };

				  // Create the polyline and add the symbol to it via the 'icons' property.
				  line4 = new google.maps.Polyline({
					path: lineCoordinates,
					icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
					strokeColor: 'blue',
					strokeWeight: 7,
					map: map
				  });

				animateCircle4();
			}
			
			function animateCircle1() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line1.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line1.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle11() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line11.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line11.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle1111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line1111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line1111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle11111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line11111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line11111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle2() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line2.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line2.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle21() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line21.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line21.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle211() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line211.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line211.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle2111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line2111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line2111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle21111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line21111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line21111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle3() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line3.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line3.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle31() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line31.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line31.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle311() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line311.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line311.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle3111() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line3111.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line3111.set('icons', icons);
			  }, 20);
			}
			
			function animateCircle4() {
				var count = 0;
				return window.setInterval(function() {
				  count = (count + 1) % 200;

				  var icons = line4.get('icons');
				  icons[0].offset = (count / 2) + '%';
				  line4.set('icons', icons);
			  }, 20);
			}

			
			// Event that closes the Info Window with a click on the map
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });
			
			// *
  // START INFOWINDOW CUSTOMIZE.
  // The google.maps.event.addListener() event expects
  // the creation of the infowindow HTML structure 'domready'
  // and before the opening of the infowindow, defined styles are applied.
  // *
  google.maps.event.addListener(infowindow, 'domready', function() {

    // Reference to the DIV that wraps the bottom of infowindow
    var iwOuter = $('.gm-style-iw');

    /* Since this div is in a position prior to .gm-div style-iw.
     * We use jQuery and create a iwBackground variable,
     * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
    */
    var iwBackground = iwOuter.prev();

    // Removes background shadow DIV
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

    // Removes white background DIV
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

    // Moves the shadow of the arrow 76px to the left margin.
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});


    // Changes the desired tail shadow color.
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

    // Reference to the div that groups the close button elements.
    var iwCloseBtn = iwOuter.next();

    // Apply the desired effect to the close button
    iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }

    // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
  });
			google.maps.event.addDomListener(window, 'load', initialize);
		}
		
		
		
		

		function initialize() {
			var mapOptions = {
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.TERRAIN
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

		  // Try HTML5 geolocation
		  if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			  var pos = new google.maps.LatLng(-6.218172, 106.845811);
		  
			  //setupMarker(-6.208763, 106.845599);

			  map.setCenter(pos);
			}, function() {
			  handleNoGeolocation(true);
			});
			
			google.maps.event.addListener(map, 'click', function (e) {
                var latlng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            //alert("Lokasi: " + results[1].formatted_address + "\r\nLatitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
							document.getElementById("showDetail").innerHTML = "Latitude: " + e.latLng.lat() + "<br>Longitude: " + e.latLng.lng() + "<br><br>Lokasi: <br>" + results[0].formatted_address;
							document.getElementById("showImage").src = "https://maps.googleapis.com/maps/api/streetview?size=250x200&location=" + e.latLng.lat() + "," + e.latLng.lng() + "&heading=151.78&pitch=-0.76";
						}
                    }
                });
            });
			
			            // Setup the address lookup on the button click event
            $('#lookup').click(function() {
                var address = $('#address').val();
                var geocoder = new google.maps.Geocoder();          
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        // Show the new position on the map
                        setupMarker(results[0].geometry.location.lat(), results[0].geometry.location.lng())
                    }
                    else alert("Unable to get a result, reason: " + status);
                });
            });
			
			setupMarker = function(latitude, longitude) {
				// Generate the position from the given latitude and longitude values
				var pos = new google.maps.LatLng(latitude, longitude);
				// Define the marker on the map in the specified location
				var marker = new google.maps.Marker({
					position: pos,
					map: map,
					title: name,
					draggable:true,
					animation: google.maps.Animation.DROP
				});
			
				google.maps.event.addListener(marker, 'click', toggleBounce);
				map.setCenter(pos);
				// Add a listener to this marker to display the information window on click
				var info = "This is a marker for the following co-ordinates:<br />latitude: " + latitude + "<br/>longitude: " + longitude;
				google.maps.event.addListener(marker, 'click', function () {
					var infowindow = new google.maps.InfoWindow({
						content: info
					});
					infowindow.open(map, marker);
				});
			}
		  } else {
			// Browser doesn't support Geolocation
			handleNoGeolocation(false);
		  }
		}
		
		function address() {
			var latlng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
			var geocoder = geocoder = new google.maps.Geocoder();
			geocoder.geocode({ 'latLng': latlng }, function (results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					if (results[1]) {
						alert("Lokasi: " + results[1].formatted_address + "\r\nLatitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
					}
				}
			});
		}
		
		function toggleBounce() {

		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

		function handleNoGeolocation(errorFlag) {
		  if (errorFlag) {
			var content = 'Error: The Geolocation service failed.';
		  } else {
			var content = 'Error: Your browser doesn\'t support geolocation.';
		  }

		  var options = {
			map: map,
			position: new google.maps.LatLng(60, 105),
			content: content
		  };

		  var infowindow = new google.maps.InfoWindow(options);
		  map.setCenter(options.position);
		}

		google.maps.event.addDomListener(window, 'load', initialize);