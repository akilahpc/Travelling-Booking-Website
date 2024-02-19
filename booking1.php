

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden; /* Prevent scrollbars on the video background */
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
		
        #video-background {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
         #booking-form {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 600px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            text-align: center;
        }
        form {
            display: grid;
            gap: 2px;
            margin-top: 0px;
            padding-top: 0px;

			
        }
        label {
            font-size: 18px;
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

  <header>
    <h1>Booking Now</h1>
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



    <div id="video-background">
        <video autoplay muted loop id="myVideo">
            <!-- Replace 'your-video-file.mp4' with your actual video file -->
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div id="booking-form">
       
        <form method="post" action="fAction.php">
            <!-- Your form elements go here -->
			<label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="nic">NIC No:</label>
                <input type="text" id="nic" name="nic" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="departure-date">Departure Date:</label>
                <input type="date" id="departure-date" name="departure-date" required>

                <label for="passengers">Number of Passengers:</label>
                <select id="passengers" name="passengers" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <!-- Add more options as needed -->
                </select>

                <button type="submit">Book Now</button>

        </form>
    </div>

    <script>
        // Optional: Add JavaScript for additional functionality
    </script>
</body>
</html>
