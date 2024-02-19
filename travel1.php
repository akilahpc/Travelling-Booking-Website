

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabaragamuwa Province</title>
    <style>
        /* Add your CSS styles for the page layout here */
    </style>
</head>
<body>

    <h1>Beautiful Places in Sabaragamuwa Province</h1>

    <div id="placesContainer">
        <!-- This is where photos and details will be displayed dynamically -->
    </div>

    <script>
        // Use JavaScript to dynamically load and display photos and details
        // You might want to fetch data from a server or use static data

        // Example data (replace this with your actual data)
        const placesData = [
            { name: 'Adams peak', image: 'adams.jpg', details: 'Adams Peak is a 2,243 m tall conical sacred mountain located in central Sri Lanka. It is well known for the Sri Pada, a 1.8 m rock formation near the summit whose name is also used for the mountain itself.' },
            { name: 'Pinnawala elephant orphanage', image: 'elephant.jpg', details: 'heeeeeee' },
            // Add more places as needed
        ];

        // Function to create HTML elements for each place and append to the container
        function displayPlaces() {
            const placesContainer = document.getElementById('placesContainer');

            placesData.forEach(place => {
                const placeElement = document.createElement('div');
                placeElement.innerHTML = `
                    <h2>${place.name}</h2>
                    <img src="${place.image}" alt="${place.name}">
                    <p>${place.details}</p>
                `;
                placesContainer.appendChild(placeElement);
            });
        }

        // Call the function to display places when the page loads
        displayPlaces();
    </script>

</body>
</html>
