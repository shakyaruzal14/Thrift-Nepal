
<?php
    $title = "Contact";
    session_start();
    if(isset($_GET['msg']) && $_GET['msg'] == 'contacted'){
        echo "<script>window.alert('Query sent to admin!');</script>";
    }
    include_once('includes/header.php');
?>
<div class="inner-about inner-contact">
    <div class="overlay-inner">
    </div>
</div>
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Contact Us</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Dear Users, You can directly contact to the admins for your any queries. Just fill up the form given below properly.</p>
        <div class="row">
            <div class="col-lg-6 contact-info-left">
                <ul class="list-unstyled w3ls-items">
                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-home"></span></div>
                            </div>
                            <div class="col-9">
                                <h6>Address</h6>
                                <p>Thrift Nepal
                                    <br>Newroad 14,
                                    <br>Kathmandu, Nepal. </p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-envelope"></span></div>
                            </div>
                            <div class="col-9">
                                <h6>Email</h6>
                                <a href="admin@gmail.com">admin@gmail.com</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row mt-5">
                            <div class="col-3">
                                <div class="con-icon">
                                    <span class="fa fa-phone" style="transform: rotateZ(180deg);"></span> </div>
                            </div>
                            <div class="col-9">
                                <h6>Phone</h6>
                                <p>+977-9860******</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="actions/contact-action.php" method="post" name="contact">
                    <div class="form-group mt-4">
                        <label>Name</label>
                        <input type="text" name="contact-name" class="form-control name" id="validationDefault01" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="email" name="contact-email" class="form-control email" id="validationDefault02" placeholder="" required="">
                    </div>

                    <div class="form-group mt-4">
                        <label class="mb-2">Subject</label>
                        <input type="text" name="contact-subject" class="form-control subject" id="password1" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2">Message</label>
                        <textarea class="form-control message" name="contact-message" name="Message" placeholder="" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4" name="contact-submit" onclick="return contactValidation()">Submit </button>

                </form>

            </div>
        </div>

        
    </div>
</section>
   
<?php
    include_once('includes/footer.php');
?>
