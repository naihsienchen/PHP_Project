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
        <title>Website Name</title>
        <link type="text/css" rel="stylesheet"  href="styles/global.css" />
        <script src="library/mainForm.js"></script> 
    </head>
    <body>
        <header>
            <h1><a href="index.php" class="homeLink">Website Name</a></h1>
        <nav>
            <?php echo displayNavigation($headerMenu); ?>
        </nav>
        </header>