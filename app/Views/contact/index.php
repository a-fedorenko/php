<div class="">
    <div class="py-5 bq-light">
        <div class="row mb-3 container-wrapper px-4">
            <div class="col-lg-6 mt-3 form-containet address-container order-2">
                <form class="p-5 m-auto" action="">
                    <h2 class="text-uppercase text-center"><?=$subtitle;?></h2>
                    <div class="list-unstyled footer-socials social-icon py-4">
                        <a href="#" class=""><i class="fab fa-facebook"></i></a>
                        <a href="#" class=""><i class="fab fa-google-plus"></i></a>
                        <a href="#" class=""><i class="fab fa-linkedin"></i></a>
                    </div>

                    <?php if(isset($address)):?>
                        <label for="" class="mb-2 form-control"><i class="fas fa-home"></i>: <?=$address['street'];?></label>
                        <label for="" class="mb-2 form-control"><i class="fas fa-envelope-square"></i>: <?=$address['email'];?></label>
                        <label for="" class="mb-2 form-control"><i class="fas fa-phone-square-alt"></i>: <?=$address['mobile'];?></label>
                        <label for="" class="mb-2 form-control"><i class="fas fa-map-marker-alt"></i>: <?=$address['city'];?></label>
                        <label for="" class="mb-2 form-control"><i class="fas fa-university"></i>: <?=$address['country'];?></label>
                    <?php endif;?>       
                </form>
            </div>
            <div class="col-lg-6 mt-3 text-center form-containet contact-container order-1">
                <form class="p-5 m-auto" action="">
                    <h2 class="text-uppercase"><?=$title;?></h2>
                    <span>Drop us some message</span>
                    <input type="text" class="mb-2 form-control" name="username" placeholder="Your Name" required>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    <small class="form-text text-muted">We'll never share your email with anyone elase!</small>
                    <textarea class="form-control" name="message" id="" cols="30" rows="6" required></textarea>
                    <button class="form-control form-button" type="submite">Submit Your Message</button>
                </form>
            </div>
        </div>
    </div>
</div>



    
