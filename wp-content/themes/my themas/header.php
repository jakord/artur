<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script  src="<?php bloginfo('template_url') ?>/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script  src="<?php bloginfo('template_url') ?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
  </head>
  <body>
      
    <div class="wrapper">

       <div class="container">
         <div class="header">
         
          <nav class="navbar navbar-default">
              <div class="col-md-12 col-lg-4">
               <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url();?>"><img class="img-responsive"   src="<?php bloginfo('template_url') ?>/image/logo.png"> </a>
              </div>  

              </div>



               <div class="collapse navbar-collapse">
               <div class=" col-lg-8 visible-lg">
                
                   <ul class="nav navbar-nav pull-right">
                         <li><a href="#">Home</a></li>
                         <li><a href="#">About</a></li>
                         <li><a href="#">Services</a></li>
                         <li><a href="#">Portfolio</a></li>
                         <li><a href="#">Contact</a></li> 
                   </ul>
                </div>
              </div>

               <div class=" col-md-12 visible-md ">
                 <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav ">
                         <li><a href="#">Home</a></li>
                         <li><a href="#">About</a></li>
                         <li><a href="#">Services</a></li>
                         <li><a href="#">Portfolio</a></li>
                         <li><a href="#">Contact</a></li> 
                   </ul>
                </div>
              </div>
 
              <div class="collapse navbar-collapse">
              <div class=" col-sm-12 visible-sm">
                 
                   <ul class="nav navbar-nav ">
                         <li><a href="#">Home</a></li>
                         <li><a href="#">About</a></li>
                         <li><a href="#">Services</a></li>
                         <li><a href="#">Portfolio</a></li>
                         <li><a href="#">Contact</a></li> 
                   </ul>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
              <div class=" col-sm-12 visible-xs">
                 
                   <ul class="nav navbar-nav ">
                         <li><a href="#">Home</a></li>
                         <li><a href="#">About</a></li>
                         <li><a href="#">Services</a></li>
                         <li><a href="#">Portfolio</a></li>
                         <li><a href="#">Contact</a></li> 
                   </ul>
                </div>
              </div>
              

            <!--начало выпадаешего меню-->
            
           
            <!--конец выпадаешего меню-->   
           </nav>
        
          
          <div class="col-md-12 baner">
          
          <!-- <div class="col-sm-5 "><img class="img-responsive banner"   src="<?php bloginfo('template_url') ?>/image/baner.png" alt="banner"></div>  -->
         
          <div class="col-md-7 col-sm-12 pull-right">
             <h3 class="baner-h3">Lorem ipsum dolor sit amet</h3>
             <h1 class="baner-h1">Donec nec justo eget</h1>
             <p class="baner-p">Morbi in sem quis dui placerat ornare. Pellentesque odioeuismod in, pharetra a, ultricies in, diam.</p>
             <a href="#" class="baner-a"><button type="button btn-lg" class="btn btn-danger">More Info</button></a>
          </div>
       </div>

      </div>