<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon-01.png">

    <title>Arborec</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="build/styles.css"> <!-- Resource style -->

 
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
    
</head>
<body>


<!-- Header all Pages -->    
    <?php include 'navigation_bar.php';?>

<!-- Cover Section -->

<section class="header_section_statistics header_title_cover">
    <div class="container">
        <div class="row">
            <h2  class="wow fadeInUp">Statistics</h2>
            <p class=" wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<br> scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br> like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a href="services_page.php"><button class="button_style_w wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">Read More</button></a>
        </div>
    </div>
</section>

<section class="statistics_section_bg">
    <div class="container">
        <div class="row">   
            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="color: white">                
                <div id="chart_one" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto" style="color: red !important;"></div>
            </div>      
            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">                
                <div id="chart_two" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            </div>     
            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">                
                <div id="chart_three" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            </div>      
        </div>
    </div>
</section>

<!-- Panels sections -->

<section class="panels_section_statistics_p">
    <div class="container">
        <div class="row">
            <h1 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".1s">Acceptances (Matriculations)</h1>

                <div class="col-md-4 col-xs-12 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="stats_small_panel_sh row">
                    <div class="col-md-9 col-sm-9 col-xs-9 no_padding small_panel_title">
                        <h2>CANADA</h2>    
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-1 no_padding">
                        <img src="img/icons/canada-01.svg">    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 no_padding">
                        <p>McGill University (2)</p>
                        <p>University of Toronto (1)</p>
                    </div>             
                </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="stats_small_panel_sh row">
                        <div class="col-md-9 col-sm-9 col-xs-9 no_padding small_panel_title">
                            <h2>UNITED KINGDOM</h2>    
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-offset-2 no_padding">
                            <img src="img/icons/uk-01.svg">    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 no_padding">
                            <p>Imperial College of London (3)</p>
                            <p>London School of Economics and Political Science (2)</p>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-4 no_padding">
                            <p>University College of London (1)</p>
                            <p>University of Cambridge (1)</p>
                        </div>              
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="stats_small_panel_sh row">
                        <div class="col-md-9 col-sm-9 col-xs-9 no_padding small_panel_title">
                            <h2>UNITED STATES OF AMERICA</h2>    
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-offset-2 no_padding">
                            <img src="img/icons/us-01.svg">    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 no_padding">
                            <p>American University (5)</p>
                            <p>Austin college (1)</p>
                            <p>Babson College (1)</p>
                            <p>Bates College (2)</p>
                            <p>Bentley University (2)</p>
                            <p>Brown University</p>
                            <p>Brown University-PLME Program (1)</p>
                            <p>Carnegie Mellon University (1)</p>
                            <p>Chapman University (1)</p>
                            <p>Claremont McKenna College (1)</p>
                            <p>College of William and Mary (1)</p>
                            <p>Columbia University (2)</p>
                            <p>Cornell University (5)</p>
                            <p>Dartmouth College</p>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-4 no_padding">
                            <p>Denison University (3)</p>
                            <p>Duke University (1)</p>
                            <p>George Washington University (3)</p>
                            <p>Georgetown University</p>
                            <p>Goucher College (1)</p>
                            <p>Indiana University-Bloomington (2)</p>
                            <p>Johns Hopkins University</p>
                            <p>Loyola Marymount University (2)</p>
                            <p>Macalester College</p>
                            <p>Massachusetts Institute of Technology (3)</p>
                            <p>Michigan State University (3)</p>
                            <p>Middlebury College</p>
                            <p>New College of Florida (1)</p>
                            <p>New York University (3)</p>
                        </div>            
                        <div class="col-xs-12 col-sm-12 col-md-4 no_padding">
                            <p>Northeastern University (5)</p>
                            <p>Northwestern University (4)</p>
                            <p>Northwestern University HPME Program</p>
                            <p>Occidental College (1)</p>
                            <p>Pennsylvania State University (1)</p>
                            <p>Princeton University (2)</p>
                            <p>Purdue University-West Lafayette (1)</p>
                            <p>Rice University (2)</p>
                            <p>Santa Clara University (2)</p>
                            <p>School of the Art Institute of Chicago (2)</p>
                            <p>Skidmore College (1)</p>
                            <p>Stanford University (1)</p>
                            <p>Swarthmore College</p>
                            <p>University of California-Berkeley</p>
                            <p>University of California-Irvine</p>
                        </div>
                        <div class="clearfix"></div>  

                        <div class="col-xs-12 col-sm-12 col-md-5 no_padding">
                            <p>University of California-Los Angeles</p>
                            <p>University of California-San Diego (2)</p>
                            <p>University of California-Santa Barbara</p>
                            <p>University of California-Santa Cruz (2)</p>
                            <p>University of Chicago (2)</p>
                            <p>University of Colorado-Boulder (6)</p>
                            <p>University of Illinois-Urbana Champaign</p>
                            <p>University of Michigan-Ann Arbor (12)</p>
                            <p>University of Pennsylvania</p>
                            <p>University of Pennsylvania Huntsman (1)</p>
                            <p>University of Southern California</p>
                            <p>University of Virginia (1)</p>
                            <p>University of Wisconsin-Madison (5)</p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 no_padding">
                            <p>Vassar College</p>
                            <p>Wake Forest University (1)</p>
                            <p>Wellesley College (1)</p>
                            <p>Wesleyan University (2)</p>
                            <p>Williams College</p>
                            <p>Worcester Polytechnic Institute (1)</p>
                            <p>Yale University</p>
                        </div>
                    </div>
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
    <script type="text/javascript">

$(document).ready(function () {

    // Build the chart
    Highcharts.chart('chart_one', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'STUDENT NATIONALITIES'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Countries',
            colorByPoint: true,
            data: [{
                name: 'Emirates' + '<br>',
                y: 35.00,
            }, {
                name: 'Europe and North America',
                y: 34.00,
                // sliced: true,
                // selected: true
            }, {
                name: 'Asian',
                y: 15.00
            }, {
                name: 'Middle Eastern and North African',
                y: 9.00
            }, {
                name: 'Nigerian',
                y: 7.00
            }]
        }]
    });
});




$(document).ready(function () {

    // Build the chart
    Highcharts.chart('chart_two', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'STUDENT ETHNICITIES'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Countries',
            colorByPoint: true,
            data: [{
                name: 'Middle Eastern and North Africa',
                y: 58.00,
            }, {
                name: 'Europe and North America',
                y: 21.00,
                // sliced: true,
                // selected: true
            }, {
                name: 'European',
                y: 14.00
            }, {
                name: 'Sub-Saharan African',
                y: 7.00
            }]
        }]
    });
});




$(document).ready(function () {

    // Build the chart
    Highcharts.chart('chart_three', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'PLACEMENT SUCCESS'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Countries',
            colorByPoint: true,
            data: [{
                name: 'Admitted into Tier 1 universities',
                y: 58.00,
            }, {
                name: 'Europe and North America',
                y: 48.00,
                // sliced: true,
                // selected: true
            }, {
                name: 'enrolled in universities ranked among the top 25',
                y: 7.00
            }]
        }]
    });
});

    </script>
</body>

</html>
