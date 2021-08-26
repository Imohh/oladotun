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
<section class="first-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="image-section">
                    <img src="assets/img/display.jpg" width="100%">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="text-section-first">
                    <h2>Discover fashion. New collection</h2>
                    <p>has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women.</p>
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
                    <h2>About us</h2>
                    <img src="assets/img/display.jpg" width="100%">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="text-section-second">
                    <p>has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women.</p>

                    <p>has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women. tion whether youâ€™re attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women.</p>
                    <img src="assets/img/display.jpg" width="100%">
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
                    <h2>New Selection</h2>
                    <p>has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress. has made you shine on your special days specially for beautiful women. Our goal has always been to celebrate YOU! To get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress.</p>
                    <img src="assets/img/display.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FORTH SECTION -->
<section class="first-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="forth-text-section">
                    <h2>Why Dotun</h2>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>hello world</h4>
                        <p>and all those events that require a WOW dress. has made you shine on your</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>hello world</h4>
                        <p>and all those events that require a WOW dress. has made you shine on your</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>hello world</h4>
                        <p>and all those events that require a WOW dress. has made you shine on your</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa fa-facebook"></i>
                        <h4>hello world</h4>
                        <p>and all those events that require a WOW dress. has made you shine on your</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="image-section">
                    <img src="assets/img/display.jpg" width="100%">
                </div>
            </div>
            
        </div>
    </div>
</section>

















<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $about_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>