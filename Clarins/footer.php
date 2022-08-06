<!-- Footer Start -->
<div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <a href="index.html" class="navbar-brand m-0">
                    <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">C</span>LARINS</h1>
                </a>
            </div>
            <div class="col-12 mb-4">
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-12 mt-2 mb-4">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                        <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt"></i>
                            285 Doi Can, Ba Dinh, Ha Noi, Viet Nam
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-phone"></i>
                            +012 345 67890
                        </p>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left">
                        <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2"><?php echo ($footer_opentime); ?></p>
                        <p class="mb-0">Sunday: Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by NHP</a>
                </p>
            </div>
            <div class="clock fixed-bottom" style="right:auto; margin-left:5%;">
                <div id="Date" class="text-align-left"></div>
                <ul class="ultime row">
                    <li class="idtime col" id="hours" style="display:block;"></li>
                    <li class="idtime " id="point" style="display:block;">:</li>
                    <li class="idtime col" id="min" style="display:block;"></li>
                    <li class="idtime " id="point" style="display:block;">:</li>
                    <li class="idtime col" id="sec" style="display:block;"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- clock -->

<script>
    $(document).ready(function() {

        // Create two variable with the names of the months and days in an array
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        // Create a newDate() object
        var newDate = new Date();
        // Extract the current date from Date object
        newDate.setDate(newDate.getDate());
        // Output the day, date, month and year   
        $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

        setInterval(function() {
            // Create a newDate() object and extract the seconds of the current time on the visitor's
            var seconds = new Date().getSeconds();
            // Add a leading zero to seconds value
            $("#sec").html((seconds < 10 ? "0" : "") + seconds);
        }, 1000);

        setInterval(function() {
            // Create a newDate() object and extract the minutes of the current time on the visitor's
            var minutes = new Date().getMinutes();
            // Add a leading zero to the minutes value
            $("#min").html((minutes < 10 ? "0" : "") + minutes);
        }, 1000);

        setInterval(function() {
            // Create a newDate() object and extract the hours of the current time on the visitor's
            var hours = new Date().getHours();
            // Add a leading zero to the hours value
            $("#hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);
    });
</script>

<!-- clock end -->

</body>

</html>