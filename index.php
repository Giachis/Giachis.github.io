<?php 
define ("TITLE", "Home | Last Mile Ventures");
include ('includes/header.php');


?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Last Mile Ventures</h1>

        <h2 id="jumbo-claim">Last Mile Ventures is an investment company carrying out angel investments throught Europe. </h2>
     
        <!-- <p><a id="jumbo-btn" class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
      </div>
    </div>
    <div class="container" id="subtitle">
    	 <p id="jumbo-subtitle"> We select great teams with unconventional market vision, superior technology knowledge and clear business acumen. We help founders create their company structure and secure appropriate funding</p>

    </div>

    <div class="container" >
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
	        
	        <img src="images/foto_long_way.jpg">
          <h2>A long way to go</h2>
          <p>tarting and running a business requires time, focus and luck and you know the road will be long, very long, and probably bumpy. You probably need a partner on the way, why not us? </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          
          <img src="images/foto_investments.jpg" style="max-height:160px;">
          <h2>Investments</h2>
          <p>Money can't buy everything, but some money might help you on your journey from the very beginning to your last mile.
          </br>
          Last Mile Ventures provide a limited amount of money, always along other investors</p>
          <p><a class="btn btn-primary" href="https://docs.google.com/forms/d/18H8rC7oPd5oveXVrTiU2EuHeWPyGgii7nX0bwA8Gy5Y/viewform?usp=send_form" target="_blank" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <img src="images/foto_technology.jpg">
          <h2>Technology</h2>
          <p>Technolgy is changing the world and drives us crazy. Are you a tech company willing to make an impact? We can help.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div><!--/container-->

      <hr id="home-page-spacing">
      
	      <div id="carousel-home" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-home" data-slide-to="1"></li>
			    <li data-target="#carousel-home" data-slide-to="2"></li>
			    <li data-target="#carousel-home" data-slide-to="3"></li>
			    <li data-target="#carousel-home" data-slide-to="4"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <a href="http://memopal.com" target="-blank" ><img src="images/memopal.jpg" alt="memopal"></a>
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <a href="http://rocketdesign.com" target="-blank"><img src="images/rocket_logo.jpg" alt="Rocket_logo"></a>
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <a href="http://styloola.com" target="-blank"><img src="images/styloola.jpg" alt="Styloola_logo"><a/>
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <a href="http://ingenia.com" target="-blank"><img src="images/ingenia-logo-small.png" alt="Ingenia_logo"></a>
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <a href="http://tanaza.com" target="-blank"><img src="images/tanaza-logo1.png" alt="Tanaza_logo"></a>
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
		    
		   </div><!--/end Carousel-->
		
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		   <hr>
		   <div>SOMETHING TO BE ENERED HERE </div>
		   <hr>
    	</div> <!-- /container -->
   

   <?php 
   include('includes/footer.php');

   ?>