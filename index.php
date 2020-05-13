<?php
include './class/include.php';

$ABOUT_US=new Page(1);

?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from designarc.biz/demos/wood-workshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 08:46:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wood workshop</title>
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">

   <!--    fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:800,700,500,400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
    
    <link href='https://fonts.googleapis.com/css?family=Alegreya:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/strock-icon.css" rel="stylesheet">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css"> 
    <link href="vendors/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="vendors/magnific/magnific-popup.css" rel="stylesheet">
    <!--    css-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!--header-->
<?php
include ("./header.php");
?>
<!--rv-slider-->

<section class="bannercontainer row">
    <div class="rev_slider banner row m0" id="rev_slider" data-version="5.0">
        <ul>
           <?php
           $SLIDER = new Slider (null);
           foreach ($SLIDER->all() as $key => $slider){
               if ($key == 0) {         
           ?>
            
            <li data-transition="slidehorizontal"  data-delay="10000">
                <img src="upload/slider/<?php echo $slider['image_name']; ?>"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                <div class="tp-caption sfr tp-resizeme carpenters-h1" 
                    data-x="0" data-hoffset="690" 
                    data-y="255" data-voffset="160" 
                    data-whitespace="nowrap"
                    data-start="900">
                    <h4><?php echo $slider['title'];?></h4>

                </div>
                <div class="tp-caption sfb tp-resizeme carpenters-h2" 
                    data-x="0" data-hoffset="690" 
                    data-y="310" data-voffset="350" 
                    data-whitespace="nowrap"
                    data-start="1200">
                    for your wooden work
                </div>
                <div class="tp-caption sfb tp-resizeme carpenters-ul" 
                    data-x="0" data-hoffset="690" 
                    data-y="375" data-voffset="470" 
                    data-whitespace="nowrap"
                    data-start="1500">
                    <ul class="nav">
                        <li><a href="#">Domestic</a></li>
                        <li><a href="#">Commercial</a></li>
                        <li><a href="#">Industrial</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfb tp-resizeme carpenters-p" 
                    data-x="0" data-hoffset="500" 
                    data-y="430" data-voffset="470" 
                    data-whitespace="nowrap"
                    data-start="1800">                    
                    <h3><?php echo $slider['description'];?></h3>
                </div>
                <div class="tp-caption sfb tp-resizeme carpenters-b" 
                    data-x="0" data-hoffset="690" 
                    data-y="550" data-voffset="555" 
                    data-whitespace="nowrap"
                    data-start="2000">                    
                    <a href="#" class="btn btn-2 submit">PUrchase now</a>
                    <a href="#" class="btn btn-2 submit">our services</a>
                </div>
            </li>
            
           <?php
           } else {
           ?>
            <li data-transition="parallaxvertical">
                <img src="upload/slider/<?php echo $slider['image_name']; ?>"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption sfb tp-resizeme carpenters-ul type2" 
                    data-x="left" data-hoffset="620" 
                    data-y="255" data-voffset="470" 
                    data-whitespace="nowrap"
                    data-start="1500">
                    <ul class="nav">
                        <li><a href="#">Domestic</a></li>
                        <li><a href="#">Commercial</a></li>
                        <li><a href="#">Industrial</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfr tp-resizeme carpenters-h1 type2" 
                    data-x="left" data-hoffset="620" 
                    data-y="320" data-voffset="160" 
                    data-whitespace="nowrap"
                    data-start="900">
                    <h3><?php echo $slider['title'];?></h3>
                </div>
            </li>
            
            <?php 
            }
           }
            ?>
            
             
        </ul>
    </div>
 </section>

<!--experiance-area-->
<section class="row experience-area">
   <div class="container">
       <div class="row">
           <div class="col-sm-5 worker-image">
               <img src="upload/page/<?php echo $ABOUT_US->image_name?>" alt="">
           </div>
           <div class="col-sm-7 experience-info">
              <div class="content">
                  <h2><?php echo $ABOUT_US->title?></h2> 
                  <p><?php echo $ABOUT_US->description?>
                  </p> 
                  <div class="row m0">
                            <button type="submit" class="btn btn-default submit">Read More</button>
                        </div>
              </div>
           </div>
       </div>
   </div>
</section>


<!--we-do-->
<section class="row sectpad we-do-section">
    <div class="container">
        <div class="row m0 section_header color">
           <h2>Product Type</h2> 
        </div>
        <div class="we-do-slider">
            <div class="we-sliders">
                <?php 
                $PRODUCT_TYPE = new ProductType(null);
                foreach ($PRODUCT_TYPE->all() as $product_type) {
                ?>
                <div class="item text-center">
                    <div class="post-image">
                        <img src="upload/product-type/<?php echo $product_type['image_name'];?>"  alt="">
                    </div>
                    <a href="product-type.php"><h4><?php echo $product_type['short_description'];?></h4></a>
                   
                </div>
                <?php } ?>
              
            </div>
        </div>
    </div>
</section>




<!--work-shop-->

<!--testimonial-->


<!-- latest-news-area -->
<section class="row sectpad latest-news-area">
    <div class="container">
        <div class="row m0 section_header">
           <h2>latest news</h2> 
        </div>
        <div class="row latest-content">
            <div class="col-sm-4 clo-xs-12 latest">
                <div class="row m0 latest-image">
                    <a href="blog-details.html"><img src="images/latest-news/1.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="blog.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row widget widget-tag-clouds">
                        
                        <div class="row widget-inner clouds">
                            <a href="blog-details.html" class="widget-tag">Read more</a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-sm-4 clo-xs-12  latest">
                <div class="row m0 latest-image">
                    <a href="blog-details.html"><img src="images/latest-news/2.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="blog-details.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row widget widget-tag-clouds">
                        
                        <div class="row widget-inner clouds">
                            <a href="blog-details.html" class="widget-tag">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 clo-xs-12 latest">
                <div class="row m0 latest-image">
                    <a href="blog-details.html"><img src="images/latest-news/3.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="blog.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row widget widget-tag-clouds">
                        
                        <div class="row widget-inner clouds">
                            <a href="blog-details.html" class="widget-tag">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- clients -->
<section class="row sectpad testimonial-area">
   <div class="container">
       <div class="row m0 section_header common">
           <h2>What our client says</h2> 
        </div>
        <div class="testimonial-sliders">
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/1.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/2.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/3.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/4.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/5.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/testimonial/6.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="#">-  John Michale</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>


<!--great-work-->
<section class="emergency-contact">
    <div class="left-side">
        <div class="content">
            <h3>If you have any wood work  need...</h3>
            <h3>Simply call our 24 hour emergecny number.</h3>
            <a href="tel:+018655248503" class="phone"><img src="images/great-work/phone.png" alt="">01865 524 8503</a>
            <a href="tel:+018655248503" class="email"><img src="images/great-work/email.png" alt="">info@woodworshop.com</a>
        </div>
    </div>
    <div class="right-side">
        <img src="images/great-work/right-img.jpg" alt="">
    </div>
</section>

<!--footer-->
<?php
include ("./footer.php");
?>
   
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--RS-->	
<script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
<script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
<script src="vendors/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<script src="vendors/isotope/isotope.min.js"></script>
<script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="vendors/magnific/jquery.magnific-popup.min.js"></script>
<script src="js/theme.js"></script>


<!-- Mirrored from designarc.biz/demos/wood-workshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 08:48:52 GMT -->
</html>