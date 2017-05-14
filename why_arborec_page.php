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

<section class="header_section_services header_title_cover">
    <div class="container">
        <div class="row">
            <h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Why Us</h2>
            <p   class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<br> scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br> like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="services_page.php"><button class="button_style_w wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Services</button></a>
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

<!-- Second Section About page -->
<section class="second_section_about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 no_padding">
                <img src="img/services_second_sect-01.png" class="img-responsive">
            </div>
            <div class="col-md-6 second_section_services_p">
                <div class="our_miss_pan_text_services">
                    <h5  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">BENEFITS OF USING ARBOREC</h5>
                    <h4  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    Educational planning requires <br>
                    time, specialized knowledge that <br>
                    often exceed the scope of the resources <br>
                    available to applicants.</h4>
                    <hr  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Reduce the significant effort and time required <br>
                    Evaluate the greater choices faced by students today<br>
                    Avoid risking a costly mistake<br>
                    Resolve conflicts and facilitate communication<br>
                    Provide a measure of objectivity   </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial CCC ColorServices -->
<section class="testimonial_services_page">
    <?php include 'testimonial_section_all.php';?>
</section>


<!-- Get in touch Section on all pages -->

    <?php include 'get_in_touch_section.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

</body>

</html>
