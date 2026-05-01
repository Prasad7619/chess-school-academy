<?php
    $file = 'tournament_data.json';
    $defaultData = [
        "date" => "Not set",
        "time" => "Not set",
        "time_control" => "Not set",
        "platform" => "https://lichess.org",
        "prizes" => [],
        "entry_fee" => "Not set"
    ];
    
    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    } else {
        $data = $defaultData;
    }

    // Ensure all keys exist
    $data = array_merge($defaultData, $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Tournament</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0e8ea, #f5b7d9);
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .details {
            font-size: 18px;
            margin: 10px 0;
        }
        .prizes {
            margin-top: 20px;
            font-weight: bold;
        }
        .pay-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .pay-button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chess Tournament - Daily Update</h1>
        <p class="details">📆 Date – <?php echo $data['date']; ?></p>
        <p class="details">⏰ Time – <?php echo $data['time']; ?></p>
        <p class="details">🕒 Time Control – <?php echo $data['time_control']; ?></p>
        <p class="details">🎮 Platform – <a href="<?php echo $data['platform']; ?>" target="_blank">lichess.org</a></p>
        
        <h2>🎗🏆 MAIN PRIZES 🏆🎗</h2>
        <?php foreach ($data['prizes'] as $prize) {
            echo "<p class='prizes'>$prize</p>";
        } ?>
        
        <h2>💰 ENTRY FEE – <?php echo $data['entry_fee']; ?></h2>
        
        <a href="https://razorpay.me/@chessschoolacademy?amount=EPec5evqGoRk2C8icWNJlQ%3D%3D" class="pay-button">Pay Entry Fee</a>
    </div>
</body>
</html>
