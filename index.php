<!DOCTYPE html>
<html lang="en">
	<head>
		<title>M&P Logistics</title>
		<link rel="icon" href="favicon.png" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<div class="container-contact100">
			<div class="wrap-contact100">
				<form action="sendemail.php" method="post" id="form" class="contact100-form validate-form">
					<span class="contact100-form-title">
						<a href="http://mulphilog.com/"><img width="175" src="mnp-1.png"></a>
					</span>
					<div class="wrap-input100" data-validate="Name is required">
						<input class="input100" id="name" type="text" name="name" placeholder="Name">
						<label class="label-input100" for="name">
							<span class="lnr lnr-user"></span>
						</label>
					</div>
					<div class="wrap-input100" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address">
						<label class="label-input100" for="email">
							<span class="lnr lnr-envelope"></span>
						</label>
					</div>
					<div class="wrap-input100" data-validate="Contact Number is required">
						<input class="input100" id="contact" type="number" name="contact" placeholder="Contact Number">
						<label class="label-input100" for="contact">
							<span class="lnr lnr-phone"></span>
						</label>
					</div>
					<div class="wrap-input100" data-validate="Message is required">
						<textarea class="input100" name="message" placeholder="Your message..."></textarea>
					</div>
					<label>Services Required *</label>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="cod" type="checkbox" value="COD" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="cod">COD</label>
						<input class="input-checkbox100" id="domestic" type="checkbox" value="Domestic" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="domestic">Domestic</label>
						<input class="input-checkbox100" id="logistics" type="checkbox" value="Logistics" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="logistics">Logistics</label>
						<input class="input-checkbox100" id="international" type="checkbox" value="International" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="international">International</label>
						<input class="input-checkbox100" id="expressions" type="checkbox" value="Expressions" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="expressions">Expressions</label>
						<input class="input-checkbox100" id="print" type="checkbox" value="Print & Delivery" name="services[]">
						<label class="label-checkbox100 print" style="width: 26%;" for="print">Print & Delivery</label>
						<input class="input-checkbox100" id="main" type="checkbox" value="Bulk Mail Management" name="services[]">
						<label class="label-checkbox100 bulk" style="width: 35%;" for="main">Bulk Mail Management</label>
						<input class="input-checkbox100" id="other" type="checkbox" value="Other" name="services[]">
						<label class="label-checkbox100" style="width: 0%;" for="other">Other</label>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn">Submit</button>
						</div>
					</div>
					<div id="errors" class="errors-wrapper" style="padding: 10px 0 0 0;"></div>
				</form>
			</div>
		</div>
		<div id="dropDownSelect1"></div>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<script src="js/main.js"></script>

		<script type="text/javascript">
	      	$("#form").submit(function ( event ) {
	        	// $('#gif').css('visibility', 'visible');
	        	event.preventDefault();
	        	var formData = new FormData($(this)[0]);
	        	var url = 'sendemail.php';
	        	// var link = '<?php //echo BASEURL;?>post/';
	        	// var delay = 1000;
	        	$.ajax({
	          		type: 'post',
	          		url: url,
	          		contentType: false,
	          		processData: false,
	          		data: formData,
	          		beforeSend : function()
	          		{
	            		//$("#preview").fadeOut();
	            		$("#errors").fadeOut("fast");
	          		},
	          		success: function(value) {
	            		// console.log(value);
	            		if(value != 'false')  {
	              			$("#errors").html(value).fadeIn("fast");
	            			$('#form').each(function() {
		                        this.reset();
		                    });
	              			setTimeout(function () {
	                			$("#errors").html(value).hide();
	              			}, 9000);
	            		} 
	          		},
	          		error: function(e) 
	          		{
	            		if(value !='false') {
	              			$("#errors").html(e).fadeIn("fast");
	              			setTimeout(function () {
	                			$("#errors").html(value).hide();
	              			}, 9000);
	            		} 
	          		}
	        	});
	      	});  
	    </script>
	</body>
</html>