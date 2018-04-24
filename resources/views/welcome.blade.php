<!DOCTYPE html>
<html>

<head>
    <title>Alstar - Bootstrap one page parallax template</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/frontend/css/style.css" rel="stylesheet" media="screen">
    <link href="/frontend/color/default.css" rel="stylesheet" media="screen">

    <!-- =======================================================
      Theme Name: Alstar
      Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo text or image -->
            <a class="navbar-brand" href="index.html">Blood Donation</a>

        </div>
        <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="current"><a href="#intro">Home</a></li>
                <li><a href="#about">Why Donate</a></li>
                <li><a href="#portfolio">Eligibilty</a></li>
                <li><a href="#services">Testimonials</a></li>                
                <!-- <li><a href="#team">Team</a></li> -->
                <!-- <li><a href="#contact">Write your testimonial</a></li> -->
                <li><a href="#myModal" data-toggle="modal">register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- alert -->

<!--  end of alert -->

<!-- intro area -->
<div id="intro">
    <div class="intro-text">
        <div class="container">
                        <div class="col-md-12">
                       
                                <div class="pull-left">
                <button  type="submit" class="btn info-button">Blood Needed!</button>
                 </div>
                       
                <div id="rotator">

                     <h1><span class="1strotate"><h1><span class="1strotate">Help save a life, If You're A Blood Donor, You're A Hero To Someone, Somewhere, Who Received Your Gracious Gift Of Life</span></h1></span></h1>
            <div class="line-spacer"></div>
            <p><span class="2ndrotate">Give Hope, Bring Change, A Better Nation</span></p>
                </div>
            </div>

            <div class="register navigation" style="margin-left: -45px">
                <!-- <a href="#contact" class="btn btn-primary btn-lg">Donate Blood</a> -->
                <button  type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Register To Donate Blood</button>

            </div>
        </div>
    </div>
</div>

<!-- my modal -->

<div  id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-8 col-md-offset-2">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Donor Registration</h4>
    </div>
    <div class="modal-body">
            <form action="#" method="post" role="form">
                <div class="form-group">
                    <label class="pull-left">First Name: </label>
                    <input type="text" name="" class="form-control" placeholder="enter first name">
                </div>

                <div class="form-group">
                    <label class="pull-left">Last Name: </label>
                    <input type="text" name="" class="form-control" placeholder="enter your lastname">
                </div>

                <div class="form-group">
                    <label class="pull-left">Location: </label>
                    <select class="form-control">
                        <option value="Banjul">Banjul</option>
                        <option value="Brikama">Brikama</option>
                        <option value="Serrekunda">Serrekunda</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="pull-left">Blood Type: </label>
                    <select class="form-control">
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB">AB</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="pull-left">Phone Number: </label>
                    <input type="text" name="" class="form-control" placeholder="enter your phone number">
                </div>

                <div class="form-group">
                    <label class="pull-left">Email (<object>optional</object>)</label>
                    <input type="email" name="" class="form-control" placeholder="enter your email">
                </div>

                <button class="btn btn-primary pull-left" type="submit">Submit</button>
            </form>
    </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
</div>

<!-- end of my modal -->

<!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About</h2>
            <div class="heading-line"></div>
            <p>“Tears of a mother cannot save her child, but your blood can.”</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img  style="margin-top: 150px" src="../frontend/img/about-img.jpg" alt="Blood">
        </div>

        <div class="col-md-6 content">
          <h2>What is blood donation?</h2>
          <h3>There many important reasons and benefits for donating blood. We'll just give a brief explanation of some of them. </h3>
          <p>
            A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.            
          </p>

           <h3>Importance</h3>
           <p>+
            The number one reason donors say they give blood is because they “want to help others.”  Whatever your reason, the need is constant and your contribution is important for a healthy and reliable blood supply. And you'll feel good knowing you've helped change a life.
           </p>
      </div>

          <div class="col-md-12 about-img" id="benefit_of_health" style="border: 1px solid black; margin-top: 15px; box-shadow: 0 0 1px #ccc, 15px 10px 1px #ccc, -15px 10px 1px #ccc;">
         
           <h2>Health Benefits of Blood donation</h2>
           
           <p>
            There are several health benefits of blood donation. Will discuss about a few here. Some might even surprise you.

            <div class="col-md-8 col-md-offset-2 content">
            <ul class=".og-grid">
              <li>
               <h3>Improves Heart Health</h3>

              </li>

              <li>
                <h3>Enhances The Production Of New Blood Cells</h3>
              </li>

              <li>
                <h3>Burns Calories</h3>
             </li>

              <li>
               <h3>Reduces Cancer Risk</h3>    
              </li>

              <li><h3>Free Health Screening Done</h3>
             </li>

              <li>
                <h3>Saves Lives</h3>
              </li>
                <li>
                <h3>Brings joy to Many</h3>
              </li>

            </ul>
        </p>
    </div>
        </div>
      </div>
    </div>
  </section>

<!-- Parallax 1 -->
<section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="color-light">
                    <h2 class="wow bounceInDown" data-wow-delay="0.5s">Be a hero!!</h2>
                    <p class="lead wow bounceInUp" data-wow-delay="1s">Its  your blood</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Eligibility -->
<section id="portfolio" class="home-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading">
                    <h2>Eligibility</h2>
                    <div class="heading-line"></div>
                    <p>For the safety of the patients, certain requirements should be considered.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="text-center">Donors should be</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Age- between 18-65 years</li>
                                <li>Weight above 50kg</li>
                                <li>allowed to donate every 6 months</li>
                                <li>You shoul not be an asthmatic patient</li>
                                <li>Women should not be on period</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="text-center">.....</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Men can donate every 3 months</li>
                                <li>Women can donate every 4 months</li>
                                <li>No tattoo</li>
                                <li>No vaccination for 3 weeks</li>
                                <li>Haemoglobin should be 12</li>
                                <li>HIV negative</li>
                                <li>No Herpititis</li>
                                <li>not involved in sex business</li>
                               </ul>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6"> 
                  <div class="panel panel-default">
                      <div class="panel-heading">
                           <p>You can also volunteer to donate in any of the  <a href="https://www.google.gm/search?q=hospitals+in+the+gambia&npsic=0&rflfq=1&rlha=0&rllag=13434910,-16652599,8732&tbm=lcl&ved=0ahUKEwiYkqK_l9LaAhXLcRQKHXEZBHkQjGoIXQ&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:,13.455187515411637,-16.442590499218795;mv:!1m3!1d151369.85896464137!2d-16.687036300000045!3d13.395078109611912!3m2!1i946!2i468!4f13.1" target="_blank" style="text-decoration: underline;"> hospitals</a> in the country</p>
                      </div>
                      <div class="panel-body">
                         <img src="../frontend/img/donate.jpg" alt="Blood" style=" height: 245px; width: 500px;">

                      </div>
                  </div>
                </div>  
        
            </div>
        </div>
    </div>
</section>

<!-- Parallax 2 -->
<section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<section id="services" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading">
                    <h2>Testimonials</h2>
                    <div class="heading-line"></div>
                    <p>Testimonial from blood donor recipents. See how they were given a second chance in life.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img style="width: 100%; height: 320px" src="../frontend/img/blood.jpg" alt="First Slide">
        </div>
        <div class="item">
            <img style="width: 100%; height: 320px" src="../frontend/img/blood.jpg" alt="Second Slide">
        </div>
        <div class="item">
            <img style="width: 100%; height: 320px" src="../frontend/img/blood.jpg" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left text-center"</span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
            </div>
        </div>
    </div>
</section>



<!-- Contact -->
<section id="contact" class="home-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading">
                    <h2>Write a Testimonial</h2>
                    <div class="heading-line"></div>
                    <p>If you have a testimonial, please write it below and we will review it within 24 hours.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <form action="" method="post" class="form-horizontal contactForm" role="form">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                    </div>

                   

                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <label class="pull-left help-text">Add your Picture: </label>
                            <input type="file" name="" class="form-control">
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

<!-- Bottom widget -->
<section id="bottom-widget" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-widget wow bounceInLeft">
                    <i class="fa fa-map-marker fa-4x"></i>
                    <h5>Main Office</h5>
                    <p>
                        109 Borough High Street,<br />London SE1 1NL
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-widget wow bounceInUp">
                    <i class="fa fa-phone fa-4x"></i>
                    <h5>Call</h5>
                    <p>
                        +1 111 9998 7774<br> +1 245 4544 6855

                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-widget wow bounceInRight">
                    <i class="fa fa-envelope fa-4x"></i>
                    <h5>Email us</h5>
                    <p>
                        hello@alstarstudio.com<br />sales@alstarstudio.com
                    </p>
                </div>
            </div>
        </div>
        <div class="row mar-top30">
            <div class="col-md-12">
                <h5>We're on social networks</h5>
                <ul class="social-network">
                    <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse" style="background-color: blue; color: white"></i>
						</span></a>
                    </li>
                    <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse" style="background-color: #000; color: white""></i>
						</span></a>
                    </li>
                    <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse" style="background-color: cyan; color: white"></i>
						</span></a>
                    </li>
                    <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"  style="background-color: pink; color: white"></i>
						</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; UTG/ITC Students. All rights reserved.</p>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
                    -->
                    Designed by <a href="https://bootstrapmade.com/">Tech Ladies</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- js -->
<script src="{{ asset('/frontend/js/jquery.js')}}"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/wow.min.js"></script>
<script src="/frontend/js/mb.bgndGallery.js"></script>
<script src="/frontend/js/mb.bgndGallery.effects.js"></script>
<script src="/frontend/js/jquery.simple-text-rotator.min.js"></script>
<script src="/frontend/js/jquery.scrollTo.min.js"></script>
<script src="/frontend/js/jquery.nav.js"></script>
<script src="/frontend/js/modernizr.custom.js"></script>
<script src="/frontend/js/grid.js"></script>
<script src="/frontend/js/stellar.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/frontend/contactform/contactform.js"></script>

<!-- Template Custom Javascript File -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

</body>
</html>
