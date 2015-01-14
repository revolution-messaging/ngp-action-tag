<?php 

//print_r($options);

?>

<div id="npg-container" class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin</h2>
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Please enter your API key.</span></h3>

						<div class="inside">
							<form name="ngp_action_tag_apikey_form" method="post" action="">
								<input type="hidden" name="ngp_action_tag_apikey_form_submitted" value="Y" />
								<table class="form-table">
									<tr>
										<td>
											<label for="npg_action_tag_apikey">API Key</label>
										</td>
										<td>
											<input name="npg_action_tag_apikey" id="npg_action_tag_apikey" type="text" value="<?php echo $ngp_action_tag_apikey; ?>" class="regular-text" />
										</td>
									</tr>
								</table>
								<p>
									<input class="button-primary" type="submit" name="npg_action_tag_apikey_submit" value="Save" /> 
								</p>
							</form>
							<?php echo $response; ?>
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
		
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->

<script type="text/javascript" src="//d1aqhv4sn5kxtx.cloudfront.net/nvtag.js"></script>
<div class="ngp-form" data-id="-""></div>