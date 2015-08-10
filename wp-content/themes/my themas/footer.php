<footer>
    <div class="row footer-up">
        <?php if(!dynamic_sidebar('footer')): ?>
         <h3>Место для виджетов</h3>
        <?php endif; ?>
    </div>
    <div class="row footer-down ">
        <div class="col-sm-9"><span>Sitename. All rights Reserved. Designed By www.alltemplateneeds.com / Photos from : www.photorack.net</span></div>
        <div class="col-sm-3"><span class="pull-right hidden-xs"><a href="https://www.facebook.com"><img src="<?php bloginfo('template_url')?>/image/fb.png" alt=""></a>&nbsp;<a href="https://twitter.com"><img src="<?php bloginfo('template_url')?>/image/twt.png" alt="#"></a></span></div>
    </div>
</footer>
</div>

</div>
<?php wp_footer();?>
</body>
</html>