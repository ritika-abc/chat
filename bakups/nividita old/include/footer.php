
<section id="work">
 <div class="container">
     
      <?php
$servername = "127.0.0.1:3306";
$username = "u496524825_lets";
$password = "Ajay@1234aum";
$dbname = "u496524825_lets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
             
if (isset($_GET['id'])) {
$id = $_GET['id'];
}
      $sql = "SELECT `id`, `tittle`, `keyword`, `description`, `filename`, `details` FROM `seo` WHERE 1";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 

      <a href="page.php?id=<?php echo $row['id'];?>"><?php echo $row['tittle'];?> / </a>
 <?php
   } }
       ?>
  <div class="row">
      
      
   <div class="col-sm-12">
    <div class="col-sm-4">
	 <div class="work_1">
	  <h3>Address</h3>
	  <p>Flat No 007, Vaastu Hill View 2, Ideal Homes, Rajarajeshwari Nagar,  Bangalore, Karnataka, India (560098)</p>
	  <ul>
	       <li class="well_1"><a href="https://www.google.com/maps/search/Flat+No+007,+Vaastu+Hill+View+2,+Ideal+Homes,+Rajarajeshwari+Nagar,++Bangalore,+Karnataka,+India+(560098)/@12.9226563,77.5223847,17z/data=!3m1!4b1?entry=ttu">Visit Location</a></li>
		   <li class="well_2"><a href="https://www.google.com/maps/search/Flat+No+007,+Vaastu+Hill+View+2,+Ideal+Homes,+Rajarajeshwari+Nagar,++Bangalore,+Karnataka,+India+(560098)/@12.9226563,77.5223847,17z/data=!3m1!4b1?entry=ttu"><i class="fa fa-map-marker"></i></a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="work_2">
	  <h3>Web 2 Export</h3>
	  <p>Our product available on web 2 export</p>
	  <ul>
	       <li><a href="https://web2export.com/"><img style="background-color:white; width:100%;" src="https://www.web2export.com/images/logo22.png" alt="" ></i></a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="work_3">
	  <h3>Subscribe for newsletter</h3>
	  <p>Enter your email to get letest update and offers</p>
	  <div id="custom-search-input">
                            <div class="input-group col-sm-12">
                                <input type="text" class="  search-query form-control" placeholder="Enter Your Email...">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span>Subscribe</span>
                                    </button>
                                </span>
                            </div>
                        </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="footer">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-3">
	 <div class="footer_1">
	  <h2>Nivira Trader</h2>
	  <ul>
	       <li><a> Choose Nivira Trader as your trusted supplier, and experience a seamless partnership built on quality, reliability, and customer satisfaction. Whether you're in the food industry, spice trade, or other sectors, our products are the foundation for your success.</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1">
	  <h2>Quick Link</h2>
	  <ul>
	       <li><a href="#">Home</a></li>
		   <li><a href="#">About</a></li>
		   <li><a href="#">Product</a></li>
		   <li><a href="#">Gallery</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1">
	  <h2>Get in Touch</h2>
	  <ul>
	       <li><a href="#">Contact: 9886111030</a></li>
		   <li><a href="#">Email: rakeshs.41@gmail.com</a></li><br>
		   <li><a href="#">Address: Flat No 007, Vaastu Hill View 2, Ideal Homes, Rajarajeshwari Nagar,  Bangalore, Karnataka, India (560098) </a></li>
		  
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_2">
	  <h2>Social Links</h2>
	   <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	<!--   <p>Fusce Nec Tellus Augue</p> -->
	 </div>
	 <div class="footer_3">
		<!--     <a class="btn btn-lg btn-success big-btn android-btn" href="#">
  		<img width="80px" class="pull-left" src="img/30.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
       windows store button 
	 </div>-->
		<!--    <div class="footer_4">
            <!-- windows store button -->
              	<!--     <a class="btn btn-lg btn-success big-btn windows-btn" href="#">
  				<!--   	<img width="60px" class="pull-left" src="img/31.png"><div class="btn-text">Windows<br>Store</div></a>
	 </div>-->
	 
	 
	 
	 
	 
	</div>
   </div>
  </div>
 </div>
</section>
<section id="footer_main" class="clearfix">
 <div class="col-sm-12">
  <div class="footer_main_1">
   <p class="text-center">© 2024  Nivira Traders. All Rights Reserved. Design by<a href="https://web2export.com/"> web 2 Export</a> </p>
  </div>
 </div>
</section>


<style>
    /* The popup form - hidden by default */
.form-popup2 {
  display: none;
  position: fixed;
  bottom: 100px;
  
  z-index: 9;
    right:0; 
}

/* Add styles to the form container */
.form-container2 {
  max-width: 80%;
  padding: 10px;
  right:0;
  background-color: white;
  margin:auto;
    border: 3px solid #094f8c;
}

/* Full-width input fields */
.form-container2 input[type=text], .form-container2 input[type=password] {
  width: 100%;
  padding: 8px;
  margin: 2px 0 5px 0;
  border: none;
  background: white;
  border: 2px solid #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container2 input[type=text]:focus, .form-container2 input[type=password]:focus {
  background-color: white;
  outline: none;
   border: 2px solid #f1f1f1;
}
.resoo{
    width:80%;
    margin:auto;
    border: 3px solid #094f8c;
}

.cancel{
    float:right;
}
.btn2{
     background-color: #094f8c;
 color:white;
 font-size:16px;
 margin:10px;
}

</style>
 
<div class="  resoo  text-center">
<div class="form-popup2" id="myForm">
  <form action="/action_page.php" class="form-container2">
    <h2 class="text-center">Send your requirement  <button type="button" class="btn cancel" onclick="closeForm()">Close</button></h2>
  <div class="col-sm-6 ">
    <input type="text" placeholder="Your Name" name="email" required>
  </div>
  <div class="col-sm-6 ">
    <input type="password" placeholder='Your Number' name="psw" required>
</div>
 <div class="col-sm-6 ">
    <input type="password" placeholder="Your Email" name="psw" required>
</div>
 <div class="col-sm-6 ">
    <input type="password" placeholder="Country name" name="psw" required>
</div>
 <div class="col-sm-12 ">
    <input type="password" placeholder="Your Address" name="psw" required>
</div>
 <div class="col-sm-6 ">
    <input type="password" placeholder="Your Requirement" name="psw" required>
</div> <div class="col-sm-6 ">
    <input type="password" placeholder="Requirement Purpose" name="psw" required>
</div> <div class="col-sm-12 ">
    <textarea type="password" class="form-control" placeholder=" Your Message"  name="psw" rows="5" required></textarea>
</div>
    <button type="submit text-center" class="btn btn2">Send Requirement</button>
   
  </form>
</div>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



<script type="text/javascript">
	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
	</script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
</body>
</html>