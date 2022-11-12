<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php';
    include '../classes/brand.php';
    include '../classes/product.php';
?>
<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertProduct = $pd->insert_product($_POST,$_FILES);
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 70%; margin: auto;">
        <h1 class="text-center">THÊM SẢN PHẨM</h1>
        <form action="themsp.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                <input type="text" name="productName" class="form-control"  placeholder="Nhập tên sản phẩm...">
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
                    <option value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>
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

                    <option value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

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
                    <textarea id="mytextarea" name="product_desc"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Giá</label>
                <div class="col-sm-10">
                <input type="text" name="price" class="form-control"  placeholder="Nhập giá...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Loại sản phẩm</label>
                <div class="col-sm-10">
                <select id="inputState" name="type" class="form-control">
                    <option selected>...Chọn loại sản phẩm...</option>
                    <option value="0">Nổi bật</option>
                    <option value="1">Không nổi bật</option>
                </select>
                </div>
            </div>
            <div class="form-group text-center">
                <?php
                    if(isset($insertProduct)){
                        echo $insertProduct;
                    }
                ?><br>
                <input type="submit" name="submit" Value="Save" />
                <!-- <button type="submit" name="submit" class="btn btn-primary">SAVE</button> -->
            </div>
        </form>
</dir>

<?php
    include 'inc/footer.php';
?>
            