<?php
function encrypt256()
{
  $app_id="digi_digi";
  $app_key="Q6ERkdcuDndFqbtSmtuI";
  $timestamp=time();
  $str=$app_id.$app_key.$timestamp;
  #echo $str;
  $some_str="digi_locker";
  
  if (CRYPT_SHA256 == 1) 
	{
  $encrpt_str=crypt($str,'$5$rounds=5000$');
  }
  
  echo substr($encrpt_str,16);
  #return $encrpt_str;
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortlink" href="/node/120" />
<link rel="canonical" href="/content/encrecr" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
    <title>ENCR/ECR</title>
    <style type="text/css" media="all">
@import url("https://boi.gov.in/modules/system/system.base.css?p7u860");
@import url("https://boi.gov.in/modules/system/system.menus.css?p7u860");
@import url("https://boi.gov.in/modules/system/system.messages.css?p7u860");
@import url("https://boi.gov.in/modules/system/system.theme.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/nucleus/nucleus/nucleus/css/base.css?p7u860");
</style>
<style type="text/css" media="all">
@import url("https://boi.gov.in/modules/aggregator/aggregator.css?p7u860");
@import url("https://boi.gov.in/modules/comment/comment.css?p7u860");
@import url("https://boi.gov.in/modules/field/theme/field.css?p7u860");
@import url("https://boi.gov.in/modules/node/node.css?p7u860");
@import url("https://boi.gov.in/modules/poll/poll.css?p7u860");
@import url("https://boi.gov.in/modules/search/search.css?p7u860");
@import url("https://boi.gov.in/modules/user/user.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/views/css/views.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/ckeditor/css/ckeditor.css?p7u860");
</style>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/modules/colorbox/styles/default/colorbox_default_style.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/ctools/css/ctools.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/dhtml_menu/dhtml_menu.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/lightbox2/css/lightbox_alt.css?p7u860");
@import url("https://boi.gov.in/sites/all/libraries/superfish/css/superfish.css?p7u860");
@import url("https://boi.gov.in/sites/all/libraries/superfish/css/superfish-vertical.css?p7u860");
@import url("https://boi.gov.in/sites/all/libraries/superfish/css/superfish-navbar.css?p7u860");
</style>
<style type="text/css" media="screen">
<!--/*--><![CDATA[/*><!--*/
body{font-size:110%  !important;}body.textsize-104{font-size:104% !important;}body.textsize-110{font-size:110% !important;}body.textsize-116{font-size:116% !important;}

/*]]>*/-->
</style>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/modules/textsize/textsize.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/views_slideshow/views_slideshow.css?p7u860");
@import url("https://boi.gov.in/sites/all/libraries/superfish/style/default.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/views_ticker/views.ticker.scroller.css?p7u860");
@import url("https://boi.gov.in/sites/all/modules/responsive_menus/styles/responsive_menus_simple/css/responsive_menus_simple.css?p7u860");
</style>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/themes/nucleus/nucleus/nucleus/css/messages.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/html-elements.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/forms.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/tables.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/page.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/articles.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/comments.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/fields.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/blocks.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/navigation.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/forum.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/fonts.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/css3.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/ie7.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/gourav.css?p7u860");
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/responsive.css?p7u860");
</style>
<style type="text/css" media="print">
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/print.css?p7u860");
</style>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/themes/tb_purity/css/superfish/purity.css?p7u860");
</style>

<!--[if IE 7]>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/themes/nucleus/nucleus/nucleus/css/ie7.css?p7u860");
</style>
<![endif]-->

<!--[if IE]>
<style type="text/css" media="all">
@import url("https://boi.gov.in/sites/all/themes/nucleus/nucleus/nucleus/css/ie.css?p7u860");
</style>
<![endif]-->
<style type="text/css" media="all">
<!--/*--><![CDATA[/*><!--*/
div.container{width:960px;}.grid-1{width:40px;}.grid-2{width:80px;}.grid-3{width:120px;}.grid-4{width:160px;}.grid-5{width:200px;}.grid-6{width:240px;}.grid-7{width:280px;}.grid-8{width:320px;}.grid-9{width:360px;}.grid-10{width:400px;}.grid-11{width:440px;}.grid-12{width:480px;}.grid-13{width:520px;}.grid-14{width:560px;}.grid-15{width:600px;}.grid-16{width:640px;}.grid-17{width:680px;}.grid-18{width:720px;}.grid-19{width:760px;}.grid-20{width:800px;}.grid-21{width:840px;}.grid-22{width:880px;}.grid-23{width:920px;}.grid-24{width:960px;}

/*]]>*/-->
</style>

    <script type="text/javascript" src="https://boi.gov.in/sites/all/modules/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.3"></script>
<script type="text/javascript" src="https://boi.gov.in/misc/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="https://boi.gov.in/misc/drupal.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/colorbox/jquery.colorbox-min.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/colorbox/js/colorbox.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/colorbox/styles/default/colorbox_default_style.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/dhtml_menu/dhtml_menu.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/lightbox2/js/auto_image_handling.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/lightbox2/js/lightbox.js?1527914639"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/jquery.hoverIntent.minified.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/jquery.bgiframe.min.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/superfish.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/supersubs.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/supposition.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/libraries/superfish/sftouchscreen.js?p7u860"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
  var textsizeCookieExpires = 365;
  var textsizeCookieDomain = "/ivfrt/";
  var textsizeElement = "body";
  var textsizeElementClass = "";
  var textsizeIncrement = 6;
  var textsizeNormal = 110;
  var textsizeMinimum = 98;
  var textsizeMaximum = 146;
  var textsizeIncrementDisplay = 5;
  var textsizeNormalDisplay = 100;
  var textsizeDisplay = 1;
  var textsizeMinT = "<abbr title=\"Minimum\" class=\"textsize\">Min.</abbr> ";
  var textsizeMaxT = "<abbr title=\"Maximum\" class=\"textsize\">Max.</abbr> ";
  var textsizeCurrentText = "Current Size";
  var textsizeReset = 0;
//--><!]]>
</script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/textsize/jquery.textsize.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/misc/jquery.cookie.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/views_slideshow/js/views_slideshow.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/views_ticker/js/jquery.liscroller.js?p7u860"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function($) { Drupal.behaviors.views_ticker_liScroll = { attach: function (context) { $("#views-ticker-liScroll-what_s_new").liScroll({pauseOnMouse: true, travelocity:0.07, direction: "left"}); } };})(jQuery);
//--><!]]>
</script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/modules/responsive_menus/styles/responsive_menus_simple/js/responsive_menus_simple.js?p7u860"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

	(function ($) {
	  if (Drupal.Nucleus == undefined) {
		Drupal.Nucleus = {};
	  }
	  Drupal.behaviors.skinMenuAction = {
		attach: function (context) {
		  jQuery(".change-skin-button").click(function() {
			parts = this.href.split("/");
			style = parts[parts.length - 1];
			jQuery.cookie("nucleus_skin", style, {path: "/"});
			window.location.reload();
			return false;
		  });
		}
	  }
	})(jQuery);
  
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(function(){
jQuery('#superfish-1').supersubs({minWidth: 12, maxWidth: 27, extraWidth: 1}).superfish({
animation: {opacity:'show'},
speed: 'fast',
autoArrows: false,
dropShadows: false});
});
//--><!]]>
</script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/themes/nucleus/nucleus/nucleus/js/jquery.cookie.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/themes/tb_purity/js/tb_purity.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/themes/tb_purity/js/jquery.matchHeights.min.js?p7u860"></script>
<script type="text/javascript" src="https://boi.gov.in/sites/all/themes/tb_purity/js/custom.js?p7u860"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"tb_purity","theme_token":"UECg8W9P32w5rCLybwPiJYAWLUH308BS8STo_uhm--E","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/libraries\/colorbox\/jquery.colorbox-min.js":1,"sites\/all\/modules\/colorbox\/js\/colorbox.js":1,"sites\/all\/modules\/colorbox\/styles\/default\/colorbox_default_style.js":1,"sites\/all\/modules\/dhtml_menu\/dhtml_menu.js":1,"sites\/all\/modules\/lightbox2\/js\/auto_image_handling.js":1,"sites\/all\/modules\/lightbox2\/js\/lightbox.js":1,"sites\/all\/libraries\/superfish\/jquery.hoverIntent.minified.js":1,"sites\/all\/libraries\/superfish\/jquery.bgiframe.min.js":1,"sites\/all\/libraries\/superfish\/superfish.js":1,"sites\/all\/libraries\/superfish\/supersubs.js":1,"sites\/all\/libraries\/superfish\/supposition.js":1,"sites\/all\/libraries\/superfish\/sftouchscreen.js":1,"0":1,"sites\/all\/modules\/textsize\/jquery.textsize.js":1,"misc\/jquery.cookie.js":1,"sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js":1,"sites\/all\/modules\/views_ticker\/js\/jquery.liscroller.js":1,"1":1,"sites\/all\/modules\/responsive_menus\/styles\/responsive_menus_simple\/js\/responsive_menus_simple.js":1,"2":1,"3":1,"sites\/all\/themes\/nucleus\/nucleus\/nucleus\/js\/jquery.cookie.js":1,"sites\/all\/themes\/tb_purity\/js\/tb_purity.js":1,"sites\/all\/themes\/tb_purity\/js\/jquery.matchHeights.min.js":1,"sites\/all\/themes\/tb_purity\/js\/custom.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/themes\/nucleus\/nucleus\/nucleus\/css\/base.css":1,"modules\/aggregator\/aggregator.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/poll\/poll.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"modules\/forum\/forum.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/colorbox\/styles\/default\/colorbox_default_style.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/dhtml_menu\/dhtml_menu.css":1,"sites\/all\/modules\/lightbox2\/css\/lightbox_alt.css":1,"sites\/all\/libraries\/superfish\/css\/superfish.css":1,"sites\/all\/libraries\/superfish\/css\/superfish-vertical.css":1,"sites\/all\/libraries\/superfish\/css\/superfish-navbar.css":1,"0":1,"sites\/all\/modules\/textsize\/textsize.css":1,"sites\/all\/modules\/views_slideshow\/views_slideshow.css":1,"sites\/all\/libraries\/superfish\/style\/default.css":1,"sites\/all\/modules\/views_ticker\/views.ticker.scroller.css":1,"sites\/all\/modules\/responsive_menus\/styles\/responsive_menus_simple\/css\/responsive_menus_simple.css":1,"sites\/all\/themes\/nucleus\/nucleus\/nucleus\/css\/messages.css":1,"sites\/all\/themes\/tb_purity\/css\/html-elements.css":1,"sites\/all\/themes\/tb_purity\/css\/forms.css":1,"sites\/all\/themes\/tb_purity\/css\/tables.css":1,"sites\/all\/themes\/tb_purity\/css\/page.css":1,"sites\/all\/themes\/tb_purity\/css\/articles.css":1,"sites\/all\/themes\/tb_purity\/css\/comments.css":1,"sites\/all\/themes\/tb_purity\/css\/fields.css":1,"sites\/all\/themes\/tb_purity\/css\/blocks.css":1,"sites\/all\/themes\/tb_purity\/css\/panel-panes.css":1,"sites\/all\/themes\/tb_purity\/css\/navigation.css":1,"sites\/all\/themes\/tb_purity\/css\/forum.css":1,"sites\/all\/themes\/tb_purity\/css\/fonts.css":1,"sites\/all\/themes\/tb_purity\/css\/css3.css":1,"sites\/all\/themes\/tb_purity\/css\/ie7.css":1,"sites\/all\/themes\/tb_purity\/css\/gourav.css":1,"sites\/all\/themes\/tb_purity\/css\/responsive.css":1,"sites\/all\/themes\/tb_purity\/css\/print.css":1,"sites\/all\/themes\/tb_purity\/css\/superfish\/purity.css":1,"sites\/all\/themes\/nucleus\/nucleus\/nucleus\/css\/ie7.css":1,"sites\/all\/themes\/nucleus\/nucleus\/nucleus\/css\/ie.css":1,"1":1}},"colorbox":{"opacity":"0.85","current":"{current} of {total}","previous":"\u00ab Prev","next":"Next \u00bb","close":"Close","maxWidth":"100%","maxHeight":"100%","fixed":true},"dhtmlMenu":{"nav":"double-click","animation":{"effects":{"height":"height","width":0,"opacity":0},"speed":"100"},"effects":{"siblings":"close-same-tree","children":"close-children","remember":"0"},"filter":{"type":"whitelist","list":{"main-menu":"main-menu","devel":0,"management":0,"menu-footer-menu":0,"menu-right-hand-side-menu":0,"navigation":0,"shortcut-set-1":0,"textsize":0,"user-menu":0}}},"lightbox2":{"rtl":0,"file_path":"\/(\\w\\w\/)public:\/","default_image":"\/sites\/all\/modules\/lightbox2\/images\/brokenimage.jpg","border_size":4,"font_color":"000","box_color":"fff","top_position":"","overlay_opacity":"0.3","overlay_color":"000","disable_close_click":1,"resize_sequence":0,"resize_speed":400,"fade_in_speed":400,"slide_down_speed":600,"use_alt_layout":1,"disable_resize":0,"disable_zoom":0,"force_show_nav":0,"show_caption":1,"loop_items":1,"node_link_text":"View Image Details","node_link_target":0,"image_count":"Image !current of !total","video_count":"Video !current of !total","page_count":"Page !current of !total","lite_press_x_close":"press \u003Ca href=\u0022#\u0022 onclick=\u0022hideLightbox(); return FALSE;\u0022\u003E\u003Ckbd\u003Ex\u003C\/kbd\u003E\u003C\/a\u003E to close","download_link_text":"","enable_login":false,"enable_contact":false,"keys_close":"c x 27","keys_previous":"p 37","keys_next":"n 39","keys_zoom":"z","keys_play_pause":"32","display_image_size":"original","image_node_sizes":"(\\.thumbnail)","trigger_lightbox_classes":"","trigger_lightbox_group_classes":"img.thumbnail, img.image-thumbnail","trigger_slideshow_classes":"","trigger_lightframe_classes":"","trigger_lightframe_group_classes":"","custom_class_handler":0,"custom_trigger_classes":"","disable_for_gallery_lists":1,"disable_for_acidfree_gallery_lists":true,"enable_acidfree_videos":true,"slideshow_interval":5000,"slideshow_automatic_start":1,"slideshow_automatic_exit":1,"show_play_pause":1,"pause_on_next_click":1,"pause_on_previous_click":1,"loop_slides":0,"iframe_width":1200,"iframe_height":900,"iframe_border":1,"enable_video":0},"responsive_menus":[{"toggler_text":"\u2630 Menu","selectors":["#menu-bar-wrapper"],"media_size":"768","absolute":true,"remove_attributes":true,"responsive_menus_style":"responsive_menus_simple"}],"urlIsAjaxTrusted":{"\/content\/encrecr":true}});
//--><!]]>
</script>

<script type="text/javascript">
         function myCallback(str)
         {
            return "SUCCESS";
         }
      </script>
<script src="jquery.min.js"></script>
<script type="text/javascript" src="https://services.digitallocker.gov.in/requester/api/2/dl.js" id="dlshare" data-app-id="digi_digi" data-app-hash=<?php encrypt256();?> time-stamp="1527928316" data-callback="myCallback"></script>


  </head>

  <body class="html not-front not-logged-in one-sidebar sidebar-first page-node page-node- page-node-120 node-type-page tb-purity fixed-grid bf-ssl ntf-tahoma fs-medium">
    <div id="skip-link"><a href="#main-content" class="element-invisible element-focusable">Skip to main content</a></div>
        <div id="page" class="page-default">
  <a name="Top" id="Top"></a>

  <!-- HEADER -->
  <div id="header-wrapper" class="wrapper">
    <div class="container grid-24">
      <div class="grid-inner clearfix">
        <div id="header" class="clearfix">
	<div id="ski" style="height:22px;float:right; "> 
		<ul id="smaincontent"> 
		<li ><a href="/?q=node/245 ">Contact Us</a></li>   <li id="contact-us-link">|</li>
				<li> <a href="#skip" > Skip to Main Content </a> </li> <li style="padding-left:8px;">|</li>
				<li id="size1" style="margin-top:4px;">   <div class="region region-text-size">
    <div id="block-textsize-form" class="block block-textsize">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <ul class="textsize_list textsize_current_list">
  <!--<li class="ts_decrease_fix"><a href="/textsize/decrease?destination=node/120" title="Text Size: Decrease -5%" class="ts_decrease_fix text_display_hidden ts_rollover"><img src="/sites/all/modules/textsize/images/decrease_16.gif" alt="Decrease" class="ts_decrease text_display_hidden ts_rollover" /></a></li>
  <li class="ts_normal_fix"><a href="/textsize/normal?destination=node/120" title="Text Size: Normal =100%" class="ts_normal_fix text_display_hidden ts_rollover"><img src="/sites/all/modules/textsize/images/normal_16.gif" alt="Normal" class="ts_normal text_display_hidden ts_rollover" /></a></li>
  <li class="ts_increase_fix"><a href="/textsize/increase?destination=node/120" title="Text Size: Increase +5%" class="ts_increase_fix text_display_hidden ts_rollover"><img src="/sites/all/modules/textsize/images/increase_16.gif" alt="Increase" class="ts_increase text_display_hidden ts_rollover" /></a></li>-->


</ul>
<p class="textsize_current textsize_current_list display_hidden current_text_display_hidden"><span class="display_hidden">Current Size: </span><span id="textsize_current" title="Current Size: 100%">100%</span></p>
<div class="ts_clear"></div>    </div>
  </div>
</div>
  </div>
</li>   <li>|</li>
				 <!--li><a href="/high_contrast_toggle">contrast</a></li-->
				 <li></li>       
		</ul>
	</div>
	<!--div style="clear:both;"></div-->
	 
                      <a href="/" title="Home" id="logo">
              <img src="https://boi.gov.in/sites/default/files/BOI_1.png" alt="Home" />
            </a><br /><br />


          		   
                       
                        <div class="region region-header">
    <div id="block-search-form" class="block block-search">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <form action="/content/encrecr" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><span class="button edit-submit">
    <input type="submit" name="op" id="edit-submit" value="Search"  class="form-submit" />
    </span>
</div><input type="hidden" name="form_build_id" value="form-pwpQmkmfeR-vK67odccPPgPV83XUztx48UrPuhVCr2U" />
<input type="hidden" name="form_id" value="search_block_form" />
</div>
</div></form>    </div>
  </div>
</div>
  </div>
          
                  </div>
      </div>
    </div>
  </div>
  <!-- /#HEADER -->
<div id="skip"> </div>
      <!-- MAIN NAV -->
    <div id="menu-bar-wrapper" class="wrapper">
      <div class="container grid-24">
        <div class="grid-inner clearfix">
            <div class="region region-menu-bar">
    <div id="block-superfish-1" class="block block-superfish">
  <div class="block-inner clearfix">
    
          <h2 class="block-title element-invisible">Main menu</h2>
    
    
    <div class="block-content clearfix">
      <ul id="superfish-1" class="sf-menu main-menu sf-horizontal sf-style-purity sf-total-items-5 sf-parent-items-4 sf-single-items-1"><li id="menu-207-1" class="first odd sf-item-1 sf-depth-1 sf-no-children"><a href="/" title="Home" class="sf-depth-1 ">HOME</a></li><li id="menu-2725-1" class="middle even sf-item-2 sf-depth-1 sf-total-children-14 sf-parent-children-3 sf-single-children-11 menuparent"><a href="/content/about-immigration-assist" title="Immigration" class="sf-depth-1  menuparent">IMMIGRATION</a><ul><li id="menu-2609-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="/content/about-immigration-assist" title="About Immigration Assist" class="sf-depth-2 ">About Immigration Assist</a></li><li id="menu-2610-1" class="middle even sf-item-2 sf-depth-2 sf-no-children"><a href="/content/general-informationinstruction" title="General Info/Instructions" class="sf-depth-2 ">General Infomation/Instructions</a></li><li id="menu-2611-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children"><a href="/content/indian-passengers" title="Indian Passengers" class="sf-depth-2 ">Indian Passengers</a></li><li id="menu-2612-1" class="middle even sf-item-4 sf-depth-2 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent"><a href="/content/foreigners" title="Foreigners" class="sf-depth-2  menuparent">Foreigners</a><ul><li id="menu-2875-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/visa-requirement" title="Visa Requirement" class="sf-depth-3 ">Visa Requirement</a></li><li id="menu-2876-1" class="middle even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/requirements-during-arrival-foreigners-india" title="Requirements during arrival of Foreigners in India" class="sf-depth-3 ">Requirements during arrival of Foreigners in India</a></li><li id="menu-2877-1" class="last odd sf-item-3 sf-depth-3 sf-no-children"><a href="/content/requirements-during-stay-india" title="Requirements during Stay In India" class="sf-depth-3 ">Requirements during Stay In India</a></li></ul></li><li id="menu-2613-1" class="middle odd sf-item-5 sf-depth-2 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="/content/general-instructions" title="Pakistan Nationals" class="sf-depth-2  menuparent">Pakistan Nationals</a><ul><li id="menu-3275-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/general-instructions" title="Genral Instructions" class="sf-depth-3 ">General Instructions</a></li><li id="menu-3276-1" class="last even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/visa-arrival-pak-nationals" title="Visa on Arrival for Pak nationals" class="sf-depth-3 ">Visa on Arrival for Pak nationals</a></li></ul></li><li id="menu-2614-1" class="middle even sf-item-6 sf-depth-2 sf-total-children-7 sf-parent-children-0 sf-single-children-7 menuparent"><a href="/content/registration-1" title="Afghan Nationals" class="sf-depth-2  menuparent">Afghan Nationals</a><ul><li id="menu-2868-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/registration-1" title="Registration" class="sf-depth-3 ">Registration</a></li><li id="menu-2869-1" class="middle even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/exit-permission" title="Exit Permission" class="sf-depth-3 ">Exit Permission</a></li><li id="menu-2870-1" class="middle odd sf-item-3 sf-depth-3 sf-no-children"><a href="/content/return-visa" title="Return Visa" class="sf-depth-3 ">Return Visa</a></li><li id="menu-2871-1" class="middle even sf-item-4 sf-depth-3 sf-no-children"><a href="/content/stay-visa-holders" title="Stay Visa holders" class="sf-depth-3 ">Stay Visa holders</a></li><li id="menu-2872-1" class="middle odd sf-item-5 sf-depth-3 sf-no-children"><a href="/content/student-visa-holders" title="Student Visa holders" class="sf-depth-3 ">Student Visa holders</a></li><li id="menu-2873-1" class="middle even sf-item-6 sf-depth-3 sf-no-children"><a href="/content/medical-visa" title="Medical VISA" class="sf-depth-3 ">Medical Visa</a></li><li id="menu-2874-1" class="last odd sf-item-7 sf-depth-3 sf-no-children"><a href="/content/general-information" title="General Information" class="sf-depth-3 ">General Information</a></li></ul></li><li id="menu-2727-1" class="middle odd sf-item-7 sf-depth-2 sf-no-children"><a href="/content/citizens-saarc-countries" title="Citizens of SAARC Countries" class="sf-depth-2 ">Citizens of SAARC Countries</a></li><li id="menu-2728-1" class="middle even sf-item-8 sf-depth-2 sf-no-children"><a href="/content/nepalese-passengers" title="Nepalese passengers" class="sf-depth-2 ">Nepalese Passengers</a></li><li id="menu-2729-1" class="middle odd sf-item-9 sf-depth-2 sf-no-children"><a href="/content/bhutanese-passengers" title="Bhutanese Passengers" class="sf-depth-2 ">Bhutanese Passengers</a></li><li id="menu-2730-1" class="middle even sf-item-10 sf-depth-2 sf-no-children"><a href="/content/temporary-landing-permit" title="TLP/TLF" class="sf-depth-2 ">Temporary Landing Permit</a></li><li id="menu-2731-1" class="middle odd sf-item-11 sf-depth-2 sf-no-children"><a href="/content/restricted-protected-area" title="Restricted Protected Area" class="sf-depth-2 ">Restricted Protected Area</a></li><li id="menu-3047-1" class="middle even sf-item-12 sf-depth-2 sf-no-children"><a href="/content/health-regulation" title="Health Regulation" class="sf-depth-2 ">Health Regulation</a></li><li id="menu-2733-1" class="middle odd sf-item-13 sf-depth-2 sf-no-children"><a href="/content/apis-advanced-passenger-information-system" title="APIS (Advanced Passenger Information System)" class="sf-depth-2 ">APIS (Advanced Passenger Information System)</a></li><li id="menu-3098-1" class="last even sf-item-14 sf-depth-2 sf-no-children"><a href="/content/surrogacy" title="Surrogacy" class="sf-depth-2 ">Surrogacy</a></li></ul></li><li id="menu-2852-1" class="middle odd sf-item-3 sf-depth-1 sf-total-children-13 sf-parent-children-4 sf-single-children-9 menuparent"><a href="/content/general-instructions-registration-foreigners" title="Registration" class="sf-depth-1  menuparent">REGISTRATION AND VISA EXTENSION</a><ul><li id="menu-2615-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="/content/general-instructions-registration-foreigners" title="General Instruction for registration by the foreigners" class="sf-depth-2 ">General Instruction for registration by the foreigners</a></li><li id="menu-2817-1" class="middle even sf-item-2 sf-depth-2 sf-no-children"><a href="/content/where-register" title="Where to Register" class="sf-depth-2 ">Where to Register</a></li><li id="menu-2819-1" class="middle odd sf-item-3 sf-depth-2 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="/content/pakistani-nationals" title="Special Categories for  Registration" class="sf-depth-2  menuparent">Special Categories for  Registration</a><ul><li id="menu-2825-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/pakistani-nationals" title="Pakistani Nationals" class="sf-depth-3 ">Pakistani Nationals</a></li><li id="menu-2826-1" class="last even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/afghan-nationals-0" title="Afghan Nationals" class="sf-depth-3 ">Afghan Nationals</a></li></ul></li><li id="menu-2821-1" class="middle even sf-item-4 sf-depth-2 sf-no-children"><a href="/content/registration-related-miscellaneous-services" title="Registration Related Miscellaneous Services" class="sf-depth-2 ">Registration Related Miscellaneous Services</a></li><li id="menu-3096-1" class="middle odd sf-item-5 sf-depth-2 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="/content/registration-requirements-foreign-national" title="Supporting documents required for Registration" target="_parent" class="sf-depth-2  menuparent">Supporting documents required for Registration</a><ul><li id="menu-3335-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/registration-requirements-foreign-national" class="sf-depth-3 ">Registration Requirements for Foreign National</a></li><li id="menu-3333-1" class="last even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/certificates-be-produced-registration-visa" class="sf-depth-3 ">Certificates to be produced for Registration</a></li></ul></li><li id="menu-3277-1" class="middle even sf-item-6 sf-depth-2 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent"><a href="/content/requirments-extension-visa" title="Extension of Visa / Supporting Documents" class="sf-depth-2  menuparent">Extension of Visa / Supporting Documents</a><ul><li id="menu-3334-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/requirments-extension-visa" class="sf-depth-3 ">Requirments for Extension of Visa</a></li><li id="menu-3330-1" class="middle even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/documents-be-produced-extension-visa" class="sf-depth-3 ">Documents to be produced for Extension of Visa</a></li><li id="menu-3331-1" class="last odd sf-item-3 sf-depth-3 sf-no-children"><a href="/content/certificates-be-produced-registration-visa" class="sf-depth-3 ">Certificates to be produced for Extension of Visa</a></li></ul></li><li id="menu-2778-1" class="middle odd sf-item-7 sf-depth-2 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent"><a href="/content/information-foreigners-possessing-entry-x-visa-0" title="Information for Foreigners Possessing Entry (X) Visa" class="sf-depth-2  menuparent">Information for Foreigners Possessing Entry (X) Visa</a><ul><li id="menu-2880-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/information-foreigners-possessing-entry-x-visa-0" title="Registration" class="sf-depth-3 ">Registration</a></li><li id="menu-2881-1" class="middle even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/information-foreigners-possessing-entry-x-visa-1" title="Requirements at the time of Registration" class="sf-depth-3 ">Requirements at the time of Registration</a></li><li id="menu-2882-1" class="last odd sf-item-3 sf-depth-3 sf-no-children"><a href="/content/information-foreigners-possessing-entry-x-visa-2" title="Visa Extension" class="sf-depth-3 ">Visa Extension</a></li></ul></li><li id="menu-2822-1" class="middle even sf-item-8 sf-depth-2 sf-no-children"><a href="/content/powers-delegated-frros" title="Powers Delegated To FRROs" class="sf-depth-2 ">Powers Delegated To FRROs</a></li><li id="menu-2823-1" class="middle odd sf-item-9 sf-depth-2 sf-no-children"><a href="/content/frro-contact-list" title="FRRO Contact" class="sf-depth-2 ">FRRO Contact</a></li><li id="menu-2737-1" class="middle even sf-item-10 sf-depth-2 sf-no-children"><a href="/content/online-registration" title="Online Registration" class="sf-depth-2 ">Online Registration /Visa Extension/LTV/ Conversion and other Misc. Services</a></li><li id="menu-3017-1" class="middle odd sf-item-11 sf-depth-2 sf-no-children"><a href="/content/frro-login" class="sf-depth-2 ">FRRO Login</a></li><li id="menu-2855-1" class="middle even sf-item-12 sf-depth-2 sf-no-children"><a href="/content/form-c" title="C Form" class="sf-depth-2 ">Form C</a></li><li id="menu-3351-1" class="last odd sf-item-13 sf-depth-2 sf-no-children"><a href="/content/form-s" class="sf-depth-2 ">Form S</a></li></ul></li><li id="menu-2597-1" class="middle even sf-item-4 sf-depth-1 sf-total-children-2 sf-parent-children-1 sf-single-children-1 menuparent"><a href="/content/person-indian-origin-pio" title="Foreigner of Indian Origin" class="sf-depth-1  menuparent">FOREIGNER OF INDIAN ORIGIN</a><ul><li id="menu-2626-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="/content/person-indian-origin-pio" title="PIO" class="sf-depth-2 ">PIO</a></li><li id="menu-2627-1" class="last even sf-item-2 sf-depth-2 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="/content/overseas-citizen-india-oci-cardholder" title="OCI" class="sf-depth-2  menuparent">OCI</a><ul><li id="menu-3044-1" class="first odd sf-item-1 sf-depth-3 sf-no-children"><a href="/content/overseas-citizen-india-oci-cardholder" title="Overseas Citizenship of India (OCI)" class="sf-depth-3 ">Overseas Citizenship of India (OCI)</a></li><li id="menu-3045-1" class="last even sf-item-2 sf-depth-3 sf-no-children"><a href="/content/oci-miscellaneous-services-registered-ocis" title="OCI Miscellaneous Services for registered OCIs" class="sf-depth-3 ">OCI Miscellaneous Services for registered OCIs</a></li></ul></li></ul></li><li id="menu-3018-1" class="active-trail last odd sf-item-5 sf-depth-1 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="/content/encrecr" title="Indian Visiting Abroad" class="sf-depth-1  menuparent active">E IMMIGARTION</a><ul><li id="menu-2629-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="/content/encrecr" title="ECNR/ECR" class="sf-depth-2  active">IMMIGRATION FORM</a></li></ul></li></ul>    </div>
  </div>
</div>
  </div>
        </div>
      </div>
    </div>
    <!-- /#MAIN NAV -->
  
  
  
           <div id="main-wrapper" class="wrapper">
  		
		
    <div class="container grid-24">
     
        <div class="group-cols-1 group-19 grid grid-19">
        
            <!-- Main Content -->
            <div id="main-content" class="tb-main-box grid grid-19 section">
              <div class="grid-inner clearfix" id="margintop">

                
                
                                                  <h1 id="page-title">ENCR/ECR</h1>
                
                
                
                  <div class="region region-content">
    <div id="block-system-main" class="block-system">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <div id="article-120" class="article node node-page node-lang-en node-odd node-full clearfix">
  
  
  <div class="node-content">
    <div class="section field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item odd"><div class="indent"><br />Welcome to E-Immigration !!! If you are a Indian Passport holder, please upload your immigration form here.<br /><br /></div></div></div></div>  </div>
	
	<div id="id01" class="modal">
  
  <form class="modal-content" method="post"  style="border-radius:3%;">
    <div class="imgcontainer">
      <span  onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	
	<div class="share_fm_dl" id="attachment_poi"></div>
	   <script type="text/javascript">
         function myCallback(str)
         {
            return "SUCCESS";
         }
      </script>
       <script src="jquery.min.js"></script>
       <script type="text/javascript" src="https://services.digitallocker.gov.in/requester/api/2/dl.js" id="dlshare" data-app-id="digi_digi" data-app-hash=<?php encrypt256();?> time-stamp=<?php echo time();?> data-callback="myCallback"></script>
        
    </div>

    </form>
 </div>

  <div class="share_fm_dl" id="attachment_poi"></div>
  </div>
    </div>
  </div>
</div>
  </div>

                              </div>
              
            </div>
       </div>
       
           <!-- SIDEBAR FIRST -->
          <div id="sidebar-first-wrapper" class="sidebar tb-main-box grid grid-5 grid-last">
            <div class="grid-inner clearfix">
		
			  <div class="region region-sidebar-first">
    <div id="block-menu-block-1--2" class="block block-menu-block block-xhtml">
  <div class="block-inner clearfix">
              <h2 class="block-title">E IMMIGRATION</h2>
        
    <div class="block-content clearfix">
      <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-2">
  <ul class="menu"><li class="first leaf active menu-mlid-2629"><a href="/content/encrecr" title="ECNR/ECR" class="active">IMMIGRATION FORM</a></li>

</ul></div>
    </div>
  </div>
</div>
  </div>
            </div>
          </div>
          <!-- //SIDEBAR FIRST -->
                    

	 <!-- //Main Content -->
                
        
	   
 </div>  
 </div>
 
 
      <div id="breadcrumb-wrapper" class="wrapper">
      <div class="container grid-24">
          <div class="grid-inner clearfix">
                      <h2 class="element-invisible">You are here</h2><ol id="crumbs"><li class="crumb crumb-home"><a href="/">Home</a></li></ol>          
                      <a title="Back to Top" class="btn-btt" href="#Top">▲ Top</a>
                    </div>
      </div>
    </div>
  
 

      <!-- FOOTER -->
    <div id="footer-wrapper" class="wrapper">
      <div class="container grid-24">
        <div class="grid-inner clearfix">
		<div id="footerouter">
          <div id="footer" class="clearfix">  <div class="region region-footer">
    <ul class="menu"><li class="first leaf"><a href="/content/download-forms">Download Forms</a></li>
<li class="leaf"><a href="/content/hyperlink-policy" title="">Hyperlink Policy</a></li>
<li class="leaf"><a href="/content/help" title="">Help</a></li>
<li class="leaf"><a href="/content/accessibility-statement" title="">Accessibility Statement</a></li>
<li class="leaf"><a href="/content/terms-and-conditions">Terms and Conditions</a></li>
<li class="leaf"><a href="/content/privacy-policy" title="">Privacy Policy</a></li>
<li class="leaf"><a href="/content/copyright-policy">Copyright Policy</a></li>
<li class="last leaf"><a href="/content/disclaimer">Disclaimer</a></li>
</ul>  </div>
</div>
		  </div>
        </div>
      </div>
    </div>
	<div  id="footer-bottom"class="abc" >Website hosted & maintained by National Informatics Centre.<br/><div class="date1" style="text-align:center;"><p><span style="margin-right:6px;">Last reviewed and updated on</span>June 28,2016 17:21</p></div> </div>
    <!-- /#FOOTER -->
  </div>
  

      </body>
</html>