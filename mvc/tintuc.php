<?php
    include 'inc/header.php';
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Tin Tức</h1>
        </div>
    </div>
</header>
<div class="container mt-3 mb-3">
        <div class="row">
            <?php
                $blog_ttgiay = $blog->getblogs_ttgiay();
                if($blog_ttgiay){
                    while($result_tt = $blog_ttgiay->fetch_assoc()){

            ?>
            <div class="card mt-4 mb-5 mr-3 text-center" style="width: 48%;">
                <div class="card-body row" style="padding: 10px;">
                    <div class="col-md-6"><img src="../admin/uploads/<?php echo $result_tt['image'] ?>" width="200px" alt="" /></div>
                    <div class="col-md-6">
                        <a href="chitiettt.php?id=<?php echo $result_tt['id'] ?>">
                            <h4><?php echo $result_tt['title'] ?></h4>
                        </a>
                    </div>
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