
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a href="#" class="navbar-brand d-lg-none"></a>
    <button type="button" data-toggle="collapse" data-target="#navigations-02" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <a href="index.php?page=main" class="navbar-brand mr-0">Little Brand Shoe Store</a>
    <div id="navigations-02" class="collapse navbar-collapse justify-content-md-center">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item mr-2"></li>
            <a href="index.php?page=profile" class="nav-link ">Profile<!--<span class="sr-only">(current)</span> (active was in the class)--></a>
            <a href="index.php?page=women&pageno=1" class="nav-link">Women</a>
            <a href="index.php?page=men&pageno=1" class="nav-link">Men</a>
            <a href="index.php?page=about&brandid=16" class="nav-link">About</a>
            <a href="index.php?page=contact" class="nav-link">Contact</a>
            <li class="nav-item mr-2"></li>
        </ul>
    </div>
    <div class="row w-100">
            <!--<div class="col-4 pl-lg-0">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item cart"></li>
                </ul>
                <div class="col-4 pr-lg-0"></div>
                
            </div>-->
    </div>

    <!--Modify Href for login and cart screen-->
    <a href="#signInModal" id="login" class="nav-link" data-toggle="modal" style="font-size:15px;">Login</a> /
    <a href="#signUpModal" class="nav-link" data-toggle="modal" style="font-size:15px;">SignUp</a>
    <a href="#searchModal" class="nav-link" data-toggle="modal"><i class="fa fa-search"></i></a>
    <a href="index.php?page=wishlist" class="nav-link" style=""><!--opens the wishlist C:-->
        <svg class="heart" viewBox="0 0 32 29.6">
                <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
                        c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/>
        </svg>
    </a>
    <!--<span id="iiyli">Cart</span>-->
    <a href="index.php?page=cart" class="nav-link"><i class='fas fa-shopping-basket' style='font-size:20px'></i></a>
    <!-- Number of times in cart -> Redirect-->
    <a data-toggle="modal" data-target="#cart" class="nav-link"><span id="id112"></span></a>
</nav>


<!--Sign in Modal-->
<div id="signInModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">			
                <h4 class="modal-title" style="margin-left:auto; margin-right:auto;">Member Login</h4>	
                <button type="button" style="margin-left:0;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="signinemail" placeholder="Email" required="required">		
                    </div>
                        
                    <div class="form-group">
                        <input type="password" class="form-control" name="signinpassword" placeholder="Password" required="required">	
                    </div>        
                    <div class="form-group">
                        <button type="submit" name="signin" class="btn btn-primary btn-lg btn-block login-btn" style="float:left;">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span style="margin-left:auto; margin-right:auto;">Don't have an account? <a href="#">Sign Up</a></span>
            <!--    <a href="#">Forgot Password?</a>-->
            </div>
        </div>
    </div>
</div>     

<!--Sign Up Modal-->
<div id="signUpModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">			
                <h4 class="modal-title" style="margin-left:auto; margin-right:auto;">Member Sign Up</h4>	
                <button type="button" style="margin-left:0;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required" style="width:49%; display:inline-block;">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required" style="width:49%; display:inline-block;">		
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="required">		
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">		
                    </div>
                            
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                    </div>        
                    <div class="form-group">
                        <button  type="submit" name="signup" class="btn btn-primary btn-lg btn-block login-btn" style="float:left;" >Sign Up</button>
                    </div>
                </form>
           </div>
        <!--<div class="modal-footer">
                <span style="margin-left:auto; margin-right:auto;">Don't have an account? <a href="#">Sign Up</a></span>
               <a href="#">Forgot Password?</a>
            </div>-->
        </div>
    </div>
</div>

<!--Search Modal-->
<div id="searchModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">			
                <h4 class="modal-title" style="margin-left:auto; margin-right:auto;">Search Shoes</h4>	
                <button type="button" style="margin-left:0;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=searchResults" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchBoxInput" placeholder="Search...">		
                    </div>
                    <div class="form-group">
                    <a href="index.php?page=searchResults">
                        <button type="submit" name="searchBtn" class="btn btn-primary btn-lg btn-block login-btn" style="height:20px; width:50%; margin-left:auto; margin-right:auto;">Search!</button>
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>     

<style>
    .heart {
    fill: red;
    width: 20px;
}
</style>