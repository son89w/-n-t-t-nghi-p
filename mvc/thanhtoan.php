<?php
    include 'inc/header.php';
?>
<?php
    if(isset($_GET['orderid']) && $_GET['orderid']=='order'){
        $customer_id = Session::get('customer_id');
        // $insertOrder = $ct->insertOrder($customer_id);
        // $delCart = $ct->del_all_data_cart();
        header('Location:hoadon.php');
     }
?>
<div class="container">
    <form action="" method="post">
        <div class="card a1">
            <div class="row">
                <div class="col-md-7">
                    <div class="left border ml-1 mt-3 mb-3">
                        <div class="header">Order Summary</div>
                        <p><?php
                            $check_cart = $ct->check_cart();
                                if($check_cart){
                                    // $sum = Session::get("sum");
                                    $qty = Session::get('qty');
                                    echo $qty ;
                                    }else{
                                    echo '0';
                                }

                        ?> items</p>
                        <?php
                            $get_product_cart = $ct->get_product_cart();
                            if($get_product_cart){
                                $subtotal = 0;
                                $qty = 0;
                                while($result = $get_product_cart->fetch_assoc()){
                        ?>
                        <div class="row item">
                            <div class="col-4 align-self-center">
                                <img style="padding: 10px;" class="img-fluid mx-auto d-block image" src="../admin/uploads/<?php echo $result['image'] ?>">
                            </div>
                            <div class="col-8">
                                <div class="row"><b><?php echo $fm->format_currency($result['price']).""."VNĐ" ?></b></div>
                                <div class="row text-muted"><?php echo $result['productName'] ?></div>
                                <div class="row">
                                    Qty: <?php echo $result['quantity'] ?>
                                </div>
                                

                            </div>
                        </div>
                        <?php
                            $total = $result['price'] * $result['quantity'];
                            $subtotal += $total;
                            $qty = $qty + $result['quantity'];
                            }
                        }
                        ?>
                    </div>
                                            
                </div>
                <div class="col-md-5 mt-3 mb-3">
                    <div class="right border">
                        <div class="row">
                            <span class="header">Payment</span>
                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png"/>
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/>
                                <img src="https://img.icons8.com/color/48/000000/maestro.png"/>
                            </div>
                        </div>
                        <div class="f1">
                            <span class="s1">Cardholder's name:</span>
                            <input placeholder="Linda Williams">
                            <span>Card Number:</span>
                            <input placeholder="0125 6780 4567 9909">
                            <div class="row">
                                <div class="col-4"><span>Expiry date:</span>
                                    <input placeholder="YY/MM">
                                </div>
                                <div class="col-4"><span>CVV:</span>
                                    <input id="cvv">
                                </div>
                            </div>
                            <input type="checkbox" id="save_card" class="align-left i1">
                            <label for="save_card">Save card details to wallet</label>  
                        </div>
                            
                        <hr>
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right">
                                <?php 
                                    echo $fm->format_currency($subtotal)." "."VNĐ";
                                    // Session::set('sum',$subtotal);
                                    Session::set('qty',$qty);
                                ?>
                            </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Delivery</div>
                            <div class="col text-right">30.000 VNĐ</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b>
                                <?php 
                                    $vat = 30000;
                                    $gtotal = $subtotal + $vat;
                                    echo $fm->format_currency($gtotal)." "."VNĐ";
                                ?>
                            </b></div>
                        </div>
                        <a href="?orderid=order" class="btn btn-dark b1" name="order">Place order</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    include 'inc/footer.php';
?>