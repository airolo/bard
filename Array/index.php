<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="index1.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="course_year">Course and Year:</label>
        <input type="text" id="course_year" name="course_year" required><br>

        <label for="enrolled">Enrolled:</label>
        <select id="enrolled" name="enrolled" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="grade">Grade:</label>
        <input type="number" step="0.01" id="grade" name="grade" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>