<?php
    include '../scripts/signupinconfirm.php';

    $dbuser = 'root';
        $dbpassword = '';
        $db = 'littlebranddb';
        $signedCookie;

        $dataconnection = new mysqli('localhost', $dbuser, $dbpassword, $db) or die('Could not find host db');

    if (isset($_POST['signin'])){
        $signedCookie = sign_in_confirm($dataconnection);
        
        setcookie('SIGNEDIN', $signedCookie, time()+3600, '/');
        
        echo '<script>alert( "Welcome '.$_COOKIE['SIGNEDIN'].'")</script>';
    }

    if(isset($_POST['signup'])){
   
        insert_data($dataconnection); 
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Home</title>
    <meta name="description" content="None">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;family=Source+Sans+Pro:wght@300&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/changeElements.js"></script>
    <link rel="stylesheet" href="../styles/styles.css">

</head>

<body>
    <?php
        
        include_once('navbar.php');

        if(!empty($_GET['page'])){
            $page_select = $_GET['page'];
            switch($page_select){
                case 'main': include_once('main.php'); break;
                case 'collections': include_once('profile.php'); break;
                case 'women': include_once('women.php'); break;
                case 'men': include_once('men.php'); break;
                case 'about': include_once('about.php'); break;
                case 'contact': include_once('contact.php'); break;
                case 'store' : include_once('store.php'); break;
                case 'cart' : include_once('cart.php'); break;
                default : include_once('404.php');break;
            }
        }
        else{
            include_once('main.php');
        }


    ?>

        <footer class="footer pt-5 pb-5 py-5 mt-auto bg-light footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand font-weight-bold">The Little Brand Shoe Store</div>
                        <div class="mt-2 mb-5">Serving You All the Biggest Brands</div>
                        <div class="icon-footer-social mb-5"><a href="#!" class="icon-footer-social-link"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" class="svg-inline--fa fa-instagram fa-w-14">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg><!-- <i class="fab fa-instagram"></i> Font Awesome fontawesome.com --></a><a href="#!" class="icon-footer-social-link"><svg aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""
                                    class="svg-inline--fa fa-facebook fa-w-16">
                                    <path fill="currentColor"
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                    </path>
                                </svg><!-- <i class="fab fa-facebook"></i> Font Awesome fontawesome.com --></a><a href="#!" class="icon-footer-social-link"><svg aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="" class="svg-inline--fa fa-github fa-w-16">
                                    <path fill="currentColor"
                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                    </path>
                                </svg><!-- <i class="fab fa-github"></i> Font Awesome fontawesome.com --></a><a href="#!" class="icon-footer-social-link"><svg aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""
                                    class="svg-inline--fa fa-twitter fa-w-16">
                                    <path fill="currentColor"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg><!-- <i class="fab fa-twitter"></i> Font Awesome fontawesome.com --></a></div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs font-weight-bold mb-4">Product</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Features</a></li>
                                    <li class="mb-2"><a href="#!">Pricing</a></li>
                                    <li class="mb-2"><a href="#!">FAQ</a></li>
                                    <li class="mb-2"><a href="#!">Tutorials</a></li>
                                    <li><a href="#!">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs font-weight-bold mb-4">Technical</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Documentation</a></li>
                                    <li class="mb-2"><a href="#!">Changelog</a></li>
                                    <li class="mb-2"><a href="#!">Tutorials</a></li>
                                    <li><a href="#!">Add-ons</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <div class="text-uppercase-expanded text-xs font-weight-bold mb-4">About</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Company</a></li>
                                    <li class="mb-2"><a href="#!">Team</a></li>
                                    <li class="mb-2"><a href="#!">Culture</a></li>
                                    <li class="mb-2"><a href="#!">Jobs</a></li>
                                    <li class="mb-2"><a href="#!">Engineering</a></li>
                                    <li class="mb-2"><a href="#!">Brand</a></li>
                                    <li><a href="#!">Updates</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-uppercase-expanded text-xs font-weight-bold mb-4">Legal</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                    <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                    <li><a href="#!">License</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row align-items-center">
                    <div class="col-md-6 small">Copyright © Your Website 2021</div>
                    <div class="col-md-6 text-md-right small"><a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms & Conditions</a></div>
                </div>
            </div>
        </footer>
    </section>
    <!--Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>