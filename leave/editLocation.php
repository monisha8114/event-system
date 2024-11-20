<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

// Check if all required fields are provided
if (
    !isset($_POST['id']) || !isset($_POST['Name']) || !isset($_POST['Address']) ||
    !isset($_POST['ManagerFName']) || !isset($_POST['ManagerLName']) || 
    !isset($_POST['ManagerEmail']) || !isset($_POST['ManagerNumber']) || 
    !isset($_POST['MaxCapacity'])
) {
    // Styled error message for missing data
    die("<div style='
        color: red; 
        font-family: Arial, sans-serif; 
        text-align: center; 
        margin-top: 20px; 
        font-size: 18px;
    '>Error: Missing required fields for updating the location!</div>");
}

// Retrieve form data
$id = $_POST['id'];
$locationName = $_POST['Name'];
$locationAddress = $_POST['Address'];
$managerFName = $_POST['ManagerFName'];
$managerLName = $_POST['ManagerLName'];
$managerEmail = $_POST['ManagerEmail'];
$managerNumber = $_POST['ManagerNumber'];
$locationMaxCap = $_POST['MaxCapacity'];

// Create a new Location object
$location = new Location(
    $id, 
    $locationName, 
    $locationAddress, 
    $managerFName, 
    $managerLName,  
    $managerEmail, 
    $managerNumber, 
    $locationMaxCap
);

// Connect to the database
$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

// Update the location in the database
$id = $gateway->update($location);

// Optional success message
// echo "<div style='
//     color: green; 
//     font-family: Arial, sans-serif; 
//     text-align: center; 
//     margin-top: 20px; 
//     font-size: 18px;
// '>
//     Location <strong>{$locationName}</strong> updated successfully!
// </div>";

// Redirect to the locations view page
header('Location: viewLocations.php');
?>
