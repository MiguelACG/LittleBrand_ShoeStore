<nav class="navbar navbar-expand-lg navbar-light bg-light"><a href="#" class="navbar-brand d-lg-none">Gridbox</a>
<button type="button" data-toggle="collapse" data-target="#navigations-02" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <a href="index.php?page=main" class="navbar-brand mr-0">Little Brand Shoe Store</a>
        <div id="navigations-02" class="collapse navbar-collapse justify-content-md-center">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item mr-2"></li>
                <a href="index.php?page=collections" class="nav-link active">Collections<span class="sr-only">(current)</span></a>
                <a href="index.php?page=women" class="nav-link">Women</a>
                <a href="index.php?page=men" class="nav-link">Men</a>
                <a href="index.php?page=kids" class="nav-link">Kids</a>
                <a href="index.php?page=brands" class="nav-link">Brands</a>
                <a href="index.php?page=contact" class="nav-link">Contact</a>
                <li class="nav-item mr-2"></li>
            </ul>
        </div>
        <div class="row w-100">
<!--            <div class="col-4 pl-lg-0">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item cart"></li>
                </ul>
                <div class="col-4 pr-lg-0"></div>
                -->
            </div>
        </div>

        <!--Modify Href for login and cart screen-->
        <a href="#signInModal" class="nav-link" data-toggle="modal">Login</a> /
        <a href="#signUpModal" class="nav-link" data-toggle="modal">SignUp</a>
        <a href="#" class="nav-link mt-1"><i class="fa fa-search"></i></a>
        <span id="iiyli">Cart</span>
        <!-- Number of times in cart -> Redirect-->
        <a data-toggle="modal" data-target="#cart" class="nav-link"><span id="id112">0</span></a>
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
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                            </div>        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="float:left;">Login</button>
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
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required" style="width:49%; display:inline-block;">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required" style="width:49%; display:inline-block;">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                            </div>        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="float:left;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                <!--    <div class="modal-footer">
                        <span style="margin-left:auto; margin-right:auto;">Don't have an account? <a href="#">Sign Up</a></span>
                       <a href="#">Forgot Password?</a>
                    </div>-->
                </div>
            </div>
        </div>