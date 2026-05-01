<?php
    $logoPath1 = "chesss.png"; // Top-left logo
    $logoPath2 = "chess.png";  // Center logo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, rgb(189, 221, 227), rgb(234, 177, 208));
            min-height: 100vh;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .navbar {
            background: transparent;
            padding: 15px 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .top-left-logo {
            position: absolute;
            top: 15px;
            left: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .top-left-logo img {
            width: 100px;
            height: auto;
        }

        .logo-title {
            font-size: 16px;
            margin-top: 5px;
            font-weight: bold;
        }

        .center-logo {
            display: flex;
            justify-content: center;
            margin-top: 120px;
        }

        .center-logo img {
            width: 50%;
            max-width: 200px;
            height: auto;
        }

        .description {
            max-width: 90%;
            margin: 20px auto;
            background: transparent;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .admin-login {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .admin-login:hover {
            background: #0056b3;
        }

        .course-registration {
            position: fixed;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background: #28a745;
            color: white;
            padding: 10px 16px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            z-index: 999;
        }

        .course-registration:hover {
            background: #218838;
        }

        .floating-icons {
            position: fixed;
            bottom: 150px;
            right: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }

        .floating-icons .icon {
            background: #ff9800;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            text-decoration: none;
            transition: 0.3s;
        }

        .floating-icons .icon:hover {
            background: #e68900;
        }

        .daily-update {
            position: relative;
            margin: 40px auto 20px;
            width: 90%;
            text-align: center;
            background: rgba(255, 255, 255, 0.85);
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .top-left-logo img {
                width: 80px;
            }

            .logo-title {
                font-size: 14px;
            }

            .admin-login {
                font-size: 12px;
                padding: 6px 10px;
            }

            .course-registration {
                font-size: 12px;
                padding: 8px 12px;
            }

            .floating-icons .icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .center-logo img {
                width: 60%;
            }
        }

        @media (max-width: 480px) {
            .navbar a {
                font-size: 16px;
            }

            .description {
                font-size: 16px;
            }

            .daily-update {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="tournament.php">Tournament</a>
    </div>

    <div class="top-left-logo">
        <img src="<?php echo $logoPath1; ?>" alt="Chess School Logo 1">
        <h1 class="logo-title">Chess School Academy</h1>
    </div>

    <a href="admin.php" class="admin-login">Admin Login</a>

    <div class="center-logo">
        <img src="<?php echo $logoPath2; ?>" alt="Chess School Logo 2">
    </div>

    <div class="description">
        Welcome to Chess School! Improve your skills, compete in tournaments, and learn from the best. Join us to explore the world of strategic thinking and master the game of chess.
    </div>

    <a href="course_registration.php" class="course-registration">Course Registration</a>

    <div class="floating-icons">
        <a href="https://instagram.com" class="icon"><i class="fab fa-instagram"></i></a>
        <a href="https://facebook.com" class="icon"><i class="fab fa-facebook"></i></a>
        <a href="https://facebook.com" class="icon"><i class="bi bi-headset"></i></a>
    </div>

    <div class="daily-update">
        <h2>Daily Update</h2>
        <p>Stay tuned for the latest news, tournament updates, and new course announcements!</p>
    </div>

</body>
</html>
