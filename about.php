<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>

<!-- <div class="page-banner" style="background-image: url(assets/uploads/<?//php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?//php echo $about_title; ?></h1>
    </div>
</div> -->


<!-- FIRST SECTION -->
<section class="first-about-section first-effect">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="image-section">
                    <img src="assets/img/portrait.jpg" width="100%">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="text-section-first">
                    <h2>ABOUT US</h2>
                    <p>Welcome to Eminence By GTX, where we do justice to fabrics.

                        Eminence By GTX is the place of luxurious designs, trends and styles in men and women’s clothing. One of the reasons why Eminence By GTX has earned its reputation in Fashion Journey is because of the creative ways of doing justice to fabrics and swift delivery.
                        We see fashion as a way of life and decided to own it by providing an impressive range of luxurious styles you can select from.
                    </p>
                    <button>shop now</button>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- SECOND SECTION -->
<section class="first-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="second-image-section">
                    <h2>WHY CHOOSE US</h2>
                    <img src="assets/img/portrait.jpg" width="100%">
                </div>
            </div>
            <div class="col-lg-5 second-about-right">
                <div class="text-section-second">
                    <p>We create a stunning identity for our customers 
                        Fashion wears for an uninterrupted classic-boss lifestyle.
                        Extraordinary fashion exposure through the right colour materials selection.
                        A mixture of ancient and contemporary fashion styles for special experiences (all ethnicities).
                        We are a chosen brand for comfortable wears
                    </p>

                    <p class="second-par">has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether you're attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women. tion whether you're attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women.</p>
                    <img src="assets/img/portrait.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>




<!-- THIRD SECTION -->
<section class="first-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="third-text-section">
                    <h2>CHIEF EXECUTIVE OFFICER</h2>

<p>Mr Gbotemi, the Chief Executive Officer of GTX, is an entrepreneur with experience in fashion and designs. Mr Gbotemi has B.Sc in Electronic Engineering from a state university in Nigeria and he is in the United Kingdom pursuing his Master in Elect/Elect.
He is also certified in Fashion from prestigious private institutions.  He is a passionate, dedicated and value-driven professional and he runs several pieces of training for the newbies. He is the founder of GTX fashion academy. He seeks innovation and a tech approach to provide the best customer experience in the fashion industry. 
</p>
                    <img src="assets/img/display.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FORTH SECTION -->
<section class="first-about-section last-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="forth-text-section">
                    <h2>OUR CORE VALUES</h2>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>Integrity</h4>
                        <p>We have strong principles behind our minds which guide our policy and output. Honesty is the key.</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>Accountability</h4>
                        <p>Taking responsibility for giving our customers the best is our primary objective. Eminence By GTX honours and takes responsibility when necessary.</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>Creativity</h4>
                        <p>We create fantasy designs aimed at giving customers grandeur entry wherever they appear. Every customer is unique to us.</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>Passion</h4>
                        <p>All our staff are hardworking, creative, smart and detail-focused.
We always provide all-around support for excellent delivery of the designs and styles selected.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="image-section">
                    <img src="assets/img/portrait.jpg" width="100%">
                </div>
            </div>
            
        </div>
    </div>
</section>

















<!-- <div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?//php echo $about_content; ?>
                </p>

            </div>
        </div>
    </div>
</div> -->

<?php require_once('footer.php'); ?>