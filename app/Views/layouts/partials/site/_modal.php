<div id="login" class="modal">
    <div class="dialog">
        <a href="#close"><button class="close-btn"><i class="fas fa-times"></i></button></a>
        <form class="text-center p-5 m-auto" action="" method="GET">
            <h2 class="text-uppercase text-center">Sign In</h2>
                
            <div class="mb-2">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="mb-2">
                <input type="password"  class="form-control" name="password" value="" placeholder="Enter Your Password">    
            </div>
                
            <div class="form-control form-checkbox mb-4">
                <label>
                    <input type="checkbox" class="control-input"> Remember me
                </label>
            </div>
        
            <p class="my-1">
                <a href="forgot.html">Forgot password</a>
            </p>
        
            <button type="submit" class="text-uppercase btn form-button form-control btn-block">Login</button>
            <p class="y-1">
                Not a member? <a href="#register">Register</a>
            </p>
                 
        </form>
    </div>
</div>

<div id="register" class="modal">
    <div class="dialog">
        <a href="#close"><button class="close-btn"><i class="fas fa-times"></i></button></a>
        <form class="text-center p-5 m-auto" action="" method="GET">
            <h2 class="text-uppercase text-center">Sign Up</h2>

            
            <div class="mb-2">
                <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
            </div>
           

            <div class="mb-2">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>

            <div class="mb-2">
                <input type="password"  class="form-control mb-2" name="password" value="" placeholder="Enter Your Password">
                <input type="password"  class="mb-4 form-control" name="password" value="" placeholder="Confirm Your Password">
            </div>

            <button type="submit" class="text-uppercase btn form-button form-control btn-block">Register</button>
            <p class="y-1">
                Already a member? <a href="#login">Sign In</a>
            </p>
                 
        </form>
    </div>
</div>
