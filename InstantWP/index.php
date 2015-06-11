<?php
// load the instantwp functions
include 'functions.php';
include $current_folder.'\\..\\wordpress\\wp-includes\\version.php';
$config = load_config($base_dir);
$install_name = $config['install_name'];
$install_dir = $config['install_dir'];
$version = $config['version'];
$debugger = $config['debugger'];
$border = '1px solid rgba(0, 0, 0, 0.2)'; 
$serverInfo = $_SERVER['HTTP_USER_AGENT']; 
if(preg_match('/\.NET/i',$serverInfo)) 
{ 
  $screenType = 'pc-window'; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>InstantWP - Your Local WordPress Installation</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel='stylesheet' href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="instantwp.css" rel="stylesheet" type="text/css" />
	<SCRIPT LANGUAGE="JavaScript">
	<!--
	function copyit(theField, theName) {
		var fld = document.getElementById(theField);
		var fldValue = fld.value;
		// copy to clipboard
		window.clipboardData.setData('Text' , fldValue );
		alert('The URL for this WordPress Installation is now in the clipboard to paste into the address box of a browser.');
	}
	function debuggeralert(){
		alert('Please restart InstantWP for the debugger changes to take effect.')
	}
	// End -->
	</script>
</head>
<body class="<?php echo $screenType; ?>">
	<div id="container" class="container">
		<div id="container-header" class="col-sm-8 col-sm-offset-2">
			<div id="container-name"><img src="images/logo.gif" alt="logo" border="0" /></div>
		</div>
		<div class="input col-sm-8 col-sm-offset-2">
			<b>Local Wordpress URL: </b>
			<input class="url_textbox" id="<?= $install_dir ?>" name="<?= $install_dir ?>" type="text" size='30'
			value='http://<?= $base_url ?>/<?= $install_dir ?>/'>&nbsp;
			<input class="url_button" onclick="copyit('<?= $install_dir ?>', '<?= $install_dir ?>')"
			type="button" value="Copy WordPress URL to Clipboard" name="copy_button">
		</div>
		<div class="wrapper col-sm-8 col-sm-offset-2">
			<hr>
			<div class="wrap_dirs">
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://<?= $base_url ?>/<?= $install_dir ?>" target="_blank"><i class="fa fa-home"></i> WordPress FrontPage</a>
					</div>
				</div>
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://<?= $base_url ?>/<?= $install_dir ?>/wp-login.php" target="_blank"><i class="fa fa-cog"></i> WordPress Admin</a>
					</div>
				</div>
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://<?= $base_url ?>/instantwp/externals/explore_plugins.php?wp=<?= $install_dir ?>"><i class='fa fa-folder-o'></i> Plugins Folder</a>
					</div>
				</div>
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://<?= $base_url ?>/instantwp/externals/explore_themes.php?wp=<?= $install_dir ?>"><i class='fa fa-folder-o'></i> Themes Folder</a>
					</div>
				</div>
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://<?= $base_url ?>/phpmyadmin" target="_blank"><i class="fa fa-database"></i> MySQL Admin</a>
					</div>
				</div>
				<div class="wrap_dir col-sm-6">
					<div class="dir">
						<a href="http://www.instantwp.com/documentation/?v=<?=str_replace(" ", "", $version)?>" target="_blank"><i class="fa fa-info-circle"></i> Documentation</a>
					</div>
				</div>
			</div>
			<? if ( $config['show_additional_buttons'] == '1') {  ?>
			<p class="col-sm-12">Please check out the <a target="_blank"  href="http://www.instantwp.com/documentation/faq/">FAQ</a> and <a target="_blank"  href="http://www.instantwp.com/unleashed/">Deployment Guide - Instant WordPress Unleashed</a> or some recommended <a target="_blank"  href="http://www.instantwp.com/wordpress-resources/">WordPress Resources</a></p>
			<? } ?>
		</div>
		<div class="wrapper col-sm-8 col-sm-offset-2">
			<hr>
			<div class="dir_title text-center"><h2>Other Projects</h2></div>
			<div class="wrap_dirs">			
			<?php
				$dir = '../';
					foreach(scandir($dir) as $entry) {
						if ($entry != 'wordpress' && $entry != 'instantwp' && preg_match("/^[a-zA-Z]*$/", $entry)) {
							echo "<div class='wrap_dir col-sm-6'><div class='dir'><a href='$dir$entry' target='_blank'><i class='fa fa-folder-o'></i> " . ucwords(str_replace(array('_','-'), ' ', $entry)) . "</a></div></div>";
						}
					}
					echo "<div class='wrap_dir col-sm-12 no-projects'><div class='dir'><a href='#none'><i class='fa fa-ban'></i> None</a></div></div>";
			?>
			</div>
			<div class="footer col-sm-12">
			<hr>
				<p><?=$install_name ?> running <?=$version  ?> with WordPress <?= $wp_version ?> / <?= $config['apache_ver'] ?> / <?= $config['php_ver'] ?> / <?= $config['mysql_ver'] ?></p>
				<p><em>Software licenses are provided in the respective software directories. All rights reserved. Portions copyright to Timo Haberkern. All trademarks and images are copyright of their respective owners. InstantWP is not associated with Automattic or WordPress.com.</em></p>
				<p>InstantWP © 2015 Corvideon - THIS SOFTWARE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND.</p>
			</div>
		</div>
	</div> <!-- END container -->
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		$(function() {
			if ($('.wrap_dirs:last-child .dir').length == 1) {
				$('.no-projects').show();
			};
		});
	</script>
	<script>
	</script>
</body>
</html>