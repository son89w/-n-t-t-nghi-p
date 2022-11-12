<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php';
?>
<?php
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
        $insertCat = $cat->insert_category($catName);
        
    }
?>
<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 50%; margin: auto;">
        <form action="themdm.php" method="post" class="text-center">
            <h1>THÊM DANH MỤC</h1>
            <input type="text" name="catName" class="form-control" placeholder="Làm ơn nhập thêm danh mục...">
            <?php
                if(isset($insertCat)){
                    echo $insertCat;
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
            