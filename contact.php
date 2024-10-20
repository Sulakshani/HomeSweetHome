<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- ================== Start Url ================== -->
<?php include 'inc/url.php'; ?>
<!-- ================== End Url ================== -->

<head>

    
    <!-- Page Title --> 
    <title>Contact Us | Home Sweet Home Real Estate Company</title>

    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- ================== Start Css ================== -->
    <?php include 'inc/style.php'; ?>
    <!-- ================== End Css ================== -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />


</head>

<!-- Page Wrapper -->

<body class="boxed_wrapper">

    <!--- Start header !-->
    <?php include 'inc/header.php'; ?>
    <!--- End header !-->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-5" data-bs-bg="<?php echo $url; ?>assets/img-1/contact-breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 breadcrub-pt">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title breadcrub-pg-1">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul class="breadcrub-pg-ul">
                                <li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li class="breadcrub-pg-2">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow bg-contact" style="padding-bottom: 65px;">
                        <div class="ltn__contact-address-icon">
                            <img src="assets/img-1/envelop.png" alt=" Property Management">
                        </div>
                        <h3>Email Address</h3>
                        <p style="color: black;">info@homesweethome.ae</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow bg-contact" style="padding-bottom: 45px;">
                        <div class="ltn__contact-address-icon">
                            <img src="assets/img-1/telephone.png" alt="UAE Residential Properties">
                        </div>
                        <h3>Phone Number</h3>
                        <p style="color: black;">+94 (0)50 534 2627 <br> +94 (0)50 673 6789</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow bg-contact">
                        <div class="ltn__contact-address-icon">
                            <img src="assets/img-1/location.png" alt="UAE Commercial Properties">
                        </div>
                        <h3>Office Address</h3>
                        <p style="color: black;">A168/A, Handahettiya, <br>main town street, <br>Ambepussa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title main-heading-font-css">Quick Contact</h1>
                    </div>

                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <form id="contact_form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                        <input type="text" name="name" id="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email">
                                        <input type="email" name="email" id="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-subject">
                                        <input type="text" name="subject" id="subject" placeholder="Enter subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone">
                                        <input type="text" name="phone" id="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea">
                                <textarea name="message" id="message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn contact-btn btn-effect-1 text-uppercase" type="submit" id="submit">Contact Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.555919459519!2d80.3457212!3d7.2534746499999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae316b5affca98d%3A0xec4aece6bdbb55b1!2sKegalle!5e0!3m2!1sen!2slk!4v1729365200284!5m2!1sen!2slk" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></iframe>
    <!-- GOOGLE MAP AREA END -->

    <!--- Start Footer !-->
    <?php include 'inc/footer.php' ?>
    <!--- End Footer !-->

    <!--- Start !-->
    <?php include 'inc/script.php'; ?>
    <!--- End !-->

    <script>
        $("#submit").click(function(e) {
            e.preventDefault();

            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;


            if (name == "" || email == "") {
                $.toast({
                    heading: "Something Else!",
                    text: "All of Feied fill out",
                    position: "top-right",
                    loaderBg: "#FF0000",
                    icon: "error",
                    hideAfter: 5000,
                    stack: 6,
                });
            } else {
                $.ajax({
                    url: "inc/send-mail",
                    method: "POST",
                    data: $("#contact_form").serialize(),
                    beforeSend: function() {
                        $("#invisibleF").prop("disabled", true);
                    },
                    success: function() {
                        $("form").trigger("reset");

                        $.toast({
                            heading: "Congratulations !",
                            text: "Your Message Has Been Successfully Submitted!",
                            position: "top-right",
                            loaderBg: "#fec107",
                            icon: "success",
                            hideAfter: 2000,
                            stack: 6,
                        });
                        setTimeout(function() {
                            $("#invisibleF").hide();
                            $("#visibleF").show();
                        }, 1000);

                        setTimeout(function() {
                            $("#invisibleF").show();
                            $("#visibleF").hide();
                        }, 4000);
                    },
                });
            }
        });
    </script>

    <!-- CDN PLUGING -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <!-- CDN PLUGING END -->

</body>

</html>