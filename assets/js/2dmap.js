const map = L.map('map').setView([34.385, 132.455], 13);

L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

/**
 * Create a custome Leaflet marker.
 *
 * @param {integer} latitude Latitude of the marker
 * @param {integer} longitude Longitude of the marker
 * @param {string} label Name of the place or monument.
 * @param {string} link Link to read more about the place or monument.
 * @param {string} image Path to the image of the place or monument.
 * @param {string} description Little description of the place or monument.
 * @returns
 */
function createMarker(latitude, longitude, label, link, description, image = null) {
    let divImage = image ? `<img src="./assets/images/${image}" class="img-fluid mb-2 rounded" alt="${label}">` : '';
    return L.marker([latitude, longitude]).addTo(map).bindPopup(`<div>
            ${divImage}
            <h5>${label}</h5>
            <p>${description}</p>
            <a href="${link}" class="text-danger trn">Read more</a>
        </div>`, { keepInView: true });
}

createMarker(34.395493, 132.453620, 'A-Bomb Dome', 'http://en.wikipedia.org/wiki/A-Bomb_Dome', 'Designated a UNESCO World Heritage Site, the A-Bomb Dome is the only building left standing near the hypocentre of the atomic bomb.', 'timeline/ww2.jpg');

createMarker(34.394130747695115, 132.45276527965459, 'Children Peace Memorial', 'http://en.wikipedia.org/wiki/Children%27s_Peace_Monument', 'It is a monument to commemorate thousands of child victims of the a-bomb. The girl holding an origami crane on top is modelled after Sadako Sasaki, one of the victims.', 'map/children_peace_memorial.jpg');

createMarker(34.39254012628748, 132.4523983752547, 'Peace Memorial Park', 'https://en.wikipedia.org/wiki/Hiroshima_Peace_Memorial_Park', 'The Peace Memorial Parl is a memorial park in the center of Hiroshima, Japan. It is dedicated to the legacy of Hiroshima as the first city in the world to suffer a nuclear attack, and to the memories of the bomb\'s direct and indirect victims.', 'map/peace_memorial_park.jpg');

createMarker(34.40277778, 132.45916667, 'Hiroshima Castle', 'http://en.wikipedia.org/wiki/Hiroshima_castle', 'Originally constructed in 1590s as the home of the feudal lord of the Hiroshima fief, the castle was destroyed by the 1945 atomic bombing and was rebuilt in 1958.', 'timeline/castle_edo.jpg');

createMarker(34.3929723223356, 132.45256682229862, 'Victims Memorial Cenotaph', 'http://en.wikipedia.org/wiki/Hiroshima_Peace_Memorial_Park#Memorial_Cenotaph', 'The cenotaph holds the names of all victims of the a-bomb, and is aligned to the A-Bomb Dome, which is seen in the background.', 'map/hiroshima_peace_memorial.jpg');

createMarker(34.393156207635144, 132.46649952728478, 'Tokueji Temple', 'masuda901.web.fc2.com/page9zz111.html', 'This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States\' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever.');

createMarker(34.40274485491939, 132.48315640693173, 'Shoko-ji Temple', 'https://www.hiroshima-navi.or.jp/en/post/007085.html', 'Soto Buddhist temple that was formerly known as the Zuisen-ji Temple. It is one of the oldest in Hiroshima. When Terumoto Mori surveyed the castle grounds, he stayed at this temple and renamed the temple Hiroshima-san.Contains graves of Oishi father and Son, who were loyal retainers of Ako.', 'map/shokoji_temple.jpg');

createMarker(34.40477639596196, 132.4705538983023, 'Myojo-in Temple', 'https://www.hiroshima-navi.or.jp/en/post/007078.html', 'A reconstruction of a temple with a history believed to date back to the 17th century, including a large ginkgo tree that survived the atomic blast.', 'map/myojoin_temple.jpg');

createMarker(34.40437279122311, 132.4800559382003, 'Onaga Tenmangu Shrine', 'https://www.hiroshima-navi.or.jp/en/post/007172.html', 'Onaga Tenmangu Shrine stands at the foot of Mount Futaba, which can be reached by walking north for about 10 minutes from Hiroshima Station\'s Shinkansen Exit. This Shinto shrine is dedicated to Sugawara no Michizane, a deity of learning and academic pursuits.', 'map/onaga_tenmangu_shrine.jpg');

createMarker(34.401217399354216, 132.45872846680183, 'Gokoku-jinja', 'https://en.wikipedia.org/wiki/Hiroshima_Gokoku_Shrine', 'The original shrine was founded in 1869, the first year of the Meiji period, in Futabanosato Hiroshima. The shrine was established to mourn the Hiroshima-Han victims of the Boshin War.', 'map/gokoku_jinja.jpg');

createMarker(34.39539732421044, 132.47106289955408, 'Nittsu-ji Temple', 'https://en.wikipedia.org/wiki/Hiroshima_Gokoku_Shrine', 'Hokke Buddhist temple associated with the lord, built in 1695 at the late-life request of the wife (Toshiie Maeda\'s grandchild, Jishoin) of Mitsuakira, the second lord of the Asano clan.Hand washbasin containing the crest of an ""ume"" blossom shows the relationship with the Kaga Maeda clan.', 'map/nittsuji_temple.jpg');

createMarker(34.409293751745956, 132.4706138573158, 'Anraku-ji Temple', 'https://www.hiroshima-navi.or.jp/en/post/007076.html', 'Jodo-shin Buddhist temple, converted in 1533 from a Tendai Buddhist temple.It was burned down by fire in 1758, but rebuilt in 1788. The main hall tilts as a result of the atomic bomb\'s blast wave, but is still in good condition.', 'map/anrakuji_temple.jpg');

createMarker(34.403413629453155, 132.4755473383988, 'Toshogu Shrine', 'https://ichigo.guide/japan/hiroshima/higashi-hiroshima/hiroshima-toshogu-shrine/', 'Established in 1648, the Hiroshima Toshogu Shrine is hard to miss, perched high on a hillside with an extravagant approach. Stone lanterns and stairs lead up towards a large Chinese-style gate and the shrine proper. It’s an incredibly popular shrine, especially for locals celebrating the New Year.', 'map/toshogu_shrine.jpg');

createMarker(34.27555556, 132.30777778, 'Itsukushima Shrine', 'http://en.wikipedia.org/wiki/Itsukushima_Shrine', 'The shrine is best known for its giant gate floating out in the sea. It was under restoration when I visited, and I couldn\'t have a good view of it.', 'map/itsukushima_shrine.JPG');

createMarker(34.29611111, 132.31944444, 'Itsukushima-jinja', 'http://en.wikipedia.org/wiki/Itsukushima_Shrine', 'The Itsukushima shrine is one of Japan\'s most popular tourist attractions. It is most famous for its dramatic gate, or torii on the outskirts of the shrine, the sacred peaks of Mount Misen, extensive forests, and its ocean view.', 'cover_hiroshima.jpg');

createMarker(34.396588251268646, 132.45255582652237, 'Aioi Bridge', 'http://en.wikipedia.org/wiki/Aioi_Bridge', 'Shaped like a "T", the Aioi Bridge is easily recognizable from the air, so the original bridge (built in 1932) was chosen as the aiming point for the 1945 Hiroshima atomic bomb.', 'map/aioi_bridge.JPG');

createMarker(34.39416667, 132.47000000, 'Kyobashi Bridge', 'https://www.hiroshima-navi.or.jp/en/post/007216.html', 'Kyobashi Bridge was constructed as a national bridge across the Kyobashi River and completed in August 1927. Steel plates were originally used for the bridge girders, but they were requisitioned by the government during the war.', 'map/kyobashi_bridge.jpg');

createMarker(34.39472222, 132.47472222, 'Enkobashi Bridge', 'http://www.hiroshimapeacemedia.jp/?insight=20131107151246524_en-2', 'Enkobashi Bridge which was built across the Enko River had been an important bridge on the route connecting Kyoto with Kyushu ever since the Edo Period. The bridge was rebuilt as a permanent bridge in 1926 by the Hiroshima Prefectural government.', 'map/enkobashi_bridge.jpg');

createMarker(34.39253176299706, 132.45926348091035, 'Akamatsu Pharmacy', 'http://www.hiroshimapeacemedia.jp/?p=100563', 'Akamatsu Pharmacy is an old drugstore established about 400 years ago. In July 1945, Mr. Akamatsu started his studies at a pharmaceutical college in Gifu Prefecture to become a pharmacist. The next month, the atomic bomb dropped by the United States exploded in the sky above his hometown.');

createMarker(34.38084892673063, 132.4794353300592, 'School of Medicine', 'https://www.hiroshima-u.ac.jp/en/med/about/history', 'The School of Medicine shares a common philosophy to cultivate the following personnel in medicine and health sciences: those who acquire a rich sense of humanity and broad knowledge appropriate for practitioners of medicine, health and welfare; basic knowledge, skills and attitude for professional practice; scientific and creative thinking abilities; a deep interest in regional medicine; global awareness.');

createMarker(34.383019990245195, 132.4731438132888, 'Hijiyama-Koen', 'https://www.japan-experience.com/city-hiroshima/hijiyama-koen', 'Located on the hill of the same name, it welcomes runners, walkers, tourists, families and visitors around its ponds and paths.', 'map/hijiyama-koen.jpg');

createMarker(34.39938945643888, 132.46709127640412, 'Shukkei-en', 'https://en.wikipedia.org/wiki/Shukkei-en', 'Water slips over the scales of carp, toddlers play barefoot on the grass, a breeze caresses the trees... In good weather, this garden is truly serene. Yet this green enclave near the Hiroshima Museum of Art was one of the first witnesses to the unspeakable pain of the victims of the bomb.', 'map/shukkei-en.jpg');