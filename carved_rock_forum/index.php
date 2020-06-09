<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carved Rock Fitness - Support Forum</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        window.onload = function() {
            let logo_anchor = document.querySelector('.logo')
            logo_anchor.addEventListener('click', function(e) {
                e.preventDefault()
                alert("To make this link work for real, you would need to add a link to the EC2 instance that's hosting the main site.\n\nThat's outside of the scope of this lab, but it's something you can try on your own after completing the lab.")
            })
        }
    </script>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
        }
        .container {
            max-width: 1280px;
            margin: 0 auto;
        }
        img {
            max-width: 1280px;
        }
        .logo img {
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="main-content" style="max-width: 1280px;">
        <div style="float: left;">
            <a class="logo" href="#"><img alt="Carved Rock Fitness" src="img/carved-rock-logo.png" /></a>
        </div>
        <div style="float: right;">
            <?php print(getHostByName(getHostName())); ?>
        </div>
    </div>
    <div style="clear: left; margin: 0 auto;">
        <img alt="Sample Forum" src="img/sample-forum.png" />
    </div>
    <!-- FOOTER -->
    <footer class="d-flex justify-content-stretch">
        <div class="crf-footer--category">
            <div class="container">
                <div class="row row d-md-flex justify-content-between flex-sm-column flex-lg-row">
                    <div class="crf-footer--links active">
                        <div class="crf-footer--header text-primary">Customer Support</div>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Tracker</a></li>
                            <li><a href="#">Returns &amp; Refunds</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Store Locator</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="crf-footer--links">
                        <div class="crf-footer--header text-primary">Company Info</div>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Students</a></li>
                            <li><a href="#">Mobile Apps</a></li>
                        </ul>
                    </div>
                    <div class="crf-footer--links">
                        <div class="crf-footer--header text-primary">Privacy &amp; Terms</div>
                        <ul>
                            <li><a href="#">Privacy &amp; Security</a></li>
                            <li><a href="#">Statement</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="crf-footer--links crf-footer--social">
                        <div class="crf-footer--header text-primary d-lg-block  d-none d-sm-none">Follow Us</div>
                        <ul class="d-lg-block  d-none d-sm-none">
                            <li><a href="#" class="crf-footer--icon twitter"></a></li>
                            <li><a href="#" class="crf-footer--icon facebook"></a></li>
                            <li><a href="#" class="crf-footer--icon pinterest"></a></li>
                            <li><a href="#" class="crf-footer--icon instagram"></a></li>
                            <li><a href="#" class="crf-footer--icon googleplus"></a></li>
                        </ul>
                        <div class="crf-footer--newsletter">
                            <div class="crf-footer--header">Email Updates</div>
                            <div class="crf-footer--subheader">Exclusive sales, special offers, and more.</div>
                            <input type="text" class="form-control" placeholder="Enter email address" />
                            <button class="btn btn-primary">Sign up</button>
                        </div>
                    </div>
                    <div class="crf-footer--links crf-footer-m--social d-block   d-lg-none">
                        <div class="crf-footer--header text-primary">Follow Us</div>
                        <ul>
                            <li><a href="#" class="crf-footer--icon twitter"></a></li>
                            <li><a href="#" class="crf-footer--icon facebook"></a></li>
                            <li><a href="#" class="crf-footer--icon pinterest"></a></li>
                            <li><a href="#" class="crf-footer--icon instagram"></a></li>
                            <li><a href="#" class="crf-footer--icon googleplus"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="crf-footer--logo d-flex">
            <div class="container justify-content-start align-items-center d-flex flex-column">
                <img src="img/pluralsight-white.png" />
                <div>This site is created for demonstrative purposes only and does not offer any real products or services.</div>
            </div>
        </div>
        <div class="crf-footer--copyright text-primary">@Pluralsight 2018</div>
    </footer>

</div>
</body>
</html>