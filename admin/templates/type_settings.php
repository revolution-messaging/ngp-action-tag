<div id="ngp-container" class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin - Page Type Settings</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<form name="ngp_action_tag_type_form" method="post" action="options.php">
  						<?php @settings_fields('ngp-action-tag-type-settings'); ?>
							<h3><span>Signup Form Settings</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_signup_form_slug" id="ngp_action_tag_signup_form_slug" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_action_message">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_signup_form_action" id="ngp_action_tag_signup_form_action_message" value="message" <?php if(get_option('ngp_action_tag_signup_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_signup_form_message" id="ngp_action_tag_signup_form_message" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_action_redirect">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_signup_form_action" id="ngp_action_tag_signup_form_action_redirect" value="redirect" <?php if(get_option('ngp_action_tag_signup_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_signup_form_redirect" id="ngp_action_tag_signup_form_redirect" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_action_none">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_signup_form_action" id="ngp_action_tag_signup_form_action_none" value="" <?php if(get_option('ngp_action_tag_signup_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_signup_form_template" id="ngp_action_tag_signup_form_template" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_signup_form_labels" id="ngp_action_tag_signup_form_labels" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_signup_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_signup_form_databags" id="ngp_action_tag_signup_form_databags" type="text" value="<?php echo get_option('ngp_action_tag_signup_form_databags'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							<h3><span>Contribution Form Settings</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_contribution_form_slug" id="ngp_action_tag_contribution_form_slug" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_action_message">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_contribution_form_action" id="ngp_action_tag_contribution_form_action_message" value="message" <?php if(get_option('ngp_action_tag_contribution_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_contribution_form_message" id="ngp_action_tag_contribution_form_message" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_action_redirect">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_contribution_form_action" id="ngp_action_tag_contribution_form_action_redirect" value="redirect" <?php if(get_option('ngp_action_tag_contribution_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_contribution_form_redirect" id="ngp_action_tag_contribution_form_redirect" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_action_none">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_contribution_form_action" id="ngp_action_tag_contribution_form_action_none" value="" <?php if(get_option('ngp_action_tag_contribution_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_contribution_form_template" id="ngp_action_tag_contribution_form_template" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_contribution_form_labels" id="ngp_action_tag_contribution_form_labels" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_contribution_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_contribution_form_databags" id="ngp_action_tag_contribution_form_databags" type="text" value="<?php echo get_option('ngp_action_tag_contribution_form_databags'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							<h3><span>Petition Form Settings</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_petition_form_slug" id="ngp_action_tag_petition_form_slug" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_petition_form_action" id="ngp_action_tag_petition_form_action_message" value="message" <?php if(get_option('ngp_action_tag_petition_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_petition_form_message" id="ngp_action_tag_petition_form_message" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_petition_form_action" id="ngp_action_tag_petition_form_action_redirect" value="redirect" <?php if(get_option('ngp_action_tag_petition_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_petition_form_redirect" id="ngp_action_tag_petition_form_redirect" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_petition_form_action" id="ngp_action_tag_petition_form_action_none" value="" <?php if(get_option('ngp_action_tag_petition_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_petition_form_template" id="ngp_action_tag_petition_form_template" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_petition_form_labels" id="ngp_action_tag_petition_form_labels" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_petition_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_petition_form_databags" id="ngp_action_tag_petition_form_databags" type="text" value="<?php echo get_option('ngp_action_tag_petition_form_databags'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							
							<h3><span>Volunteer Form Settings</span></h3>
							<div class="inside">
								<table class="form-table">
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_volunteer_form_slug" id="ngp_action_tag_volunteer_form_slug" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_volunteer_form_action" id="ngp_action_tag_volunteer_form_action_message" value="message" <?php if(get_option('ngp_action_tag_volunteer_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_volunteer_form_message" id="ngp_action_tag_volunteer_form_message" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_volunteer_form_action" id="default_form_action_redirect" value="redirect" <?php if(get_option('ngp_action_tag_volunteer_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="ngp_action_tag_volunteer_form_redirect" id="ngp_action_tag_volunteer_form_redirect" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="ngp_action_tag_volunteer_form_action" id="ngp_action_tag_volunteer_form_action_none" value="" <?php if(get_option('ngp_action_tag_volunteer_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_volunteer_form_template" id="ngp_action_tag_volunteer_form_template" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_volunteer_form_labels" id="ngp_action_tag_volunteer_form_labels" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="ngp_action_tag_volunteer_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="ngp_action_tag_volunteer_form_databags" id="ngp_action_tag_volunteer_form_databags" type="text" value="<?php echo get_option('ngp_action_tag_volunteer_form_databags'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
								</table>
							</div>
							
							<div class="inside">
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