<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Baddest Bangers - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Your existing CSS styles */
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
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            color: #1DB954;
        }

        .content {
            position: absolute;
            top:25%;
            left:33%;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            margin-bottom: 100px;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"] {
            padding: 10px;
            width: 200px;   
        }

        button {
            padding: 10px 20px;
            background-color: #1DB954;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #128c30;
        }

        img.logo {
            width: 80px; /* Adjust logo size */
            border-radius: 50%;
            animation: rotateProfile 10s linear infinite; /* Rotate profile logo non-stop */
        }
.image, .image2, .image3 {
    position: absolute;
    left: 75%;
    bottom: 20%;
    width: 20%; /* Adjust logo size */
    border-radius: 50%;
    opacity: 0; /* Initially hidden */
    animation: fadeInAndOut 15s ease-in-out infinite; /* Animation to fade in and out */
}

/* Different animation delays for each image */
.image {
    animation-delay: 0s; /* No delay for the first image */
}

.image2 {
    animation-delay: 5s; /* Delay for the second image */
}

.image3 {
    animation-delay: 10s; /* Delay for the third image */
}

@keyframes fadeInAndOut {
    0%, 20% {
        opacity: 0; /* Hidden at the start and a bit later */
    }
    25%, 45% {
        opacity: 1; /* Fully visible in the middle of the animation */
    }
    80%, 100% {
        opacity: 0; /* Hidden towards the end and at the end of the animation */
    }
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

            a { 
                color: white;
                font-size: 20px;
            }
        }

        h2 {
            padding-left: 27%;
        }

        .p2 {
            position: relative;
            left: 15%;
            margin-top: 15%;
            color: aqua;
        }

        @keyframes rotateProfile {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .input-container {
            display: flex;
            border: 2px solid #128c30;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
            background-color: white;
            overflow: hidden;
            padding: 6px;
            position: absolute;
            bottom: 2%;
            left: 17%;

            button{
                border-radius: 90px;            
            }
            input {
                outline: none;
                border: none;
            }
        }
        /* Responsive styles */
@media screen and (max-width: 768px) {
    .content {
        position: static;
        left: auto;
        padding: 20px;
        text-align: center;
    }

    .left {
        margin-left: 0;
    }

    .p2 {
        margin-top: 10%;
    }

    .image, .image2, .image3 {
        position: static;
        display: block;
        margin: auto;
        width: 50%;
        height: auto;
        opacity: 1;
        animation: none;
    }

    h2 {
        padding-left: 0;
    }

    footer {
        position: relative;
        bottom: auto;
        width: auto;
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
    
    <div class="content">
        <div class="left">
            <section id="home">
                <h2>About DJ Baddest</h2>
                <p>Feel the energy, feel the beat! DJ Baddest is here, delivering non-stop <br> amapiano and Afrobeat goodness straight to your ears.</p>
                <p class="p2">Enter your email to download DJ Baddest mixes</p>
            </section>
            <form id="emailForm" action="logic.php" method="POST" autocomplete="off">
    <div class="input-container">
        <input type="email" name="email"  id="email" placeholder="Enter your email" required autocomplete="off">
        <button type id="submi" name="addEmail" onclick="console.log('Form submitted');">Subscribe</button> <!-- Added onclick attribute for debugging -->
    </div>
            </form>

        </div>
    </div>
    <div>
        <img class="image" src="1.png" alt="DJ Baddest">
        <img class="image2" src="3.png" alt="DJ Baddest">
        <img class="image3" src="4.png" alt="DJ Baddest">
    </div>
    <footer>
    <div class="social-icons">
            <a href="https://www.facebook.com/people/B%C3%B8s-Kizoo/100052967072922/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/boskizo_250/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@dj_baddest?si=ELyqC9Hwwa1IHvjh" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2024 DJ Baddest. All rights reserved.</p>
    </footer>
    <script type="module">
  
        // Handle form submission
        // const emailForm = document.getElementById("emailForm");
        // emailForm.addEventListener("submit", function(event) {
        //     event.preventDefault();
        //     const emailInput = document.getElementById("email").value;
        //     if (emailInput.trim() === "") {
        //         alert("Please enter your email.");
        //         return;
        //     }
        //     emailForm.submit(); // Submit the form after validation
        // });

        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll('nav ul li a');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    
                    let emails = document.getElementById('email').value

                    if(emails.length < 1) {
                        alert("First enter your email!")
                    }
                });
            });

            // Additional animations and functionality can be added here
        });
    </script>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAdUkxugHnyq3aIZlypsbugJJU5x4srrLU",
    authDomain: "dj-baddest.firebaseapp.com",
    projectId: "dj-baddest",
    storageBucket: "dj-baddest.appspot.com",
    messagingSenderId: "1017058968623",
    appId: "1:1017058968623:web:9433d47291343b97d932da",
    measurementId: "G-HQM504FEKF"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>
</html>
