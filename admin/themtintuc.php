<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php';
    include '../classes/blog.php';
?>
<?php
    $blog = new blog();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertblog = $blog->insert_blog($_POST,$_FILES);
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 70%; margin: auto;">
        <h1 class="text-center">THÊM TIN TỨC</h1>
        <form action="themtintuc.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tiêu đề</label>
                <div class="col-sm-10">
                <input type="text" name="title" class="form-control"  placeholder="Nhập tiêu đề...">
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
                    <textarea id="mytextarea" name="desc"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nội dụng</label>
                <div class="col-sm-10">
                    <textarea id="mytextarea1" name="content"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                <select id="inputState" name="type" class="form-control">
                    <option value="0">Hiện</option>
                    <option value="1">Ẩn</option>
                </select>
                </div>
            </div>
            <div class="form-group text-center">
                <?php
                    if(isset($insertblog)){
                        echo $insertblog;
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
            