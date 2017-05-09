
<html>
    <head>
    <title>IMKA Project</title>
    <?php
       define('DB_SERVER', "sql12.freesqldatabase.com");
       define('DB_USERNAME', "sql12173489");
       define('DB_PASSWORD', "bQ2yPTn5UA");
       define('DB_DATABASE', "sql12173489");
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        //read the json file contents
        $jsondata = file_get_contents('https://api.thingspeak.com/channels/262191/feeds/last.json');

        //convert json object to php associative array
        $data = json_decode($jsondata, true);

        //get the employee details
        $tempdif = $data['field1'];
        $temp1 = $data['field2'];
        $temp2 = $data['field3'];

        //insert into mysql table
        $sql = "INSERT INTO TemperatureData(toptemperature, bottomtemperature, difference)
        VALUES('$temp1', '$temp2', '$tempdif')";
        if (mysqli_query($db, $sql)) {
        } else {
            echo "Fail: " . $sql . "<br>" . mysqli_error($db);
        }

        mysqli_close($db);
    ?>
<!-- echo "$jsondata"; -->
<!-- Layout -->
<script src="./js/jquery.min.js" charset="utf-8"></script>
<script src="./js/jquery-3.1.1.js"></script>
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

            th, td, tr {
                border: 1px solid;
                padding: 5px;
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                background-color: #c0c0c0;
                color: #000;
            }
            tr:nth-child(even) {
                background-color: #aeaeae;
                color: #fff;
            }
            table {
                border: 3px solid;
                padding: 5px;
                border-spacing: 15px;
                margin: 0 auto;
                border-collapse: collapse;
                width:100%;
                border-color: #fff;
                overflow-x: auto;
            }

            .bgimg, .bgimg-2, .bgimg-3 {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="bgimg w3-display-container w3-text-white">
            <div class="w3-display-topleft w3-padding-jumbo w3-xlarge">
              <h3>SPOTS</h3>
              <h5>Smart Pond Temperature System</h5>
            </div>
            <div class="w3-display-middle w3-padding-jumbo w3-xlarge">
                <button onclick="showFunction(); showScrollFunction()" class="w3-btn w3-hover-light-grey">Show/Hide Temperature Data</button>
            </div>
            <div id="scrollb" class="w3-display-bottommiddle w3-padding-jumbo w3-xlarge w3-hide">
                <button onclick="getData()" class="w3-btn w3-hover-light-grey fa fa-arrow-down"></button>
            </div>
            <div class="w3-display-bottomleft w3-padding-jumbo">
                <p> Made for II3231 - Human Computer Interaction course </p>
                <h5> Produk eFishery merupakan aset milik <a href="efishery.com"> PT. Multidaya Teknologi Nusantara (Cybreed). </a></h5>
            </div>
            <div class="w3-display-topright w3-padding-jumbo w3-xlarge" style="position: fixed; z-index: 2;">
                <span style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>
        <div id="data" class="w3-row w3-center w3-gray w3-padding-jumbo w3-hide">
            <div style="display: block;">
                <div></br> </div>
                <div>
                    <div style="display: inline-block; margin-right: 100px">
                        <h3 style="color: #000">Temperature Data 1 (Celcius)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/262191/charts/2?bgcolor=%230a1925&color=%237ebd35&dynamic=true&results=60&title=&type=spline&width=500&height=400&xaxis=Time&yaxis=Temperature+1+in+Celcius"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Temperature Data 2 (Celcius)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/262191/charts/3?bgcolor=%230a1925&color=%237ebd35&dynamic=true&results=60&title=&type=spline&width=500&height=400&xaxis=Time&yaxis=Temperature+2+in+Celcius"></iframe>
                    </div>
                </div>
                <div>
                    <h3 style="color: #000">Pond Temperature Difference (Fahrenheit)</h3>
                    <iframe width="1200" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/262191/charts/1?bgcolor=%230a1925&color=%23d62020&dynamic=true&results=60&title=&type=spline&width=1200&height=400&xaxis=Time&yaxis=Temperature+Differences+%28F%29"></iframe>
                </div>
                <h1>Temperature Data List</h1>
                <?php
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    
                    $sql2="SELECT * FROM TemperatureData";
                    $result2=mysqli_query($db, $sql2);
                    $i=1;
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $te1[$i] = $row['toptemperature'];
                        $te2[$i] = $row['bottomtemperature'];
                        $tedif[$i] = $row['difference'];
                        $i++;
                    }  
                    //Start table
                    echo "<table>";
                    echo "<tr><th><b>Temperature 1 (Celcius)</b></th><th><b>Temperature 2 (Celcius)</b></th><th><b>Temperature Difference (Fahrenheit)</b></th></tr>";

                    // Loop through the results from the database
                    for ($i = 1; $i <=count($te1); $i++) 
                    {
                    // Show entries
                        echo    
                            "<tr>
                            <td>$te1[$i]</td>
                            <td>$te2[$i]</td>
                            <td>$tedif[$i]</td>
                            </tr>";

                    }

                    echo "</table>";
                    mysqli_close($db);
                ?>
            </div>
        </div>

        <div id="myNav" class="overlay w3-display-topright" style="z-index: 3;">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content w3-display-middle">
            <a href="./index" onclick="closeNav()">Logout</a>
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
        <script>
            function showFunction() {
                var x = document.getElementById("data");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            function showScrollFunction() {
                var x = document.getElementById("scrollb");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            function getData() {
                location.href = "#data";
            }
        </script>
        
	</body>
</html>