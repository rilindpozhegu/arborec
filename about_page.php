<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon-01.png">

    <title>Arborec</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="build/styles.css"> <!-- Resource style -->
    
</head>
<body>


<!-- Header all Pages -->    
    <?php include 'navigation_bar.php';?>

<!-- Cover Section -->

<section class="header_section_about header_title_cover">
    <div class="container">
        <div class="row">
            <h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">About Us</h2>
            <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<br> scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br> like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="services_page.php"><button class="button_style_w wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Services</button></a>
        </div>
    </div>
</section>

<!-- About Page First Section -->

<section class="first_section_about">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/team/member1-01.png" class="img-responsive">
                </div>
                <div class="col-md-9">
                    <h2  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">About Us</h2>
                    <p>Arbor Education Consultants is firmly grounded in the belief that discovering  “good matches” between students and post-secondary institutions is the  primary purpose of the college admission process. Furthermore, it understands  the principle that the process requires close communication and cooperation among the three major “players”; student, parents and counselor. The process  unfolds most successfully when all parties involved approach their various roles  and responsibilities with the intended spirit; open-mindedness, intelligence, honesty, a sense of adventure and even a sense of humor.</p>
                    <p>While the final outcome is important, it is on the process of self-discovery and  college-discovery that Arbor Education Consultants focuses. The moment of  college choice and admissions arrives when students are in the developmental process of late adolescence and emerging young adulthood. The selection of a college provides an important educational opportunity to develop skills and understandings that will serve that function as well as many of life’s major adult challenges.</p>
                    <a href="services_page.php"><button class="button_style_c wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Services</button></a>
                </div>
            </div>
        </div>
</section>


<!-- Second Section About page -->
<section class="second_section_about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 no_padding">
                <img src="img/about_second_sect-01.png" class="img-responsive">
            </div>
            <div class="col-md-6 second_second_pan">
            <div class="col-md-12 ">
                <a href="#"  class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">OUR MISSION <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
                <div class="our_miss_pan_text">
                    <h5 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Our Mission</h5>
                    <p class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Arbor Education Consultants is firmly grounded in the belief that discovering 
                    “good matches” between students and post-secondary institutions is the primary purpose of the college admission process. Furthermore, it erstands the principle that the process requires close communication and cooperation among the three major “players”; student, parents and counselor. The process unfolds most successfully when all parties involved approach their various roles and responsibilities with the intended spirit; ndedness, intelligence, honesty, a sense of adventure and even a sense of humor.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->

<section class="third_section_about">
    <div class="container">
        <div class="row">
            <h1>What We Do</h1>
            <hr>

            <?php include 'card_panel_include.php';?>
        </div>
    </div>
</section>

<!-- Statistics Section -->

    <?php include 'statistics_section_p.php';?>


<!-- Get in touch Section on all pages -->

    <?php include 'get_in_touch_section.php';?>


<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

</body>

</html>
