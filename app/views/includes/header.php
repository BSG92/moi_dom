<!DOCTYPE html>
<?php
// require_once '../app/require.php'; // This is require_once on the index.php in the public directory

// Error reporting ***TURN OFF ON PRODUCTION***
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// /etc/php/.../php.ini
//************************************ */
?>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Cache-control" content="no-cache">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- this base fixes relative url errors -->
        <base href="http://localhost/moi_dom/" target="_self">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/assets/slick.min.css">
        <!-- Custom Theme Style & Color pallette -->
        <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/assets/style.css">
        
        <title><?php echo SITENAME; ?></title>
    </head>
    <body>