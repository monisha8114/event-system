<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway1 = new LocationTableGateway($connection);
$gateway2 = new EventTableGateway($connection);

$statement1 = $gateway1->getLocations();
$statement2 = $gateway2->getEvents();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event and Location Management</title>
        
        <!-- Inline CSS -->
        <style>
            /* Basic Reset */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
            }
            
            header {
                background-color: #333;
                color: #fff;
                padding: 15px 0;
                text-align: center;
            }
            
            nav {
                background-color: #007bff;
                padding: 10px 0;
                text-align: center;
            }
            
            nav a {
                color: white;
                text-decoration: none;
                padding: 10px;
                margin: 5px;
            }
            
            nav a:hover {
                background-color: #0056b3;
            }
            
            .container {
                width: 90%;
                max-width: 1200px;
                margin: 30px auto;
                padding: 20px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }
            
            h1 {
                font-size: 2.5em;
                margin-bottom: 20px;
                color: #333;
            }
            
            p {
                font-size: 1.2em;
                margin: 20px 0;
                color: #555;
            }
            
            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
                position: fixed;
                width: 100%;
                bottom: 0;
            }
            
            .message {
                color: #28a745;
                font-weight: bold;
                text-align: center;
                margin-top: 20px;
            }
        </style>

        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <?php require 'utils/toolbar.php'; ?>

        <div class="container">
            <?php 
            if (isset($message)) {
                echo '<p class="message">'.$message.'</p>';
            }
            ?>
        </div>

        <?php require 'utils/footer.php'; ?>
    </body>
</html>
