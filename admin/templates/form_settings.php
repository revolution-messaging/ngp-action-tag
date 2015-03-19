<div id="ngp-container" class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin - Form Settings</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						
						<form name="ngp_action_tag_type_form" method="post" action="options.php">
  						<?php settings_errors(); ?>
  						<?php @settings_fields('ngp-action-tag-form-settings'); ?>
							
							<h3><span>Select from a form below</span></h3>
							<div class="inside">
								<select id="ngp_action_tag_form_selection_type" name="ngp_action_tag_form_selection_type" onchange="updateType();">
									<option value="">-Select-</option>
									<option value="SignupForm" <?php if($ngp_action_tag_form_selection_type == 'SignupForm'): ?>selected="selected"<?php endif; ?>>Signup Forms</option>
									<option value="ContributionForm" <?php if($ngp_action_tag_form_selection_type == 'ContributionForm'): ?>selected="selected"<?php endif; ?>>Contribution Forms</option>
									<option value="PetitionForm" <?php if($ngp_action_tag_form_selection_type == 'PetitionForm'): ?>selected="selected"<?php endif; ?>>Petition Forms</option>
									<option value="VolunteerForm" <?php if($ngp_action_tag_form_selection_type == 'VolunteerForm'): ?>selected="selected"<?php endif; ?>>Volunteer Forms</option>
								</select>&nbsp;&nbsp;
								<select id="ngp_action_tag_form_selection_form_SignupForm" name="ngp_action_tag_form_selection_form_signup" class="ngp_action_tag_form_selection_form" onchange="updateForm(this);" style="display: none;">
									<option value="">-Select-</option>
									<?php foreach($forms as $form): ?>
										<?php if($form->type == 'SignupForm'): ?>
										<option class="<?php echo $form->type; ?>" value="<?php echo $form->obfuscatedId; ?>" <?php if($ngp_action_tag_form_selection_form_signup == $form->obfuscatedId): ?>selected="selected"<?php endif; ?>><?php echo $form->name; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<select id="ngp_action_tag_form_selection_form_ContributionForm" name="ngp_action_tag_form_selection_form_contribution" class="ngp_action_tag_form_selection_form" onchange="updateForm(this);" style="display: none;">
									<option value="">-Select-</option>
									<?php foreach($forms as $form): ?>
										<?php if($form->type == 'ContributionForm'): ?>
										<option class="<?php echo $form->type; ?>" value="<?php echo $form->obfuscatedId; ?>" <?php if($ngp_action_tag_form_selection_form_contribution == $form->obfuscatedId): ?>selected="selected"<?php endif; ?>><?php echo $form->name; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<select id="ngp_action_tag_form_selection_form_PetitionForm" name="ngp_action_tag_form_selection_form_petition" class="ngp_action_tag_form_selection_form" onchange="updateForm(this);" style="display: none;">
									<option value="">-Select-</option>
									<?php foreach($forms as $form): ?>
										<?php if($form->type == 'PetitionForm'): ?>
										<option class="<?php echo $form->type; ?>" value="<?php echo $form->obfuscatedId; ?>" <?php if($ngp_action_tag_form_selection_form_petition == $form->obfuscatedId): ?>selected="selected"<?php endif; ?>><?php echo $form->name; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<select id="ngp_action_tag_form_selection_form_VolunteerForm" name="ngp_action_tag_form_selection_form_volunteer" class="ngp_action_tag_form_selection_form" onchange="updateForm(this);" style="display: none;">
									<option value="">-Select-</option>
									<?php foreach($forms as $form): ?>
										<?php if($form->type == 'VolunteerForm'): ?>
										<option class="<?php echo $form->type; ?>" value="<?php echo $form->obfuscatedId; ?>" <?php if($ngp_action_tag_form_selection_form_volunteer == $form->obfuscatedId): ?>selected="selected"<?php endif; ?>><?php echo $form->name; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<br /><br />
							
							<?php foreach($forms as $form): ?>
								<div id="form_<?php echo $form->obfuscatedId; ?>" class="form" style="display:none;">
									<h3><span><?php echo $form->name; ?> (<?php echo $form->type; ?>)</span></h3>
									<div class="inside">
										<table class="form-table">
											<tr>
												<td style="width: 260px;"><label for="signup_form_id">ID</label></td>
												<td style="width: 500px;"><?php echo $form->obfuscatedId; ?></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="signup_form_slug">Slug</label></td>
												<td style="width: 500px;"><?php echo $form->slug; ?></td>
												<td>&nbsp;</td>
											</tr>
											<?php if($form->type == 'SignupForm' && get_option('ngp_action_tag_signup_form_slug') != ''): ?>
											<tr>
												<td style="width: 260px;"><label for="">Page URL</label></td>
												<td style="width: 500px;"><a href="<?php echo get_site_url().'/'.get_option('ngp_action_tag_signup_form_slug').'/'.$form->slug; ?>" target="_blank"><?php echo get_site_url().'/'.get_option('ngp_action_tag_signup_form_slug').'/'.$form->slug; ?></a></td>
												<td>&nbsp;</td>
											</tr>
											<?php elseif($form->type == 'ContributionForm' && get_option('ngp_action_tag_contribution_form_slug') != ''): ?>
											<tr>
												<td style="width: 260px;"><label for="">Page URL</label></td>
												<td style="width: 500px;"><a href="<?php echo get_site_url().'/'.get_option('ngp_action_tag_contribution_form_slug').'/'.$form->slug; ?>" target="_blank"><?php echo get_site_url().'/'.get_option('ngp_action_tag_contribution_form_slug').'/'.$form->slug; ?></a></td>
												<td>&nbsp;</td>
											</tr>
											<?php elseif($form->type == 'PetitionForm' && get_option('ngp_action_tag_petition_form_slug') != ''): ?>
											<tr>
												<td style="width: 260px;"><label for="">Page URL</label></td>
												<td style="width: 500px;"><a href="<?php echo get_site_url().'/'.get_option('ngp_action_tag_petition_form_slug').'/'.$form->slug; ?>" target="_blank"><?php echo get_site_url().'/'.get_option('ngp_action_tag_petition_form_slug').'/'.$form->slug; ?></a></td>
												<td>&nbsp;</td>
											</tr>
											<?php elseif($form->type == 'VolunteerForm' && get_option('ngp_action_tag_volunteer_form_slug') != ''): ?>
											<tr>
												<td style="width: 260px;"><label for="">Page URL</label></td>
												<td style="width: 500px;"><a href="<?php echo get_site_url().'/'.get_option('ngp_action_tag_volunteer_form_slug').'/'.$form->slug; ?>" target="_blank"><?php echo get_site_url().'/'.get_option('ngp_action_tag_volunteer_form_slug').'/'.$form->slug; ?></a></td>
												<td>&nbsp;</td>
											</tr>
											<?php endif; ?>
											<tr>
												<td style="width: 260px;"><label for="signup_form_shortcode">Short Code</label></td>
												<td style="width: 500px;" id="action_tag_snippet_<?php echo $form->obfuscatedId; ?>"></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_message">Display Message</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_action_tag_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_action_message" value="message" <?php if($ngp_action_tag_form_action[$form->obfuscatedId] == 'message'): ?>checked="checked"<?php endif; ?> onclick="updateShortCode('<?php echo $form->obfuscatedId; ?>');" />&nbsp;&nbsp;
													<input name="ngp_action_tag_form_message[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_message" type="text" value="<?php echo $ngp_action_tag_form_message[$form->obfuscatedId]; ?>" class="regular-text" onkeyup="updateShortCode('<?php echo $form->obfuscatedId; ?>');" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_redirect">Redirect Page</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_action_tag_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_action_redirect" value="redirect" <?php if($ngp_action_tag_form_action[$form->obfuscatedId] == 'redirect'): ?>checked="checked"<?php endif; ?> onclick="updateShortCode('<?php echo $form->obfuscatedId; ?>');" />&nbsp;&nbsp;
													<input name="ngp_action_tag_form_redirect[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_redirect" type="text" value="<?php echo $ngp_action_tag_form_redirect[$form->obfuscatedId]; ?>" class="regular-text" onkeyup="updateShortCode('<?php echo $form->obfuscatedId; ?>');" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_redirect">No (Default) Action</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_action_tag_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_action_none" value="" <?php if($ngp_action_tag_form_action[$form->obfuscatedId] == ''): ?>checked="checked"<?php endif; ?> onclick="updateShortCode('<?php echo $form->obfuscatedId; ?>');" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
		  									<td colspan="3">&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_template">Template</label></td>
												<td style="width: 500px;">
													<select name="ngp_action_tag_form_template[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_template" onchange="updateShortCode('<?php echo $form->obfuscatedId; ?>');">
														<option value="">-Select-</option>
														<option value="minimal" <?php if($ngp_action_tag_form_template[$form->obfuscatedId] == 'minimal'): ?>selected="selected"<?php endif; ?>>Minimal</option>
														<option value="accelerator" <?php if($ngp_action_tag_form_template[$form->obfuscatedId] == 'accelerator'): ?>selected="selected"<?php endif; ?>>Accelerator</option>
														<option value="oberon" <?php if($ngp_action_tag_form_template[$form->obfuscatedId] == 'oberon'): ?>selected="selected"<?php endif; ?>>Oberon</option>
													</select>
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_labels">Labels</label></td>
												<td style="width: 500px;">
													<select name="ngp_action_tag_form_labels[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_labels" onchange="updateShortCode('<?php echo $form->obfuscatedId; ?>');">
														<option value="">-Select-</option>
														<option value="inline" <?php if($ngp_action_tag_form_labels[$form->obfuscatedId] == 'inline'): ?>selected="selected"<?php endif; ?>>Inline</option>
														<option value="above" <?php if($ngp_action_tag_form_labels[$form->obfuscatedId] == 'above'): ?>selected="selected"<?php endif; ?>>Above</option>
													</select>
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_databag">Databag</label></td>
												<td style="width: 500px;">
													<select name="ngp_action_tag_form_databag[<?php echo $form->obfuscatedId; ?>]" id="ngp_action_tag_form_<?php echo $form->obfuscatedId; ?>_databag" onchange="updateShortCode('<?php echo $form->obfuscatedId; ?>');">
														<option value="">-Select-</option>
														<option value="nobody" <?php if($ngp_action_tag_form_databag[$form->obfuscatedId] == 'nobody'): ?>selected="selected"<?php endif; ?>>Nobody</option>
														<option value="everybody" <?php if($ngp_action_tag_form_databag[$form->obfuscatedId] == 'everybody'): ?>selected="selected"<?php endif; ?>>Everybody</option>
													</select>
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
		  									<td colspan="3">&nbsp;</td>
											</tr>
										</table>
									</div>
								</div>
							<?php endforeach; ?>
							
							<div id="form_save" class="inside">
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
	jQuery(document).ready(function() {
		updateType();
		
		<?php foreach($forms as $form): ?>
		updateShortCode('<?php echo $form->obfuscatedId; ?>');
		<?php endforeach; ?>
	});
	
	function updateType() {
		if(jQuery('#ngp_action_tag_form_selection_type').val() == '') {
			jQuery('.ngp_action_tag_form_selection_form').hide();
			jQuery('.form').hide();
			jQuery('#form_save').hide();
		} else {
			jQuery('.ngp_action_tag_form_selection_form').hide();
			jQuery('#ngp_action_tag_form_selection_form_'+jQuery('#ngp_action_tag_form_selection_type').val()).show();
			
			updateForm(jQuery('#ngp_action_tag_form_selection_form_'+jQuery('#ngp_action_tag_form_selection_type').val())[0]);
		}
	}
	
	function updateForm(el) {
		if(jQuery(el).val() == '') {
			jQuery('.form').hide();
			jQuery('#form_save').hide();
		} else {
			jQuery('.form').hide();
			jQuery('#form_save').show();
			jQuery('#form_'+jQuery(el).val()).show();
		}
	}
	
	function updateShortCode(id) {
		var snippet = '[actiontag id="'+id+'" endpoint="<?php echo get_option('ngp_action_tag_endpoint'); ?>" ';
		snippet += (jQuery('#ngp_action_tag_form_'+id+'_action_message').attr('checked') ? 'success="'+jQuery('#ngp_action_tag_form_'+id+'_message').val()+'" ' : '');
		snippet += (jQuery('#ngp_action_tag_form_'+id+'_action_redirect').attr('checked') ? 'success="'+jQuery('#ngp_action_tag_form_'+id+'_redirect').val()+'" ' : '');
		snippet += (jQuery('#ngp_action_tag_form_'+id+'_template').val() != '' ? 'template="'+jQuery('#ngp_action_tag_form_'+id+'_template').val()+'" ' : '');
		snippet += (jQuery('#ngp_action_tag_form_'+id+'_labels').val() != '' ? 'labels="'+jQuery('#ngp_action_tag_form_'+id+'_labels').val()+'" ' : '');
		snippet += (jQuery('#ngp_action_tag_form_'+id+'_databag').val() != '' ? 'databag="'+jQuery('#ngp_action_tag_form_'+id+'_databag').val()+'" ' : '');
		snippet += ']';
		
		jQuery('#action_tag_snippet_'+id).html(snippet);	
	}
</script>