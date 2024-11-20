<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

if (!isset($_GET['id'])) {
    // Display an error message styled with inline CSS
    die("<div style='
        color: red; 
        font-family: Arial, sans-serif; 
        text-align: center; 
        margin-top: 20px; 
        font-size: 18px;
    '>Illegal request: Location ID is missing!</div>");
}

$id = $_GET['id'];

$connection = Connection::getInstance();

$gateway = new LocationTableGateway($connection);

$gateway->delete($id);

// Inline success message (commented as it's redirected, can be used for debugging or confirmation page)
// echo "<div style='
//     color: green; 
//     font-family: Arial, sans-serif; 
//     text-align: center; 
//     margin-top: 20px; 
//     font-size: 18px;
// '>
//     Location with ID <strong>$id</strong> has been successfully deleted.
// </div>";

header('Location: viewLocations.php');
?>
