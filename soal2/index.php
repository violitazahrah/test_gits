<!DOCTYPE html>
<html>
<head>
    <title>Dense Ranking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="number"],
        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Dense Ranking</h2>
        <form method="post" action="result.php">
            <div class="form-group">
                <label for="total_players">Jumlah pemain:</label>
                <input type="number" id="total_players" name="total_players" required>
            </div>
            <div class="form-group">
                <label for="scores">Daftar skor pemain (dipisahkan dengan spasi):</label>
                <input type="text" id="scores" name="scores" required>
            </div>
            <div class="form-group">
                <label for="games">Jumlah permainan GITS:</label>
                <input type="number" id="games" name="games" required>
            </div>
            <div class="form-group">
                <label for="gits_scores">Skor permainan GITS (dipisahkan dengan spasi):</label>
                <input type="text" id="gits_scores" name="gits_scores" required>
            </div>
            <button type="submit" class="btn-submit">Hitung</button>
        </form>
    </div>
</body>
</html>