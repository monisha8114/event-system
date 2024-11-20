<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

if (!isset($_GET['id'])) {
    die("<div style='color: red; text-align: center; font-family: Arial, sans-serif;'>Illegal request: Missing ID!</div>");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$statement = $gateway->getLocationsById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("<div style='color: red; text-align: center; font-family: Arial, sans-serif;'>Illegal request: Location not found!</div>");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Location</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }
            .content {
                padding: 20px;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #333;
            }
            .form-group {
                margin-bottom: 15px;
            }
            label {
                font-weight: bold;
                display: inline-block;
                margin-bottom: 5px;
            }
            .form-control {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .btn {
                padding: 10px 20px;
                color: white;
                background-color: #007bff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                text-decoration: none;
            }
            .btn-default {
                background-color: #6c757d;
            }
            .btn:hover {
                opacity: 0.9;
            }
            .error {
                color: red;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1>Edit Location Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p class="error">Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="editLocation.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['locationID']; ?>" />
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $row['Name']; ?>" />
                        <span id="LNameError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $row['Address']; ?>" />
                        <span id="LAddressError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="ManagerFName">Manager First Name</label>
                        <input type="text" class="form-control" id="ManagerFName" name="ManagerFName" value="<?php echo $row['ManagerFName']; ?>" />
                        <span id="mNameError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="ManagerLName">Manager Last Name</label>
                        <input type="text" class="form-control" id="ManagerLName" name="ManagerLName" value="<?php echo $row['ManagerLName']; ?>" />
                        <span id="mNameError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="ManagerEmail">Manager Email</label>
                        <input type="text" class="form-control" id="ManagerEmail" name="ManagerEmail" value="<?php echo $row['ManagerEmail']; ?>" />
                        <span id="mEmailError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="ManagerNumber">Manager Number</label>
                        <input type="number" class="form-control" id="ManagerNumber" name="ManagerNumber" value="<?php echo $row['ManagerNumber']; ?>" />
                        <span id="mNumError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="MaxCapacity">Max Capacity</label>
                        <input type="number" class="form-control" id="MaxCapacity" name="MaxCapacity" value="<?php echo $row['MaxCapacity']; ?>" />
                        <span id="capError" class="error"></span>
                    </div>
                    <button type="submit" class="btn pull-right" name="editLocation">Update <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    <a class="btn btn-default" href="viewlocations.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
