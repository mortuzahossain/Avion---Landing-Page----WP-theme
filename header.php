<?php
global $avion;
$favicon              = $avion['favicon-img']['url'];
$background           = $avion['background-img']['url'];

?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo( 'title' ); ?></title>

    <link rel="shortcut icon" href="<?php echo $favicon; ?>">

<?php wp_head(); ?>

  </head>
  <body style="background: url('<?php echo $background?>') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;" >
    <div class="se-pre-con"></div>
    <div class="container">