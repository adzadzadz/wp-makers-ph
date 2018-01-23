<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php qode_startit_wp_title(); ?>
    <?php
    /**
     * @see qode_startit_header_meta() - hooked with 10
     * @see qode_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('qode_startit_header_meta'); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64863437-2"></script>
	<script>
 	 window.dataLayer = window.dataLayer || [];
 	 function gtag(){dataLayer.push(arguments);}
 	 gtag('js', new Date());
	
 	 gtag('config', 'UA-64863437-2');
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php qode_startit_get_side_area(); ?>

<!-- FACEBOOK PLUGIN -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=758749107492947';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="qodef-wrapper">
    <div class="qodef-wrapper-inner">
        <?php qode_startit_get_header(); ?>
		
		<style id="adz-custom-css">
			.qodef-top-bar {
				display: block !important;
			}
		</style>
		
        <?php if(qode_startit_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='qodef-back-to-top'  href='#'>
                <span class="qodef-icon-stack">
                     <?php
                        qode_startit_icon_collections()->getBackToTopIcon('font_awesome');
                    ?>
                </span>
            </a>
        <?php } ?>
        <?php qode_startit_get_full_screen_menu(); ?>

        <div class="qodef-content" <?php qode_startit_content_elem_style_attr(); ?>>
 <div class="qodef-content-inner">