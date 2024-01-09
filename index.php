<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $location = $_POST["location"];
        $age = $_POST["age"];
        $university = $_POST["university"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

            // Validation (you can customize this based on your requirements)
                if (empty($name) || empty($location) || empty($age) || empty($university) || empty($phone) || empty($email)) {
                    echo "Please fill out all fields.";
            // You might want to redirect back to the form here if validation fails
                } else {
            // Successful submission, display thank-you message
                echo "Thank you for filling the form, $name! <br>";
                echo "Location: $location <br>";
                echo "Age: $age <br>";
                echo "University: $university <br>";
                echo "Phone Number: $phone <br>";
                echo "Email: $email <br>";
                }
            }
        ?>
    <form  method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="location">Location:</label>
        <input type="text" name="location" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="university">University:</label>
        <input type="text" name="university" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>