<?php

// force UTF-8 Ø

if (!defined('WEBPATH')) die();

?>
<!DOCTYPE html>

<html>
<head>
	<title><?php echo getBareGalleryTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/slideshow.css" type="text/css" />
	<?php zp_apply_filter('theme_head'); ?>
</head>

<body>
<?php zp_apply_filter('theme_body_open'); ?>

	<div id="slideshowpage">
			<?php printSlideShow(true, false, "", "", "", "", false, true, true); ?>
	</div>

<?php
zp_apply_filter('theme_body_close');
?>

</body>
</html>