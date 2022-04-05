<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $faq_title = $row['faq_title'];
    $faq_banner = $row['faq_banner'];
}
?>

<!-- <div class="page-banner" style="background-image: url(assets/uploads/<?//php echo $faq_banner; ?>);">
    <div class="inner">
        <h1><?//php echo $faq_title; ?></h1>
    </div>
</div> -->

<div class="page faq-top">
    <div class="container">
        <div class="row">            
            <div class="col-md-8 faq">

                <div class="col-md-10">
                
                <div class="panel-group" id="faqAccordion">
                <h2>find out more about Eminence By GTX</h2>              

                    <!-- FIRST -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question">
                                <h4 class="panel-title">
                                    What is Eminence By GTX?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="question" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        Eminence By GTX is a product designed by GTX. Classic describes style perfectly and Eminence By GTX is for timeless looks, beautiful and simple cuts in clothing. It is a luxurious and grand style you should own. Eminence is never pricey, affordable is a comfort.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- SECOND -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questions">
                                <h4 class="panel-title">
                                    How many items/styles do you sell?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questions" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        We sell a wide variety of items/styles geared towards creating an excellent and gorgeous look for our customers. Talk to us via email or visit our online store/ physical store to see the amazing selection on offer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- THIRD -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questionss">
                                <h4 class="panel-title">
                                    How will you measure me and know what fits me best?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questionss" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        We have provided size charts and fitting guides that will give us the accurate size of your body. You can easily submit your size without hassles
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FORTH -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questinss">
                                <h4 class="panel-title">
                                    that if I'm unable to reach out online?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questinss" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        If you are unable to contact us through our online support, Kindly reach out to us via email. Our response is speedy and supportive.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FIFTH -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#questonss">
                                <h4 class="panel-title">
                                    Are the items/styles on the website ready-made stock and are they ready to ship?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="questonss" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        Yes, all items selected are based on the order placement. Items ordered will be dispatched on the required day stated by the customer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- SIXTH -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#quetionss">
                                <h4 class="panel-title">
                                    How long is the delivery time?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="quetionss" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        With our current output time, we estimate delivery within 3-5 working days from the time you place your order to the time it ships.
                                    </p>

                                    <P>
                                        The volume of orders can also influence the delivery time but it can never affect exceptional delivery when needed.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- SEVENTH -->
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#uestionss">
                                <h4 class="panel-title">
                                    What are the available payment options?
                                    <span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="uestionss" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        For all of your purchases on the Eminence By GTX store, we supplied you with simple and convenient payment options: 

                                        <ul>
                                            <li> During the purchase process on the site, you can pay with a credit card.</li>

                                            <li> Payment in cash at the time of delivery, only for purchases and deliveries within Nigeria and the UK.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        

                        
                </div>
                    
                </div>

            </div>

            <div class="col-md-4 bottom-faq">
                <h2>interact with us</h2>
                <p>you can leave a message with us and well be with you.</p>

                <a href="contact.php">
                    <input type="text" class="btn" value="Contact Us" name="">
                </a>
            </div>

        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>