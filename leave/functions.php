<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dynamic Form with Styled Inputs</title>
    <style>
        /* General Form Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Sample Form</h1>
        <?php
        function echoValue($array, $fieldName) {
            if (isset($array) && isset($array[$fieldName])) {
                echo htmlspecialchars($array[$fieldName]);
            }
        }

        function echoChecked($array, $fieldName, $value) {
            if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
                echo 'checked="checked"';
            }
        }

        function echoCheckedArray($array, $fieldName, $value) {
            if (isset($array[$fieldName]) &&
                is_array($array[$fieldName]) &&
                in_array($value, $array[$fieldName])) {
                echo 'checked="checked"';
            }
        }

        function echoSelected($array, $fieldName, $value) {
            if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
                echo 'selected="selected"';
            }
        }

        function echoSelectedArray($array, $fieldName, $value) {
            if (isset($array[$fieldName]) &&
                is_array($array[$fieldName]) &&
                in_array($value, $array[$fieldName])) {
                echo 'selected="selected"';
            }
        }

        $formData = [
            'name' => 'John Doe',
            'gender' => 'male',
            'interests' => ['coding', 'sports'],
            'country' => 'US'
        ];
        ?>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echoValue($formData, 'name'); ?>">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <label><input type="radio" name="gender" value="male" <?php echoChecked($formData, 'gender', 'male'); ?>> Male</label>
                <label><input type="radio" name="gender" value="female" <?php echoChecked($formData, 'gender', 'female'); ?>> Female</label>
            </div>

            <div class="form-group">
                <label>Interests</label>
                <label><input type="checkbox" name="interests[]" value="coding" <?php echoCheckedArray($formData, 'interests', 'coding'); ?>> Coding</label>
                <label><input type="checkbox" name="interests[]" value="sports" <?php echoCheckedArray($formData, 'interests', 'sports'); ?>> Sports</label>
                <label><input type="checkbox" name="interests[]" value="music" <?php echoCheckedArray($formData, 'interests', 'music'); ?>> Music</label>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="US" <?php echoSelected($formData, 'country', 'US'); ?>>United States</option>
                    <option value="CA" <?php echoSelected($formData, 'country', 'CA'); ?>>Canada</option>
                    <option value="UK" <?php echoSelected($formData, 'country', 'UK'); ?>>United Kingdom</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
