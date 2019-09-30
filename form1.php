<?php
if(isset($_POST)){
  $event= $_POST['event'];
  $reg_fee= $_POST['reg_fee'];
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Kalanjali | Form</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>

<link href=assets/css/style.css rel=stylesheet>
<link href=css/bootstrap.css rel=stylesheet>
<link href=vendors/linericon/style.css rel=stylesheet>
<link href=css/font-awesome.min.css rel=stylesheet>
<link href=vendors/owl-carousel/owl.carousel.min.css rel=stylesheet>
<link href=vendors/lightbox/simpleLightbox.css rel=stylesheet>
<link href=vendors/nice-select/css/nice-select.css rel=stylesheet>
<link href=vendors/animate-css/animate.css rel=stylesheet>
<link href=css/style.css rel=stylesheet>
<link href=css/responsive.css rel=stylesheet>

         <style>
        .round-img{ border-radius: 50%; }
        
        

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
    cursor: pointer;
  display: inline-block;
  border: none;
  opacity: 0.9;
}


.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class=header_area>
        <div class=main_menu>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <a href=http://www.sirmvit.edu target="_blank" class="logo_h navbar-brand"><img alt=Logo class=round-img src=img/collegelogo.png height=65 width=65></a>
                    <button aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation" class=navbar-toggler data-target=#navbarSupportedContent data-toggle=collapse type=button><span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span></button>
                    <div class="collapse navbar-collapse offset" id=navbarSupportedContent>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a href=index.html class=nav-link>Home</a>
                                <li class=nav-item><a href=event.html class=nav-link>Event Schedule</a>
                                    <li class=nav-item><a href=meettheteam.html class=nav-link>Meet the team</a>
                                        <li class="nav-item dropdown submenu"><a href=# class="nav-link dropdown-toggle" aria-expanded=false aria-haspopup=true data-toggle=dropdown role=button>Events</a>
                                            <ul class=dropdown-menu>
                                                <li class=nav-item><a href=combo.html class=nav-link>Special Offer!!</a>
                                                        <li class=nav-item><a href=technical.html class=nav-link>Technical Events</a>
                                                        <li class=nav-item><a href=musical.html class=nav-link>Musical Events</a>
                                                        <li class=nav-item><a href=dance.html class=nav-link>Dance Events</a>
                                                        <li class=nav-item><a href=dramatics.html class=nav-link>Dramatics Events</a>
                                                        <li class=nav-item><a href=literary.html class=nav-link>Literary Events</a>
                                                            <li class=nav-item><a href=finearts.html class=nav-link>Fine Arts</a>
                                                            <li class=nav-item><a href=gaming.html class=nav-link>Gaming Events</a>
                                                           
                                                                    
                                                                        <li class=nav-item><a href=other.html class=nav-link>Other Events</a>
                                                                        <li class=nav-item><a href=sports.html class=nav-link>Sports Events</a></ul>
                                            <li class=nav-item><a href=gallery.html class=nav-link>Gallery</a>
                                                <li class=nav-item><a href=contact.html class=nav-link>Contact</a></ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class=nav-item><a href=eventcat.html class=tickets_btn>Register Now!</a></ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay form_area bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="form.html">Registration Form</a>
						</div>
						<h2>Registration</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Event Schedule Area =================-->
        <!--================End Event Schedule Area =================-->
        
  		<form id="register_form">
  <div class="container">
    <h1 style="font-variant: small-caps; color:#dd4618;">important guidelines for event registration:-</h1>
    <p>* Please pay the exact required amount for registration to the given UPI ID using any of your favorite payment app and pass the <b> CORRECT TRANSACTION ID </b> in the registration form after your successful payment.</p>
    <p>* To pay via <strong>Google Pay / Tez</strong>, send the required amount to : <b>udayshivappa@gmail.com</b> in the name of "Hegde U.S."</p>
    <p>* To pay via<strong> BHIM, PayTM or PhonePe </strong>, send the required amount to : <b>udayshivappa@okaxis</b> in the name of "Hegde U S"</p>
    <p>* For the participation in <b>Multiple Events</b>,<strong> Please Pay Seperately</strong> for each of the event.</p>
    <p>* Do <strong>look out for timings</strong> of events in the <b>events schedule</b> section. Incase of participation in multiple events, avoid conflict of two or more events at the time.</p>
    <p>* For the <b>Combo Event </b>, please enter name of all the teams seperated by commas in the name field and please pay the total amount of Rs 3500 at once.</p>
    <p>* On-spot Registrations are also available.
    <p>* For any queries regarding registrations, contact: Yash- <b>9513402471</b>, Aditya- <b>8197415228</b></p>
    <center>
    <br>
    <right><a href=http://bit.ly/2N01GpP target=_blank class=tickets_btn>Click here for Rules & Regulations of the events.</a></right>
    <left><a href=http://bit.ly/2R4snwH target=_blank class=tickets_btn>Click here for Brochure of Kalanjali.</a></left>
    <br><br>
    </center>
    <hr>

    <label for="name"><b>Name / Team Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <fieldset>
          <b>Event Selected</b>
          <p>
             <select name="event_selected" size='10' disabled>
              <option value = "Combo" <?php if($event=="COMBO"){echo'selected="selected"';$event_name="Combo";}?>>Combo Event Offer: ₹800 Off</option>
               <option value = "Classical Vocal Solo" <?php if($event=="CVS"){echo'selected="selected"';$event_name="Classical Vocal Solo";}?>>Classical Vocal Solo</option>
               <option value = "Light Vocal Solo(Non-Filmy)" <?php if($event=="LVSNF"){echo'selected="selected"';$event_name="Light Vocal Solo(Non-Filmy)";}?>>Light Vocal Solo(Non-Filmy)</option>
               <option value = "Light Vocal Solo(Filmy/Kannada/Hindi)" <?php if($event=="LVSF"){echo'selected="selected"';$event_name="Light Vocal Solo(Filmy/Kannda/Hindi)";}?>>Light Vocal Solo(Filmy/Kannda/Hindi)</option>
               <option value = "Western Vocal Solo" <?php if($event=="WVS"){echo'selected="selected"';$event_name="Western Vocal Solo";}?>>Western Vocal Solo</option>
               <option value = "Group Song(Indian)" <?php if($event=="GSI"){echo'selected="selected"';$event_name="Group Song(Indian)";}?>>Group Song(Indian)</option>
               <option value = "Group Song(Western)" <?php if($event=="GSW"){echo'selected="selected"';$event_name="Group Song(Western)";}?>>Group Song(Western)</option>
               <option value = "Battle Of Bands" <?php if($event=="BOB"){echo'selected="selected"';$event_name="Battle Of Bands";}?>>Battle Of Bands</option>
               <option value = "Beat Boxing" <?php if($event=="BB"){echo'selected="selected"';$event_name="Beat Boxing";}?>>Beat Boxing</option>
               <option value = "Classical Instrumental(Solo Percussion)" <?php if($event=="CISP"){echo'selected="selected"';$event_name="Classical Instrumental(Solo Percussion)";}?>>Classical Instrumental(Solo Percussion)</option>
               <option value = "Classical Instrumental(Solo Non-Percussion)" <?php if($event=="CISNP"){echo'selected="selected"';$event_name="Classical Instrumental(Solo Non-Percussion)";}?>>Classical Instrumental(Solo Non-Percussion)</option>
               <option value = "Group Dance" <?php if($event=="GD"){echo'selected="selected"';$event_name="Group Dance";}?>>Group Dance</option>
               <option value = "Solo Dance(Filmy)"<?php if($event=="SDF"){echo'selected="selected"';$event_name="Solo Dance(Filmy)";}?>>Solo Dance(Filmy)</option>
               <option value = "Solo Dance(Classical)" <?php if($event=="SDC"){echo'selected="selected"';$event_name="Solo Dance (Classical)";}?>>Solo Dance(Classical)</option>
               <option value = "Skit" <?php if($event=="SK"){echo'selected="selected"' ;$event_name="Skit";}?>>Skit</option>
               <option value = "Mime" <?php if($event=="MI"){echo'selected="selected"';$event_name="Mime";}?>>Mime</option>
               <option value = "One Act Play" <?php if($event=="OAP"){echo'selected="selected"';$event_name="One Act Play";}?>>One Act Play</option>
               <option value = "Debate" <?php if($event=="DEB"){echo'selected="selected"';$event_name="Debate";}?>>Debate</option>
               <option value = "JAM" <?php if($event=="JAM"){echo'selected="selected"';$event_name="JAM";}?>>JAM</option>
               <option value = "On Spot Painting" <?php if($event=="OSP"){echo'selected="selected"';$event_name="On Spot Painting";}?>>On Spot Painting</option>
               <option value = "Poster Making" <?php if($event=="PM"){echo'selected="selected"';$event_name="Poster Making";}?>>Poster Making</option>
               <option value = "Photography" <?php if($event=="PG"){echo'selected="selected"';$event_name="Photography";}?>>Photography</option>
               <option value = "Dota 2" <?php if($event=="DT"){echo'selected="selected"';$event_name="Dota 2";}?>>Dota 2</option>
               <option value = "Pubg" <?php if($event=="PUBG"){echo'selected="selected"';$event_name="Pubg";}?>>PUBG</option>
               <option value = "Fashion Show" <?php if($event=="FS"){echo'selected="selected"';$event_name="Fashion Show";}?>>Fashion Show</option>
               <option value = "General Quiz" <?php if($event=="GQ"){echo'selected="selected"';$event_name="General Quiz";}?>>General Quiz</option>
               <option value = "Women's Throwball" <?php if($event=="WT"){echo'selected="selected"';$event_name="Women's Throwball";}?>>Women's Throwball</option>
               <option value = "Men's Football" <?php if($event=="MF"){echo'selected="selected"';$event_name="Men's Football";}?>>Men's Football</option>
               <option value = "Mini Militia" <?php if($event=="MM"){echo'selected="selected"';$event_name="Mini Militia";}?>>Mini Militia</option>
               <option value = "Rangaoli" <?php if($event=="RG"){echo'selected="selected"';$event_name="Rangoli";}?>>Rangoli</option>
               <option value = "Creative Writing" <?php if($event=="CW"){echo'selected="selected"';$event_name="Creative Writing";}?>>Creative Writing</option>
               <option value = "Coding & Debugging" <?php if($event=="CD"){echo'selected="selected"';$event_name="Coding & Debugging";}?>>Coding & Debugging</option>

             </select>
             <input name="event_selected" type="hidden" value="<?php echo $event_name?>">
          </p>
       </fieldset>
       <br><h2><b>Amount to be paid: ₹ <?php echo $reg_fee ?></b></h2>
       <input type="hidden" name="amount" value="<?php echo $reg_fee?>">
       <br>
    <label for="Phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Your Phone Number" name="phone" required>

    <label for="email"><b>E-Mail Address</b></label>
    <input type="text" placeholder="Enter Your E-Mail Address" name="email" required>
    
     <label for="College"><b>College</b></label>
    <input type="text" placeholder="Enter Your Full College Name" name="college" required>
    <br>
    <b>Year</b>
    <p>
    &nbsp;&nbsp;
            <select id = "myList" name="year">
               <option value = "1">1st Year</option>
               <option value = "2">2nd Year</option>
               <option value = "3">3rd Year</option>
               <option value = "4">4th Year</option>
               <option value = "5">5th Year</option>
             </select>
           </p>
       <br>
       <label for="txn_id"><b>UPI Reference Number / ID</b></label>
    <input type="text" placeholder="Enter Transaction Id" name="txn_id" required>
    
    
    <label for="coord_id"><b> Co-ordinator ID</b> (Leave it as 'NIL' if you're not an assigned co-ordinator for Kalanjali)</label>
    <input type="text" placeholder="Enter Co-ordinator ID" name="coord_id" value="NIL" required>
    

    <div class="g-recaptcha" data-sitekey="6LfhvHIUAAAAAMuwN4rxOmh9MOULlkZMwQCCu3Z8"></div>


  </div>
</form> 
<hr>
<div class="container">
<center><p><strong> Please Re-Verify Your Event And Transaction ID Data Before Final Submission</strong> </p>
    <button name="send_data_button" id="submit_btn1" class="registerbtn">Submit</button></center>
  </div>
 <hr class=divider-d>
    <footer class="p_1200 footer footer-area">
        <div class=container>
            <div class=row>
                <div class=col-sm-7>
                    <p class="font-alt copyright">©2018 <a href=http://www.sirmvit.edu target="_blank">Sir M. Visvesvaraya Institute Of Technology</a> Bangalore</div>
                <div class=col-sm-5>
                    <div class=footer-social-links>
                        <a href=#><a href="http://cli.re/gE5bpD" target="_blank"><i class="fa fa-lg fa-instagram"></i></a> <a href=https://twitter.com/sirmvitinfo target="_blank"><i class="fa fa-lg fa-twitter"></i></a> <a href="http://cli.re/Lo3Km9" target="_blank"><i class="fa fa-facebook fa-lg"></i></a> <a href=https://www.youtube.com/channel/UCpzAkQfienHE2b_LzWihKkg target="_blank"><i class="fa fa-lg fa-youtube"></i></a> <a href=https://plus.google.com/100107526082178352786 target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></a>
<a href="http://bit.ly/2xIB8oe" target="_blank"><i class="fa fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=scroll-up><a href=#totop><i class="fa fa-angle-double-up"></i></a></div>
    </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/flipclock/timer.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
        <script type="text/javascript">
        	let registerForm = document.querySelector("#register_form")
      async function sendData(){
        let apiForm = new FormData(registerForm);;
        let result = '';
        await fetch("http://206.189.133.171/",{method:"post",body:apiForm,mode:'cors'})
        .then((response) => (response.json()))
        .then((data) => {result = data });
        window.alert(result.message);
      }
      document.querySelector("#submit_btn1").addEventListener("click",sendData)
        </script>
    </body>
</html>