<?php
    include 'inc/header.php';
?>
<?php
    $login_check = Session::get('customer_login'); 
    if($login_check==false){
        header('Location:login_register.php');
    }
?>
<div class="container mb-4 mt-4">
        <h2 class="text-center">Chào mừng
        <?php
            $id = Session::get('customer_id');
            $get_customers = $cs->show_customers($id);
            if($get_customers){
                while($result = $get_customers->fetch_assoc()){

            ?>
            <span style="color: #a8729a;"><?php echo $result['name'] ?></span>
            <?php
                }
            }
        ?>
        
        đến với 81 SNEAKER</h2> 

</div>
<?php
    include 'inc/footer.php';
?>