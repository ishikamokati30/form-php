<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <h1>Form</h1>
    <form action="index.php" method="POST">
        <label for="name">NAME:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label>FAVOURITE FOOD:</label><br>
        <input type="radio" id="food1" name="food" value="Pasta" required>
        <label for="food1">Pasta</label><br>
        <input type="radio" id="food2" name="food" value="Sandwich">
        <label for="food2">Sandwich</label><br>
        <input type="radio" id="food3" name="food" value="Waffle">
        <label for="food3">Waffle</label><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $food = htmlspecialchars($_POST['food']);

        $time = date('G'); 
        if ($time >= 2 && $time < 11) {
            $greeting = 'Morning';
        } elseif ($time >= 11 && $time < 16) {
            $greeting = 'Afternoon';
        } elseif ($time >= 16 && $time < 21) {
            $greeting = 'Evening';
        } else {
            $greeting = 'Night';
        }

        echo "<div id='message'>Good $greeting $name. Your favorite food is $food.</div>";
    }
    ?>
</body>
</html>