<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Location Form</title>
    <style>
        /* Body and General Layout */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #444444;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: inline-block;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
        }

        .form-horizontal .form-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .form-horizontal .form-group label {
            flex: 1;
            max-width: 30%;
            padding-right: 10px;
            text-align: right;
        }

        .form-horizontal .form-group div {
            flex: 2;
            max-width: 70%;
        }

        span.error {
            color: red;
            font-size: 12px;
        }

        button {
            background-color: #6a11cb;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2575fc;
        }

        .btn-default {
            background-color: #f8f9fa;
            color: #6c757d;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .btn-default:hover {
            background-color: #e2e6ea;
            color: #343a40;
        }

        .glyphicon {
            margin-left: 5px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Create Location Form</h1>
        <form action="createLocation.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="Name">Location Name</label>
                <div>
                    <input type="text" id="Name" name="Name" value="<?php echoValue($formdata, 'Name'); ?>" />
                    <span class="error"><?php echoValue($errors, 'Name'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <div>
                    <input type="text" id="Address" name="Address" value="<?php echoValue($formdata, 'Address'); ?>" />
                    <span class="error"><?php echoValue($errors, 'Address'); ?></span>
                </div>
            </div>
            <!-- Other Form Fields with Similar Structure -->
            <div class="form-group">
                <label for="managerEmail">Manager Email</label>
                <div>
                    <input type="email" id="managerEmail" name="managerEmail" value="<?php echoValue($formdata, 'managerEmail'); ?>" />
                    <span class="error"><?php echoValue($errors, 'managerEmail'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="locationMaxCap">Max Capacity</label>
                <div>
                    <input type="number" id="locationMaxCap" name="maxCap" value="<?php echoValue($formdata, 'maxCap'); ?>" />
                    <span class="error"><?php echoValue($errors, 'maxCap'); ?></span>
                </div>
            </div>
            <button type="submit" name="createLocation">Create Location <span class="glyphicon glyphicon-send"></span></button>
        </form>
        <a href="viewLocations.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
    </div>
</body>
</html>
