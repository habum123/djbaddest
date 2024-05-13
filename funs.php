<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Baddest - Fans</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Your additional CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #191414;
            color: #fff;
        }

        header {
            background-color: #1DB954;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: center;
            gap: 50px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 6px;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            color: #1DB954;
        }

        .main {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .column {
            flex: 1 0 calc(25% - 20px);
            max-width: calc(25% - 20px);
        }

        .column img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .column .content {
            text-align: center;
        }

        footer {
            background-color: #1DB954;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 18px;
        }

        .social-icons a {
            color: white;
            font-size: 20px;
        }
        img.logo {
            width: 80px; /* Adjust logo size */
            border-radius: 50%;
            animation: rotateProfile 10s linear infinite; /* Rotate profile logo non-stop */
        }
           /* Rotating profile logo */
           .profile-logo {
            width: 100px; /* Larger logo size */
            height: 100px; /* Larger logo size */
            border-radius: 50%;
            background-color: #fff;
            position: absolute;
            top: 10px;
            left: 20px;
            animation: rotateProfile 10s linear infinite; /* Rotate profile logo non-stop */
            z-index: 1; /* Ensure logo is above content */
        }
        @keyframes rotateProfile {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }


        @media only screen and (max-width: 768px) {
            .column {
                flex: 1 0 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media only screen and (max-width: 480px) {
            .column {
                flex: 1 0 calc(100% - 20px);
                max-width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>

<header>
    <h1>DJ Baddest Official Website</h1>
    <a href="https://youtube.com/@dj_baddest?si=ELyqC9Hwwa1IHvjh" target="_blank"><img class="logo" src="2.png" alt="Profile Logo"></a>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="mixes.php">Mixes</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="funs.php">Fans</a></li>
    </ul>
</nav>
<div class="main">
    <div class="column mine">
        <div class="content">
            <img src="2.png" alt="Mine">
            <h4>Mine</h4>
            <p>Active engagement with DJ Baddest's content and follow on all platforms: Instagram, Spotify, SoundCloud, Audiomack, TikTok, and more.</p>
        </div>
    </div>
    <div class="column friends">
        <div class="content">
            <img src="2.png" alt="Friends">
            <h4>Friends</h4>
            <p>Active engagement with DJ Baddest's content and follow on all platforms: Instagram, Spotify, SoundCloud, Audiomack, TikTok, and more.</p>
        </div>
    </div>
    <div class="column others">
        <div class="content">
            <img src="2.png" alt="Others 1">
            <h4>Others</h4>
            <p>Active engagement with DJ Baddest's content and follow on all platforms: Instagram, Spotify, SoundCloud, Audiomack, TikTok, and more.</p>
        </div>
    </div>
</div>

<footer>
    <div class="social-icons">
        <a href="https://www.facebook.com/people/B%C3%B8s-Kizoo/100052967072922/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/boskizo_250/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://youtube.com/@dj_baddest?si=ELyqC9Hwwa1IHvjh" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
    <p>&copy; 2024 DJ Baddest. All rights reserved.</p>
</footer>

<script>
    setTimeout(function() {
        var response = confirm("Do you want to be featured in the fans gallery? Active engagement with DJ Baddest's content and follow on all platforms: Instagram, Spotify, SoundCloud, Audiomack, TikTok, and more.");
        if (response == true) {
            // Handle if user wants to be featured
            // You can redirect the user to the respective platforms or perform any other action here
        } else {
            // Handle if user does not want to be featured
            // You can display a message or perform any other action here
        }
    }, 5000); // 5000 milliseconds = 5 seconds
</script>

</body>
</html>
