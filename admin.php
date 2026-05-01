<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

$file = 'tournament_data.json';
$defaultData = [
    "date" => "11th Jan",
    "time" => "9 PM to 10 PM",
    "time_control" => "3 minutes for each game",
    "platform" => "https://lichess.org",
    "prizes" => [
        "🥇 1st Place – ₹200",
        "🥈 2nd Place – ₹150",
        "🥉 3rd Place – ₹100",
        "🏅 4th Place – ₹100",
        "🏅 5th Place – ₹100",
        "🏅 6th Place – ₹100",
        "🏅 7th Place – ₹100"
    ],
    "entry_fee" => "₹40 ONLY"
];

$data = file_exists($file) ? json_decode(file_get_contents($file), true) : $defaultData;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        "date" => $_POST['date'],
        "time" => $_POST['time'],
        "time_control" => $_POST['time_control'],
        "platform" => $_POST['platform'],
        "prizes" => explode("\n", trim($_POST['prizes'])),
        "entry_fee" => $_POST['entry_fee']
    ];
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    echo "<script>alert('Tournament details updated successfully!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Tournament</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #d7e9f7, #f8d7e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .navbar {
            width: 100%;
            background: #007bff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            font-size: 18px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .navbar .logout-btn {
            background: red;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .navbar .logout-btn:hover {
            background: darkred;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 80px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #444;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            height: 80px;
        }
        .submit-btn {
            background: green;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            transition: 0.3s;
        }
        .submit-btn:hover {
            background: darkgreen;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>Admin - Edit Tournament</div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <div class="container">
        <h2>Update Tournament Details</h2>
        <form method="POST">
            <div class="form-group">
                <label>Date:</label>
                <input type="text" name="date" value="<?php echo $data['date']; ?>" required>
            </div>

            <div class="form-group">
                <label>Time:</label>
                <input type="text" name="time" value="<?php echo $data['time']; ?>" required>
            </div>

            <div class="form-group">
                <label>Time Control:</label>
                <input type="text" name="time_control" value="<?php echo $data['time_control']; ?>" required>
            </div>

            <div class="form-group">
                <label>Platform URL:</label>
                <input type="text" name="platform" value="<?php echo $data['platform']; ?>" required>
            </div>

            <div class="form-group">
                <label>Prizes (one per line):</label>
                <textarea name="prizes" required><?php echo implode("\n", $data['prizes']); ?></textarea>
            </div>

            <div class="form-group">
                <label>Entry Fee:</label>
                <input type="text" name="entry_fee" value="<?php echo $data['entry_fee']; ?>" required>
            </div>

            <button type="submit" class="submit-btn">Save Changes</button>
        </form>
    </div>

</body>
</html>
