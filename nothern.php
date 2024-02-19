<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nothern province</title>
    
</head>
<body>
    
    <h1>Beautiful Places in Nothern Province</h1>

    <div id="placesContainer">
        
    </div>

    <script>
        
        const placesData = [
            { name: 'Nallur Kandaswamy Temple', image: 'nothern1.jpg', details: "he original, Kandaswamy Temple was founded in 948 ad. According to the Yalpana Vaipava Malai, the temple was developed at the site in the 15th century by Parakramabahu VI King of Kotte. Sapumal Kumaraya (also known as Chempaha Perumal in Tamil), who ruled the Jaffna kingdom on behalf of the Kotte kingdom is credited with building the third Nallur Kandaswamy temple.[4][5] Nallur served as the capital of the Jaffna kings, with the royal palace situated very close to the temple. Nallur was built with four entrances with gates.[6] There were two main roadways and four temples at the four gateways.[6]" },
            { name: 'Neduntheevu', image: 'nothern2.jpg', details: "The Neduntheevu, sometimes known as Neduntivu is the largest island falling in the Palk Strait in the northern parts of Sri Lanka. This is known as Delft Island also as it was so called by the Dutch colonials. It happens to be the biggest of the seven inhabitable islands in the region. A unique feature of this island is it is flat and oval shaped which is wind-swept at almost all times, which makes the place very soothing.The surrounding of this island is very mesmerizing. It has shallow waters which houses some of the unique aquatic life. On the island there are varied kinds of dry shrubs and semi-arid tropical plants. As found on many islands, this island also has tall palm trees which add to the overall beachy feel of the island. If you happen to wander far you can spot some ruins of the South Indian Chola architecture to the west of this island.A Giant Baobab tree is planted in this island which, interestingly, can hide up to 15 people under its trunk at a time. The Baobab trees are originally found in South Africa but the Portuguese brought some saplings to Sri Lanka, and this happens to be grown out of one such sapling. A Dutch fort made of dead coral chunks is also located in this island.A very unique experience which is interesting and totally worth the effort! Visit this island for the famous pony rides." },
			{ name: 'Naga Pooshani Ambal Kovi', image: 'nothern3.jpg', details: "Nagapooshani Amman Temple is most visited historic Hindu Temple located in 36 KM away from Northern Province capital city of Jaffna in Nainativu Island Sri Lanka. Shree Nagapooshani Amman kovil is one of 64 Shakthi Peeth in the region. Nagapooshani Amman Temple is dedicated to Goddess Parvati who is known as Bhuvaneswari or Nagapooshani an Avatar of Durga. The Island of Nagadeepa also known as Nainativu is home for the important Buddhist Shrine called Nagadeepa Purana Viharaya and one of the country’s holiest Hindu Temple Nagapooshani Amman Kovil. Therefore the island of Nainativu or Nagadeepa is the center of one of the most sacred Buddhist & Hindu sites of the country attracting over a thousand visitors a daily. The annual festival of 16 days called Mahostavam (Thiruvizha) held in June & July attracting more than 100,000 pilgrims."},
			{ name: 'Jaffna port', image: 'nothern4.jpg', details: "Close to the coastal village of Gurunagar, Jaffna, is where you’ll find Jaffna Fort, an intriguing piece of architecture built by the Portuguese between 1618 and 1625. While under Portuguese occupation, the fort was called ‘Fortress of Our Lady of Miracles of Jafanapatão’, a name derived from the neighbouring church dedicated to Virgin Mary.In 1658, the Dutch took hold of the fort, and the Portuguese lost their last stronghold in Sri Lanka. The Dutch went on to expand the fort, but again, the fort swapped hands in 1795, when the British invaded and drove out the Dutch. The fort remained a British garrison up until 1948." },
			{ name: 'Nagadheepa viharaya', image: 'nothern5.jpg', details: "Nagadeepa Purana Vihara is situated on the island of Nainativu, off the coast of Jaffna, and is a part of the Solosmasthana, or sixteen sacred sites of veneration in the country. It was here that Lord Buddha on his second visit to the island, five years after his enlightenment intervened and averted imminent war between two feudal Kings, over a disputed throne of gold studded with gemstones. In gratitude for having mediated the conflict, both Kings pledged the throne to the Buddha and enshrined it in a stupa at this location. Future kings maintained the sacred site, but most of what is seen today was constructed in the 1950s, with a unique silver gilded stupa being the focal point of veneration. One of the Bodhi trees within the temple precincts is one of eight saplings grown from the Jaya Sri Maha Bodhi in Anuradhapura, which itself was from the original tree under which the Buddha attained enlightenment." }
            
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

