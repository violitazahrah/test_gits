<!DOCTYPE html>
<html>
<head>
    <title>Check Balanced Bracket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Check Balanced Bracket</h1>
        <form action="index.php" method="post">
            <input type="text" name="brackets" placeholder="Enter brackets here">
            <input type="submit" value="Check">
        </form>
        <div class="result">
            <?php
                require_once 'functions.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $brackets = $_POST["brackets"];
                    $result = checkBalancedBracket($brackets);
                    echo "<p>Result: $result</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
