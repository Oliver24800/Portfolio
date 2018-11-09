<?php
include 'header.php';
?>
<!DOCTYPE html>

<html>



<!DOCTYPE html>
<img>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("a").on('click', function(event) {

                if (this.hash !== "") {

                    event.preventDefault();


                    var hash = this.hash;


                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){


                        window.location.hash = hash;
                    });
                }
            });
        });
/////////////////////////////////////////////////////////////////////////////////////////


        $(window).scroll(function(){
            $(".fade").css("opacity", 1 - $(window).scrollTop() / 220);
        });
//////////////////////////


        $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > 330);
            });
        });




    </script>
    <style>
        #section1 {
            height: 210px;
            background-color: white;
        }

        #section2 {
             height: 150px;
             background-color: white;
         }
        #section3 {
            height: 280px;
            background-color: white;
        }


    </style>
</head>
<div class="parallax" style="margin-top: -2.5%; margin-bottom: -2.5%; font-family: 'Arial Nova Light'"">
<center><img class="fade" style="border-radius: 50%; margin-top: 5%;" src="https://media.licdn.com/dms/image/C4D03AQE7kOeVGxSHhQ/profile-displayphoto-shrink_200_200/0?e=1544054400&v=beta&t=5C5kFZAFqTic9aMbGx4UDQ_oeHWYYg9vFNLMMxH4xOI"></center>


<center><p  class="fade" style="font-size: 175%; color: whitesmoke">Oliver Scargo</p></center>
<center><p class="fade" style="margin-top: -1.1%; color: whitesmoke">Front-end webdeveloper</p></center>
<center><a href="https://github.com/Oliver24800"><img     class="wave shadow fade"     src="img/Github.png" alt="Github" style=" height: 50px; " ></a></center>

</div>
<div style="margin-top: 0%; margin-left: 12%; margin-bottom: 20px " class="main" id="section1">
    <h2 style="margin-top: 5%; margin-left: 4%; font-size: 200%; font-family: 'Arial Nova Light'">Welcome</h2>
    <p >I'm Oliver Scargo, and I'm a young webdeveloper. I work to improve myself everyday, by learning new things from experience and from others.<br>
    Also I'm a student at Media College. In my free time I like to take my mind off programming and instead focus on creating things. <br>
        Using applications such as Photoshop to create awesome images. Or even Sony Vegas to edit videos.<br>
        But my main focus right now is creating websites and trying to test out new things to create even better or more creative websites.

    </p>
    <a href="#section2">For more information about me click here.</a>

</div>

<div class="test" id="section3">
    <center><p style="color: whitesmoke; font-size: 200%; font-family: 'Arial Nova Light';"><br>Projects</p></center>



    <div class="row" ">

        <div class="column" style="font-size:30px;cursor:pointer" onclick="openNav()" ()>
             <img src="img/Netono.png" alt="Netono" style="margin-top: -30px; margin-left: 100px; height: 150px" class="zoom">
        </div>
        <div class="column" style="font-size:30px;cursor:pointer" onclick="openNav2()" ()>
             <img src="img/Zazou.png" alt="Zazou" style=" height: 88px; margin-left: 75px" class="zoom">

        </div>
        <div style="font-size:30px;cursor:pointer" onclick="openNav3()" class="column" >
          <img src="img/aperture.png" alt="Zazou" style="height: 200px; margin-left: 50px; margin-top: -60px; margin-right: 50px" class="zoom"></a>

        </div>

</div>

</div>









<div style="" class="row">
<h2 class="column;" style=" margin-left: 7em; font-size: 200%; font-family: 'Arial Nova Light'">Contact</h2>


</div>
<div id="section2" class="row">

    <p class="column" style="margin-top: 0%; margin-left: 12%; margin-bottom: 20px;">
        I would love to hear from you. You can get in contact with me by email and the telephone.<br>
        If you have any questions what so ever feel free to contact me whenever you are available.<br>
        And I will try to respond to you as fast as possible.<br>
        <br>
        If there is anything you would like to talk to me about face to face, feel free to contact me.<br>
        We will make a appointment to talk about your next big project.

    </p>



</div>



</body>
</html>


<?php
 include 'footer.php';
?>