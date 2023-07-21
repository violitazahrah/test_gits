<!DOCTYPE html>
<html>
<head>
    <title>Hasil Dense Ranking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding-top: 50px;
        }

        .output {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h2>Hasil Dense Ranking</h2>
    <div class="output">
    <?php
        function getDenseRanking($scores, $gits_scores, $total_players)
        {
            $scores_array = explode(" ", $scores);
            $gits_scores_array = explode(" ", $gits_scores);

            rsort($scores_array);
            $ranking = array();

            $current_rank = 1;
            for ($i = 0; $i < count($scores_array); $i++) {
                if (!isset($ranking[$scores_array[$i]])) {
                    $ranking[$scores_array[$i]] = $current_rank;
                }
                $current_rank++;
            }

            $results = array();
            foreach ($gits_scores_array as $score) {
                if (isset($ranking[$score])) {
                    $results[] = $ranking[$score];
                } else {
                    // Jika skor GITS tidak ada dalam daftar skor pemain, maka berikan peringkat sesuai jumlah pemain + 1
                    $results[] = $total_players + 1;
                }
            }

            return implode(' ', $results);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['total_players']) && isset($_POST['scores']) && isset($_POST['games']) && isset($_POST['gits_scores'])) {
                $total_players = (int) $_POST['total_players'];
                $scores = $_POST['scores'];
                $games = (int) $_POST['games'];
                $gits_scores = $_POST['gits_scores'];

                $output_scores = getDenseRanking($scores, $gits_scores, $total_players);
                echo $output_scores;
            }
        }
        ?>
    </div>
</body>
</html>
