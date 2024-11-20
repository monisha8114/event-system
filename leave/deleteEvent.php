<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';

if (!isset($_GET['id'])) {
    die("<div style='
        color: red; 
        font-family: Arial, sans-serif; 
        text-align: center; 
        margin-top: 20px; 
        font-size: 20px;
    '>Illegal request: Event ID is missing!</div>");
}

$id = $_GET['id'];

$connection = Connection::getInstance();

$gateway = new EventTableGateway($connection);

$gateway->delete($id);

header('Location: viewEvents.php');

// Inline styling for the success message
echo "<div style='
    font-family: Arial, sans-serif; 
    text-align: center; 
    margin-top: 50px; 
    font-size: 20px; 
    color: green;
'>
    Event with ID <strong>$id</strong> was successfully deleted.
</div>";
?>
