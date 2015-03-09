<div id="ngp-container" class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin - Global Settings</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<form name="ngp_action_tag_global_form" method="post" action="options.php">
  						<?php @settings_fields('ngp-action-tag-global-settings'); ?>
							<h3><span>API Details</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="api_key">API Key</label></td>
										<td style="width: 500px;"><input name="api_key" id="api_key" type="text" value="<?php echo get_option('api_key'); ?>" class="regular-text" /></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><label for="endpoint">API Endpoint</label><br /><em class="ngp-info">Use https://api1.myngp.com for testing</em></td>
										<td><input name="endpoint" id="endpoint" type="text" value="<?php echo get_option('endpoint'); ?>" class="regular-text" /></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							<h3><span>Default Form Actions</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="default_form_action" id="default_form_action_message" value="message" <?php if(get_option('default_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="default_form_message" id="default_form_message" type="text" value="<?php echo get_option('default_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Redirect Pages</label></td>
										<td style="width: 500px;">
											<input type="radio" name="default_form_action" id="default_form_action_redirect" value="redirect" <?php if(get_option('default_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="default_form_redirect" id="default_form_redirect" type="text" value="<?php echo get_option('default_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							<h3><span>Default Form Attributes</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Template</label></td>
										<td style="width: 500px;">
											<input name="default_data_template" id="default_data_template" type="text" value="<?php echo get_option('default_data_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Labels</label></td>
										<td style="width: 500px;">
											<input name="default_data_labels" id="default_data_labels" type="text" value="<?php echo get_option('default_data_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Databags</label></td>
										<td style="width: 500px;">
											<input name="default_data_databags" id="default_data_databags" type="text" value="<?php echo get_option('default_data_databags'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
								<p style="padding-left:10px;"><?php @submit_button(); ?></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>
</div>

<script type="text/javascript">

</script>