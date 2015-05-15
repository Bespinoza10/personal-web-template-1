<html>
  <head>
    <title>Stephanie Espinoza</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bower_components/foundation/css/foundation.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css">
  </head>
  <body>

    <!-----NAV BAR------>
    <header>
      <div class="navbar">
        <ul class="nav">
          <li class="item">
            <a href="#">Home</a>
          </li>

          <li class="item">
            <a class="links" href="#about">About Me</a>
          </li>
          <li class="item">
            <a href="#contact" class="contact">Contact</a>
          </li>
          <button data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="small elMenu dropdown"><img src="img/menuButtonR.png"></button><br>
            <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
              <li><a href="#">Home</a></li>
              <li><a href="#about">About Me</a></li>
              <li><a href="#skills">Skills and Tools</a></li>
              <li><a href="#portfolio">My Portfolio</a></li>
              <li><a href="#cntct">Contact</a></li>
            </ul>
        </ul>

        <div class="logo">
          <a href="#"><h1 class="brandN">Stephanie A. Espinoza</h1></a>
        </div>
      </div>
    </header>

<!--     SLIDER -->
    <div class="large-12 columns sliderMain">
      <div class="fade">
        <div><img src="img/steph-slide-1.png"></div>
        <div><img src="img/steph-slide-2.png"></div>
        <div><img src="img/steph-slide-3.png"></div>
      </div>
    </div>
<!--     ABOUT SECTION -->
    <div id="about" class="large-12 columns">
      <div class="large-5 large-centered columns bioIntro">
        <h2 class="name">Stephanie Alesandra Espinoza </h2>
      </div>
      <div class="large-3 large-centered columns">
        <h4 class="name2">Nurse, Graphic Designer, Future Web Designer</h4>
      </div>
      <div class="large-2 large-centered columns">
        <hr class="hrs">
      </div>
      <div class="large-6 columns">
        <div class="large-2 large-offset-1 columns">
          <h3 class="bioHs">Profile:</h3>
        </div>
        <div class="large-7 columns">
          <h3 class="bioHs">Nurse, Graphic Designer, and Future Web Designer</h3>
        </div>
        <div class="large-2 large-offset-1 columns">
          <h3 class="bioHs">Skills in:</h3>
        </div>
            <!---PROGRESS BARS--->
        <div class="large-7 columns">
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-1 large-offset-1 columns">HTML</span><span class="large-1 large-offset-9 columns">90%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-1 large-offset-1 columns">CSS</span><span class="large-1 large-offset-9 columns">90%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar3"><span class="large-1 large-offset-1 columns">Photoshop</span><span class="large-1 large-offset-9 columns">80%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-5 large-offset-1 columns">Microsoft Word</span><span class="large-1 large-offset-5 columns">90%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar5"><span class="large-5 large-offset-1 columns">Public Speaking</span><span class="large-1 large-offset-5 columns">95%</span></span>
          </div>
        </div>
        <div class="large-2 large-offset-1 columns">
          <h3 class="bioHs">Contact:</h3>
        </div>
        <div class="large-7 columns">
          <h3 class="bioHs">stephluvspink17@gmail.com</h3>
        </div>
      </div>
      <div class="large-6 columns">
        <h3 class="ps">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
    </div>


<!--     CONTACT FORM -->




	 	 		<?php

				 include('includes/mail_script.php');

				 ?>

    <div id="contact" class="large-12 columns contactForm">
    	<div class="large-10 large-centered columns forma">


    		<?php
             echo"<h6 style='color:red;'>".$ERmsg."</h6>";
            ?>


        <div class="section-container tabs large-10 large-centered columns" data-section>
          <section class="section">
            <div class="large-3 large-centered columns"><h2 class="contactH1"><a href="#panel1" style="color:#ff4a69;">Contact Me</a></h2></div>
            <div class="content" data-slug="panel1">




              <form action="" method="post">
                <div class="row collapse">


                  <div class="large-7 large-centered columns">
                    <input class="yourName" type="text" id="yourName" name="Name" placeholder="Your Name" value="<?php get_data("Name"); ?>" style="background: none;" >


                  </div>

                </div>
                <!-- START : EMAIL SECTION -->
                <div class="row collapse">



                  <div class="large-7 large-centered columns">
                    <input type="text" id="yourEmail" name="Email" placeholder="Your Email (e.g. jane@smithco.com)" value="<?php get_data("Email"); ?>" style="background: none;">
                  </div>

                </div>


                <!-- START : PHONE SECTION -->
                <div class="row collapse">



                  <div class="large-7 large-centered columns">
                    <input type="text" id="yourPhone" name="Phone" placeholder="Phone Number" value="<?php get_data("Phone"); ?>" style="background: none;">
                  </div>
                </div>

                <!-- START : COMMENTS SECTION -->

                <div class="large-7 large-centered columns"><textarea rows="4" name="Comments" placeholder="Your Message" style="background: none;"><?php get_data("Comments"); ?></textarea>
                <button style="background: #ff4a69;" type="submit" class="radius button">Submit</button></div>

              </form>


            </div>
          </section>




      </div>
  	</div>
  </div>



  </body>
  <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="bower_components/foundation/js/foundation.js"></script>
  <script type="text/javascript" src="bower_components/slick.js/slick/slick.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
    $('.fade').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
      });
  </script>
</html>