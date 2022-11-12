<?php
    include 'inc/header.php';
?>
<?php
    if(!isset($_GET['brandid']) || $_GET['brandid']==NULL){
        echo "<script>window.location ='404.php'</script>";
     }else{
         $id = $_GET['brandid']; 
     }
     //so luong
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    //     $quantity = $_POST['quantity'];
    //     $insertCart = $ct->add_to_cart($quantity, $id);
        
    // }
?>
<header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <p class="lead fw-normal text-white-50 mb-0">LOẠI SẢN PHẨM</p>
                <?php 
					$name_brand = $brand->get_name_by_brand($id);
                    if($name_brand){
                        while($result_name = $name_brand->fetch_assoc()){
				?>
                <h1 class="display-4 fw-bolder"><?php echo $result_name['brandName'] ?></h1>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </header>
    <section class="container px-4">
        <div class="row">
            <div class="col-sm-9">
                <div class="row mt-2">
                    <?php 
					$getall_brand = $brand->get_product_by_brand($id);
						if($getall_brand){
							while($result = $getall_brand->fetch_assoc()){
					?>
                    <div class="card mt-3 mb-3 ml-2 mr-2 text-center" style="width:170px; ">
                        <a href="chitietsp.php?proid=<?php echo $result['productId'] ?>">
                            <img class="card-img-top mt-2" src="../admin/uploads/<?php echo $result['image'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="color:black"><?php echo $result['productName'] ?></h5>
                                <p class="card-text" style="color:red"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></p>
                            </div>
                        </a>
                    </div> 
                    <?php
                            }
                        }
                    ?>
                </div> 
            </div>
            <div class="col-sm-3 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Loại sản phẩm
                    </div>
                    <?php 
					$getall_brand = $brand->show_brand_fontend();
						if($getall_brand){
							while($result_allbrand = $getall_brand->fetch_assoc()){
					?>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <a href="loaisanpham.php?brandid=<?php echo $result_allbrand['brandId'] ?>"><?php echo $result_allbrand['brandName'] ?></a>
                      </li>
                      
                    </ul>
                    <?php
				    	}
					}
				    ?>
                  </div>
            </div>
        </div>
    </section>
<?php
    include 'inc/footer.php';
?>