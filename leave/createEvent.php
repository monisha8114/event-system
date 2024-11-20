<!-- In your createEventForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <div class="form-container">
        <h1>Create Event</h1>
        <form action="createEvent.php" method="POST">
            <label for="Title">Title:</label>
            <input type="text" id="Title" name="Title" value="<?php echo htmlspecialchars($formdata['Title'] ?? ''); ?>">

            <label for="Description">Description:</label>
            <textarea id="Description" name="Description"><?php echo htmlspecialchars($formdata['Description'] ?? ''); ?></textarea>

            <label for="StartDate">Start Date:</label>
            <input type="date" id="StartDate" name="StartDate" value="<?php echo htmlspecialchars($formdata['StartDate'] ?? ''); ?>">

            <label for="EndDate">End Date:</label>
            <input type="date" id="EndDate" name="EndDate" value="<?php echo htmlspecialchars($formdata['EndDate'] ?? ''); ?>">

            <label for="Cost">Cost:</label>
            <input type="number" id="Cost" name="Cost" value="<?php echo htmlspecialchars($formdata['Cost'] ?? ''); ?>">

            <label for="LocID">Location ID:</label>
            <input type="text" id="LocID" name="LocID" value="<?php echo htmlspecialchars($formdata['LocID'] ?? ''); ?>">

            <button type="submit">Create Event</button>
        </form>
    </div>
</body>
</html>
