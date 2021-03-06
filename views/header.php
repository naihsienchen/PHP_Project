<!--Header-->
<?php
$headerMenu = [
    'Home' => 'index.php',
    'Flights' => 'flights.php',
    'Accommodations' => 'accommodations.php',
    'Vehicle Rental' => 'vehicles.php',
    'Customer Service' => 'services.php'
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>onRoute - Travel Better</title>
        <link type="text/css" rel="stylesheet"  href="styles/global.css" />
        <script src="https://kit.fontawesome.com/2956115494.js" crossorigin="anonymous"></script>
        <script src="library/mainForm.js"></script> 
    </head>
    <body>
        <header>
            <h1><a href="index.php" class="homeLink">onRoute <i class="fas fa-route"></i></a></h1>
        <nav>
            <?php echo displayNavigation($headerMenu); ?>
        </nav>
        </header>