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
                <h2>find out more about dotun</h2>               

                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_faq");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                        <div class="panel">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo $row['faq_id']; ?>">
                                <h4 class="panel-title">
                                    <?php echo $row['faq_title']; ?><span><i class="fa fa-plus"></i></span>
                                </h4>
                                
                            </div>
                            <div id="question<?php echo $row['faq_id']; ?>" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <!-- <h5><span class="label label-primary">Answer</span></h5> -->
                                    <p>
                                        <?php echo $row['faq_content']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                    
                </div>

            </div>

            <div class="col-md-4 bottom-faq">
                <h2>interact with us</h2>
                <p>you can leave a message with us and well be with you.</p>

                <a href="contact.php"><input type="text" class="btn" value="Contact Us" name=""></a>
            </div>

        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>