<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package anton
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="sidebar-contacts">
    <h3>Наши контакты:</h3>
    <p><i class="fa fa-phone-square"></i> Тел. мобильный: +380 96 058 94 94</p>
    <p><i class="fa fa-envelope-o"></i> E-mail: info@fop.biz.ua</p>
    <p><i class="fa fa-skype"></i> Skype: FOP.BIZ.UA</p>
    <p><i class="fa fa-paper-plane"></i> ICQ: 698567278</p>
</div>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
