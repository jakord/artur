<?php get_header(); ?>
<?php
$cat_id=4;
$portfolio=  new WP_Query(array('cat'=>$cat_id,'posts_per_page' =>3));
?>
        <?php  if ( $portfolio->have_posts() ) :  ?>
        <div class="row portfolio">
            <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                <div class=" col-sm-4">
                    <div class=" pull-left"><?php the_post_thumbnail(); ?></div>
                    <div class="portfolio-article-right">
                        <a href="<?php the_permalink();?>" <h5 ><?php the_title();?></h5></a>
                        <p ><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>" >read more &nbsp;<img src="<?php bloginfo('template_url') ?>/image/arrow.png" alt="arrow"></a>
                    </div>
                </div>
        <?php endwhile; ?>
        </div>
            <?php else:?>
        <?php endif; ?>
<div class="row row2">

    <?php
    $cat_id=3;
    $services=  new WP_Query(array('cat'=>$cat_id,'posts_per_page' =>2)); ?>
    <?php  if ( $services->have_posts() ) :  ?>
    <div class="col-sm-8">
        <?php while ( $services->have_posts() ) : $services->the_post(); ?>
        <div class="row article">
            <div class="col-sm-4 col-xs-4"><?php the_post_thumbnail(true,array('class' => "img-rounded img-responsive")); ?></div>
            <div class="col-sm-8  col-xs-8 "><h5 class="header"><?php the_title();?></h5>
                <p><?php the_excerpt()?></p>
                <a href="<?php the_permalink()?>"  class="btn btn-danger ">More Info</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php else:?>
    <?php endif; ?>

    <div class="col-sm-4">
        <?php
        $cat_id=7;
        $eronded=  new WP_Query(array('cat'=>$cat_id,'posts_per_page' =>1));
        ?>
        <?php  if ( $eronded->have_posts() ) :  ?>
            <div class="tabs">
                <ul class=" nav nav-tabs site-nav-tabs">
                    <li class="active"><a href="#tab" data-toggle="tab">Eronped</a></li>
                    <li><a href="#tab1" data-toggle="tab">Centro</a></li>
                </ul>
                <?php while ( $eronded->have_posts() ) : $eronded->the_post(); ?>
                    <div class="tab-content site-tab-content">
                        <div id="tab" class="tab-pane fade in active"><h4 class="tab-header"><?php the_title();?></h4><p><?php the_content()?></p>
                            <span class="glyphicon glyphicon-arrow-right"><a href="<?php the_permalink();?>">istique elit  sinto sum</a></span>
                        </div>
                        <div id="tab1" class="tab-pane fade">
                            <h4 class="tab-header"><?php the_title()?></h4><p><?php the_content()?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else:?>
        <?php endif; ?>
    </div>
</div>


<div class="row">
    <div class="text-center row3 ">
        <h3>Praesent Clacerat</h3>
        <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreetlectus arcu pulvinar risus</p>
    </div>
</div>
<div class="row row4">
    <h2 class="text-center">Vestibulum Commodo Felis</h2>
    <h3 class="text-center">Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna</h3>
    <?php
    $cat_id=5;
    $blog=  new WP_Query(array('cat'=>$cat_id,'posts_per_page' =>3)); ?>
    <?php  if ( $blog->have_posts() ) :  ?>
        <div class="col-md-6">
            <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
                <div class="row row4-left-article-bottom">
                    <div class="col-sm-2 col-xs-2 "><?php the_post_thumbnail(true,array('class' => " img-responsive")); ?></div>
                    <div class="col-sm-10 col-xs-10 row4-left-article">
                        <a href="<?php the_permalink()?>"><h5 ><?php the_title()?></h5></a>
                        <span><?php comments_number('no comment', '1 comment', '% comments'); ?></span>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>">read more &nbsp; <i class="glyphicon glyphicon-arrow-right"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else:?>
    <?php endif; ?>

    <?php
    $cat_id=6;
    $excerpt=  new WP_Query(array('cat'=>$cat_id,'posts_per_page' =>6)); ?>
    <?php  if ( $excerpt->have_posts() ) :?>
        <div class="col-md-6">
            <?php while ( $excerpt->have_posts() ) : $excerpt->the_post(); ?>
                <div class="row article-bottom ">
                    <div class="col-sm-9 col-xs-10 row4-right-article "><?php the_excerpt()?><br/>
                        <span>-<?php the_author()?></span>
                    </div><div class="col-sm-3 col-xs-2"><?php the_post_thumbnail(true,array('class' => "img-rounded img-responsive")); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else:?>
    <?php endif; ?>
</div>
 <?php get_footer();?>
