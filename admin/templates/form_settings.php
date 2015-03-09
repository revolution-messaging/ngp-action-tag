<div id="ngp-container" class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>NGP ActionTag Plugin - Form Settings</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						
						<form name="ngp_action_tag_type_form" method="post" action="options.php">
  						<?php @settings_fields('ngp-action-tag-form-settings'); ?>
							
							<div class="inside">
								<select id="ngp_form_selection_type" name="ngp_form_selection_type" onchange="updateType();">
									<option value="">-Select-</option>
									<option value="SignupForm" <?php if($ngp_form_selection_type == 'SignupForm'): ?>selected="selected"<?php endif; ?>>Signup Forms</option>
									<option value="ContributionForm" <?php if($ngp_form_selection_type == 'ContributionForm'): ?>selected="selected"<?php endif; ?>>Contribution Forms</option>
									<option value="PetitionForm" <?php if($ngp_form_selection_type == 'PetitionForm'): ?>selected="selected"<?php endif; ?>>Petition Forms</option>
									<option value="VolunteerForm" <?php if($ngp_form_selection_type == 'VolunteerForm'): ?>selected="selected"<?php endif; ?>>Volunteer Forms</option>
								</select>&nbsp;&nbsp;
								<select id="ngp_form_selection_form" name="ngp_form_selection_form" onchange="updateForm();" style="display: none;">
									<option value="">-Select-</option>
									<?php foreach($forms as $form): ?>
									<option class="<?php echo $form->type; ?>" value="<?php echo $form->obfuscatedId; ?>" <?php if($ngp_form_selection_form == $form->obfuscatedId): ?>selected="selected"<?php endif; ?>><?php echo $form->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							
							<?php foreach($forms as $form): ?>
								<div id="form_<?php echo $form->obfuscatedId; ?>" class="form" style="display:none;">
									<h3><span><?php echo $form->name; ?> (<?php echo $form->type; ?>)</span></h3>
									<div class="inside">
										<table class="form-table">
											<tr>
												<td style="width: 260px;"><label for="signup_form_slug">Slug</label></td>
												<td style="width: 500px;"><?php echo strtolower(str_replace(' ', '-', $form->name)); ?></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_message">Display Message</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_action_message" value="message" <?php if($ngp_form_action[$form->obfuscatedId] == 'message'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
													<input name="ngp_form_message[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_message" type="text" value="<?php echo $ngp_form_message[$form->obfuscatedId]; ?>" class="regular-text" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_redirect">Redirect Page</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_action_redirect" value="redirect" <?php if($ngp_form_action[$form->obfuscatedId] == 'redirect'): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;
													<input name="ngp_form_redirect[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_redirect" type="text" value="<?php echo $ngp_form_redirect[$form->obfuscatedId]; ?>" class="regular-text" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_redirect">No (Default) Action</label></td>
												<td style="width: 500px;">
													<input type="radio" name="ngp_form_action[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_action_none" value="" <?php if($ngp_form_action[$form->obfuscatedId] == ''): ?>checked="checked"<?php endif; ?> />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
		  									<td colspan="3">&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_template">Template</label></td>
												<td style="width: 500px;">
													<input name="ngp_form_template[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_template" type="text" value="<?php echo $ngp_form_template[$form->obfuscatedId]; ?>" class="regular-text" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_labels">Labels</label></td>
												<td style="width: 500px;">
													<input name="ngp_form_labels[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_labels" type="text" value="<?php echo $ngp_form_labels[$form->obfuscatedId]; ?>" class="regular-text" />
												</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 260px;"><label for="ngp_form_<?php echo $form->obfuscatedId; ?>_databags">Databags</label></td>
												<td style="width: 500px;">
													<input name="ngp_form_databags[<?php echo $form->obfuscatedId; ?>]" id="ngp_form_<?php echo $form->obfuscatedId; ?>_databags" type="text" value="<?php echo $ngp_form_databags[$form->obfuscatedId]; ?>" class="regular-text" />
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
		updateForm();
	});
	
	function updateType() {
		if(jQuery('#ngp_form_selection_type').val() == '') {
			jQuery('#ngp_form_selection_form').hide();
			jQuery('.form').hide();
			jQuery('#form_save').hide();
		} else {
			jQuery('#ngp_form_selection_form').show();
			jQuery('#ngp_form_selection_form > option').hide();
			jQuery('#ngp_form_selection_form > option.'+jQuery('#ngp_form_selection_type').val()).show();
			
			updateForm();
		}
	}
	
	function updateForm() {
		if(jQuery('#ngp_form_selection_form').val() == '') {
			jQuery('.form').hide();
			jQuery('#form_save').hide();
		} else {
			jQuery('.form').hide();
			jQuery('#form_save').show();
			jQuery('#form_'+jQuery('#ngp_form_selection_form').val()).show();
		}
	}
</script>