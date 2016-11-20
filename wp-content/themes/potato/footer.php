    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 col-sm-12">
                    <ul class="bottom-menu">
                        <?php wp_nav_menu(array('menu' => 'footer_menu')); ?>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <p class="left-text">Если вы читаете это сообщение, то вы можете получить один картофель бесплатно! (нет)<br>Копирайт &copy; 2016 <b>Картошечка&#8482;</b> Все права были съедены</p>
                    <div class="button-bottom">
                        <div class="toggle-footer"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optimized loading JS Start -->
    <script>var scr = {"scripts":[
            {"src" : "<?php echo get_template_directory_uri(); ?>/js/libs.min.js", "async" : false},
            {"src" : "<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js", "async" : false},
            {"src" : "<?php echo get_template_directory_uri(); ?>/js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <!-- Optimized loading JS End -->

    <?php wp_footer(); ?>

    </body>
</html>