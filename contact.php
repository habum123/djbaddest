<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Baddest Bangers - Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Your CSS code here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #191414;
            color: #fff;
            height: 100vh;
            width: 100%;
            overflow: hidden;
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
            text-decoration: none;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px; /* Reduced font size */
        }

        nav ul li a:hover {
            color: #1DB954;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;

            
        }

        section {
            margin-bottom: 100px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            
            text-decoration: none;
            color: whitesmoke; /* Link color */
            font-size: 25px; /* Reduced font size */
            position: relative;
        }

        .no{
            position: relative;
            left: 85%;
        }
        .yes{
            position: relative;
            right: 35%;
        }
        .noyes{
            position: relative;
            left: 25%;
        }
        .noyesyes{
            position: relative;
            left: 18%;
        }
        
        ul li a:hover {
            text-decoration: underline;
            color: #128c30; /* Hover color */
        }
        ul li a i {
        margin-right: 600px; /* Adjust the spacing as needed */
        text-decoration: none;
       
    }

        #contact {
            display: flex;
            gap: 30px;

        }

        footer {
            background-color: #1DB954;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            height: 10%;
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

            a { 
                color: white;
                font-size: 20px;
            }
        }

        .profile-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
            position: absolute;
            top: 10px;
            left: 20px;
            animation: rotateProfile 5s linear infinite;
        }

        @keyframes rotateProfile {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }


        .right{
            position: absolute;
            top: 35%;
            right: 20%;

        }
        
        .left{
            position: absolute;
            top: 35%;
            left: 20%;
        }
        .center{
            position: absolute;
            top: 35%;
            left: 38%;
        }
        .centerb{
            position: absolute;
            top: 50%;
            left: 42%;
        }
        
        .did{
         position: absolute ;
         left: 44%;
         top: 25%;
        
        }
        p {
        font-size: 150%;
        background-color: #1DB954;
        border-radius: 10px; 
        padding: 5px;
       
        }
        .a{
            position: relative;
            right: 60%;
        }
        .b{
            position: relative;
            left: 60%;
        }
        .c{
            position: relative;
            right: 5%;
        }
        .d{
            position: relative;
            right: 5%;
        }
        .copy{
            font-size: 100%;
            position: absolute;
            top: 20%;
            left: 40%;
        }
        
/* Responsive styles */
@media screen and (max-width: 768px) {
    .did {
        text-align: center; /* Center align the "Contact Me" heading */
    }

    .left, .center, .centerb, .right {
        position: static; /* Reset positions */
        margin: 20px 0; /* Add margin for spacing */
        text-align: center; /* Center align the content */
    }

    ul li a i {
        margin-right: 5px; /* Adjust the spacing between icon and text */
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

    <div class="did">
        <h2 class="ct">Contact Me</h2>
    </div>

    <div class="content">
        <section id="contact">
        <div class="between">
            <div class="left">
                <p class="a">Follow me on social media:</p>
                <ul class="yes">
                    <li><a href="https://www.facebook.com/people/B%C3%B8s-Kizoo/100052967072922/" target="_blank"><i class="fab fa-facebook"></i>  Facebook</a></li>
                    <li><a href="https://www.instagram.com/boskizo_250/" target="_blank"><i class="fab fa-instagram"></i>  Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@djbaddestbangers?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fab fa-tiktok"></i>  Tiktok</a></li>
                    <li><a href="https://twitter.com/dj__baddest" target="_blank"><i class="fab fa-twitter"></i>  X</a></li>
                </ul>
            </div>

            <div class="center">
                <p class="c">Follow me on streaming platforms:</p>
                <ul class="noyes">
                     <li><a href="https://youtube.com/@dj_baddest?si=ELyqC9Hwwa1IHvjh" target="_blank"><i class="fab fa-youtube"></i> YouTube</a></li>
                 </ul>
            </div>
            <div class="centerb">
            <p class="d">Dj baddest Linktree:</p>
            <ul class="noyesyes">
                 <li><a href="https://linktr.ee/djbaddest" target="_blank"><i class="fa-solid fa-tree"></i> LinkTree</a></li>
             </ul>
            </div>

            <div class="right">
                <p class="b">Follow me on Listening platforms:</p>
                <ul class="no">
                     <li><a href="https://open.spotify.com/playlist/37eI6NxvVKrzC4Bw6maNbB?si=32196c3feb4b4534" target="_blank"><i class="fab fa-spotify"></i> Spotify</a></li>
                     <li><a href="https://soundcloud.com/dj-baddest-188387583/tracks" target="_blank"><i class="fab fa-soundcloud"></i> SoundCloud</a></li>
                     <li><a href="https://audiomack.com/djbaddestbangers/song/djbaddestmix2024mixofnewtrendedrwanadansongsnow" target="_blank"><i class="fa-solid fa-cloud-bolt"></i> Audiomack</a></li>
        </div>
        </section>
    </div>
    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com/people/B%C3%B8s-Kizoo/100052967072922/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/boskizo_250/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@dj_baddest?si=ELyqC9Hwwa1IHvjh" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="copy">&copy; 2024 DJ Baddest. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>




