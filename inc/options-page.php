<div id="ngp-container" class="wrap">
	
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
										<td valign="top">
											<label for="ngp_action_tag_apikey">API Key</label>
										</td>
										<td valign="top">
											<input name="ngp_action_tag_apikey" id="ngp_action_tag_apikey" type="text" value="<?php echo $ngp_action_tag_apikey; ?>" class="regular-text" />
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="ngp_action_tag_endpoint">API Endpoint</label><br /><em>Use https://api1.myngp.com for testing</em>
										</td>
										<td valign="top">
											<input name="ngp_action_tag_endpoint" id="ngp_action_tag_endpoint" type="text" value="<?php echo $ngp_action_tag_endpoint; ?>" class="regular-text" />
										</td>
									</tr>
								</table>
								<p style="padding-left:10px;">
									<input class="button-primary" type="submit" name="ngp_action_tag_apikey_submit" value="Save" /> 
								</p>
							</form>
							
						</div> <!-- .inside -->
					</div>
					
					<?php if(is_object($response) && is_array($response->forms)): ?>
					<div class="postbox">
						
						<h3><span>Available Forms</span></h3>

						<div class="inside">
							<table class="wp-list-table widefat fixed " cellspacing="0">
  							<thead>
    							<tr>
      							<th class="manage-column column-id">ID</th>
      							<th class="manage-column column-name">Name</th>
                    <th class="manage-column column-status">Status</th>
                    <th class="manage-column column-shortcode" style="width: 500px;">Shortcode Tag</th>
    							</tr>
  							</thead>
  							<tbody>
  							<?php foreach($response->forms as $form): ?>
    							<tr>
      							<td><?php echo $form->obfuscatedId; ?></td>
      							<td><?php echo $form->name; ?></td>
                    <td><?php echo $form->status; ?></td>
                    <td>[actiontag id="<?php echo $form->obfuscatedId; ?>" success="Thank You!"]</td>
    							</tr>
  							<?php endforeach; ?>
  							</tbody>
							</table>
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					<?php endif; ?>
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
		
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->