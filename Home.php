
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Travel Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
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
      position: relative;
      height: 100vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    section h1 {
      font-size: 3em;
      color: #fff;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1em;
      position: fixed;
      bottom: 0;
      width: 100%;
    }


  </style>
</head>
<body>
  <header>
    <h1>Your Travel Page</h1>
  </header>
  
<nav>
      <img src="#" alt="logo" />
      <ul>
          <li><a href="Home.php">H O M E</a></li>
          <li><a href="about.php">A B O U T</a></li>
          <li><a href="booking1.php">B O O K I N G</a></li>
		      <a href="login.php"><button class="login"><b>L O G I N</button></a></b>
      </ul>
</nav>

  <section>
    <video autoplay loop muted>
      <source src="video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <h1>Welcome to Your Travel Adventure!</h1>
  </section>
  <footer>
    &copy; 2023 Your Travel Page
  </footer>
</body>
</html>
