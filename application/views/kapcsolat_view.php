<?php include('header.php'); ?>


<!-- PAGE TITLE -->
<div class="page-title-cont page-title-big grey-light-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">CONTACT</h1>
                <div class="page-sub-title">
                    Lorem ipsum dolor sit amet, consectetur elit
                </div>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES</a><span class="slash-divider">/</span><span class="bread-current">CONTACT</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- GOOGLE MAP & CONTACT FORM -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <div data-address="1096 Budapest Ipar utca 2." id="google-map"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                        <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                    </div>

                    <!-- CONTACT FORM -->
                    <div class="">
                        <form id="contact-form" action="php/contact-form.php" method="POST">

                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your name *</label> -->
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="NAME" required>
                                </div>
                            </div>

                            <div class="row">    
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your email address *</label> -->
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-40">
                                    <!-- <label>Message *</label> -->
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 ">
                                    <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                                </div>
                            </div>

                        </form>	
                        <div class="alert alert-success hidden" id="contactSuccess">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="alert alert-danger hidden" id="contactError">
                            <strong>Error!</strong> There was an error sending your message.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- DIVIDER -->
<hr class="mt-0 mb-0">          

<!-- CONTACT INFO SECTION 1 -->
<div id="contact-link" class="page-section p-110-cont grey-light-bg">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-map"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">ADDRESS</span></h3>
                        <p>790 FOLSOM AVE, SAN FRANCISCO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-mail"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">EMAIL</span></h3>
                        <p><a href="mailto:info@haswell.com">INFO@HASWELL.COM</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-smartphone"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">CALL US</span></h3>
                        <p>1-800-312-212, 1-800-311-101</p>
                    </div>
                </div>
            </div>

        </div>
    </div>        
</div>        

<!-- CLIENTS 1 & TESTIMONIALS 1 -->
<div id="clients-link" class="page-section p-110-cont">
    <div class="container">
        <div class="row">
            <!-- CLIENTS 1 -->
            <div class="col-md-7">
                <div class="row client-row border-bot">

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/1.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/2.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/3.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/4.png">
                    </div>

                </div>

                <div class="row client-row">

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/5.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/6.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/7.png">
                    </div>

                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="<?= ASSET_URL ?>images/clients/8.png">
                    </div>

                </div>

            </div>
            <!-- TESTIMONIALS 1 -->
            <div class="col-md-5">
                <blockquote class="quote mb-0 pl-50-min-1169">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, maiores esse temporibus accusantium quas soluta quis sed rerum.</p>
                    <footer>John Doe, Google Inc.</footer>
                </blockquote>
            </div>

        </div>
    </div>
</div>



<?php include('footer.php'); ?>