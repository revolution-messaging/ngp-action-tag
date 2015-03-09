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
										<td style="width: 260px;"><label for="signup_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="signup_form_slug" id="signup_form_slug" type="text" value="<?php echo get_option('signup_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="signup_form_action" id="signup_form_action_message" value="message" <?php if(get_option('signup_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="signup_form_message" id="signup_form_message" type="text" value="<?php echo get_option('signup_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="signup_form_action" id="signup_form_action_redirect" value="redirect" <?php if(get_option('signup_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="signup_form_redirect" id="signup_form_redirect" type="text" value="<?php echo get_option('signup_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="signup_form_action" id="signup_form_action_none" value="" <?php if(get_option('signup_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="signup_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="signup_form_template" id="signup_form_template" type="text" value="<?php echo get_option('signup_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="signup_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="signup_form_labels" id="signup_form_labels" type="text" value="<?php echo get_option('signup_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="signup_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="signup_form_databags" id="signup_form_databags" type="text" value="<?php echo get_option('signup_form_databags'); ?>" class="regular-text" />
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
										<td style="width: 260px;"><label for="contribution_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="contribution_form_slug" id="contribution_form_slug" type="text" value="<?php echo get_option('contribution_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="contribution_form_action" id="contribution_form_action_message" value="message" <?php if(get_option('contribution_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="contribution_form_message" id="contribution_form_message" type="text" value="<?php echo get_option('contribution_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="contribution_form_action" id="contribution_form_action_redirect" value="redirect" <?php if(get_option('contribution_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="contribution_form_redirect" id="contribution_form_redirect" type="text" value="<?php echo get_option('contribution_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="contribution_form_action" id="contribution_form_action_none" value="" <?php if(get_option('contribution_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="contribution_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="contribution_form_template" id="contribution_form_template" type="text" value="<?php echo get_option('contribution_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="contribution_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="contribution_form_labels" id="contribution_form_labels" type="text" value="<?php echo get_option('contribution_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="contribution_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="contribution_form_databags" id="contribution_form_databags" type="text" value="<?php echo get_option('contribution_form_databags'); ?>" class="regular-text" />
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
										<td style="width: 260px;"><label for="petition_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="petition_form_slug" id="petition_form_slug" type="text" value="<?php echo get_option('petition_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="petition_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="petition_form_action" id="petition_form_action_message" value="message" <?php if(get_option('petition_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="petition_form_message" id="petition_form_message" type="text" value="<?php echo get_option('petition_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="petition_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="petition_form_action" id="petition_form_action_redirect" value="redirect" <?php if(get_option('petition_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="petition_form_redirect" id="petition_form_redirect" type="text" value="<?php echo get_option('petition_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="petition_form_action" id="petition_form_action_none" value="" <?php if(get_option('petition_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="petition_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="petition_form_template" id="petition_form_template" type="text" value="<?php echo get_option('petition_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="petition_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="petition_form_labels" id="petition_form_labels" type="text" value="<?php echo get_option('petition_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="petition_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="petition_form_databags" id="petition_form_databags" type="text" value="<?php echo get_option('petition_form_databags'); ?>" class="regular-text" />
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
										<td style="width: 260px;"><label for="volunteer_form_slug">Slug</label></td>
										<td style="width: 500px;">
											<input name="volunteer_form_slug" id="volunteer_form_slug" type="text" value="<?php echo get_option('volunteer_form_slug'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="volunteer_form_action">Display Message</label></td>
										<td style="width: 500px;">
											<input type="radio" name="volunteer_form_action" id="volunteer_form_action_message" value="message" <?php if(get_option('volunteer_form_action') == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="volunteer_form_message" id="volunteer_form_message" type="text" value="<?php echo get_option('volunteer_form_message'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="volunteer_form_action">Redirect Page</label></td>
										<td style="width: 500px;">
											<input type="radio" name="volunteer_form_action" id="default_form_action_redirect" value="redirect" <?php if(get_option('volunteer_form_action') == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
											<input name="volunteer_form_redirect" id="volunteer_form_redirect" type="text" value="<?php echo get_option('volunteer_form_redirect'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="default_form_action">No (Default) Action</label></td>
										<td style="width: 500px;">
											<input type="radio" name="volunteer_form_action" id="volunteer_form_action_none" value="" <?php if(get_option('volunteer_form_action') == ''): ?>checked="checked"<?php endif; ?> />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
  									<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="volunteer_form_template">Template</label></td>
										<td style="width: 500px;">
											<input name="volunteer_form_template" id="volunteer_form_template" type="text" value="<?php echo get_option('volunteer_form_template'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="volunteer_form_labels">Labels</label></td>
										<td style="width: 500px;">
											<input name="volunteer_form_labels" id="volunteer_form_labels" type="text" value="<?php echo get_option('volunteer_form_labels'); ?>" class="regular-text" />
										</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="width: 260px;"><label for="volunteer_form_databags">Databags</label></td>
										<td style="width: 500px;">
											<input name="volunteer_form_databags" id="volunteer_form_databags" type="text" value="<?php echo get_option('volunteer_form_databags'); ?>" class="regular-text" />
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