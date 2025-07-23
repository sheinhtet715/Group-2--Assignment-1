<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    h1>Student Registration Form</h1>
    <form action="process.php" method="POST">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="firstname" placeholder="First Name"> - 
        <input type="text" id="name" name="lastname" placeholder="Last Name" ><br><br>
        
        <label for="fathername">Father's Name:</label>
        <input type="text" id="fathername" name="fathername"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="text" name="day" id="day"placeholder="Day" size="1"> -
        <input type="text" name="month" id="month" placeholder="Mon" size="1" > -
        <input type="text" name="year" id="year" placeholder="Year" size="1" > (DD-MM-YYYY) <br><br>

        <label for="mobile">Mobile no.: +95 - </label>
        <input type="text" id="mobile" name="mobile" ><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password"><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female <br><br>
        </form>
</body>
</html>
