<?php
/**
 * @package WordPress
 * @subpackage NGPActionTag
 */

get_header(); ?>

<section id="content" role="main">

	<h1>Custom Petition Form (Plugin Level)</h1>
	
	<?php if($form === null): ?>
	  
	  <p>The requested form could not be found.  Please check the URL and try again.</p>
	  
	<?php else: ?>
	  
  	<script type="text/javascript" src="//d1aqhv4sn5kxtx.cloudfront.net/nvtag.js"></script>
    <div class="ngp-form" data-id="<?php echo $form->obfuscatedId; ?>" <?php echo ($endpoint != '' ? 'data-endpoint="'.$endpoint.'"' : ''); ?>></div>
    
  <?php endif; ?>

</section>

<?php get_footer(); ?>