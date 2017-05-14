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

<section class="header_section_contact_p header_title_cover">
    <div class="container">
        <div class="row">
            <h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Get In Touch With Us</h2>
            <p   class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<br> scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br> like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="services_page.php"><button class="button_style_w wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Services</button></a>
        </div>
    </div>
</section>

<!-- Contact Iputs Section -->

<section class="contact_input_section">
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            <div class="col-md-8">
            <h5>Get In Touch</h5>
            <p>Send us an email by entering your details and any comments you may have in the form.</p>                
            </div>
            <div class="col-md-12">
                <div class="col-md-6 small_padding-lr">
                    <input type="" name="" placeholder="Your Name">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="" name="" placeholder="Email">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="" name="" placeholder="Subject">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="" name="" placeholder="Phone">
                </div>
                <div class="col-md-12 small_padding-lr">
                    <textarea rows="8" placeholder="Message"></textarea>
                </div>
            <div class="col-md-12" style="text-align: center;">
                <button class="button_style_c">Send</button>
            </div>
            </div>
        </div>
        <div class="col-md-4 contact_infos">
            <p  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Alexandre Tabet</p>
            <!-- <p  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">Tel: +971 4 3481405</p> -->
            <p  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Mob: +971 4 346 7312</p>
            <p  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">Address: Villa 1128 Al Wasl Road,</p>
            <p>
            <p  class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".48s">Umm Suqueim 2, Dubai.</p>
            <p>
                <a href="#"><i class="fa fa-facebook wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s" aria-hidden="true" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s" aria-hidden="true" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s" aria-hidden="true" aria-hidden="true"></i>
            </p>
        </div>
        </div>
    </div>
</section>
    
<section class="map_section_contact">    
    <div id="map"></div>
</section>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
  <script>
      function initMap() {
        var uluru = {lat: 25.1497000, lng: 55.211529};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
        scrollwheel: true,
          center: uluru,styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script type="text/javascript">
        $("#em_contact").submit(function(e) {

                var url = "mail.php"; // the script where you handle the form input

                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#em_contact").serialize()+ "&type=" + "special", // serializes the form's elements.
                       beforeSend: function()
                       {
                            
                       },   
                       complete: function(data)
                        {
                            $.notify(data.responseText, "success");
                          
                        }

                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            });

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyiPBi8_Poe9ea3S2HusErfbwSd35aJx8&callback=initMap">
    </script>
</body>

</html>
