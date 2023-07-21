<!DOCTYPE html>
<html>

<head>
    <title>Rumus A000124 of Sloane’s OEIS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding-top: 50px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .output {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <h2>Rumus A000124 of Sloane’s OEIS</h2>
    <form method="post" action="">
        <label for="input">Masukkan nilai input:</label>
        <input type="number" id="input" name="input" required>
        <button type="submit">Hitung</button>
    </form>
    <div class="output">
        <?php
        function calculateA000124($n)
        {
            if ($n % 2 == 0) {
                return (int) ($n  / 2);
            } else {
                return (int) (($n - 1) / 2 + ($n + 1) / 2);
            }
        }

        if (isset($_POST['input'])) {
            $input = (int) $_POST['input'];
            if ($input > 0) {
                $output = array();
                for ($i = 1; $i <= $input; $i++) {
                    $output[] = calculateA000124($i);
                }
                echo implode('-', $output);
            } else {
                echo "Masukkan nilai input yang lebih besar dari 0.";
            }
        }
        ?>
    </div>
</body>

</html>