<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $cta_title = $row['cta_title'];
    $cta_content = $row['cta_content'];
    $cta_read_more_text = $row['cta_read_more_text'];
    $cta_read_more_url = $row['cta_read_more_url'];
    $cta_photo = $row['cta_photo'];
    $featured_product_title = $row['featured_product_title'];
    $featured_product_subtitle = $row['featured_product_subtitle'];
    $latest_product_title = $row['latest_product_title'];
    $latest_product_subtitle = $row['latest_product_subtitle'];
    $popular_product_title = $row['popular_product_title'];
    $popular_product_subtitle = $row['popular_product_subtitle'];
    $total_featured_product_home = $row['total_featured_product_home'];
    $total_latest_product_home = $row['total_latest_product_home'];
    $total_popular_product_home = $row['total_popular_product_home'];
    $home_service_on_off = $row['home_service_on_off'];
    $home_welcome_on_off = $row['home_welcome_on_off'];
    $home_featured_product_on_off = $row['home_featured_product_on_off'];
    $home_latest_product_on_off = $row['home_latest_product_on_off'];
    $home_popular_product_on_off = $row['home_popular_product_on_off'];

}


?>




<!-- <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >


    <ol class="carousel-indicators"> -->
        <?php
        // $i=0;
        // $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        // $statement->execute();
        // $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
        // foreach ($result as $row) {            
        //     ?>
            
            <?php
        //     $i++;
        // }
        ?>
    <!-- </ol> -->

    <!-- Wrapper For Slides -->
    <!-- <div class="carousel-inner" role="listbox">

        <?php
        //$i=0;
        //$statement = $pdo->prepare("SELECT * FROM tbl_slider");
        //$statement->execute();
        //$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
        //foreach ($result as $row) {            
            ?>
            <div class="item <?php// if($i==0) {echo 'active';} ?>" style="background-image:url(assets/uploads/<?php// echo $row['photo']; ?>);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text <?php// if($row['position'] == 'Left') {echo 'slide_style_left';} elseif($row['position'] == 'Center') {echo 'slide_style_center';} elseif($row['position'] == 'Right') {echo 'slide_style_right';} ?>">
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php
            //$i++;
        //}
        ?>
    </div> -->


    <!-- <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>


    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> -->



<!-- FIRST SECTION -->
<?// php if($home_service_on_off == 1): ?>
<!-- <div class="service bg-gray">
    <div class="container">
        <div class="row">
            <?//php
              //  $statement = $pdo->prepare("SELECT * FROM tbl_service");
              //  $statement->execute();
              //  $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
              //  foreach ($result as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/<?//php echo $row['photo']; ?>" alt="<?// php echo $row['title']; ?>"></div>
                            <h3><?//php echo $row['title']; ?></h3>
                            <p>
                                <?//php echo nl2br($row['content']); ?>
                            </p>
                        </div>
                    </div>
                    <?//php
                // }
            ?>
        </div>
    </div>
</div> -->
<?// php endif; ?>



<style>
.swiper {
        width: 100%;
        height: 500px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
</style>



<!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(assets/img/gucci.webp); background-size: cover; background-position: center"></div>
        <div class="swiper-slide" style="background-image:url(assets/img/gucci_1.jpg); background-size: cover; background-position: center"></div>
        <div class="swiper-slide" style="background-image:url(assets/img/gucci_2.jpg); background-size: cover; background-position: center"></div>
        <!-- <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div> -->
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>



<!-- LITTLE INTRO -->

<section class="little-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="animate__animated animate__bounce">double breasted jacket</h2>
                <p>checkout the latest fashion trend specifically designed for you</p>
                <button>shop now</button>
            </div>
        </div>
    </div>
</section>

<!-- END OF LITTLE INTRO -->



<!-- MY FIRST SECTION -->

<section class="first-home-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 first-home-inne">
                <div class="first-text">
                    <h2>Men's Fall-Winter 2021</h2>
                    <button>shop now</button>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 first-home-inner">
                <div class="first-text">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END OF MY FIRST SECTION -->








<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModal">
                  Login Form
                </button> -->
 
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                            <div class="modal-body">
                                <h3 class="title">Login Form</h3>
                                <p class="description">Login here Using Email & Password</p>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox">
                                    <label>Remamber me</label>
                                </div>
                                <a href="" class="forgot-pass">Forgot Password?</a>
                                <button class="btn">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script type="text/javascript">
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
myModal.show()
</script> -->










<!-- LATEST PRODUCTS -->
<?php if($home_latest_product_on_off == 1): ?>
<div class="product pt_70 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2><?php echo $latest_product_title; ?></h2>
                    <h3><?php echo $latest_product_subtitle; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">

                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                    $statement->execute(array(1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                        <div class="item">
                            <div class="thumb">
                                <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);">
                                    </div>
                                </a>
                                <a href="product.php?id=<?php echo $row['p_name']; ?>">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                <h4>
                                    $<?php echo $row['p_current_price']; ?> 
                                    <?php if($row['p_old_price'] != ''): ?>
                                    <del>
                                        $<?php echo $row['p_old_price']; ?>
                                    </del>
                                    <?php endif; ?>
                                </h4>
                                <div class="rating">
                                    <?php
                                    $t_rating = 0;
                                    $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                    $statement1->execute(array($row['p_id']));
                                    $tot_rating = $statement1->rowCount();
                                    if($tot_rating == 0) {
                                        $avg_rating = 0;
                                    } else {
                                        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result1 as $row1) {
                                            $t_rating = $t_rating + $row1['rating'];
                                        }
                                        $avg_rating = $t_rating / $tot_rating;
                                    }
                                    ?>
                                    <?php
                                    if($avg_rating == 0) {
                                        echo '';
                                    }
                                    elseif($avg_rating == 1.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    } 
                                    elseif($avg_rating == 2.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    }
                                    elseif($avg_rating == 3.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    }
                                    elseif($avg_rating == 4.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        ';
                                    }
                                    else {
                                        for($i=1;$i<=5;$i++) {
                                            ?>
                                            <?php if($i>$avg_rating): ?>
                                                <i class="fa fa-star-o"></i>
                                            <?php else: ?>
                                                <i class="fa fa-star"></i>
                                            <?php endif; ?>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <?php if($row['p_qty'] == 0): ?>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            Out Of Stock
                                        </div>
                                    </div>
                                <?php else: ?>
                                   <!--  <p><a href="product.php?id=<?//php echo $row['p_id']; ?>">Add to Cart</a></p> -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>


            </div>
        </div>
    </div>
</div>
<?php endif; ?>









<section class="first-home-section first-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 first-home-inner">
                <div class="first-text">
                    
                </div>
            </div>
            <div class="col-lg-4 first-home-inne">
                <div class="first-text first-text-right">
                    <h2>Men's Fall-Winter 2021</h2>
                    <button>shop now</button>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- FEATURED PRODUCTS -->
<?//php if($home_featured_product_on_off == 1): ?>
<!-- <div class="product pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2><?//php echo $featured_product_title; ?></h2>
                    <h3><?//php echo $featured_product_subtitle; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">
                    
                    <?php
                    // $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured=? AND p_is_active=? LIMIT ".$total_featured_product_home);
                    // $statement->execute(array(1,1));
                    // $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    // foreach ($result as $row) {
                        ?>
                        <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/<?//php echo $row['p_featured_photo']; ?>);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=<?//php echo $row['p_id']; ?>"><?//php echo $row['p_name']; ?></a></h3>
                                <h4>
                                    $<?//php echo $row['p_current_price']; ?> 
                                    <?//php if($row['p_old_price'] != ''): ?>
                                    <del>
                                        $<?//php echo $row['p_old_price']; ?>
                                    </del>
                                    <?//php endif; ?>
                                </h4>
                                <div class="rating">
                                    <?//php
                                    // $t_rating = 0;
                                    // $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                    // $statement1->execute(array($row['p_id']));
                                    // $tot_rating = $statement1->rowCount();
                                    //if($tot_rating == 0) {
                                        //$avg_rating = 0;
                                    //} else {
                                        //$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                        //foreach ($result1 as $row1) {
                                            //$t_rating = $t_rating + $row1['rating'];
                                        //}
                                        //$avg_rating = $t_rating / $tot_rating;
                                    //}
                                    ?>
                                    <?//php
                                    //if($avg_rating == 0) {
                                        //echo '';
                                    //}
                                    // elseif($avg_rating == 1.5) {
                                    //     echo '
                                    //         <i class="fa fa-star"></i>
                                    //         <i class="fa fa-star-half-o"></i>
                                    //         <i class="fa fa-star-o"></i>
                                    //         <i class="fa fa-star-o"></i>
                                    //         <i class="fa fa-star-o"></i>
                                    //     ';
                                    // } 
                                    // elseif($avg_rating == 2.5) {
                                    //     echo '
                                    //         <i class="fa fa-star"></i>
                                    //         <i class="fa fa-star"></i>
                                    //         <i class="fa fa-star-half-o"></i>
                                    //         <i class="fa fa-star-o"></i>
                                    //         <i class="fa fa-star-o"></i>
                                        //';
                                    //}
                                    //elseif($avg_rating == 3.5) {
                                        //echo '
                                            // <i class="fa fa-star"></i>
                                            // <i class="fa fa-star"></i>
                                            // <i class="fa fa-star"></i>
                                            // <i class="fa fa-star-half-o"></i>
                                            // <i class="fa fa-star-o"></i>
                                        //';
                                    //}
                                    //elseif($avg_rating == 4.5) {
                                    //    echo '
                                    //        <i class="fa fa-star"></i>
                                    //        <i class="fa fa-star"></i>
                                    //        <i class="fa fa-star"></i>
                                    //        <i class="fa fa-star"></i>
                                    //        <i class="fa fa-star-half-o"></i>
                                    //    ';
                                    //}
                                    //else {
                                    //    for($i=1;$i<=5;$i++) {
                                            ?>
                                            <?//php if($i>$avg_rating): ?>
                                                <i class="fa fa-star-o"></i>
                                            <?//php else: ?>
                                                <i class="fa fa-star"></i>
                                            <?//php endif; ?>
                                            <?//php
                                        //}
                                    //}
                                    ?>
                                </div>

                                <?//php if($row['p_qty'] == 0): ?>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            Out Of Stock
                                        </div>
                                    </div>
                                <?//php else: ?>
                                    <p><a href="product.php?id=<?//php echo $row['p_id']; ?>">Add to Cart</a></p>
                                <?//php endif; ?>
                            </div>
                        </div>
                        <?//php
                    //}
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?//php endif; ?>





















<!-- MY SECOND SECTION -->

<!-- <section class="second-home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 second-home-inner">
                <div class="second-text">
                    <h2>Men's Fall-Winter 2021</h2>
                    <button class="first-button">discover the campaign</button>
                    <button>discover the collection</button>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- END OF MY SECOND SECTION -->






<?php if($home_popular_product_on_off == 1): ?>
<div class="product pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2><?php echo $popular_product_title; ?></h2>
                    <h3><?php echo $popular_product_subtitle; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">

                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT ".$total_popular_product_home);
                    $statement->execute(array(1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                        <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                <h4>
                                    $<?php echo $row['p_current_price']; ?> 
                                    <?php if($row['p_old_price'] != ''): ?>
                                    <del>
                                        $<?php echo $row['p_old_price']; ?>
                                    </del>
                                    <?php endif; ?>
                                </h4>
                                <div class="rating">
                                    <?php
                                    $t_rating = 0;
                                    $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                    $statement1->execute(array($row['p_id']));
                                    $tot_rating = $statement1->rowCount();
                                    if($tot_rating == 0) {
                                        $avg_rating = 0;
                                    } else {
                                        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result1 as $row1) {
                                            $t_rating = $t_rating + $row1['rating'];
                                        }
                                        $avg_rating = $t_rating / $tot_rating;
                                    }
                                    ?>
                                    <?php
                                    if($avg_rating == 0) {
                                        echo '';
                                    }
                                    elseif($avg_rating == 1.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    } 
                                    elseif($avg_rating == 2.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    }
                                    elseif($avg_rating == 3.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                    }
                                    elseif($avg_rating == 4.5) {
                                        echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        ';
                                    }
                                    else {
                                        for($i=1;$i<=5;$i++) {
                                            ?>
                                            <?php if($i>$avg_rating): ?>
                                                <i class="fa fa-star-o"></i>
                                            <?php else: ?>
                                                <i class="fa fa-star"></i>
                                            <?php endif; ?>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <?php if($row['p_qty'] == 0): ?>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            Out Of Stock
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <p><a href="product.php?id=<?php echo $row['p_id']; ?>">Add to Cart</a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>




<?php require_once('footer.php'); ?>