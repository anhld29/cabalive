<!DOCTYPE html>
<html class="<?php echo $htmlClass; ?>">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="utf-8">
<title><?php echo $meta['title']; ?></title>
<meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<meta name="description" content="<?php echo $meta['description']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="format-detection" content="telephone=no">

<?php if(file_exists(dirname(__FILE__).'/../images/favicon.ico')) : ?>
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo location_file.'images/favicon.ico'; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo location_file.'images/favicon-32.ico'; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo location_file.'images/favicon-16.ico'; ?>">
<link rel="manifest" href="<?php echo location_file.'images/favicon.ico'; ?>">
<link rel="mask-icon" href="<?php echo location_file.'images/favicon.ico'; ?>" color="">
<?php endif; ?>

<?php if(file_exists(dirname(__FILE__).'/../apple-touch-icon.png')) : ?>
<!-- apple-touch-icon -->
<link rel="apple-touch-icon" href="<?php echo location_file.'apple-touch-icon.png'; ?>">
<?php endif; ?>

<meta name="apple-mobile-web-app-title" content="CABA Live">
<meta name="application-name" content="CABA Live">
<meta name="msapplication-TileColor" content="">
<meta name="theme-color" content="">

<!-- Open graph tags -->
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta property="og:locale" content="ja_JP" />
<meta name="twitter:card" content="summary_large_image">

<meta property="og:site_name" content="<?php echo TITLE; ?>">
<meta property="og:title" content="<?php echo $meta['title']; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:description" content="<?php echo $meta['description']; ?>">
<?php if(file_exists(dirname(__FILE__).'/../ogp.jpg')) : ?>
<meta property="og:image" content="<?php echo location_file.'ogp.jpg'; ?>">
<?php endif; ?>
