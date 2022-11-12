<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php';
    include '../classes/brand.php';
    include '../classes/product.php';
?>
<?php
    $pd = new product();

    if(!isset($_GET['productid']) || $_GET['productid']==NULL){
       echo "<script>window.location ='tablesp.php'</script>";
    }else{
         $id = $_GET['productid']; 
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $updateProduct = $pd->update_product($_POST,$_FILES,$id);
        
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 70%; margin: auto;">
        <h1 class="text-center">SỬA SẢN PHẨM</h1>
        <?php
         $get_product_by_id = $pd->getproductbyId($id);
            if($get_product_by_id){
                while($result_product = $get_product_by_id->fetch_assoc()){
        ?> 
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                <input type="text" name="productName" class="form-control"  value="<?php echo  $result_product['productName']?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Danh mục</label>
                <div class="col-sm-10">
                <select id="inputState" name="category" class="form-control">
                    <option selected>...Chọn danh mục...</option>
                    <?php
                        $cat = new category();
                        $catlist = $cat->show_category();

                        if($catlist){
                            while($result = $catlist->fetch_assoc()){
                    ?>
                    <option 
                        <?php
                            if($result['catId']==$result_product['catId']){ echo 'selected';  }
                        ?>
                        value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>
                    
                    <?php
                            }
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Thương hiệu</label>
                <div class="col-sm-10">
                <select id="inputState" name="brand" class="form-control">
                    <option selected>...Chọn thương hiệu...</option>
                    <?php
                        $brand = new brand();
                        $brandlist = $brand->show_brand();

                        if($brandlist){
                            while($result = $brandlist->fetch_assoc()){
                    ?>

                    <option
                        <?php
                            if($result['brandId']==$result_product['brandId']){ echo 'selected';  }
                        ?>
                         value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

                    <?php
                            }
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <textarea id="mytextarea" name="product_desc" ><?php echo $result_product['product_desc'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <img src="uploads/<?php echo $result_product['image'] ?>" width="90"><br>
                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Giá</label>
                <div class="col-sm-10">
                <input type="text" name="price" class="form-control"  value="<?php echo $result_product['price'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Loại sản phẩm</label>
                <div class="col-sm-10">
                <select id="inputState" name="type" class="form-control">
                    <option selected>...Chọn loại sản phẩm...</option>
                    <?php
                        if($result_product['type']==0){
                    ?>
                    <option selected value="0">Nổi bật</option>
                    <option value="1">Không nổi bật</option>
                    <?php
                        }else{
                    ?>
                    <option value="1">Nổi bật</option>
                    <option selected value="0">Không nổi bật</option>
                    <?php
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group text-center">
                <?php
                    if(isset($updateProduct)){
                        echo $updateProduct;
                    }
                ?><br>
                <input type="submit" name="submit" Value="UPDATE" />
                <!-- <button type="submit" name="submit" class="btn btn-primary">SAVE</button> -->
            </div>
        </form>
        <?php
                }
            }
        ?>
    </dir>

<?php
    include 'inc/footer.php';
?>
            