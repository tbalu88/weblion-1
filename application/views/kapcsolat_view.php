<?php include('header.php'); ?>


        <!-- PAGE TITLE -->
        <div class="page-title-cont page-title-small grey-light-bg">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title">CONTACT</h1>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES</a><span class="slash-divider">/</span><span class="bread-current">CONTACT</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
          <!-- GOOGLE MAP -->
          <div class="page-section">
            <div class="container-fluid">
              <div class="row">
                <div data-address="555 California Street Building, California Street, San Francisco, CA" id="google-map"></div>
              </div>
            </div>
          </div>
          
          <!-- CONTACT INFO SECTION 1 -->
          <div id="contact-link" class="page-section p-80-cont grey-light-bg">
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
           
          <!-- CONTACT FORM -->
          <div class="page-section pt-110-b-80-cont">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                                  
                    <!-- CONTACT FORM -->
                    <div class="">
                      <form id="contact-form" action="php/contact-form.php" method="POST">
                      
                        <div class="row">
                        
                          <div class="col-md-6">
                            <div class="row">
                        
                              <div class="col-md-12 mb-23">
                                <!-- <label>Your name *</label> -->
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control " name="name" id="name" placeholder="NAME" required>
                              </div>
                               
                              <div class="col-md-12 mb-23">
                                <!-- <label>Your email address *</label> -->
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control " name="email" id="email" placeholder="EMAIL" required>
                              </div>
                            
                            </div>
                          </div>
                        
                          <div class="col-md-6">
                            <!-- <label>Message *</label> -->
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control " name="message" id="message" placeholder="MESSAGE" required></textarea>
                            
                            <div class="text-right">
                              <input type="submit" value="SEND MESSAGE" class="button medium gray mt-40" data-loading-text="Loading...">
                            </div>
                            
                          </div>
                          
                        </div>
                        
<!--                         <div class="row">
                          <div class="col-md-12 ">
                            <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                          </div>
                        </div> -->
                        
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

<?php include('footer.php'); ?>