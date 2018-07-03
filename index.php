<html>
    <head>
		<title>IMKA Project</title>
    	<!-- Layout -->
<script src="./js/jquery.min.js" charset="utf-8"></script>
<script src="./js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<!-- CSS -->
<!-- <link href="./css/bootstrap.min.css" rel="stylesheet" > -->
<link rel="stylesheet" href="./css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<!-- End of CSS -->

<!-- Meta tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End of Meta tag -->

<!-- Gambar tab browser -->
<link rel="shortcut icon" href="./img/favicon.ico?v=2"/>
<!-- End of Gambar tab browser -->

<!-- Bootstrap CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" >
<link href="./css/bootstrap.css" rel="stylesheet" >
<link href="./css/bootstrap-theme.css" rel="stylesheet">
<link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="./css/stylelogin.css" rel="stylesheet">
        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Lato", sans-serif;
            }
            body, html {
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg-1 {
                background-image: url("./img/fish.jpg");
                min-height: 100%;
            }

            /* Second image (Portfolio) */
            .bgimg-2 {
                background-image: url("./img/arduino.jpg");
                min-height: 400px;
            }

            .bgimg-3 {
                background-image: url("./img/sti.jpg");
                min-height: 400px;
            }

            .w3-wide {
                letter-spacing: 10px;
            }
            
            .w3-hover-opacity {
                cursor: pointer;
            }

            #map {
                width: 100%;
                height: 400px;
                background-color: grey;
            }

            @media only screen and (max-device-width: 1024px) {
                .bgimg-1, .bgimg-2 {
                    background-attachment: scroll;
                }
            }

            .overlay {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.2s;
            }

            .overlay-content {
                position: relative;
                top: 25%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay a:hover, .overlay a:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
            }

            @media screen and (max-height: 450px) {
              .overlay a {font-size: 20px}
              .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
              }
            }
        </style>
    </head>
    <body>
        <div class="bgimg-1 w3-display-container w3-text-white" id="home">
            <div class="w3-display-middle w3-jumbo w3-padding-jumbo">
                <img src="./img/logoefishery.png">
            </div>
            <div class="w3-display-topleft w3-padding-jumbo w3-xlarge" style="margin: 4rem">
                <h3>SPOTS</h3>
                <h5>Smart Pond Temperature System</h5>
            </div>
            <div class="w3-display-topright w3-padding-jumbo w3-xlarge" style="position: fixed; z-index: 2; margin: 4rem;">
                <p style="display: inline-block;">Let's "Get Started"</p>
                <p class="fa fa-arrow-right"></p>
                <span style="font-size:30px;cursor:pointer; color: #cc8400;" onclick="openNav()">&#9776;</span>
            </div>
            <div class="w3-display-bottomleft w3-padding-jumbo" style="margin: 4rem">
                <p> Made for II3231 - Human Computer Interaction course </p>
                <h5> Nama dan Logo eFishery merupakan aset milik <a href="efishery.com"> PT. Multidaya Teknologi Nusantara (Cybreed). </a></h5>
            </div>
        </div>

        <div id="myNav" class="overlay w3-display-topright" style="z-index: 3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content w3-display-middle">
                <a href="javascript:void(0)" onclick="closeNav()">Home</a>
                <!-- <a href="./login">Get Started</a> -->
                <a href="./datat">Get Started</a>
                <a href="#about" onclick="closeNav()">Our Product</a>
                <a href="#contact" onclick="closeNav()">About Us</a>
            </div>
        </div>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>

        <div class="w3-row w3-center w3-black w3-padding-16">
            <h2 class="w3-center">CPSS (Cyber Pysical Social System) Concept</h2>
            <div class="w3-third w3-section">
                <span class="w3-xlarge">
                    <img src="./img/cyber.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Cyber</h4>
                <h4>Online Server</h4>
            </div>
            <div class="w3-third w3-section">
                <span class="w3-xlarge">
                    <img src="./img/physical.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Physical</h4>
                <h4>eFishery + SPOTS</h4>
            </div>
            <div class="w3-third w3-section">
                <span class="w3-xlarge">
                    <img src="./img/social.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Social</h4>
                <h4>Fish Farmers</h4>
            </div>
        </div>

        <!-- Second Parallax -->
        <div class="w3-display-container">
            <div class="bgimg-2" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">OUR PRODUCT</span>
            </div>
        </div>
        
        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="about">
          <h2 class="w3-center">About Product</h2>
          <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
              <img src="./img/project.jpg" class="w3-round w3-image w3-hover-opacity" width="500" height="100%">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large" style="text-align: justify; text-justify: inter-word;">
              <p>eFishery Smart Pond Temperature System adalah sistem tambahan yang memanfaatkan sistem eFishery milik <a href="efishery.com"> PT. Multidaya Teknologi Nusantara (Cybreed).</a> Suhu air tambak yang tidak stabil dapat menyebabkan ikan stres bahkan hingga berujung pada kematian. Matinya ikan-ikan di tambak dapat memengaruhi kesejahteraan para petambak. Oleh karena itu, Smart Pond Temperature System hadir untuk membantu para petambak untuk menjaga suhu air tambak mereka agar tetap stabil sehingga kesehatan ikan tidak menurun.</p>
            </div>
          </div>
        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <h2 class="w3-center">Features</h2>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/tempe.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Automatic Temperature Management</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/ana.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Temperature Analytics</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/datab.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Database Stored</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/clou.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Cloud Computing Based</h4>
            </div>
        </div>

        <!-- Second Parallax -->
        <div class="w3-display-container">
            <div class="bgimg-3" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">ABOUT US</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contact">
          <h2 class="w3-center">Project Team</h2>
          <div class="row text-center" style="margin-top:50px">
            <div class="col-md-4">
                <img class="w3-circle" style="width:150px;" src="./img/Team/Buba.jpg">
                <h4 class="service-heading">Mahbub Haq Al Farisi</h4>
                <h4 class="service-heading">18214018</h4>
            </div>
            <div class="col-md-4">
                <img class="w3-circle" style="width:150px;" src="./img/Team/Rezkus.jpg">
                <h4 class="service-heading">Rezha Kusuma Astri</h4>
                <h4 class="service-heading">18214030</h4>
            </div>
            <div class="col-md-4">
                <img class="w3-circle" style="width:150px;" src="./img/Team/Edvin.jpg">
                <h4 class="service-heading">Edvin William Handoko</h4>
                <h4 class="service-heading">18214054</h4>
            </div>
        </div>

          <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
              <!-- Add Google Maps -->
              <div id="map" class="w3-round-large">
                <script>
                    function initMap() {
                        var myLatLng = {lat: -6.890560, lng: 107.609673};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: new google.maps.LatLng(-6.890560, 107.609673),
                            zoom: 17,
                            mapTypeControl: true,
                            styles: [
                                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                                {
                                  featureType: 'administrative.locality',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'poi',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'poi.park',
                                  elementType: 'geometry',
                                  stylers: [{color: '#263c3f'}]
                                },
                                {
                                  featureType: 'poi.park',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#6b9a76'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'geometry',
                                  stylers: [{color: '#38414e'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'geometry.stroke',
                                  stylers: [{color: '#212a37'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#9ca5b3'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'geometry',
                                  stylers: [{color: '#746855'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'geometry.stroke',
                                  stylers: [{color: '#1f2835'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#f3d19c'}]
                                },
                                {
                                  featureType: 'transit',
                                  elementType: 'geometry',
                                  stylers: [{color: '#2f3948'}]
                                },
                                {
                                  featureType: 'transit.station',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'geometry',
                                  stylers: [{color: '#17263c'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#515c6d'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'labels.text.stroke',
                                  stylers: [{color: '#17263c'}]
                                }
                            ]
                        });
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                        });
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVcdqZ6XHMJmwsTvtviHP7EkysFBJFvoQ&callback=initMap">
                </script>

        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2qQzprSbNBaE4hsZbZudfMDAR6dMvlDk&callback=initMap">
        </script> -->
              </div>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Labtek V ITB Gedung Benny Subianto<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 08985050890<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> mahbub.alfarisi@gmail.com<br>
                </div>
                <p>Invite us for a cup of <i class="fa fa-coffee"></i>, or leave us a feedback:</p>
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-btn w3-teal w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
          </div>
        </div>
	</body>
</html>