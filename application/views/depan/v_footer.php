<footer>
    <div class="container d-flex justify-content-center">
        <div class="row  ">
            <div class="col-md-4">
                <div class="foot-logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo base_url() . 'theme/images/logo.png' ?>" class="img-fluid" alt="footer_logo" style="width: 100px; height: 70px;">
                    </a>
                    <p><?php echo date('Y'); ?> © copyright by <a href="#" target="_blank">TK Kasih Karunia</a>. <br>All rights reserved.</p>
                </div>
            </div>
            <?php foreach ($konfig->result_array() as $i) :

                $konfig_alamat = $i['konfig_alamat'];
                $konfig_telepon = $i['konfig_telepon'];
                $konfig_email = $i['konfig_email'];

            ?>
                <div class="col-md-4">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <?php echo $konfig_alamat; ?></p>
                        <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo $konfig_email; ?></p>
                        <p><span><i class="fa fa-phone"></i></span> <?php echo $konfig_telepon; ?></p>
                        <!-- <ul class="footer-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                                </ul> -->
                    </div>
                </div>

            <?php endforeach; ?>
            <div class="col-md-4">
                <div class="maps" style="padding: 60px 0 0;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.43933861116747!2d123.59261911899699!3d-10.178264160001527!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569d755288e077%3A0x2cc5f6ddc9307c56!2sGereja%20Kasih%20Karunia%20Filipi%20Kupang!5e0!3m2!1sid!2sid!4v1647175207173!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>

</footer>
<button id="myBtn"><i class='fas fa-angle-double-up' style='font-size:24px'></i></button>
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
<!-- Plugins -->
<script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/dist/aos.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/dist/vanilla-tilt.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/dist/lightbox.js' ?>"></script>


<!-- Script JS -->
<script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
<script src="https://kit.fontawesome.com/f17620594e.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() . 'theme/js/jquery-ui-1.10.4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/jquery.isotope.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/animated-masonry-gallery.js' ?>"></script>

<!-- Magnific popup JS -->
<script src="<?php echo base_url() . 'theme/js/jquery.magnific-popup.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/contact.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/dataTables.bootstrap4.min.js' ?>"></script>
<script>
    $(document).ready(function() {
        $('#display').DataTable();
    });
</script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".sarana"), {
        max: 25,
        speed: 400
    });

    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".sarana"));
</script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".prestasi"), {
        max: 25,
        speed: 400
    });

    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".prestasi"));
</script>
<!-- <script>$('.owl-carousel').owlCarousel({loop:true,margin:10, nav:true,responsive:{
                0:{items:1},
                600:{items:3},
                1000:{items:5}
            }
            })
            </script> -->
<script>
    AOS.init();
</script>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>

</html>