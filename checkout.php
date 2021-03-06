<?php require_once('header.php'); ?>

<?php
    $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
    foreach ($result as $row) {
        $banner_checkout = $row['banner_checkout'];
    }
?>

<?php
    if(!isset($_SESSION['cart_p_id'])) {
        header('location: cart.php');
        exit;
    }
?>


<!-- MODAL -->
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>



<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $banner_checkout; ?>)">
    <div class="overlay"></div>
    <div class="page-banner-inner">
        <h1><?php echo LANG_VALUE_22; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(!isset($_SESSION['customer'])): ?>
                    <p class="heygirl">
                        <p>Kindly login/register so as to enter your shipping address</p>
                        <a href="login.php" class="btn btn-primary" style="background:#000;border:none"><?php echo LANG_VALUE_160; ?></a>
                    </p>

            </div>



                <!-- if user is signed in -->
                <?php else: ?>

                <h3 class="special"><?php echo LANG_VALUE_26; ?></h3>
                <div class="cart">
                    <table class="table table-responsive">
                        <tr>
                            <th><?php echo LANG_VALUE_7; ?></th>
                            <th><?php echo LANG_VALUE_8; ?></th>
                            <th><?php echo LANG_VALUE_47; ?></th>
                            <th><?php echo LANG_VALUE_157; ?></th>
                            <th><?php echo LANG_VALUE_158; ?></th>
                            <th><?php echo LANG_VALUE_159; ?></th>
                            <th><?php echo LANG_VALUE_55; ?></th>
                            <th class="text-right"><?php echo LANG_VALUE_82; ?></th>
                        </tr>
                         <?php
                        $table_total_price = 0;

                        $i=0;
                        foreach($_SESSION['cart_p_id'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_p_id[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_size_id'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_size_id[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_size_name'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_size_name[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_color_id'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_color_id[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_color_name'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_color_name[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_p_qty'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_p_qty[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_p_current_price'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_p_current_price[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_p_name'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_p_name[$i] = $value;
                        }

                        $i=0;
                        foreach($_SESSION['cart_p_featured_photo'] as $key => $value) 
                        {
                            $i++;
                            $arr_cart_p_featured_photo[$i] = $value;
                        }
                        ?>
                        <?php for($i=1;$i<=count($arr_cart_p_id);$i++): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <img src="assets/uploads/<?php echo $arr_cart_p_featured_photo[$i]; ?>" alt="">
                            </td>
                            <td><?php echo $arr_cart_p_name[$i]; ?></td>
                            <td><?php echo $arr_cart_size_name[$i]; ?></td>
                            <td><?php echo $arr_cart_color_name[$i]; ?></td>
                            <td><?php echo LANG_VALUE_1; ?><?php echo $arr_cart_p_current_price[$i]; ?></td>
                            <td><?php echo $arr_cart_p_qty[$i]; ?></td>
                            <td class="text-right">
                                <?php
                                $row_total_price = $arr_cart_p_current_price[$i]*$arr_cart_p_qty[$i];
                                $table_total_price = $table_total_price + $row_total_price;
                                ?>
                                <?php echo LANG_VALUE_1; ?><?php echo $row_total_price; ?>
                            </td>
                        </tr>
                        <?php endfor; ?>           
                        <tr>
                            <th colspan="7" class="total-text"><?php echo LANG_VALUE_81; ?></th>
                            <th class="total-amount"><?php echo LANG_VALUE_1; ?><?php echo $table_total_price; ?></th>
                        </tr>
                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_shipping_cost WHERE country_id=?");
                        $statement->execute(array($_SESSION['customer']['cust_country']));
                        $total = $statement->rowCount();
                        if($total) {
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                $shipping_cost = $row['amount'];
                            }
                        } else {
                            $statement = $pdo->prepare("SELECT * FROM tbl_shipping_cost_all WHERE sca_id=1");
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                $shipping_cost = $row['amount'];
                            }
                        }                        
                        ?>
                        <tr>
                            <td colspan="7" class="total-text"><?php echo LANG_VALUE_84; ?></td>
                            <td class="total-amount"><?php echo LANG_VALUE_1; ?><?php echo $shipping_cost; ?></td>
                        </tr>
                        <tr>
                            <th colspan="7" class="total-text"><?php echo LANG_VALUE_82; ?></th>
                            <th class="total-amount">
                                <?php
                                $final_total = $table_total_price+$shipping_cost;
                                ?>
                                <?php echo LANG_VALUE_1; ?><?php echo $final_total; ?>
                            </th>
                        </tr>
                    </table> 
                </div>

                

                <div class="billing-address">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="special"><?php echo LANG_VALUE_161; ?></h3>
                            <table class="table table-responsive table-bordered bill-address">
                                <tr>
                                    <td><?php echo LANG_VALUE_102; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_b_name']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_104; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_b_phone']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_106; ?></td>
                                    <td>
                                        <?php
                                        $statement = $pdo->prepare("SELECT * FROM tbl_country WHERE country_id=?");
                                        $statement->execute(array($_SESSION['customer']['cust_b_country']));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            echo $row['country_name'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_105; ?></td>
                                    <td>
                                        <?php echo nl2br($_SESSION['customer']['cust_b_address']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_107; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_b_city']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_108; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_b_state']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_109; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_b_zip']; ?></td>
                                </tr>                                
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="special"><?php echo LANG_VALUE_162; ?></h3>
                            <table class="table table-responsive table-bordered bill-address">
                                <tr>
                                    <td><?php echo LANG_VALUE_102; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_s_name']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_104; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_s_phone']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_106; ?></td>
                                    <td>
                                        <?php
                                        $statement = $pdo->prepare("SELECT * FROM tbl_country WHERE country_id=?");
                                        $statement->execute(array($_SESSION['customer']['cust_s_country']));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            echo $row['country_name'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_105; ?></td>
                                    <td>
                                        <?php echo nl2br($_SESSION['customer']['cust_s_address']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_107; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_s_city']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_108; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_s_state']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_109; ?></td>
                                    <td><?php echo $_SESSION['customer']['cust_s_zip']; ?></td>
                                </tr> 
                            </table>
                        </div>
                    </div>                    
                </div>

                

                <div class="cart-buttons">
                    <ul>
                        <li><a href="cart.php" class="btn btn-primary"><?php echo LANG_VALUE_21; ?></a></li>
                        <!-- <li><a href="cart.php" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">make payment</a></li> -->
                        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">make payment</button>
                    </ul>
                </div>

                <!-- PAYMENT MODAL -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <?php
                            $checkout_access = 1;
                            if(
                                ($_SESSION['customer']['cust_b_name']=='') ||
                                ($_SESSION['customer']['cust_b_cname']=='') ||
                                ($_SESSION['customer']['cust_b_phone']=='') ||
                                ($_SESSION['customer']['cust_b_country']=='') ||
                                ($_SESSION['customer']['cust_b_address']=='') ||
                                ($_SESSION['customer']['cust_b_city']=='') ||
                                ($_SESSION['customer']['cust_b_state']=='') ||
                                ($_SESSION['customer']['cust_b_zip']=='') ||
                                ($_SESSION['customer']['cust_s_name']=='') ||
                                ($_SESSION['customer']['cust_s_cname']=='') ||
                                ($_SESSION['customer']['cust_s_phone']=='') ||
                                ($_SESSION['customer']['cust_s_country']=='') ||
                                ($_SESSION['customer']['cust_s_address']=='') ||
                                ($_SESSION['customer']['cust_s_city']=='') ||
                                ($_SESSION['customer']['cust_s_state']=='') ||
                                ($_SESSION['customer']['cust_s_zip']=='')
                            ) {
                                $checkout_access = 0;
                            }
                        ?>
                            <?php if($checkout_access == 0): ?>
                            <div class="col-md-12">
                                <div style="color:red;font-size:22px;margin-bottom:50px;">
                                    You must have to fill up all the billing and shipping information from your dashboard panel in order to checkout the order. Please fill up the information going to <a href="customer-billing-shipping-update.php" style="color:red;text-decoration:underline;">this link</a>.
                                </div>
                            </div>
                            <?php else: ?>


                            <h2>Hey there</h2>
                            <h2>Hey there</h2>
                            <h2>Hey there</h2>
                            <h2>Hey there</h2>
                            <h2>Hey there</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

				<!-- <div class="clear"></div>
                <h3 class="special"><?//php echo LANG_VALUE_33; ?></h3>
                <div class="row"> -->
                    
                    	<?php
		                // $checkout_access = 1;
		                // if(
		                //     ($_SESSION['customer']['cust_b_name']=='') ||
		                //     ($_SESSION['customer']['cust_b_cname']=='') ||
		                //     ($_SESSION['customer']['cust_b_phone']=='') ||
		                //     ($_SESSION['customer']['cust_b_country']=='') ||
		                //     ($_SESSION['customer']['cust_b_address']=='') ||
		                //     ($_SESSION['customer']['cust_b_city']=='') ||
		                //     ($_SESSION['customer']['cust_b_state']=='') ||
		                //     ($_SESSION['customer']['cust_b_zip']=='') ||
		                //     ($_SESSION['customer']['cust_s_name']=='') ||
		                //     ($_SESSION['customer']['cust_s_cname']=='') ||
		                //     ($_SESSION['customer']['cust_s_phone']=='') ||
		                //     ($_SESSION['customer']['cust_s_country']=='') ||
		                //     ($_SESSION['customer']['cust_s_address']=='') ||
		                //     ($_SESSION['customer']['cust_s_city']=='') ||
		                //     ($_SESSION['customer']['cust_s_state']=='') ||
		                //     ($_SESSION['customer']['cust_s_zip']=='')
		                // ) {
		                //     $checkout_access = 0;
		                // }
		                ?>
		                <?php// if($checkout_access == 0): ?>
		                	<!-- <div class="col-md-12">
				                <div style="color:red;font-size:22px;margin-bottom:50px;">
			                        You must have to fill up all the billing and shipping information from your dashboard panel in order to checkout the order. Please fill up the information going to <a href="customer-billing-shipping-update.php" style="color:red;text-decoration:underline;">this link</a>.
			                    </div>
	                    	</div> -->
	                	<?php// else: ?>
		                	
                            <!-- <div class="col-lg-6">
                                <h2>Stripe</h2>
                                
                                <form action="create-checkout-session.php" method="POST">
                                    <input class="form-control" type="hidden" id="amount" value="<?php// echo $final_total; ?>" required />
                                    <button type="submit" id="checkout-button">Checkout</button>
                                </form>
                            </div> -->

                            


                            <!-- PAYSTACK INTEGRATION -->
                            
                            <!-- <form id="paymentForm" action="payment/verify_transaction.php">


                                <?php
                                    // $table_total_price = 0;

                                    // $i=0;
                                    // foreach($_SESSION['cart_p_id'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_p_id[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_size_id'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_size_id[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_size_name'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_size_name[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_color_id'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_color_id[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_color_name'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_color_name[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_p_qty'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_p_qty[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_p_current_price'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_p_current_price[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_p_name'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_p_name[$i] = $value;
                                    // }

                                    // $i=0;
                                    // foreach($_SESSION['cart_p_featured_photo'] as $key => $value) 
                                    // {
                                    //     $i++;
                                    //     $arr_cart_p_featured_photo[$i] = $value;
                                    // }
                                ?>
                                    <?//php for($i=1;$i<=count($arr_cart_p_id);$i++): ?>


                              <div class="form-group">
                                <input class="form-control" type="text" id="email-address" placeholder="Email Address" required />
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="hidden" id="amount" value="<?//php echo $final_total; ?>" required />
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="hidden" id="product" value="<?//php echo $arr_cart_p_name[$i]; ?>" required />
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text" id="fullname" placeholder="Fullname" required />
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text" id="state" placeholder="State" required />
                              </div>
                              <div class="form-submit">
                                <button type="submit" onclick="payWithPaystack()">Pay with paystack</button>
                              </div>
                              <?//php endfor; ?> 
                            </form>
 -->

		                <?php// endif; ?>
                        
                <!-- </div> -->
                

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<!-- PAYSTACK SCRIPT -->
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
      e.preventDefault();
      let handler = PaystackPop.setup({
        key: 'pk_test_7114661f512e87772aefeab61d6811334b084c85', // Replace with your public key
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100 * 580,
        fullname: document.getElementById("fullname").value,
        state: document.getElementById("state").value,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
            window.location = "http://localhost/oladotun-master/index.php?transaction=cancel"
          alert('Transaction Cancelled.');
        },
        callback: function(response){
          let message = 'Payment complete! Reference: ' + response.reference;
          alert(message);
          window.location = "http://localhost/oladotun-master/payment/verify_transaction.php?reference=" + response.reference;
          //write function for cart items
        }
      });
      handler.openIframe();
    }
</script>
<script src="https://js.paystack.co/v1/inline.js"></script> 





<?php require_once('footer.php'); ?>