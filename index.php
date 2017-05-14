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

<section class="header_section_home header_title_cover">
    <div class="container">
        <div class="row">
            <h2  class="wow fadeInUp">Welcome to Arbor</h2>
            <p class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<br> scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br> like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="services_page.php"><button class="button_style_w wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">Services</button></a>
        </div>
    </div>
</section>

<!-- First section Home Image and text+button -->

<section class="first_section_home">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/team/Alex Tabet.png" class="img-responsive wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                </div>
                <div class="col-md-9">
                    <h2 class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Our Mission</h2>
                    <p class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">Arbor Education Consultants is firmly grounded in the belief that discovering  “good matches” between students and post-secondary institutions is the  primary purpose of the college admission process. Furthermore, it understands  the principle that the process requires close communication and cooperation among the three major “players”; student, parents and counselor. The process  unfolds most successfully when all parties involved approach their various roles  and responsibilities with the intended spirit; open-mindedness, intelligence, honesty, a sense of adventure and even a sense of humor.</p>
                    <p class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">While the final outcome is important, it is on the process of self-discovery and  college-discovery that Arbor Education Consultants focuses. The moment of  college choice and admissions arrives when students are in the developmental process of late adolescence and emerging young adulthood. The selection of a college provides an important educational opportunity to develop skills and understandings that will serve that function as well as many of life’s major adult challenges.</p>
                    <a href="about_page.php"><button class="button_style_c wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">About Us</button></a>
                </div>
            </div>
        </div>
</section>

<!-- Second Section Homepage -->

<section class="second_section_home">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What We Do</h2>
            <hr  class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
            <p  class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
            <?php include 'card_panel_include.php';?>
        </div>
        <div class="col-md-12">
            <button class="button_style_c wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">View More Information</button>
        </div>
    </div>
</section>



<!--  Third Section on Homepage -->
    <?php include 'testimonial_why_us.php';?>

<!-- Testimonial Section What peoples says :P  -->
    <?php include 'testimonial_section_all.php';?>



<!-- News Section Homepage -->
<section class="news_section_home">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-6 col-md-6 col-xs-12">
                <h5 class=" wow zoomIn" data-wow-duration="1.2s" data-wow-delay=".2s">Sign Up<br>To Our Newsletter</h5>
                <p class="wow zoomIn" data-wow-duration="1.2s" data-wow-delay=".3s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                <input type="" name="" placeholder="Enter Your Email" class=" wow zoomIn" data-wow-duration="1.2s" data-wow-delay=".4s">
                <button class="button_style_w wow zoomIn" data-wow-duration="1.2s" data-wow-delay=".4s">Submit</button>
            </div>
        </div>
    </div>
</section>


<!-- Get in touch Section on all pages -->

    <?php include 'get_in_touch_section.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
