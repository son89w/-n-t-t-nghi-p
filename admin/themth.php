<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php';
?>
<?php
    $brand = new brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $brandName = $_POST['brandName'];
        $insertBrand = $brand->insert_brand($brandName);
        
    }
?>
<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 50%; margin: auto;">
        <form action="themth.php" method="post" class="text-center">
            <h1>THÊM THƯƠNG HIỆU</h1>
            <input type="text" name="brandName" class="form-control" placeholder="Làm ơn nhập thêm thương hiệu...">
            <?php
                if(isset($insertBrand)){
                    echo $insertBrand;
                }
            ?>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </dir>

<?php
    include 'inc/footer.php';
?>
            