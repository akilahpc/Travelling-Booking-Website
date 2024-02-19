
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Sri Lanka</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #video-background {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        section {
            padding: 80px 20px;
            text-align: center;
            color: #333;
        }

        section h2 {
            margin-bottom: 20px;
        }

        section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="video-background">
        <video autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <nav>
        <ul>
            <li><a href="sabaragamuwa.php">Sabaragamuwa</a></li>
            <li><a href="nothern.php">Northern</a></li>
            <li><a href="north central.php">North Centrel</a></li>
            <li><a href="north western.php">North Western</a></li>
            <li><a href="central.php">Central</a></li>
            <li><a href="eastern.php">Eastern</a></li>
            <li><a href="uva.php">Uva</a></li>
            <li><a href="western.php">Western</a></li>
            <li><a href="southern.php">Southern</a></li>
        </ul>
    </nav>

    <section id="province1">
        <h2>Province 1</h2>
        <img src="pic.jpg" alt="Place in Province 1">
        <p>Details about the beautiful place in Province 1.</p>
    </section>

    <!-- Repeat the above section for each province -->

</body>
</html>
