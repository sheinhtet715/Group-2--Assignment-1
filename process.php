<?php
    echo "<h1>Form Submission Result</h1>";
    if (!isset($_POST['submit'])) {
        echo "No data submitted.";
        exit;
    }

    $firstname   = $_POST['firstname']  ;
    $lastname    = $_POST['lastname']   ;
    $fathername  = $_POST['fathername'] ;
    $dob = ($day !== '' || $month || '' || $year !== '')
     ? "$day-$month-$year"
     : '--';
    $day         = $_POST['day']        ;
    $month       = $_POST['month']      ;
    $year        = $_POST['year']       ;



    if ($firstname === '') {
        echo "<p style='color: red;'>fname is required.</p>";
    }
    if ($lastname === '') {
        echo "<p style='color: red;'>lname is required.</p>";
    }

    if ($fathername === '') {
        echo "<p style='color: red;'>Father's name is required.</p>";
    }
    if ($day === '') {
        echo "<p style='color: red;'>day is required.</p>";
    }
    if ($month === '') {
        echo "<p style='color: red;'>month is required.</p>";
    }
    if ($year === '') {
        echo "<p style='color: red;'>year is required.</p>";
    }


    echo "Name: $firstname $lastname<br>";
    echo "Father's Name: $fathername<br>";
    echo "DOB: $dob<br>";
?>