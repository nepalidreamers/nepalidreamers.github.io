<!DOCTYPE html>
<html lang="en">
  <?php include "layouts/header.php"; ?>
  <body>
    
	  <?php include "layouts/navbar.php"; ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Team</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Team</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-sm-12"></div>
        	<div class="col-lg-4 col-sm-12 d-flex mb-sm-4ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/bikalpa.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Bikalpa Baniya</a></h3>
                <span class="position">CEO and Co-founder</span>
                <p>
                  Bikalpa is an Economics and Mathematics students at Oberlin College. 
                  He has been working to provide for Nepali students throughout his time in school. 
                  <a href="http://www.bikalpabaniya.com"  target="_blank">www.bikalpabaniya.com</a>
                </p>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-4 col-sm-12 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/sushil.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Sushil Awale</a></h3>
                <span class="position">Co-founder and CTO</span>
                <p>
                Sushil is a Computer Science and Information Technology student at DWIT College. 
                He has been working with web technology for the past two years.
                <a href="http://sushilawale.com"  target="_blank">sushilawale.com</a>
                </p>
      				</div>
        		</div>
        	</div>
          <div class="col-lg-2 col-sm-12"></div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Advisors</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-12"></div>
        	<div class="col-lg-3 col-sm-12 d-flex mb-sm-4ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/advisor1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Prof. Deborah Roose</a></h3>
      					<span class="position">College of Education, Oberlin College</span>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-sm-12 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/rajeev.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Dr. Rajeev Chhetri</a></h3>
      					<span class="position">Principal, Kathmandu World School</span>
      				</div>
        		</div>
        	</div>
          <div class="col-lg-3 col-sm-12"></div>
        </div>
      </div>
    </section>
  
    <?php include "layouts/footer.php"; ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Get a Quote" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
  <?php include "layouts/scripts.php"; ?>
  </body>
</html>