<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$footer_copyright = $row['footer_copyright'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
    $total_popular_post_footer = $row['total_popular_post_footer'];
    $newsletter_on_off = $row['newsletter_on_off'];
    $before_body = $row['before_body'];
}
?>


<?php if($newsletter_on_off == 1): ?>
<section class="home-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="single">
					<?php
			if(isset($_POST['form_subscribe']))
			{

				if(empty($_POST['email_subscribe'])) 
			    {
			        $valid = 0;
			        $error_message1 .= LANG_VALUE_131;
			    }
			    else
			    {
			    	if (filter_var($_POST['email_subscribe'], FILTER_VALIDATE_EMAIL) === false)
				    {
				        $valid = 0;
				        $error_message1 .= LANG_VALUE_134;
				    }
				    else
				    {
				    	$statement = $pdo->prepare("SELECT * FROM tbl_subscriber WHERE subs_email=?");
				    	$statement->execute(array($_POST['email_subscribe']));
				    	$total = $statement->rowCount();							
				    	if($total)
				    	{
				    		$valid = 0;
				        	$error_message1 .= LANG_VALUE_147;
				    	}
				    	else
				    	{
				    		// Sending email to the requested subscriber for email confirmation
				    		// Getting activation key to send via email. also it will be saved to database until user click on the activation link.
				    		$key = md5(uniqid(rand(), true));

				    		// Getting current date
				    		$current_date = date('Y-m-d');

				    		// Getting current date and time
				    		$current_date_time = date('Y-m-d H:i:s');

				    		// Inserting data into the database
				    		$statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash,subs_active) VALUES (?,?,?,?,?)");
				    		$statement->execute(array($_POST['email_subscribe'],$current_date,$current_date_time,$key,0));

				    		// Sending Confirmation Email
				    		$to = $_POST['email_subscribe'];
							$subject = 'Subscriber Email Confirmation';
							
							// Getting the url of the verification link
							$verification_url = BASE_URL.'verify.php?email='.$to.'&key='.$key;

							$message = '
Thanks for your interest to subscribe our newsletter!<br><br>
Please click this link to confirm your subscription:
					'.$verification_url.'<br><br>
This link will be active only for 24 hours.
					';

							$headers = 'From: ' . $contact_email . "\r\n" .
								   'Reply-To: ' . $contact_email . "\r\n" .
								   'X-Mailer: PHP/' . phpversion() . "\r\n" . 
								   "MIME-Version: 1.0\r\n" . 
								   "Content-Type: text/html; charset=ISO-8859-1\r\n";

							// Sending the email
							mail($to, $subject, $message, $headers);

							$success_message1 = LANG_VALUE_136;
				    	}
				    }
			    }
			}
			if($error_message1 != '') {
				echo "<script>alert('".$error_message1."')</script>";
			}
			if($success_message1 != '') {
				echo "<script>alert('".$success_message1."')</script>";
			}
			?>
				<form action="" method="post">
					<?php $csrf->echoInputField(); ?>
					<h2><?php echo LANG_VALUE_93; ?></h2>
					<div class="input-group">
			        	<input type="email" class="form-control" placeholder="<?php echo LANG_VALUE_95; ?>" name="email_subscribe">
			         	<span class="input-group-btn">
			         	<button class="btn btn-theme" type="submit" name="form_subscribe"><?php echo LANG_VALUE_92; ?></button>
			         	</span>
			        </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>



<div class="footer-bottom media-bottom">
	<div class="container">
		<div class="row">

			<div class="col-md-3 col-sm-6 col-xs-12 footer-end">
				<h4>About Eminence</h4>
				<p>By entering your email address below, you consent to receiving our newsletter with access to our latest collections, events and many more.</p>
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><img src="assets/img/card_1.jpg" alt=""></a></li>
					<li><a href="#"><img src="assets/img/card_2.jpg" alt=""></a></li>
					<li><a href="#"><img src="assets/img/card_3.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/card_4.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/card_5.jpg" alt=""></a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 copyright footer-end">
				<h4>need help</h4>
				<ul>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="#">Shipping services</a></li>
					<li><a href="#">Payment Options</a></li>
					<li><a href="faq.php">FAQs</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 copyright footer-end">
				<h4>the company</h4>
				<ul>
					<li><a href="about.php">About Eminence</a></li>
					<li><a href="legal.php">Legal</a></li>
					<li><a href="privacy.php">Privacy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 copyright footer-end">
				<h4>find us on</h4>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
					<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
					<li><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>

<style type="text/css">
	@media (min-width: 600px) {
		/*.panel-group {
			display: none;
		}*/

		.footer-border-no {
			display: none;
		}
	}
	
</style>




<div class="page faq-top footer-border-no">
    <div class="container">
        <div class="row">            
            <div class="col-md-8 faq">

                <div class="col-md-10">

					<div class="panel-group" id="faqAccordion">
	                            

	                    <!-- FIRST -->
	                    <div class="panel">
	                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questiond">
	                            <h4 class="panel-title">
	                                About Eminence
	                                <span><i class="fa fa-plus"></i></span>
	                            </h4>
	                                
	                        </div>
	                        <div id="questiond" class="panel-collapse collapse" style="height: 0px;">
	                            <div class="panel-body">
	                                <!-- <h5><span class="label label-primary">Answer</span></h5> -->
	                                <p>By entering your email address below, you consent to receiving our newsletter with access to our latest collections, events and many more.</p>
										<a href="#"><img src="assets/img/card_1.jpg" alt=""></a>
										<a href="#"><img src="assets/img/card_2.jpg" alt=""></a>
										<a href="#"><img src="assets/img/card_3.jpg" alt=""></a>
									</ul>
	                            </div>
	                        </div>
	                    </div>

	                    <!-- SECOND -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questionsq">
                                <h4 class="panel-title">
                                    need help
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questionsq" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <ul>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="#">Shipping services</a></li>
										<li><a href="#">Payment Options</a></li>
										<li><a href="faq.php">FAQs</a></li>
									</ul>
                                </div>
                            </div>
                        </div>

                        <!-- THIRD -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questionssr">
                                <h4 class="panel-title">
                                    the company
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questionssr" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <ul>
										<li><a href="about.php">About Eminence</a></li>
										<li><a href="legal.php">Legal</a></li>
										<li><a href="privacy.php">Privacy</a></li>
									</ul>
                                </div>
                            </div>
                        </div>

                        <!-- FORTH -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questinsst">
                                <h4 class="panel-title">
                                    find us on
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questinsst" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <ul>
										<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
										<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
										<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
										<li><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
									</ul>
                                </div>
                            </div>
                        </div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
</div>



<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12 copyright bottom-hr">
				<a href="index.php"><img src="assets/img/eminence-3.png" alt="logo image" width="100px"></a><br>
				<?php echo $footer_copyright; ?>
			</div>
		</div>
	</div>
</div>


<a href="#" class="scrollup">
	<i class="fa fa-angle-up"></i>
</a>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $stripe_public_key = $row['stripe_public_key'];
    $stripe_secret_key = $row['stripe_secret_key'];
}
?>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>

<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>





<script src="assets/js/main.js"></script>

<!-- TRANSLATION -->
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

	function triggerHtmlEvent(element, eventName) {
	  var event;
	  if (document.createEvent) {
		event = document.createEvent('HTMLEvents');
		event.initEvent(eventName, true, true);
		element.dispatchEvent(event);
	  } else {
		event = document.createEventObject();
		event.eventType = eventName;
		element.fireEvent('on' + event.eventType, event);
	  }
	}

	jQuery('.lang-select').click(function() {
	  var theLang = jQuery(this).attr('data-lang');
	  jQuery('.goog-te-combo').val(theLang);

	  //alert(jQuery(this).attr('href'));
	  window.location = jQuery(this).attr('href');
	  location.reload();

	});
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
	function confirmDelete()
	{
	    return confirm("Do you sure want to delete this data?");
	}
	$(document).ready(function () {
		advFieldsStatus = $('#advFieldsStatus').val();

		$('#paypal_form').hide();
		$('#stripe_form').hide();
		$('#bank_form').hide();

        $('#advFieldsStatus').on('change',function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if ( advFieldsStatus == '' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'PayPal' ) {
               	$('#paypal_form').show();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Stripe' ) {
               	$('#paypal_form').hide();
				$('#stripe_form').show();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Bank Deposit' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').show();
            }
        });
	});


	$(document).on('submit', '#stripe_form', function () {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            // name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('<?php echo $stripe_public_key; ?>');
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html('<div style="color: red;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>
<script>
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });
</script>
<?php echo $before_body; ?>
</body>
</html>