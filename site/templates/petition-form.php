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
    <div class="ngp-form" data-id="<?php echo $form->obfuscatedId; ?>" <?php echo ($endpoint != '' ? 'data-endpoint="'.$endpoint.'"' : ''); ?> <?php echo ($template != '' ? 'data-template="'.$template.'"' : ''); ?> <?php echo ($labels != '' ? 'data-labels="'.$labels.'"' : ''); ?> <?php echo ($databags != '' ? 'data-databags="'.$databags.'"' : ''); ?>></div>
    <script type="text/javascript">
      var segueCallback = function() { <?php if($action == 'redirect'): ?>window.location.href='<?php echo $redirect; ?>';<?php elseif($action == 'message'): ?>alert('<?php echo $message; ?>');<?php endif; ?>};
      var nvtag_callbacks = nvtag_callbacks || {};
      nvtag_callbacks.preSegue = nvtag_callbacks.segueCallback || []; 
      nvtag_callbacks.preSegue.push(segueCallback);
    </script>
    
  <?php endif; ?>

</section>

<?php get_footer(); ?>