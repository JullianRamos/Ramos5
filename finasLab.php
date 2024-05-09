<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Discriminant Calculator</title>
</head>
<body>
    <h1>Quadratic Equation Discriminant Calculator</h1>
    <form method="post" action="">
        <label for="a">A:</label>
        <input type="text" id="a" name="a" required placeholder=" value of a ">
        <br><br>

        <label for="b">B:</label>
        <input type="text" id="b" name="b" required placeholder=" value of b">
        <br><br>

        <label for="c">C:</label>
        <input type="text" id="c" name="c" required placeholder=" value of c ">
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        // Retrieve values from the form
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calculate the discriminant
        $discriminant = ($b * $b) - (4 * $a * $c);

        // Display the discriminant
        echo "<h3>Discriminant:</h3>";
        echo "The discriminant of the quadratic equation ax^2 + bx + c is: " . $discriminant;
    }
    ?>
</body>
</html>