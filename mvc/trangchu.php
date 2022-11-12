<?php
    include 'inc/header.php';
?>
<div class="container">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" width="100%" src="./image/1280021713_giay-adidas-sale.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" width="100%" src="./image/1564288153_giay-mlb.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Third slide" width="100%" src="./image/79700354_giay-nike.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="text-center mt-3">
        <h2>CÁC HÃNG GIÀY NỔI TIẾNG</h2>
        <hr color="red" width="80%">
    </div>
    <div class="row mt-2" style="margin: auto;">
        <?php
            $product_feathered = $product->getproduct_feathered();
            if($product_feathered){
                while($result = $product_feathered->fetch_assoc()){

        ?>
        <div class="thumbnail">
            <div class="card mt-3 mb-3 ml-2 mr-2 text-center">
                <a href="chitietsp.php?proid=<?php echo $result['productId'] ?>">
                    <img class="card-img-top mt-2" src="../admin/uploads/<?php echo $result['image'] ?>" alt="Card image cap">
                    <div class="card-body cb">
                        <h5 class="card-title" style="color:black"><?php echo $result['productName'] ?></h5>
                        <p class="card-text" style="color:red"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></p>
                    </div>
                </a>
            </div>
        </div> 
        <?php
                }
            }
        ?>
    </div> 

        
</div>
<?php
    include 'inc/footer.php';
?>