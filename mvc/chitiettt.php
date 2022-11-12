<?php
    include 'inc/header.php';
?>
<?php
    if(!isset($_GET['id']) || $_GET['id']==NULL){
        echo "<script>window.location ='404.php'</script>";
     }else{
         $id = $_GET['id']; 
     }
?>
<section class="container px-4 px-lg-5 my-5">

        <?php
            $get_blog_details = $blog->get_blog_details($id);
            if($get_blog_details){
                while($result_details = $get_blog_details->fetch_assoc()){
		?>
        <div class=" single-content">
            <p class="mb-5">
            <img src="../admin/uploads/<?php echo $result_details['image'] ?>" alt="Image" class="img-fluid" data-pagespeed-url-hash="2892412896" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </p>
            <h1 class="mb-4">
            <?php echo $result_details['description'] ?>
            </h1>
            <p><?php echo $result_details['content'] ?></p>
        </div>
        <div class="pt-5">
        <p>Categories: <?php echo $result_details['brandName']?></p>
        </div>
        <?php
			}
		}
		?>
    </div>
</section>
<div class="container">
    
    <div class="card" style="padding: 10px; width: 70%;">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="hidden" name="product_id_binhluan" value="<?php echo $id ?>">
                <span class="input-group-text fa fa-user"></span>
                <input type="text" class="form-control" name="tennguoibinhluan" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text fa fa-user"></span>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <span class="input-group-text">Bình luận</span>
                <textarea class="form-control" name="binhluan" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mt-3 ">
                <input class="btn btn-primary" type="submit" name="comment" value="Gửi">
            </div>
        </form>
    </div>
    <?php
        if(isset($binhluan_insert)){
            echo $binhluan_insert;
        }
    ?>
</div>
<?php
    include 'inc/footer.php';
?>