<div id="ngp-container" class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin - Global Settings</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<form name="ngp_action_tag_global_form" method="post" action="options.php">
							<?php settings_errors(); ?>
  						<?php @settings_fields('ngp-action-tag-global-settings'); ?>
							<h3><span>API Details</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_api_key">API Key</label></td>
										<td style="width: 500px;"><input name="ngp_action_tag_api_key" id="ngp_action_tag_api_key" type="text" value="<?php echo get_option('ngp_action_tag_api_key'); ?>" class="regular-text" /></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td><label for="ngp_action_tag_endpoint">API Endpoint</label><br /><em class="ngp-info">Use https://api1.myngp.com for testing</em></td>
										<td><input name="ngp_action_tag_endpoint" id="ngp_action_tag_endpoint" type="text" value="<?php echo get_option('ngp_action_tag_endpoint'); ?>" class="regular-text" /></td>
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
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_default_form_action" id="ngp_action_tag_default_form_action_message" value="message" <?php if(get_option('ngp_action_tag_default_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_default_form_message" id="ngp_action_tag_default_form_message" type="text" value="<?php echo get_option('ngp_action_tag_default_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_default_form_action" id="ngp_action_tag_default_form_action_redirect" value="redirect" <?php if(get_option('ngp_action_tag_default_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_default_form_redirect" id="ngp_action_tag_default_form_redirect" type="text" value="<?php echo get_option('ngp_action_tag_default_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_default_form_action" id="ngp_action_tag_default_form_action_none" value="" <?php if(get_option('ngp_action_tag_default_form_action') == ''): ?>checked="checked"<?php endif; ?> />
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
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">Template</label></td>
										<td style="width: 500px;">
											<select name="ngp_action_tag_default_data_template" id="ngp_action_tag_default_data_template">
												<option value="">-Select-</option>
												<option value="minimal" <?php if(get_option('ngp_action_tag_default_data_template') == 'minimal'): ?>selected="selected"<?php endif; ?>>Minimal</option>
												<option value="accelerator" <?php if(get_option('ngp_action_tag_default_data_template') == 'accelerator'): ?>selected="selected"<?php endif; ?>>Accelerator</option>
												<option value="oberon" <?php if(get_option('ngp_action_tag_default_data_template') == 'oberon'): ?>selected="selected"<?php endif; ?>>Oberon</option>
											</select>
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">Labels</label></td>
										<td style="width: 500px;">
											<select name="ngp_action_tag_default_data_labels" id="ngp_action_tag_default_data_labels">
												<option value="">-Select-</option>
												<option value="inline" <?php if(get_option('ngp_action_tag_default_data_labels') == 'inline'): ?>selected="selected"<?php endif; ?>>Inline</option>
												<option value="above" <?php if(get_option('ngp_action_tag_default_data_labels') == 'above'): ?>selected="selected"<?php endif; ?>>Above</option>
											</select>
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_default_form_action">Databag</label></td>
										<td style="width: 500px;">
											<select name="ngp_action_tag_default_data_databag" id="ngp_action_tag_default_data_databag">
												<option value="">-Select-</option>
												<option value="nobody" <?php if(get_option('ngp_action_tag_default_data_databag') == 'nobody'): ?>selected="selected"<?php endif; ?>>Nobody</option>
												<option value="everybody" <?php if(get_option('ngp_action_tag_default_data_databag') == 'everybody'): ?>selected="selected"<?php endif; ?>>Everybody</option>
											</select>
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