
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Baddest - Mixes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #191414; /* Dark gray background */
            color: #fff; /* White text */
            overflow-x: hidden; /* Prevent horizontal scrollbar */
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
            z-index: 1; /* Ensure nav is above content */
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
            color: #1DB954; /* Lighter green on hover */
        }

        .content {
            padding: 20px;
            display: flex;
            justify-content: space-between; /* Align items to left and right */
            position: relative; /* Relative positioning for the counter */
        }

        section {
            margin-bottom: 40px;
            text-align: center;
            z-index: 1; /* Ensure sections are above background */
            width: 45%; /* Set width for each section */
        }

        .audio-mixes {
            float: left; /* Align audio mixes to the left */
        }

        .video-mixes {
            float: right; /* Align video mixes to the right */
        }

        .mix {
            margin-bottom: 20px;
        }

        .mix a {
            text-decoration: none;
            transition: color 0.3s ease;
            color: #1DB954; /* Green links */
        }

        .mix a:hover {
            color: #128c30; /* Darker green on hover */
        }

        .counter {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #1DB954; /* Green color for the counter */
        }

        footer {
            background-color: #1DB954;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1; /* Ensure footer is above content */
        }

        img.logo {
            width: 80px; /* Adjust logo size */
            border-radius: 50%;
            animation: rotateProfile 10s linear infinite; /* Rotate profile logo non-stop */
        }

        img.non-rotating {
            margin-top: 20px;
            width: 200px;
            border-radius: 50%;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 18px;
            list-style-type: none;
            

            a { 
                color: white;
                font-size: 20px;
                text-decoration: none;
                
            }
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

        .downloads {
            position: absolute;
            left: 45%;
            top: 25%;
        }
        .counters{
            position: relative;
            left: 40%;
            color: rgb(17, 194, 243);
            font-size: 20px;
        }
        /* For responsiveness */
@media only screen and (max-width: 768px) {
    .content {
        flex-direction: column; /* Change to a single column layout */
        align-items: center; /* Center items horizontally */
    }

    section {
        width: 100%; /* Full width for sections */
        margin-bottom: 20px; /* Reduce margin between sections */
    }
}

    </style>
</head>
<body>
<header>
    <h1>DJ Baddest Official Website</h1>
    <!-- Use the same rotating logo as in mixes.html -->
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
<div class="content">
    <section class="audio-mixes">
        <h2>Audio Mixes</h2>
        <div class="mix">
            <h3>Rwandan Mix</h3>
            <a href="2024_ Dj baddest mix -new most trended songs now.mp3" download onclick="incrementCounter('downloadCounter')">Download Rwandan Mix</a>
            <span id="rwandanLastUpdated">Last updated: 3 days ago</span>
        </div>
        <div class="mix">
            <h3>Amapiano Mix</h3>
            <a href="soon.php" download onclick="incrementCounter('downloadCounter')">Download Amapiano Mix</a>
            <span id="amapianoLastUpdated">Last updated: 2 weeks ago</span>
        </div>
        <div class="mix">
            <h3>Afrobeat Mix</h3>
            <a href="soon.php" download onclick="incrementCounter('downloadCounter')">Download Afrobeat Mix</a>
            <span id="afrobeatLastUpdated">Last updated: 1 week ago</span>
        </div>
    </section>
    <section class="video-mixes">
        <h2>Video Mixes</h2>
        <div class="mix">
            <h3>Rwandan Mix</h3>
            <a href="https://youtu.be/RInM1wxW_HY?si=cW7dxCNmEKjYeOcg" target="_blank" onclick="incrementCounter('watchCounter')">Watch Rwandan Mix</a>
            <span id="rwandanVideoLastUpdated">Last updated: 2 days ago</span>
        </div>
        <div class="mix">
            <h3>Amapiano Mix</h3>
            <a href="#" target="_blank" onclick="incrementCounter('watchCounter')">Watch Amapiano Mix</a>
            <span id="amapianoVideoLastUpdated">Last updated: 3 weeks ago</span>
        </div>
        <div class="mix">
            <h3>Afrobeat Mix</h3>
            <a href="#" target="_blank" onclick="incrementCounter('watchCounter')">Watch Afrobeat Mix</a>
            <span id="afrobeatVideoLastUpdated">Last updated: 4 days ago</span>
        </div>
    </section>
<div class="downloads">
    <div class="d1" id="downloadCounterContainer">
        <h2>Downloads</h2>
        <span id="downloadCounter" class="counters">0</span>
    </div>
    <div class="w1" id="watchCounterContainer">
        <h2>Watches</h2>
        <span id="watchCounter" class="counters">0</span>
    </div>
</div>
</div>
<footer>
    <div class="social-icons">
        <li><a href="https://open.spotify.com/playlist/37eI6NxvVKrzC4Bw6maNbB?si=32196c3feb4b4534" target="_blank"><i class="fab fa-spotify"></i> Spotify</a></li>
        <li><a href="https://soundcloud.com/dj-baddest-188387583/tracks" target="_blank"><i class="fab fa-soundcloud"></i> SoundCloud</a></li>
        <li><a href="https://audiomack.com/djbaddestbangers/song/djbaddestmix2024mixofnewtrendedrwanadansongsnow" target="_blank"><i class="fa-solid fa-cloud-bolt"></i> Audiomack</a></li>
    </div>
    <p>&copy; 2024 DJ Baddest. All rights reserved.</p>
</footer>

<script>
    // JavaScript code
    function incrementCounter(counterId) {
        var counter = document.getElementById(counterId);
        counter.textContent = parseInt(counter.textContent) + 1;
    }

    // Define function to update "Last updated" text
    function updateLastUpdatedText(elementId, lastUpdatedDate) {
        var lastUpdatedElement = document.getElementById(elementId);
        var currentDate = new Date();
        var daysDifference = Math.floor((currentDate - lastUpdatedDate) / (1000 * 60 * 60 * 24));
        var updatedText = '';

        if (daysDifference === 0) {
            updatedText = "today";
        } else if (daysDifference === 1) {
            updatedText = "yesterday";
        } else if (daysDifference < 7) {
            updatedText = daysDifference + " days ago";
        } else {
            var weeksDifference = Math.floor(daysDifference / 7);
            updatedText = weeksDifference + " week" + (weeksDifference > 1 ? "s" : "") + " ago";
        }

        lastUpdatedElement.textContent = "Last updated: " + updatedText;
    }

    // Update "Last updated" text for audio mixes
    updateLastUpdatedText("rwandanLastUpdated", new Date('2024-04-25'));
    updateLastUpdatedText("amapianoLastUpdated", new Date('2024-04-10'));
    updateLastUpdatedText("afrobeatLastUpdated", new Date('2024-04-17'));

    // Update "Last updated" text for video mixes
    updateLastUpdatedText("rwandanVideoLastUpdated", new Date('2024-05-06'));
    updateLastUpdatedText("amapianoVideoLastUpdated", new Date('2024-04-20'));
    updateLastUpdatedText("afrobeatVideoLastUpdated", new Date('2024-05-04'));
</script>
</body>
</html>



