<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name');?></title>
               <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
               <![endif]-->
           </head>
           <body>
           <?php wp_head();?>
               <div class="container wrapper ">
                   <header>
                       <nav class="navbar  navbar-default nav-settings ">
                           <div class="navbar-header">
                               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                               </button>
                               <a class="navbar-brand  site-brand" href="<?php echo home_url();?>"><img class="img-responsive" src="<?php bloginfo('template_url')?>/image/logo.png" alt="logotype"> </a>
                           </div>
                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                               <form class="navbar-form navbar-left" role="search">
                               <div class="form-group">
                               <input type="text" class="form-control" placeholder="Search" name="s">
                               <input type="submit" name="s" value="search">
                               </form>
                               </div>
                               <?php wp_nav_menu( array(
                               'theme_location'  => '', 'menu' => '', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'items_wrap' => '<ul  class="nav site-nav navbar-nav site-navbar-nav navbar-right">%3$s</ul>',) ); ?>

                       </nav>

                       <div class="row">
                           <div class="baner"><div class="col-md-7 pull-right">
                               <h3 >Lorem ipsum dolor sit amet</h3><h1 >Donec nec justo eget</h1><p >Morbi in sem quis dui placerat ornare. Pellentesque odioeuismod in, pharetra a, ultricies in, diam.</p><span> <button type="button" class="btn site-btn btn-lg btn-danger">More Info</button> </span>
                               </div>
                           </div>
                       </div>
                   </header>