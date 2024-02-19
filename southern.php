<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southern province</title>
    
</head>
<body>
    
    <h1>Beautiful Places in Southern Province</h1>

    <div id="placesContainer">
        
    </div>

    <script>
        
        const placesData = [
            { name: 'Adams peak', image: 'adams.jpg', details: "The mountain is located in the southern reaches of the Central Highlands in the Ratnapura District and Nuwara Eliya District of the Sabaragamuwa Province and Central Province—lying about 40 km (25 mi) northeast of Ratnapura and 32 km (20 mi) southwest of Hatton. The surrounding region is largely forested hills, with no mountain of comparable size nearby. The region along the mountain is a wildlife reserve, housing many species varying from elephants to leopards, and including many endemic species.Adam's Peak is important as a watershed. The districts to the south and the east of Adam's Peak yield precious stones—emeralds, rubies and sapphires, for which the island has been famous, and which earned for it the ancient name  Ratnadvipa " },
            { name: 'Pinnawala elephant orphanage', image: 'elephant.jpg', details: "Most of the elephants at Pinnawala Elephant Orphanage healthy and once attaining adulthood, will be retained within the facility mostly since they have become dependent on supplied food. A few disabled elephants are given residential care. One tusker, Raja is blind, and one female, named Sama, lost her front right leg to a land mine.Pinnawala Elephant Orphanage was the subject of a 2010 report by the Born Free Foundation which called into question animal welfare at the orphanage.[8]The quality of care of elephants who are donated from Pinnawala has been a big public issue. In 2012 The Sri Lanka Environment Trust spoke out against authorities who continue to 'donate' tamed elephants to people who had 'poor' past records of taking care of animals. There are enough cases to show that the authorities are releasing elephants from Pinnawala to the same group of people who don't take care of the animals. Despite these accusations it is proven that the surveillance is done by the fact that four of such donated elephants by presidential decree being returned to the elephant by a court order.[11]" },
			{ name: 'Sinharaja Forest reserve', image: 'sabare3.jpg', details: "Sinharaja is a Rain Forest and a biodiversity hotspot which is located in south west lowland wet zone within Sabaragamu and Southern provinces of Sri Lanka. Sinharaja rain forest is the country’s last viable area of primary tropical rain forest. It covers an area of 11,000 Ha of primary and secondary forests. This narrow strip of rolling site comprises of a series of ridges and valleys. More than 60% of the trees are endemic to Sinharaja Forest and many of them are considered rare. There is much endemic wildlife, especially birds but the reserve is also home to over 50% of Sri Lanka’s endemic species of butterflies & mammals and also many kinds of insects, reptiles and rare amphibians. This is one of the main reasons that UNESCO declared Sinharaja Forest as a UNESCO World Heritage in 1988 under the name of Sinharaja Forest Reserve. In 1936 Sinharaja Forest was first recognized as being the only considerable patch of virgin tropical rain forest in the Island." },
			{ name: 'Belilena Cave', image: 'sabare4.jpg', details: "The word speleology, describes the exploration, surveying, mapping, and photographing of caves, which is performed by the scientific community. These caves are home to a great variety of creatures that are nocturnal in their habits and most of the recently discovered species are from caves that have been around for at least 500 million years. These caves especially the Belilena Cave in Sri Lanka abound with stalactites and stalagmites, formations of conical calcium deposits sometimes as tall as a small child.This captivating activity is relatively new to Sri Lanka and is rather an unusual experience not to be missed. Sri Lanka is dotted all over with many caves from the Ritigala mountains in the north to the central hills and the southern hillocks of the South. The most famous being Batatotalena at sudugala, attributed to the “Balangoda man” a prehistoric man whose skeletal remains were uncovered inside this cave, Belilena in Kithulgala and aptly named “Wavulpone” because of the large community of bats living inside with some records indicating a figure as high as hundred thousand." },
			{ name: 'Bopath Falls', image: 'sabare5.jpg', details: "Bopath Ella is 30 metres (98 ft) high. It is formed from the Kuru Ganga, which is a tributary of the Kalu Ganga.[1] Its mean rate of flow is 6 square metres (65 sq ft) per second, and its catchment area receives an average rainfall of 5,080 millimetres (200 in) annually. Water from the falls is used for paddy cultivation.[2] Bopath Ella is also the most comprehensively studied waterfall in the country.[4]Bopath Ella is a major tourist attraction in Sri Lanka, since it is not far from the capital, Colombo, and is easily accessible. There have been unsuccessful attempts to use the waterfall to generate hydroelectricity.[3] The path to the waterfall is lined with a number of shops and stalls, and it is somewhat polluted because of this commercialization.[1]"}
            
        ];

        
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

