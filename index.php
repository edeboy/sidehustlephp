<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Hustle Task 1</title> 
    
    <script type="text/javascript">
        function showMessage() { 
        alert (" Form Succesfully Submitted");
    }
    </script>
</head>
<body>
    <!-- Create a simple form with the following features 1. Takes in Name, Email address, Phone number, Gender and Password 2. A SUBMIT button. 3. On submit must highlight the empty block. 4. Error message when entering the wrong format of email ID. 5. Display a success message on successful submission -->
    <fieldset>
        <legend> Registration Form</legend>
        <!-- main form for the registration -->
        <form action="POST">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullName" id="fullName">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>

            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" id="phoneNumber">
            <br>

            <label for="gender">Gender:</label>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="male" id="male">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="female" id="female">
            <br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>

            <!-- <label for="submit">Submit:</label> -->
            <input type="button" name="submit" id="submit" value="Submit" target="_blank" onclick="showMessage()">
            <br>

           

        </form>
    </fieldset>
</body>
</html>
