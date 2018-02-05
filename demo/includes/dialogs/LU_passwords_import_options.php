<?php require(__DIR__ . '/LU_passwords_import.php'); ?>
<div class="dialog-wrapper" id="kdbx-credentials">
	<div class="dialog kdbx-credentials">
		<div class="dialog-header">
			<h2>Enter the password and/or key file</h2>
			<a href="#" class="dialog-close">
				<i class="fa fa-close"></i><span class="visuallyhidden">close</span>
			</a>
		</div>
		<div class="js_dialog_content dialog-content">
			<form id="js_rs_import">
				<div class="form-content">
					<div class="input-password-wrapper">
						<div class="input password">
							<label>Keepass password</label>
							<input name="passbolt.model.Resource.passphrase" maxlength="50" id="js_field_passphrase" placeholder="password" type="password">
							<input class="required hidden" maxlength="50" type="text" id="js_field_password_clear" style="display: none;">
						</div>
						<ul class="actions inline">
							<li>
								<a href="#" id="js_secret_view" class="button toggle">
									<i class="fa fa-eye fa-fw fa-lg"></i>
									<span class="visuallyhidden">view</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="input text">
						<label for="js_field_key_file">Keepass key file (optional)</label>
						<input class="jfilestyle" name="passbolt.model.Resource.uri" id="js_field_key_file" type="file" data-text="Choose a file" data-placeholder="No key file selected">
						<div id="js_field_key_file_feedback" class="message"></div>
					</div>
				</div>
				<div class="submit-wrapper clearfix">
					<input class="button primary" value="Continue import" type="submit">
					<a href="#" class="js-dialog-cancel cancel">cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
