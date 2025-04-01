<?= $this->include('includes/header'); ?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-shape-wrap">
					<div class="page-title-content">
						<h2>Contact Us</h2>
						
						<ul>
							<li>
								<a href="index.html">
									Home 
								</a>
							</li>
	
							<li class="active">
								Contact Us
							</li>
						</ul>
					</div>

					<img src="assets/images/page-bg-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/images/page-bg-shape-7.png" alt="Image" class="shape shape-2" data-speed="0.04" data-revert="true">
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-title left-title">
							<span class="top-title">Contact Us</span>
							<h2>Get In Touch With Us Via <span>Contacts</span></h2>
						</div>
		
						<div class="contact-form">
							<form id="contactForm">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone No">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message" placeholder="Your Message"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											I agree to the <a href="terms-conditions.html">Terms & conditions</a>
										</label>
									</div>
		
									<div class="col-lg-12 text-center">
										<button type="submit" class="default-btn">
											Send Your Message
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="contact-img">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120595.66674139832!2d73.15361328268548!3d19.16834092281702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be793b51f23ddbd%3A0x798d32494d7d3694!2sSujata%20Co-Op.%20Housing%20Society%2C%20B%20wing%20302%2C%20near%20Mahalaxmi%20Lake%2C%20opp.%20ST%20Stand%2C%20Badlapur%20West%2C%20Sarvodaynagar%2C%20Manjarli%2C%20Badlapur%2C%20Maharashtra%20421503!3m2!1d19.1683593!2d73.236015!5e0!3m2!1sen!2sin!4v1743498561095!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
		</div>
		<!-- End Map Area -->

		<!-- Start Footer Area -->
        <?= $this->include('includes/footer'); ?>