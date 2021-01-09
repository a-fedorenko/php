<div class="">
    <div class="py-5 bq-light">
        <div class="row mb-3 container-wrapper px-4">
            <div class="col-lg-6 mt-3 form-containet address-container order-1">
                <form class="p-5 m-auto" action="" method="POST">
                    <h2 class="text-uppercase"><?=$title;?></h2>
                    
                    <?php if(isset($address)):?>

                        
                        <label for=""><i class="fas fa-home"></i>: <input class="mb-2 form-control" type="text" name="street" value="<?=$address['street'];?>"></label>
                        <label for=""><i class="fas fa-envelope-square"></i>: <input class="mb-2 form-control" type="email" name="email" value="<?=$address['email'];?>"></label>
                        <label for=""><i class="fas fa-phone-square-alt"></i>: <input class="mb-2 form-control" type="mobile" name="mobile" value="<?=$address['mobile'];?>"></label>
                        <label for=""><i class="fas fa-map-marker-alt"></i>: <input class="mb-2 form-control" type="text" name="city" value="<?=$address['city'];?>"></label>    
                        <label for=""><i class="fas fa-university"></i>: <input class="mb-2 form-control" type="text" name="country" value="<?=$address['country'];?>"></label>  

                    <?php endif;?>    
                    <input class="form-control form-button" type="submit">   
                </form>
            </div>
            
        </div>
    </div>
</div>



    
