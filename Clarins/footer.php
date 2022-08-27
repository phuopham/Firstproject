<!-- Footer Start -->
<div class="container-fluid footer bg-light py-5">
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
                <p class="m-0">&copy; <a href="index.php">Clarins</a>. All Rights Reserved. Designed by Nhóm 2 - C2111L</a>
                </p>
            </div>
            <div class="clock fixed-bottom rounded bg-primary d-none d-md-block ml-5 px-2" style="right:auto; opacity:70%;">
                <div id="Date" class="text-align-left font-weight-bold text-white"></div>
                <ul class="ultime px-0 my-0">
                    <li class="geo d-inline-block font-weight-bold text-white"></li>
                    <li class="d-inline-block font-weight-bold text-white">-</li>
                    <li class="idtime d-inline-block font-weight-bold text-white" id="hours"></li>
                    <li class="idtime d-inline-block font-weight-bold text-white" id="point">:</li>
                    <li class="idtime d-inline-block font-weight-bold text-white" id="min"></li>
                    <li class="idtime d-inline-block font-weight-bold text-white" id="point">:</li>
                    <li class="idtime d-inline-block font-weight-bold text-white" id="sec"></li>
                </ul>
                <div class="toggle-btn" style="display:none;">
                    <i class="fas fa-angle-up"></i>
                </div>
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
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/geo.js"></script>
<!-- clock -->

<script>
    $('.clock').on('click', () => {
        $('#Date').toggle();
        $('.ultime').toggle();
        $('.toggle-btn').toggle();
    })
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

    // clock end //
    // categories button //
    function categories() {
        $("#categories").toggle();
    }
    $("#categories").on("click", () => {
        $("#categories").hide();
    })
</script>



</body>

</html>