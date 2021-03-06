<?php
echo "abhinaya";
?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
	<title>Bill Server Users Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<script src="../RedPepper/js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="../RedPepper/js/jquery.validate.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div class="mainWrapper">
			<div class="logo">
				<a href=""><img src="images/logo.png" alt="omd bill server Logo" border="0" /></a>
			</div>
			<nav role="navigation">
				<ul>
					<li><a href="#aboutUs">Home</a></li>
					<li><a href="#product">Product</a></li>
					<li><a href="#support">Support</a></li>
					<li><a href="#download">Downloads</a></li>
					<li><a href="#contactus">Contact Us</a></li>
				</ul>
			</nav>
			<div class="clearall"></div>
		</div>
	</header>
	<section id="aboutUs">
		<div class="mainWrapper">
			<h2>About Us</h2>
			<div class="mainCntaint">
				<div class="about">
				<p>
					We are the team att OMD Technologies have developed the Product Bill Server, which is available in a very basic functinality for any small Business for a daily tracking of the product sale and stock with bill and reports.
				</p>
				<p>
					Very soon we will release the mobile version of the Bill Server App to run on your Server.
				</p> 
				<p>
					This Product is free to use and it will be a basic product with all basic minimal functionalities, using which you can run your Business easily without paying anything.
					Please contact us for any spesific requirement you have or you need to impliment some functionality to be added into it, which will help us growing and provide better services to people like you. Please get a licence it is free to use.
				</p>
				<p>
					It is simple just register here your Name and about your Organization. Remember you consumer Number for all time references.
				</p>
				<p>
					<img src="images/right-arrow.png" border="0" style="float: right; margin-top: -35px;" />
				</p>
			</div>
			<div class="registration">
				<form name="orgRegi" id="orgRegi" action="" method="post">
					<div class="table">
						<div class="table-row">
							<label for="orgname">
								Organisation Name
								<input type="text" name="orgname" id="orgname" placeholder="Organisatin Name" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="ownername">
								Owner Name
								<input type="text" name="ownername" id="ownername" placeholder="Organisatin Name" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="orgphone">
								Owner Phone
								<input type="text" name="orgphone" id="orgphone" placeholder="Your Phone Number" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="orgemail">
								Owner mail ID
								<input type="text" name="orgemail" id="orgemail" placeholder="Your email ID" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="orgbusiness">
								Business type (optional)
								<input type="text" name="orgbusiness" id="orgbusiness" placeholder="What is Yur Business??" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="duration">
								Duration
								<select name="duration" id="duration">
									<option value="1" selected="selected">1 Month</option>
									<option value="3">3 Months</option>
									<option value="6">6 Months</option>
									<option value="12">12 Months</option>
								</select>
							</label>
						</div>
						<div class="table-row terms">
							<label for="termsAscept">
								 <input type="checkbox" name="termsAscept" id="termsAscept" value="1" /> 
								 I Ascept the Terms and Condiition of Use of the Software.
							</label>
						</div>

						<div class="table-row">
			<input type="submit" name="generatelicence" id="generatelicence" value="Generate Licence" />
			<input type="hidden" name="isSubmited" id="isSubmited" value="<?php echo time(); ?>">
			<input type="hidden" name="frmAction" id="frmAction" value="generateRegi" />
									
						</div>

					</div>
				</form>
			</div>
			</div>
			<div class="clearall"></div>
		</div>
	</section>	
	<section id="product">
		<div class="mainWrapper">
			<h2>Bill Server</h2>
			<div class="mainCntaint">
				<p>
					Bill Server is an appllication for a retail Kind of business where every day a transaction of products/goods happens. It will be a software for all small business who want to manage there daily business with buy and sales of goods and materials.
				</p>
				<p>
					Bill Server is Free to use but with a free licence, needed to be generted from the server. Its very easy to generate a free Licence. You have to follow some simple steps as follows.
						<ol>
							<li>Register Yourself with valid information</li>
							<li>On a Single Click a Licecnce will be generted for you.</li>
							<li>You will receive the licence by mail on your registered mail ID</li>
							<li>Download the Bill Server application <a href="#download">Here</a></li>
							<li>Install the appliction in Your PC and Run it.</li>
							<li>On First Time You will be asked to enter the Licence number</li>
							<li>And now enjoy with the application</li>
						</ol>
				</p>
				<p>

				</p>
			</div>
			<div class="clearall"></div>
		</div>
	</section>
	<section id="download">
		<div class="mainWrapper">
			<h2>Download Aplication</h2>
			<div class="mainCntaint">
				<p>Download the application and install in your system. It will ask you the Licence generate your Licence and use it is free.</p>
				<div class="downloadArea">
					<a href="#download"><img src="images/download-button.png" border="0" /></a>
				</div>
			</div>
			<div class="clearall"></div>
		</div>
	</section>		
	<section id="support">
		<div class="mainWrapper">
			<h2>Support Desk</h2>
			<div class="mainCntaint">
				<div class="supportMode">
					<div class="supportmg"><img src="images/supportCall.png"></div>
					<div class="supportText">"9019509015" Please give a call on this number for any kind or product related dficulties you find.</div>
				</div>
				<div class="supportMode">
					<div class="supportmg"><img src="images/skype.png"></div>
					<div class="supportText">You can also discuss on Skype by sharing your screen we can guide you all he way for the Product.</div>
				</div>
				<div class="supportMode">
					<div class="supportmg"><img src="images/supportMil.png"></div>
					<div class="supportText">You can <a href="mailto:billserversupport@omd-technologies.com">write to us</a> and you will get a reply within 48 hours.</div>
				</div>
			</div>
			<div class="clearall"></div>
		</div>
	</section>
	<section id="contactus" class="noshadow">
		<div class="mainWrapper">
			<h2>Contact Us</h2>
			<div class="mainCntaint">
				<div class="contactForm">
					<form name="orgRegi" id="orgRegi" action="" method="post">
					<div class="table">
						<div class="table-row">
							<label for="clientname">
								Name
								<input type="text" name="clientname" id="clientname" placeholder="Contact Name" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="clientEmail">
								eMail
								<input type="text" name="clientEmail" id="clientEmail" placeholder="Contact eMail" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="clientPhone">
								Phone
								<input type="text" name="clientPhone" id="clientPhone" placeholder="Contact Number" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="contactSubj">
								Subject
								<input type="text" name="contactSubj" id="contactSubj" placeholder="Contact Subject" maxlength="120" />
							</label>
						</div>
						<div class="table-row">
							<label for="contactMesg">
								Message
								<textarea name="contactMesg" id="contactMesg" cols="40" rows="5" placeholder="Write Your Message" /></textarea>
							</label>
						</div>
						<div class="table-row">
					<input type="submit" name="generatelicence" id="generatelicence" value="Send" />
					<input type="hidden" name="isSubmited" id="isSubmited" value="<?php echo time(); ?>">
					<input type="hidden" name="frmAction" id="frmAction" value="contactUs" />
						</div>

					</div>
				</form>
				</div>
				<div class="socialicons"></div>
			</div>
			<div class="clearall"></div>
		</div>
	</section>				
	<footer>
		<div class="mainWrapper">
			<div class="copyright">&copy; Copy ight reserved. OMD-Technologies</div>
				<ul>
					<li><a href="#aboutUs">Home</a></li>
					<li><a href="#product">Product</a></li>
					<li><a href="#support">Support</a></li>
					<li><a href="#download">Terms of Use</a></li>
					<li><a href="#download">Privacy Policy</a></li>					
					<li><a href="#contactus">Contact Us</a></li>
				</ul>
				<div class="clearall"></div>
			</div>
	</footer>
</body>
</html>