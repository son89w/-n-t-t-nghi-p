<?php
    include 'inc/header.php';
?>
<?php
    if(!isset($_GET['proid']) || $_GET['proid']==NULL){
        echo "<script>window.location ='404.php'</script>";
     }else{
         $id = $_GET['proid']; 
     }
     //so luong
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

        $quantity = $_POST['quantity'];
        $insertCart = $ct->add_to_cart($quantity, $id);
        
    }
    //san pham yeu thich
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])) {

        $productid = $_POST['productid'];
        $insertWishlist = $product->insertWishlist($productid, $customer_id);
        
    }
    //binh luan
    if (isset($_POST['comment'])) {
        $binhluan_insert = $cs->insert_binhluan();
        
    }
?>
<section class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <?php
            $get_product_details = $product->get_details($id);
            if($get_product_details){
                while($result_details = $get_product_details->fetch_assoc()){
		?>
        <div class="col-md-6">
            <img width="70%" src="../admin/uploads/<?php echo $result_details['image'] ?>" alt="" />
        </div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bolder"><?php echo $result_details['productName'] ?></h1>
            <div class="fs-5 mb-4">
                <span class="text-decoration-line-through" style="color: red;">
                <?php echo $fm->format_currency($result_details['price'])." "."VNĐ" ?>
                </span>
            </div>
            <p class="lead">
                <?php echo $result_details['product_desc'] ?>
            </p>
            <div class="small mb-3">
                Danh mục: <?php echo $result_details['catName'] ?> 
                | <?php echo $result_details['brandName']?>
            </div>
            <div class="d-flex">
                <form action="" method="post">
                    
                        <div class="row">
                            <input class="form-control text-center me-3 mr-3" id="inputQuantity" name="quantity" type="number" value="1" style="max-width: 5rem" />
                            <input class="btn btn-outline-dark flex-shrink-0 mr-3" type="submit" name="submit" value="Add to cart"></input>
                        </div>
                        <!-- <a type="submit" class="btn btn-outline-dark ml-3" name="wishlist"><span style="color: red;" class='fa fa-heart'></span></a> -->
                    
                </form>
                <form action="" method="POST">
					<input type="hidden" name="productid" value="<?php echo $result_details['productId'] ?>"/>
					<?php
					$login_check = Session::get('customer_login'); 
						if($login_check){
							
							echo '<input type="submit" class="btn btn-outline-dark ml-3" style="float: left;" name="wishlist" value="Save to Wishlist">';
						}else{
							echo '';
						}		
					?>
				</form>
            </div>
            <?php
                if(isset($insertWishlist)){
                    echo $insertWishlist;
                }
            ?>
        </div>
        <?php
			}
		}
		?>
    </div>
</section>
<div class="container">
    
    <div class="card" style="padding: 10px; width: 70%;">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="hidden" name="product_id_binhluan" value="<?php echo $id ?>">
                <span class="input-group-text fa fa-user"></span>
                <input type="text" class="form-control" name="tennguoibinhluan" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text fa fa-user"></span>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <span class="input-group-text">Bình luận</span>
                <textarea class="form-control" name="binhluan" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mt-3 ">
                <input class="btn btn-primary" type="submit" name="comment" value="Gửi">
            </div>
        </form>
    </div>
    <?php
        if(isset($binhluan_insert)){
            echo $binhluan_insert;
        }
    ?>
</div>
<?php
    include 'inc/footer.php';
?>