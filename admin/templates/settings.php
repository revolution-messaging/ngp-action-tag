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
							<form name="ngp_action_tag_apikey_form" method="post" action="options.php">
  							<?php @settings_fields('ngp-action-tag-settings-group'); ?>
								<table class="form-table">
									<tr>
										<td>
											<label for="ngp_action_tag_apikey">API Key</label>
										</td>
										<td>
											<input name="ngp_action_tag_apikey" id="ngp_action_tag_apikey" type="text" value="<?php echo get_option('ngp_action_tag_apikey'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label for="ngp_action_tag_endpoint">API Endpoint</label><br /><em class="ngp-info">Use https://api1.myngp.com for testing</em>
										</td>
										<td>
											<input name="ngp_action_tag_endpoint" id="ngp_action_tag_endpoint" type="text" value="<?php echo get_option('ngp_action_tag_endpoint'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label for="ngp_action_tag_signup_form_url">Signup Form Url</label>
										</td>
										<td>
  										/ <input name="ngp_action_tag_signup_form_url_slug" id="ngp_action_tag_signup_form_url_slug" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_url_slug'); ?>" class="small-text" onchange="sanitizeUrl('ngp_action_tag_signup_form_url_slug');" /> / 
											<input name="ngp_action_tag_signup_form_url" id="ngp_action_tag_signup_form_url" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_url'); ?>" class="regular-text" onchange="sanitizeUrl('ngp_action_tag_signup_form_url');" />
										</td>
										<td>
  										<a href="javascript: void(0);" onclick="window.open('/'+document.getElementById('ngp_action_tag_signup_form_url_slug').value+'/'+document.getElementById('ngp_action_tag_signup_form_url').value, '_blank');" target="_blank">View Page</a>
										</td>
									</tr>
									<tr>
										<td>
											<label for="ngp_action_tag_contribution_form_url">Contribution Form Url</label>
										</td>
										<td>
  										/ <input name="ngp_action_tag_contribution_form_url_slug" id="ngp_action_tag_contribution_form_url_slug" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_url_slug'); ?>" class="small-text" onchange="sanitizeUrl('ngp_action_tag_contribution_form_url_slug');" /> / 
											<input name="ngp_action_tag_contribution_form_url" id="ngp_action_tag_contribution_form_url" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_url'); ?>" class="regular-text" onchange="sanitizeUrl('ngp_action_tag_contribution_form_url');" />
										</td>
										<td>
  										<a href="javascript: void(0);" onclick="window.open('/'+document.getElementById('ngp_action_tag_contribution_form_url_slug').value+'/'+document.getElementById('ngp_action_tag_contribution_form_url').value, '_blank');" target="_blank">View Page</a>
										</td>
									</tr>
									<tr>
										<td>
											<label for="ngp_action_tag_petition_form_url">Petition Form Url</label>
										</td>
										<td>
  										/ <input name="ngp_action_tag_petition_form_url_slug" id="ngp_action_tag_petition_form_url_slug" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_url_slug'); ?>" class="small-text" onchange="sanitizeUrl('ngp_action_tag_petition_form_url_slug');" /> / 
											<input name="ngp_action_tag_petition_form_url" id="ngp_action_tag_petition_form_url" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_url'); ?>" class="regular-text" onchange="sanitizeUrl('ngp_action_tag_petition_form_url');" />
										</td>
										<td>
  										<a href="javascript: void(0);" onclick="window.open('/'+document.getElementById('ngp_action_tag_petition_form_url_slug').value+'/'+document.getElementById('ngp_action_tag_petition_form_url').value, '_blank');" target="_blank">View Page</a>
										</td>
									</tr>
									<tr>
										<td>
											<label for="ngp_action_tag_volunteer_form_url">Volunteer Form Url</label>
										</td>
										<td>
  										/ <input name="ngp_action_tag_volunteer_form_url_slug" id="ngp_action_tag_volunteer_form_url_slug" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_url_slug'); ?>" class="small-text" onchange="sanitizeUrl('ngp_action_tag_volunteer_form_url_slug');" /> / 
											<input name="ngp_action_tag_volunteer_form_url" id="ngp_action_tag_volunteer_form_url" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_url'); ?>" class="regular-text" onchange="sanitizeUrl('ngp_action_tag_volunteer_form_url');" />
										</td>
										<td>
  										<a href="javascript: void(0);" onclick="window.open('/'+document.getElementById('ngp_action_tag_volunteer_form_url_slug').value+'/'+document.getElementById('ngp_action_tag_volunteer_form_url').value, '_blank');" target="_blank">View Page</a>
										</td>
									</tr>
								</table>
								<p style="padding-left:10px;">
									<?php @submit_button(); ?>
								</p>
							</form>
							
						</div> <!-- .inside -->
					</div>
					
					<?php if(!empty($forms)): ?>
					<div class="postbox">
						
						<h3><span>Available Forms</span></h3>

						<div class="inside">
							<table class="wp-list-table widefat fixed " cellspacing="0">
  							<thead>
    							<tr>
      							<th class="manage-column column-id">ID</th>
      							<th class="manage-column column-name">Name</th>
                    <th class="manage-column column-status">Type</th>
                    <th class="manage-column column-shortcode" style="width: 500px;">Shortcode Tag</th>
    							</tr>
  							</thead>
  							<tbody>
  							<?php foreach($forms as $form): ?>
    							<tr>
      							<td><?php echo $form->obfuscatedId; ?></td>
      							<td><?php echo $form->name; ?></td>
                    <td><?php echo $form->type; ?></td>
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

<script type="text/javascript">
  function sanitizeUrl(id) {
		var url = document.getElementById(id).value;
		url = url.toLowerCase().replace(/[^a-z0-9\. -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
    
		document.getElementById(id).value = url;
	}
</script>