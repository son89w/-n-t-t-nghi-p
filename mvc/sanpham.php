<?php
    include 'inc/header.php';
?>
<header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Sản Phẩm</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <section class="container px-4">
        <div class="row">
            <div class="col-sm-9">
                <div class="row mt-2" style="margin: auto;">
                    <?php
                        $product_spgiay = $product->getproduct_spgiay();
                        if($product_spgiay){
                            while($result_sp = $product_spgiay->fetch_assoc()){

                    ?>
                        <div class="card mt-3 mb-3 ml-2 mr-2 text-center" style="width:170px; ">
                            <a href="chitietsp.php?proid=<?php echo $result_sp['productId'] ?>">
                                <img class="card-img-top mt-2" src="../admin/uploads/<?php echo $result_sp['image'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:black"><?php echo $result_sp['productName'] ?></h5>
                                    <p class="card-text" style="color:red"><?php echo $fm->format_currency($result_sp['price'])." "."VNĐ" ?></p>
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