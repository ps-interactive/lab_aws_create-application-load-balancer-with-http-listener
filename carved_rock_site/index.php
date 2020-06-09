<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carved Rock Fitness</title>
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
            let anchor = document.querySelector('.support')
            anchor.addEventListener('click', function(e) {
                e.preventDefault()
                alert("To make this link work for real, you would need to add a link to the EC2 instance that's hosting the forum application to your HTTP Listener redirect rule.\n\nThat's outside of the scope of this lab, but it's something you can try on your own after completing the lab.")
            })
        }
    </script>
</head>
<body>
<div class="crf">
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand flex-column flex-md-row header-nav--nav">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="navbar-brand d-flex justify-content-between align-items-center">
                    <a href="#"><img alt="Carved Rock Fitness" src="img/carved-rock-logo.png"></a> <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggle" data-target="#navbarNav" data-toggle="collapse" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
                    <div class="header-nav--main">
                        <form class="form-inline form-inline d-none d-sm-none d-md-block">
                            <input aria-label="Search" class="form-control" placeholder="What can we help you find?" type="search"> <button class="btn btn-default" type="submit">SEARCH</button>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Clothing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Footwear</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Equipment</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Bags &amp; Travel</a></li>
                            <li class="nav-item"><a class="nav-link support" href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="header-nav--utilities d-flex align-items-center justify-content-end flex-row-reverse flex-row flex-md-row">
                        <div class="account d-flex flex-column">
                            <a href="#">Sign In</a><br />
                            <?php print(getHostByName(getHostName())); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- MOBILE SEARCH -->
    <section class="header-nav--search d-block d-sm-block d-md-none">
        <form class="form-inline form-inline">
            <input aria-label="Search" class="form-control" placeholder="What can we help you find?" type="search">
        </form>
    </section>

    <!-- HEADER -->
    <div class="jumbotron jumbotron-fluid crf-hero d-flex">
        <div class="container d-flex flex-column justify-content-center align-items-sm-stretch align-items-md-center">
            <h1 class="col-sm-12">GET A GRIP</h1>
            <h2>20% OFF</h2>
            <p class="lead">THROUGHOUT THE SEASON</p>
        </div>
    </div>

    <!-- SALE BANNER -->
    <div class="container crf-cigar-banner">
        <div class="row">
            <div class="crf-cigar-banner--container d-flex justify-content-center align-items-center"><img alt="Brown Boots" class="order-sm-0 order-md-0" src="img/img-brownboots.jpg">
                <div class="crf-cigar-banner--text order-sm-2 order-md-1">
                    <div class="text-light">Couples retreat weekend</div>
                    <div class="text-secondary">Save an extra 20%</div>
                    <div class="text-primary">when you buy 2 pairs of boots</div>
                </div><img alt="Grey Boots" class="order-sm-1 order-md-2" src="img/img-greyboots.jpg"></div>
        </div>
    </div>

    <!-- STORIES -->
    <div class="container crf-story">
        <div class="row">
            <div class="col-lg-3 col-md-6"><a href="#">
                <div class="crf-story--image"><img alt="Splash Chic" src="img/story-1.jpg" /></div>
                <div class="crf-story--text">
                    <h3>Splash Chic</h3>
                    <div>Women's Wet Gear</div>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6"><a href="#">
                <div class="crf-story--image"><img alt="Kid Klimbers" src="img/story-2.jpg" /></div>
                <div class="crf-story--text">
                    <h3>Kid Klimbers</h3>
                    <div>Children's Gear</div>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6"><a href="#">
                <div class="crf-story--image"><img alt="Pack It In" src="img/story-4.jpg" /></div>
                <div class="crf-story--text">
                    <h3>Pack It In</h3>
                    <div>Camping Gear</div>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6"><a href="#">
                <div class="crf-story--image"><img alt="Nature's AC" src="img/story-3.jpg" /></div>
                <div class="crf-story--text">
                    <h3>Nature's AC</h3>
                    <div>Men's Shorts</div>
                </div></a>
            </div>
        </div>
    </div>

    <!-- VISTAS -->
    <div class="container crf-full-banner">
        <div class="row">
            <div class="col d-md-flex align-items-md-stretch flex-md-nowrap">
                <div class="crf-full-banner--image flex-sm-grow-1">
                    <h4 class="d-lg-none">Trail Review</h4>
                </div>
                <div class="crf-full-banner--text d-flex flex-column align-items-center justify-content-center flex-sm-grow-1">
                    <h4>Trail Review</h4>
                    <div>Asphalt</div>
                    <div>National Park</div>
                    <a class="btn btn-default" href="#">See Review</a>
                </div>
            </div>
        </div>
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