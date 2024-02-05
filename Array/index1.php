<?php
    function displayStudentInfo($student) {
        echo "<h2>Student Information</h2>";
        echo "<p><strong>Name:</strong> {$student['first_name']} {$student['middle_name']} {$student['last_name']}</p>";
        echo "<p><strong>Age:</strong> {$student['age']}</p>";
        echo "<p><strong>Course and Year:</strong> {$student['course_year']}</p>";
        echo "<p><strong>Enrolled:</strong> {$student['enrolled']}</p>";
        echo "<p><strong>Subject:</strong> {$student['subject']}</p>";
        echo "<p><strong>Grade:</strong> {$student['grade']}</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student = array(
            'first_name' => $_POST["first_name"],
            'middle_name' => $_POST["middle_name"],
            'last_name' => $_POST["last_name"],
            'age' => $_POST["age"],
            'course_year' => $_POST["course_year"],
            'enrolled' => $_POST["enrolled"],
            'subject' => $_POST["subject"],
            'grade' => $_POST["grade"]
        );
        
        displayStudentInfo($student);
    }
    ?>