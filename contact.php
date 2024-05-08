<!-- logic -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $to = "";
        $subject = "Contact Form Submission " . $_POST['subject'];
        $name = "Name: " . $_POST['name'];
        $email = "Email: " . $_POST['email'];
        $phone = "Phone: " . $_POST['phone'];
        $message = "Message: " . $_POST['message'];

        $headers = "From: " . $_POST['email'] . "\r\n" .
                   "Reply-To: " . $_POST['email'] . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        $body = $name . "\r\n" . $email . "\r\n" . $phone . "\r\n" . $message;

        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Email sent successfully!')</script>";
        } else {
            throw new Exception("Email sending failed!");
        }
    } catch (Exception $e) {
        echo "<script>alert('Email sending failed!')</script>";
    }
}
?>


<?php
$pageTitle = "Contact Us";
require "./header.php";
?>
<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background top-position1" data-overlay-dark="5" data-background="img/bg/bg-01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <span class="triangle-3 z-index-1 d-none d-sm-inline-block"></span>
    <span class="triangle-4 z-index-1 d-none d-sm-inline-block"></span>
    <img src="img/content/dots2.png" class="position-absolute right-5 bottom-5 ani-top-bottom z-index-3 d-none d-sm-block" alt="...">
    <div class="page-title-round ani-move"></div>
</section>

<!-- CONTACT INFO
        ================================================== -->
<section class="contact-form">
    <div class="container">
        <div class="section-heading wow fadeIn pb-2-9" data-wow-delay="100ms">
            <span>Get In Touch</span>
            <h2 class="h1">We’re always here for you to give best service</h2>
        </div>
        <div class="row g-xxl-5 mt-n1-9">
            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="100ms">
                <div class="contact-wrapper">
                    <div class="contact-icon">
                        <i class="ti-mobile fs-1 text-white"></i>
                    </div>
                    <div class="contact-content">
                        <h4 class="h3 mb-3">Call Us</h4>
                        <h2 class="title-hover">Call Us</h2>
                        <a href="#!" class="d-block font-weight-500 mb-1 display-md-28">08118341899</a>
                        <a href="#!" class="font-weight-500 display-md-28">08103108279</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mt-8 mt-md-1-9 wow fadeIn" data-wow-delay="150ms">
                <div class="contact-wrapper">
                    <div class="contact-icon">
                        <i class="ti-email fs-1 text-white"></i>
                    </div>
                    <div class="contact-content">
                        <h4 class="h3 mb-3">Email Address</h4>
                        <h2 class="title-hover">Email</h2>
                        <a href="" class="d-block font-weight-500 mb-1 display-md-28">neyoo.tee.tech@gmail.com</a>
                        <a href="" class="font-weight-500 display-md-28">neyoo.tee.tech@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mt-8 mt-lg-1-9 wow fadeIn" data-wow-delay="200ms">
                <div class="contact-wrapper">
                    <div class="contact-icon">
                        <i class="ti-location-pin fs-1 text-white"></i>
                    </div>
                    <div class="contact-content">
                        <h4 class="h3 mb-3">Address</h4>
                        <h2 class="title-hover">Address</h2>
                        <span class="d-block font-weight-500 w-xxl-55 mx-auto display-md-28">Petplus Vetertinary service, Eleyele road. Ibadan</span>
                        <span class="d-block font-weight-500 w-xxl-55 mx-auto display-md-28">Tolad pet store, Surulere. Lagos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM
        ================================================== -->
<section class="pt-0">
    <div class="container">
        <div class="row gx-lg-0 justify-content-center">
            <div class="col-lg-6 wow fadeIn d-none d-lg-block" data-wow-delay="100ms">
                <div class="bg-img h-100 cover-background" data-overlay-dark="0" data-background="img/bg/bg-03.jpg"></div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeIn position-relative z-index-9" data-wow-delay="200ms">
                    <div class="border p-1-6 p-sm-1-9 p-lg-2-2 form-background">
                        <h2 class="mb-3 h3">Call us or fill the form</h2>
                        <form action="" method="post" enctype="multipart/form-data" onclick="">
                            <div class="quform-elements">
                                <div class="row">
                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Your Name <span>*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Your Email <span>*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Your Subject <span>*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message <span>*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Captcha element -->
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- End Captcha element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn border-0" type="submit">Send Message</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP
        ================================================== -->
<div>
    <iframe class="map-h500 position-relative map-navigation" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
</div>


<!-- FOOTER
        ================================================== -->
<?php require "./footer.php"; ?>

<!-- ================================================== -->