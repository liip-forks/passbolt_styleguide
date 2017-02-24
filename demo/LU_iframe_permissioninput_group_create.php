<!doctype html>
<html>
<head>
	<?php include('includes/meta/LU_meta_iframe.php'); ?>
	<style>
		#js_perm_create_form_aro_auto_cplt:focus,
		#js_perm_create_form_aro_auto_cplt ~ .security-token {
			background:#ffbbbb;
			color:#000;
		}
		#js_perm_create_form_aro_auto_cplt:focus ~ .security-token {
			background:#000;
			color:#ffbbbb;
		}
	</style>
</head>
<body>
<div class="form-content permission-add">
<div class="input text autocomplete">
	<label for="js_perm_create_form_aro_auto_cplt">Add people</label>
	<input maxlength="50" id="js_perm_create_form_aro_auto_cplt" placeholder="start typing a user name" autocomplete="off" type="text">
	<div class="security-token">CCK</div>
</div>
<div class="input blank">
	<div id="js_perm_create_form_feedback" class="message"></div>
</div>
</div>
<script type="application/javascript">
	resizeIframe('#passbolt-iframe-password-share', {
		width: '100%'
	});
</script>
</body>
</html>