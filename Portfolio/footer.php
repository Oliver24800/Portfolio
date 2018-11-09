<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <center><img src="img/Netono.png" alt="Zazou" style=" height: 100px" ></a></center>
    <a href="#">The Wall was my second big project at Media College,</a>
    <a href="#">this is also the first time where we experimented with Image Upload and account making</a>
    <a href="http://24800.hosts.ma-cloud.nl/ma/bewijzenmap/periode1.3/proj/Website/">Intrested? Click here to view</a>
</div>

<div id="mySidenav2" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <center><img src="img/Zazou.png" alt="Zazou" style=" height: 50px" ></a></center>
    <a href="#">Zazou was my third big project at Media College, and I'm really proud of it.</a>
    <a href="#">This site was made by me and for my grandpa to use as a blog.</a>
    <a href="http://24800.hosts.ma-cloud.nl/ma/bewijzenmap/periode1.4/MyBand/Smarty/public/index.php?page=home">Are you intrested in seeing it? Click here!</a>
</div>

<div id="mySidenav3" class="sidenav" s>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <center><img src="img/aperture.png" alt="Zazou" style=" height: 100px" ></a></center>
    <a href="#">Aperture Design is our first company and made to let us learn about everything there is to know with starting your own company.</a>
    <a href="#">The team is full of incredible people :<a href="http://24935.hosts1.ma-cloud.nl/bewijzenmap/portfolio/">Quinten Rodrigues</a><a href="http://24676.hosts1.ma-cloud.nl/portfolio/">Pawel Dokodo</a></a><a href="http://24675.hosts1.ma-cloud.nl/bewijzenmap/ma/portfolio/Portfolio/">Fabio van den Broek</a>
    <a href="http://24542.hosts1.ma-cloud.nl/portfolio/index.html">Matthijs van Zunderen</a>

    <a href="http://24935.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/proj/aperture/index.php">Wanna see for yourself? Click here</a>
</div>




<script>
    function openNav() {
        setTimeout(function(){ document.getElementById("mySidenav").style.width = "40%"; }, 250);
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
    }

    function openNav2() {

        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        setTimeout(function(){ document.getElementById("mySidenav2").style.width = "40%"; }, 250);


        // setTimeout(()=>{
        //     document.getElementById("mySidenav2").style.width = "40%";
        // },1000);

    }

    function openNav3() {
        setTimeout(function(){ document.getElementById("mySidenav3").style.width = "40%"; }, 250);
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
    }
</script>
</body>


