const map = L.map('map').setView([34.385, 132.455], 13);

L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Memorial
L.marker([34.395493, 132.453620]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/a_bomb_dome.JPG" class="img-fluid mb-2 rounded" alt="A-Bomb Dome">
        <h5>A-Bomb Dome</h5>
        <p>Designated a UNESCO Wolrd Heritage Site, the A-Bomb Dome is the only building left standing near the hypocentre of the atomic bomb.</p>
        <a href="http://en.wikipedia.org/wiki/A-Bomb_Dome" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.394130747695115, 132.45276527965459]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/children_peace_memorial.jpg" class="img-fluid mb-2 rounded" alt="Children Peace Memorial">
        <h5>Children Peace Memorial</h5>
        <p>It is a monument to commemorate thousands of child victims of the a-bomb. The girl holding an origami crane on top is modelled after Sadako Sasaki, one of the victims.</p>
        <a href="http://en.wikipedia.org/wiki/Children%27s_Peace_Monument" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.39254012628748, 132.4523983752547]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/peace_memorial_park.jpg" class="img-fluid mb-2 rounded" alt="Peace Memorial Park">
        <h5>Peace Memorial Park</h5>
        <p>The Peace Memorial Parl is a memorial park in the center of Hiroshima, Japan. It is dedicated to the legacy of Hiroshima as the first city in the world to suffer a nuclear attack, and to the memories of the bomb's direct and indirect victims.</p>
        <a href="https://en.wikipedia.org/wiki/Hiroshima_Peace_Memorial_Park" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.391843404228915, 132.45210839071893]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/peace_memorial_museum.JPG" class="img-fluid mb-2 rounded" alt="Peace Memorial Museum">
        <h5>Peace Memorial Museum</h5>
        <p>The museum presents facts and artifacts of the atomic bombing, including a wrist watch that stopped at 8:15 AM, the time of the bombing.</p>
        <a href="http://en.wikipedia.org/wiki/Hiroshima_Peace_Memorial_Museum" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.40277778, 132.45916667]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/hiroshima_castle.jpg" class="img-fluid mb-2 rounded" alt="Hiroshima Castle">
        <h5>Hiroshima Castle</h5>
        <p>Originally constructed in 1590s as the home of the feudal lord of the Hiroshima fief, the castle was destroyed by the 1945 atomic bombing and was rebuilt in 1958.</p>
        <a href="http://en.wikipedia.org/wiki/Hiroshima_castle" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.3929723223356, 132.45256682229862]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/hiroshima_peace_memorial.jpg" class="img-fluid mb-2 rounded" alt="Victims Memorial Cenotaph">
        <h5>Victims Memorial Cenotaph</h5>
        <p>The cenotaph holds the names of all victims of the a-bomb, and is aligned to the A-Bomb Dome, which is seen in the background.</p>
        <a href="http://en.wikipedia.org/wiki/Hiroshima_Peace_Memorial_Park#Memorial_Cenotaph" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

// Temples
L.marker([34.393156207635144, 132.46649952728478]).addTo(map)
    .bindPopup(`<div>
        <h5>Tokueji Temple</h5>
        <p>This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever.</p>
        <a href="masuda901.web.fc2.com/page9zz111.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.40274485491939, 132.48315640693173]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/shokoji_temple.jpg" class="img-fluid mb-2 rounded" alt="Shoko-ji Temple">
        <h5>Shoko-ji Temple</h5>
        <p>Soto Buddhist temple that was formerly known as the Zuisen-ji Temple. It is one of the oldest in Hiroshima. When Terumoto Mori surveyed the castle grounds, he stayed at this temple and renamed the temple Hiroshima-san.Contains graves of Oishi father and Son, who were loyal retainers of Ako.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007085.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.40477639596196, 132.4705538983023]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/myojoin_temple.jpg" class="img-fluid mb-2 rounded" alt="Myojo-in Temple">
        <h5>Myojo-in Temple</h5>
        <p>A reconstruction of a temple with a history believed to date back to the 17th century, including a large ginkgo tree that survived the atomic blast.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007078.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.40437279122311, 132.4800559382003]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/myojoin_temple.jpg" class="img-fluid mb-2 rounded" alt="Onaga Tenmangu Shrine">
        <h5>Onaga Tenmangu Shrine</h5>
        <p>Onaga Tenmangu Shrine stands at the foot of Mount Futaba, which can be reached by walking north for about 10 minutes from Hiroshima Station's Shinkansen Exit. This Shinto shrine is dedicated to Sugawara no Michizane, a deity of learning and academic pursuits.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007172.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.401217399354216, 132.45872846680183]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/gokoku_jinja.jpg" class="img-fluid mb-2 rounded" alt="Gokoku-jinja">
        <h5>Gokoku-jinja</h5>
        <p>The original shrine was founded in 1869, the first year of the Meiji period, in Futabanosato Hiroshima. The shrine was established to mourn the Hiroshima-Han victims of the Boshin War.</p>
        <a href="https://en.wikipedia.org/wiki/Hiroshima_Gokoku_Shrine" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.39539732421044, 132.47106289955408]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/nittsuji_temple.jpg" class="img-fluid mb-2 rounded" alt="Nittsu-ji Temple">
        <h5>Nittsu-ji Temple</h5>
        <p>Hokke Buddhist temple associated with the lord, built in 1695 at the late-life request of the wife (Toshiie Maeda's grandchild, Jishoin) of Mitsuakira, the second lord of the Asano clan.Hand washbasin containing the crest of an ""ume"" blossom shows the relationship with the Kaga Maeda clan.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007072.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.409293751745956, 132.4706138573158]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/anrakuji_temple.jpg" class="img-fluid mb-2 rounded" alt="Anraku-ji Temple">
        <h5>Anraku-ji Temple</h5>
        <p>Jodo-shin Buddhist temple, converted in 1533 from a Tendai Buddhist temple.It was burned down by fire in 1758, but rebuilt in 1788. The main hall tilts as a result of the atomic bomb's blast wave, but is still in good condition.350-year-old giant ginkgo tree pierces the roof of the temple Gate.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007076.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.403413629453155, 132.4755473383988]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/toshogu_shrine.jpg" class="img-fluid mb-2 rounded" alt="Toshogu Shrine">
        <h5>Toshogu Shrine</h5>
        <p>Established in 1648, the Hiroshima Toshogu Shrine is hard to miss, perched high on a hillside with an extravagant approach. Stone lanterns and stairs lead up towards a large Chinese-style gate and the shrine proper. It’s an incredibly popular shrine, especially for locals celebrating the New Year.</p>
        <a href="https://ichigo.guide/japan/hiroshima/higashi-hiroshima/hiroshima-toshogu-shrine/" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

// Island
L.marker([34.27555556, 132.30777778]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/itsukushima_shrine.JPG" class="img-fluid mb-2 rounded" alt="Itsukushima Shrine">
        <h5>Itsukushima Shrine</h5>
        <p>The shrine is best known for its giant gate floating out in the sea. It was under restoration when i visited, and I couldn't have a good view of it.</p>
        <a href="http://en.wikipedia.org/wiki/Itsukushima_Shrine" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.29611111, 132.31944444]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/cover_hiroshima.jpg" class="img-fluid mb-2 rounded" alt="Itsukushima-jinja">
        <h5>Itsukushima-jinja</h5>
        <p>The Itsukushima shrine is one of Japan's most popular tourist attractions. It is most famous for its dramatic gate, or torii on the outskirts of the shrine, the sacred peaks of Mount Misen, extensive forests, and its ocean view.</p>
        <a href="https://en.wikipedia.org/wiki/Itsukushima_Shrine" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

// Bridges
L.marker([34.396588251268646, 132.45255582652237]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/aioi_bridge.JPG" class="img-fluid mb-2 rounded" alt="Aioi Bridge">
        <h5>Aioi Bridge</h5>
        <p>Shaped like a "T", the Aioi Bridge is easily recognizable from the air, so the original bridge (built in 1932) was chosen as the aiming point for the 1945 Hiroshima atomic bomb.</p>
        <a href="http://en.wikipedia.org/wiki/Aioi_Bridge" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.39416667, 132.47000000]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/kyobashi_bridge.jpg" class="img-fluid mb-2 rounded" alt="Kyobashi Bridge">
        <h5>Kyobashi Bridge</h5>
        <p>Kyobashi Bridge was constructed as a national bridge across the Kyobashi River and completed in August 1927. Steel plates were originally used for the bridge girders, but they were requisitioned by the government during the war.</p>
        <a href="https://www.hiroshima-navi.or.jp/en/post/007216.html" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.39472222, 132.47472222]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/enkobashi_bridge.jpg" class="img-fluid mb-2 rounded" alt="Enkobashi Bridge">
        <h5>Enkobashi Bridge</h5>
        <p>Enkobashi Bridge which was built across the Enko River had been an important bridge on the route connecting Kyoto with Kyushu ever since the Edo Period. The bridge was rebuilt as a permanent bridge in 1926 by the Hiroshima Prefectural government.</p>
        <a href="http://www.hiroshimapeacemedia.jp/?insight=20131107151246524_en-2" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

// Other
L.marker([34.39253176299706, 132.45926348091035]).addTo(map)
    .bindPopup(`<div>
        <h5>Akamatsu Pharmacy</h5>
        <p>Akamatsu Pharmacy is an old drugstore established about 400 years ago. In July 1945, Mr. Akamatsu started his studies at a pharmaceutical college in Gifu Prefecture to become a pharmacist. The next month, the atomic bomb dropped by the United States exploded in the sky above his hometown.</p>
        <a href="http://www.hiroshimapeacemedia.jp/?p=100563" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.38084892673063, 132.4794353300592]).addTo(map)
    .bindPopup(`<div>
        <h5>School of Medicine</h5>
        <p>The School of Medicine shares a common philosophy to cultivate the following personnel in medicine and health sciences: those who acquire a rich sense of humanity and broad knowledge appropriate for practitioners of medicine, health and welfare; basic knowledge, skills and attitude for professional practice; scientific and creative thinking abilities; a deep interest in regional medicine; global awareness.</p>
        <a href="https://www.hiroshima-u.ac.jp/en/med/about/history" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.383019990245195, 132.4731438132888]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/hijiyama-koen.jpg" class="img-fluid mb-2 rounded" alt="Hijiyama-Koen">
        <h5>Hijiyama-Koen</h5>
        <p>Located on the hill of the same name, it welcomes runners, walkers, tourists, families and visitors around its ponds and paths.</p>
        <a href="https://www.japan-experience.com/city-hiroshima/hijiyama-koen" class="text-danger">Read more</a>
    </div>`, { keepInView: true });

L.marker([34.39938945643888, 132.46709127640412]).addTo(map)
    .bindPopup(`<div>
        <img src="./assets/images/map/shukkei-en.jpg" class="img-fluid mb-2 rounded" alt="Shukkei-en">
        <h5>Shukkei-en</h5>
        <p>Water slips over the scales of carp, toddlers play barefoot on the grass, a breeze caresses the trees... In good weather, this garden is truly serene. Yet this green enclave near the Hiroshima Museum of Art was one of the first witnesses to the unspeakable pain of the victims of the bomb. </p>
        <a href="https://www.japan-experience.com/city-hiroshima/hijiyama-koen" class="text-danger">Read more</a>
    </div>`, { keepInView: true });