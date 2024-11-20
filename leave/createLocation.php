<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Location Form</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus {
            border-color: #a1c4fd;
            outline: none;
            box-shadow: 0 0 8px rgba(161, 196, 253, 0.5);
        }

        button {
            background-color: #5c6bc0;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #3949ab;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create Location</h1>
        <form action="createLocation.php" method="POST">
            <label for="Name">Location Name</label>
            <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($formdata['Name'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['Name'] ?? ''); ?></span>

            <label for="Address">Address</label>
            <input type="text" id="Address" name="Address" value="<?php echo htmlspecialchars($formdata['Address'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['Address'] ?? ''); ?></span>

            <label for="managerFName">Manager First Name</label>
            <input type="text" id="managerFName" name="managerFName" value="<?php echo htmlspecialchars($formdata['managerFName'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['managerFName'] ?? ''); ?></span>

            <label for="managerLName">Manager Last Name</label>
            <input type="text" id="managerLName" name="managerLName" value="<?php echo htmlspecialchars($formdata['managerLName'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['managerLName'] ?? ''); ?></span>

            <label for="managerEmail">Manager Email</label>
            <input type="email" id="managerEmail" name="managerEmail" value="<?php echo htmlspecialchars($formdata['managerEmail'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['managerEmail'] ?? ''); ?></span>

            <label for="managerNumber">Manager Phone Number</label>
            <input type="text" id="managerNumber" name="managerNumber" value="<?php echo htmlspecialchars($formdata['managerNumber'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['managerNumber'] ?? ''); ?></span>

            <label for="maxCap">Maximum Capacity</label>
            <input type="number" id="maxCap" name="maxCap" value="<?php echo htmlspecialchars($formdata['maxCap'] ?? ''); ?>">
            <span class="error"><?php echo htmlspecialchars($errors['maxCap'] ?? ''); ?></span>

            <button type="submit">Create Location</button>
        </form>
    </div>
</body>
</html>
