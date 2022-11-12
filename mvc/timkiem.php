<?php
    include 'inc/header.php';
?>
<div class="container">
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $tukhoa = $_POST['tukhoa'];
            $search_product = $product->search_product($tukhoa);
            
        }
    ?>
    
    <h3 class="mt-2">Từ Khóa Tìm Kiếm: <?php echo $tukhoa ?></h3>
    <hr width="350px" align="left">
    <div class="row">
        
        <?php
	      	
        if($search_product){
            while($result = $search_product->fetch_assoc()){
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

    }else{
        echo '<p>Không tìm sản phẩm</p>';
    }
        ?>
    </div>
</div>

<?php
    include 'inc/footer.php';
?>