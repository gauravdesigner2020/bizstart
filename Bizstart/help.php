<?php include("header.php")?>

<!------- Help Content------>

<div class="helpContent">
	<div class="helpTXT">
		<div class="accordion accordion-flush acordHelp" id="accordionFlushExample">
		  <div class="accordion-item">
		    <p class="accordion-header" id="flush-headingOne">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
		        Question 1: What services do Bizstart provide under its pre-incubation plan?
		      </button>
		    </p>
		    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
		      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <p class="accordion-header" id="flush-headingTwo">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
		        Question 2: Can I schedule one call without buying a plan?
		      </button>
		    </p>
		    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
		      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <p class="accordion-header" id="flush-headingThree">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
		        Question 3: Do I get a certif cate after taking the pre-incubation plan?
		      </button>
		    </p>
		    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
		      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
		    </div>
		  </div>
		</div>
	</div>

	<div class="acodrDiv2">
		<div class="row">
			<div class="col-md-4">
				<div class="hlpContact">
					<span>Contact</span>
					<div class="addrs">
						<p><strong>Address</strong></p>
						<span>DBS House</span><br>
						<span>Ghanshyam Talwatkar Marg,
						Fort, Mumbai 400001</span>
					</div>
					<div class="addrs">
						<p><strong>Email</strong></p>
						<span>Feel free to write to</span><br>
						<span>hello@bizstart.in</span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="helpForm">
					<form>
						<div class="row">
							<div class="col-lg-6 col-sm-6 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" id="fname" class="form-control form-control-sm"  placeholder="Your First Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" id="lname" class="form-control form-control-sm" placeholder="Your Last Name" required="">
                                </div>
                            </div>
						</div>
						<div class="mb-3">
						  <input class="form-control form-control-sm" type="gmail" placeholder="Your Email id" aria-label=".form-control-sm example">
						</div>
						<div class="mb-3">
						   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
						</div>
						<div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn page-btn help-btn">Send Message</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php")?>