<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Logging System - Log Entry</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Log Entry</h1>
    <form action="Logging.php" method="POST">
        <label for="student_id">Student ID:</label>
        <select name="student_id" id="student_id" required>
            <option value="ST123">ST123</option>
            <option value="ST124">ST124</option>
            <!-- Add more options here for student IDs -->
        </select>
        
        <label for="class_id">Class ID:</label>
        <select name="class_id" id="class_id" required>
            <option value="CS101">CS101</option>
            <option value="CS102">CS102</option>
            <!-- Add more options here for class IDs -->
        </select>
        
        <label for="pc_no">PC Number:</label>
        <select name="pc_no" id="pc_no" required>
            <option value="PC001">PC001</option>
            <option value="PC002">PC002</option>
            <!-- Add more options here for PC numbers -->
        </select>
        
        <label for="time_in">Time In:</label>
        <input type="time" name="time_in" id="time_in" required>
        
        <label for="time_out">Time Out:</label>
        <input type="time" name="time_out" id="time_out" required>
        
        <input type="submit" value="Submit">
    </form>
    <!-- Include your JavaScript scripts if needed -->
</body>
</html>