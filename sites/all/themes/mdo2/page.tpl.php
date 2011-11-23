<?php
// $Id: page.tpl.php,v 1.0 2010/02/20 09:36:17 pirotek Exp $


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?> 
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">

	<!-- START: div#content1 -->
	<div id="content1"><div class="wrap1">
		
		<div id="header"><div id="header-inner" class="clear-block">
	
		  <?php if ($header): ?>
			<div id="header-blocks">
			  <?php print $header; ?>
			</div> <!-- /#header-blocks -->
		  <?php endif; ?>
		  
		  <?php if ($logo || $site_name || $site_slogan): ?>
			<div id="logo-title">
			  <?php if ($logo): ?>
				<div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
			  <?php endif; ?>
	
			  <?php if ($site_name): ?>   
				<h1 id="site-name">
				  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
					<?php print $site_name; ?>
				  </a>
				</h1>
			  <?php endif; ?>
	
			  <?php if ($site_slogan): ?>
				<div id="site-slogan"><?php print $site_slogan; ?></div>
			  <?php endif; ?>
	
			</div> <!-- /#logo-title -->
		  <?php endif; ?>
	
		  <?php if ($secondary_links): ?>
			<div id="secondary">
			  <?php print theme('links', $secondary_links); ?>
			</div> <!-- /#secondary -->
		  <?php endif; ?>
	
		</div></div> <!-- /#header-inner, /#header -->
		
	</div></div>
	<!-- END: div#content1 -->

	<!-- START: div#content2 -->
	<div id="content2"><div class="wrap1">
	
	  <div id="page"><div id="page-inner">
	
		<?php if ($primary_links || $navbar): ?>
		  <div id="navbar"><div id="navbar-inner" class="clear-block">
			<?php if ($primary_links): ?>
			  <div id="primary">
				<?php print menu_tree($menu_name = 'primary-links'); ?>
			  </div>
			<?php endif; ?> <!-- /#primary -->
	
			<?php print $navbar; ?>
			<div class="nav_shadow1"></div>
		  </div></div> <!-- /#navbar-inner, /#navbar -->
		<?php endif; ?> 
	
		<?php if ($showcase): ?>
		  <div id="showcase">
			<div id="showcase-inner" class="clear-block">
			  <?php print $showcase; ?>
			</div>
		  </div>
		<?php endif; ?>
	
		<div id="main"><div id="main-inner" class="clear-block">
		  
		  <!-- START: div.column1, div.column_wrap1 -->
		  <div class="column1"><div class="column_wrap1">	
			
				<?php if ($mission): ?>
				  <div id="mission"><?php print $mission; ?></div>
				<?php endif; ?>
		
						<div id="breadcrumb" class="clear-block"><?php print $breadcrumb; ?></div>
						
				<?php if ($content_top): ?>
				  <div id="content-top" class="clear-block">
					<?php print $content_top; ?>
				  </div><!-- /content_top -->
				<?php endif; ?>           
		
				<div id="content-area">
				<?php if ($title || $tabs || $help || $messages): ?>
				  <div id="content-header">
					<?php if (!empty($title) && !( arg(0) == 'node' && is_numeric(arg(1)))) : ?>
					  <h1><?php print $title; ?></h1>
					<?php endif; ?>
					<?php print $messages; ?>
					<?php if ($tabs): ?>
					  <div class="drupal_tabs"><?php print $tabs; ?></div>
					<?php endif; ?>
					<?php print $help; ?>
				  </div> <!-- /#content-header -->
				<?php endif; ?>
		
				  <?php print $content; ?>
				</div>
						
				<?php if ($content_bottom): ?>
				  <div id="content_bottom" class="clear-block">
					<?php print $content_bottom; ?>
				  </div><!-- /content_top -->
				<?php endif; ?>
			
		  </div></div>
		  <!-- END: div.column1, div.column_wrap1 -->
		  
		  <!-- START: div.column2, div.column_wrap1 -->
		  <div class="column2"><div class="column_wrap1">
		  
			  <?php if ($right || $right_top): ?>
				<div id="sidebar-right"><div id="sidebar-right-inner">
				  <?php print $right; ?>
				</div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
			  <?php endif; ?>
			
		  </div></div>
		  <!-- END: div.column2, div.column_wrap1 --> 
	
		</div></div> <!-- /#main-inner, /#main -->
	  
	  </div></div> <!-- /#page-inner, /#page -->

	</div></div>
	<!-- END: div#content2 -->

	<!-- START: div#content3 -->
	<div id="content3"><div class="wrap1"><div class="wrap2">
	
		<?php if ($footer_one || $footer_two || $footer_three): ?>
		  <div id="footer"><div id="footer-inner" class="<?php print $footer; ?> clear-block">

			<?php if ($footer_one): ?>
			  <div id="footer-one" class="column"><div class="column_wrap1">
				<?php print $footer_one; ?>
			  </div></div><!-- /footer-one -->
			<?php endif; ?>
			<?php if ($footer_two): ?>
			  <div id="footer-two" class="column"><div class="column_wrap1">
				<?php print $footer_two; ?>
			  </div></div><!-- /footer-two -->
			<?php endif; ?>
			<?php if ($footer_three): ?>
			  <div id="footer-three" class="column"><div class="column_wrap1">
				<?php print $footer_three; ?>
			  </div></div><!-- /footer-three -->
			<?php endif; ?>
		  
		  </div></div> <!-- /#footer-inner, /#footer -->
		<?php endif; ?>

	</div></div></div>
	<!-- END: div#content3 -->

	<!-- START: div#content4 -->
	<div id="content4"><div class="wrap1">
		  
		  <!-- START: div.column1, div.column_wrap1 -->
		  <div class="column1"><div class="column_wrap1">
		  
		  		<div id="copyright"><div id="copyright-inner" class="region region-copyright"><?php print $copyright; ?></div></div>
				
			</div></div>
			<!-- END: div.column1, div.column_wrap1 -->
		  
		  <!-- START: div.column2, div.column_wrap1 -->
		  <div class="column2"><div class="column_wrap1">
		  
		  		<div id="closure"><div id="closure-inner" class="region region-closure"><?php print $closure_region; ?></div></div>
				
			</div></div>
			<!-- END: div.column2, div.column_wrap1 -->

	</div></div>
	<!-- END: div#content4 -->
	
	  <?php print $closure; ?>

</body>
</html>
