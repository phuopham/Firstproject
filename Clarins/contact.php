<?php
$page = "contact";

require_once('dbconnect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['subject']) || empty($_POST['subject'])) {
        header("location:contact.php?error");
        die();
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
    $conn->query($sql);
    header("location:contact.php?success");
endif;

include("header.php");
?>
<div>
    <img src="img/bg3.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available; max-height: -webkit-fill-available;margin-top: -9%; height:200%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.5);">

        <!-- Contact start -->
        <div class="container-fluid py-5" style="margin-top:-5%;">
            <div class="container py-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="section-title position-relative text-center mb-5 text-white">Contact Us For Any Query</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="contact-form bg-light rounded p-5">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post">
                                <div class="form-row">
                                    <div class="col-sm-6 control-group pb-3">
                                        <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="col-sm-6 control-group pb-3">
                                        <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" />
                                    </div>
                                </div>
                                <div class="control-group pb-3">
                                    <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject" required="required" />
                                </div>
                                <div class="control-group pb-3">
                                    <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Our store start -->
        <section style="margin-top:-5%;">
            <div class="container-fluid footer bg-light py-5">
                <div class="container text-center py-5 mt-5">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1 class="section-title position-relative text-center mb-5">Our Store</h1>
                            </div>
                        </div>
                        <div style="display:flex; flex-wrap:wrap;">
                            <div class="col-md-4">
                                <div class="text-center text-sm-left border-right mb-3 mb-sm-5">
                                    <h5 class="font-weight-bold mb-3">Get In Touch</h5>
                                    <h5 class=" mb-3">Visit one of our agency locations or contact us today</h5>
                                </div>
                                <div class="text-center text-sm-left">
                                    <h5 class="font-weight-bold mb-3">Our Store</h5>
                                    <p class="mb-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                        285 Doi Can, Ba Dinh, Ha Noi, Viet Nam
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-phone"></i>
                                        +012 345 67890
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-clock"></i>
                                        Mon – Sat, 8AM – 5PM
                                    </p>
                                    <p class="mb-0">Sunday: Closed</p>
                                </div>
                            </div>
                            <div class="col-md-8 text-center text-sm-right">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278651594!2d105.81684051396614!3d21.035715592918905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653971874345!5m2!1svi!2s" style="border: 0;max-width: 100%;border: 0;width: -webkit-fill-available;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Store end -->

    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // alert
    const sabootstrap = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary',
        },
        buttonsStyling: false
    })
    <?php
    if (isset($_GET["error"])) :
        echo ("sabootstrap.fire('Please check your input','Fields cannot leave blank','error')");
    endif;
    if (isset($_GET["success"])) :
        echo ("sabootstrap.fire('Thank you!','We appreciate what you have done!','success')");
    endif;
    ?>
</script>
<?php
include('footer.php');
?>