<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Travel Page</title>
  <style>
    body {
      background-image: url("pic.jpg");
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1em;
    }
	
	
	img{

 }
nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #AC8E60 ;
}
ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 4rem;
  font-size: 16px;
  font-family:verdana; 
}
a {
  text-decoration: none;
  color:#fff;
}
.login {
  font-size: 16px;
  font-family:verdana;
  padding: 5px 20px;
  border-radius: 8px;
  color: #fff;
  background-color: #6F5B3E ;
}
	
	
section {
      max-width: 800px;
      margin: 2em auto;
      padding: 1em;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
    }

    p {
      line-height: 1.6;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    footer {
      text-align: center;
      padding: 1em;
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>

  <header>
    <h1>About Us - Travel Page</h1>
  </header>
  
  <nav>
      <img src="logo5.png" alt="logo" />
      <ul>
          <li><a href="Home.php">H O M E</a></li>
          <li><a href="about.php">A B O U T</a></li>
          <li><a href="booking1.php">B O O K I N G</a></li>
		      <a href="login.php"><button class="login"><b>L O G I N</button></a></b>
      </ul>
</nav>
  
  
<section>
    <h2>Our Story</h2>
    <p>Welcome to our travel page! We are passionate about exploring new places, experiencing different cultures, and creating unforgettable memories along the way. Our journey is filled with adventure, and we want to share it with you.</p>

    <h2>Why Travel With Us?</h2>
    <p>We believe in providing unique and personalized travel experiences. Our team is dedicated to curating trips that cater to your interests, ensuring each adventure is memorable and enjoyable.</p>

    <h2>Explore With Confidence</h2>
    <p>With years of experience, we've crafted itineraries that blend excitement and relaxation. Whether you're a solo traveler or planning a group trip, we've got you covered. Join us on a journey of discovery and create stories that last a lifetime.</p>

    <img src="travel.jpg" alt="Travel Image">

    <h2>Contact Us</h2>
    <p>Have questions or ready to embark on your next adventure? Contact us at <a href="mailto:info@yourtravelcompany.com">info@yourtravelcompany.com</a>.</p>
  </section>

  <footer>
    &copy; 2023 Your Travel Company
  </footer>

</body>
</html>

