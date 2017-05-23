<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Config::appName; ?> - <?php echo $_VIEW['title']; ?></title>
    <meta name="description" content="<?php echo $_VIEW['description']; ?>" />
  </head>
  <body>
    <header>
        <div id="top-nav">
            <a href="inicio">
                <img src="source/images/logo/logo.gif" alt="" id="logo">
            </a>
            <nav id="navigator">
                <?php View::render('template/menu'); ?>
            </nav>
        </div>
    </header>
    <div id="movile-nav">
        <li>
            <a href="#Dona">Dona ahora</a>
        </li>
    </div>