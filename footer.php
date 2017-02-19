<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package anton
 */

?>

	</div><!-- #content -->

	<div id="footer">
    <div class="container">
       <div class="row footer-content">
           <div class="col-md-4">
                <p><a href="http://www.sfs.gov.ua/rpep">Реестр плательщиков единого налога</a></p>
                <p><a href="http://sfs.gov.ua/esv">Реестр страховщиков</a></p>
                <p><a href="http://sfs.gov.ua/datao">Данные о постановке на учет налогоплательщиков</a></p>
            </div>
           <div class="col-md-4">
                <p><a href="http://kyiv.sfs.gov.ua/byudjetni-rahunki">Реквизиты счетов для уплаты налогов и сборов</a></p>
                <p><a href="http://sfs.gov.ua/businesspartner">Узнай больше о своем бизнес-партнере</a></p>
           </div>
           <div class="col-md-4">
               <p><a href="http://www.rada.gov.ua">Официальный портал Верховной Рады</a></p>
                <p><a href="http://sfs.gov.ua">Официальный портал Государственной фискальной службы Украины</a></p>
           </div>
           <div class="col-md-12 footer-content">
                <p><i class="fa fa-check"></i> FOP.BIZ.UA ALL RIGHTS RESERVED &copy 2015</p>
        </div>
       </div>
        
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <!--MENU SHOW--> 
      <script>
       $(document).ready(function(){
           $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
               if (scroll >= 500) {
        $(".header-wrapper").addClass("header-wrapper-fixed-top");
            }
               else {
               $(".header-wrapper").removeClass("header-wrapper-fixed-top");
               }
            });
            });
       </script>
       <!--CONTENT 100% SHOW-->
       <script>
           
       $(document).ready(function(){
           if($(window).width()>940) {
           $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
               if (scroll >= 1300) {
        $(".contant-main").addClass("contant-main-full-width");
            }
               else {
               $(".contant-main").removeClass("contant-main-full-width");
               }
});
            }
    });
          
       </script>
       <!--SIDEBAR HIDE-->
       <script>
           
       $(document).ready(function(){
           if($(window).width()>940) {
           $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
               if (scroll >= 1300) {
        $(".a-sidebar").addClass("a-sidebar-hide");
            }
               else {
               $(".a-sidebar").removeClass("a-sidebar-hide");
               }
            });
           }
            });
           
       </script>
       <!--MENU TOOGLE MOBILE-->
       <script>
                jQuery(document).ready(function ($) {
                    $(".btn-slide").click(function () {
                        $("#menu-top").slideToggle("slow");
                        $(this).toggleClass("active");
                    });
                });
            </script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-67366281-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>
