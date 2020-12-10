
<style>
    body {
    background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>



<div id="container-div">
    <h1 class="pageTitleHeader" style="">
        <span class="headerSpan" style="">Customer Profile</span>
    </h1>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="last name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value=""></div>
                        <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="gender" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="address" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Postal Code</label><input type="text" class="form-control" value="" placeholder="postal code"></div>
                        <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" placeholder="city" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="password" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center" style="inline-block"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                        <div class="col-md-6 text-center" style="inline-block"><button class="btn btn-primary profile-button" type="button">Delete Profile</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Fast Checkout (optional)</span><!--<span class="border px-3 p-1 add-experience">Save Info</span>--></div><br>
                    <div class="col-md-12"><label class="labels">Name on Card</label><input type="text" class="form-control" placeholder="cardholder name" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Card Number</label><input type="text" class="form-control" placeholder="card number" value=""></div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Expriation</label><input type="text" class="form-control" placeholder="mm/yyyy" value=""></div>
                        <div class="col-md-6"><label class="labels">CVV</label><input type="text" class="form-control" placeholder="cvv" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Info</button></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Bootstrap Scripts-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../styles/mainPages.css">