<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <script src="../assets/js/timeline.js" defer></script>
    <script src="./assets/js/home.js" defer></script>
    <!--<script src="../assets/js/three/FBXLoader.js"></script>
    <script src="../assets/js/three/three.js"></script>
    <script src="../assets/js/three/orbitControl.js"></script>
    <script src="../assets/js/three/inflate.min.js"></script>
    <script src="../assets/js/three/threex.domevent.js"></script>-->
</head>

<body>
    <section>
        <div class="header" id="title">
            <div class="inner-header flex">
                <h1 class="display-3" data-aos="zoom-out" data-aos-duration="1000">Hiroshima Exploration</h1>
                <h2 data-aos="zoom-out" data-aos-duration="1000">ひろしまたんけん</h2>
                <hr class="sm-separator w-25 my-md-5">
                <div class="mx-auto container mt-md-5 row" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-timeline" title="Scroll to the timeline">Timeline</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-map" title="Scroll to the map">Interactive map</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-events" title="Scroll to the events">Events</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-projects" title="Scroll to the projects">Discover differently</button>
                    </div>
                </div>
            </div>

            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>

        <div class="container my-5">
            <p class="lead py-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
        </div>

        <article>
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center">Timeline</h2>
            </div>
            <div class="timeline-carousel" id="timeline">
                <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/before_the_castle.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">Before the castle</span>
                            <span class="month">EARLY HISTORY</span>
                            <p>The first traces of population appeared back in Jomon era, period which last from 1300 to 400 BC. However, there is no evidence of human presence before Kofun Period (250-538).
                            <p>Hirsohima was officialy founded in 1589. The name Hiroshima means literaly "Wide island" in japenese.</p>
                            <p>The area was choosen for it's strategic location on the Ôta delta.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/sengoku.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1477 to 1573</span>
                            <span class="month">SENGOKU PERIOD</span>
                            <p>Sengoku era is full of military conflict. This period is also called "The Province in War Era".</p>
                            <p>This era cover half of the Muromachi age wich is from 1336 to 1573. It's the last period before the dynasty of Tokugawa shogun takes place. It's in this age that the zen culture was born. Buildings were accompanied by those famous dry garden and the tea ceremony raised at this moment. Caractised by harmony, respect, purity and tranquility.</p>
                            <p>It's during the Sengoku Period that the West arrived on the area for exemple a portuguese ship took refuge in Japan to avoid a storm. As a result of trade exchange, cities are developed aroud harbours and internal commercial axes. Japan is also strongly developing its mining operations, mainly of gold and iron, but also its agricultural exploitation. </p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/castle_edo.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1589 to 1871</span>
                            <span class="month">EDO PERIOD</span>
                            <p>In 1589, not so long after the begining of Edo period, Hiroshima Castle was commissioned by Mōri Terumoto, head of the powerful Mōri clan and a member of Toyotomi Hideyoshi's Council of Five Elders. In 1593, the castle was finished, Mōri Terumoto moved in.
                            <p>At this time, Hiroshima did not exist as entire city yet, the are was called Gokamura which means "Five Villages". Despite the change of autority on the castle, Hiroshima was a land of peace until 1869, these years of peace helped the city to grow.</p>
                            <p>During the Meiji Restoration, Hiroshima Castle also named the Carp Castle was saved by the governement and was not one of the numerous castle being dismantled. It's turned into a military base at the end of Edo era.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/imperial_train.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1871 to 1939</span>
                            <span class="month">IMPERIAL PERIOD</span>
                            <p>After the Han system of estates was abolished in 1871, the city of Hiroshima became the capital of Hiroshima Prefecture. In April 1888 a new system of municipality was established. As a consequence of this, Hiroshima officially became one of the most important cities in Japan on April 1, 1889.</p>
                            <p>The San'yō railway was expanded in 1894, this extension was operational in the same year. A railway line was created between the main station and the port to facilitate transportation during the first Sino-Japanese war. During this war, the Japanese government temporarily moved its headquarters to Hiroshima Castle. Emperor Meiji kept his quarters at the castle from September 15, 1894 to April 27, 1895. The first exchanges between Chinese and Japanese representatives took place in Hiroshima from February 1-4, 1895.</p>
                            <p>After the Sino-Japanese War, the Russo-Japanese War pushed Japan into the world of industrialization. During the First World War, Hiroshima became an important point of military activity.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/ww2.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1939 to 1945</span>
                            <span class="month">WORLD WAR II AND THE ATOMIC BOMB</span>
                            <p>On 6 August 1945, the B-29 bomber piloted by Paul Tibbets dropped a 15-kiloton uranium 235 atomic bomb on Hiroshima, destroying 62,000 buildings and killing 70,000 of the 350,000 inhabitants of Hiroshima, the first city in history to suffer this type of bombardment. Radiation-related injuries will bring the death toll to 140,000 in the months and years that follow.</p>
                            <p>According to the National Museum of the City of Hiroshima, the city would have been deliberately spared by the Americans during the conventional bombing to avoid any prior damage, in order to better assess the effects of the atomic bomb. That is why, after the bombing, American study stations were set up in the Hiroshima area to study its effects, as the launch tests that were done until the day of the bombing were only on a small scale.</p>
                            <p>The Japanese wanted to surrender, and the Americans wanted to stop the war because there had been enough massacres. The Americans therefore passed a petition calling for an end to the war, but this petition was intercepted by Leslie Groves, an American general, who saw an economic interest in the use of the nuclear bomb. Since Harry Truman never received this petition, he ordered the bombing of Hiroshima. History will simply say that he used the atomic bomb to force the Japanese surrender.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/after_war.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1945 to nowadays</span>
                            <span class="month">POSTWAR PERIOD</span>
                            <p>After the trauma, a plan to rebuild Hiroshima was launched, notably through the Hiroshima City Peace Memorial Construction Law, passed by the government in 1949, which provided funding for the city's rebirth. In the same year, the Japanese Parliament proclaimed Hiroshima "City of Peace".</p>
                            <p>The Hiroshima Prefectural Trade Promotion Hall, a building located 160 meters from the epicenter and having resisted the blast, becomes the A-Bomb Dome. Around the monument, the Peace Memorial Arch was inaugurated in 1954 and the Memorial Museum in 1955. A victim of war, Hiroshima has since then been the first city to become an ambassador for peace, with its city hall promoting the abolition of nuclear weapons.</p>
                            <p>In November 2010 at the Hiroshima Summit, the Dalai Lama and five other prize winners attended the Nobel Peace Prize Summit. The summit was dedicated to nuclear disarmament and held in Hiroshima. Hiroshima too has changed. The "calcined plain" is now a forward-looking city of 1.2 million inhabitants, as the new Orizuru Tower inaugurated in the summer of 2016. A city resolutely committed to its role as world capital of peace</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="view parallax-map mb-3">
                <h2 class="display-4 text-white text-center">Interactive map</h2>
            </div>
            <div id="map">
                <!-- // Resize auto canvas  // -->
                <canvas class="map" id="canvas-div"></canvas>
                <!-- // ------------------  // -->
            </div>
            <script type="module">
                import * as THREE from '../assets/js/three/three.module.js';
                import {
                    OrbitControls
                } from '../assets/js/copy_threejs/jsm/controls/OrbitControls.js';
                import {
                    FBXLoader
                } from '../assets/js/copy_threejs/jsm/loaders/FBXLoader.js';

                let container, stats;
                let camera, scene, raycaster, renderer;

                let INTERSECTED;
                let theta = 0;

                const mouse = new THREE.Vector2();
                const radius = 100;

                console.log("import 1");
                scene = new THREE.Scene();
                // SCENE FOND BLANC //
                scene.background = new THREE.Color(0xFFFFFFF);
                // _--------------_ //

                camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

                // Resize auto canvas  // 
                const canvas = document.querySelector('#canvas-div');
                renderer = new THREE.WebGLRenderer({
                    canvas
                });
                // -----------------  //

                // PAS DE PIXELISATION //
                renderer.setPixelRatio(window.devicePixelRatio);
                // ------------------- //

                renderer.setSize(innerWidth, innerHeight);

                // AJOUT DE LUMIERE AMBIANTE  //
                const light = new THREE.AmbientLight(0x404040); // soft white light
                scene.add(light);
                // -------------------------- //

                // FBX LOADING  //
                /*const loader = new FBXLoader();
                loader.load(
                    '../assets/fbx/Temple.fbx',
                    (object) => {
                        // object.traverse(function (child) {
                        //     if ((<THREE.Mesh>child).isMesh) {
                        //         (<THREE.Mesh>child).material = material
                        //         if ((<THREE.Mesh>child).material) {
                        //             ((<THREE.Mesh>child).material as THREE.MeshBasicMaterial).transparent = false
                        //         }
                        //     }
                        // })
                        //object.scale.set(.01, .01, .01)
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )*/
                const loader = new FBXLoader();
                loader.load('../assets/fbx/Temple.fbx', function(object) {

                    let mixer = new THREE.AnimationMixer(object);

                    const action = mixer.clipAction(object.animations[0]);
                    action.play();

                    object.traverse(function(child) {

                        if (child.isMesh) {

                            child.castShadow = true;
                            child.receiveShadow = true;

                        }


                    });

                    scene.add(object);

                });
                // ------------------------  //

                const geometry = new THREE.BoxGeometry();
                const material = new THREE.MeshBasicMaterial({
                    color: 0x00ff00,
                    wireframe: true,
                });
                const cube = new THREE.Mesh(geometry, material);
                scene.add(cube);

                camera.position.z = 5;
                const controls = new OrbitControls(camera, renderer.domElement);
                /*const domevent = new THREEx.DomEvents(camera, renderer.domElement);

                let cubeClciked = false;
                domevent.addEventListener(cube, 'click', event => {
                    if (cubeClciked) {
                        material.wireframe = false;
                        cubeClciked = false;
                    } else {
                        material.wireframe = true;
                        cubeClciked = true;
                    }
                });*/

                //RAYCASTER ----//
                raycaster = new THREE.Raycaster();
                //--------------//


                document.addEventListener('mousemove', onDocumentMouseMove);
                document.addEventListener('click', onmouseClick);

                function onDocumentMouseMove(event) {

                    event.preventDefault();

                    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

                }

                function onmouseClick(event) {

                    event.preventDefault();

                    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

                    raycaster.setFromCamera(mouse, camera);
                    var intersects = raycaster.intersectObjects(scene.children, true);
                    if (intersects.length > 0) {
                        console.log('Intersection:', intersects[0]);
                    }

                }

                const animate = function() {
                    requestAnimationFrame(animate);

                    cube.rotation.x += 0.01;
                    cube.rotation.y += 0.01;

                    //controls.update();


                    //render();

                    renderer.render(scene, camera);
                };

                function render() {


                    // find intersections

                    raycaster.setFromCamera(mouse, camera);

                    var intersects = raycaster.intersectObjects(scene.children, true);
                    if (intersects.length > 0) {
                        console.log('Intersection:', intersects[0]);
                        if (INTERSECTED != intersects[0].object) {

                            //if (INTERSECTED) INTERSECTED.material.emissive.setHex(INTERSECTED.currentHex);

                            INTERSECTED = intersects[0].object;
                            //INTERSECTED.currentHex = INTERSECTED.material.emissive.getHex();
                            //INTERSECTED.material.emissive.setHex(0xff0000);

                        }

                    } else {

                        //if (INTERSECTED) INTERSECTED.material.emissive.setHex(INTERSECTED.currentHex);

                        INTERSECTED = null;

                    }

                    renderer.render(scene, camera);

                }

                animate();
            </script>

            <!-- <script type="module">
                import * as THREE from '../assets/js/three/three.module.js';

                //import Stats from './jsm/libs/stats.module.js';

                let container, stats;
                let camera, scene, raycaster, renderer;

                let INTERSECTED;
                let theta = 0;

                const mouse = new THREE.Vector2();
                const radius = 100;

                init();
                animate();

                function init() {

                    container = document.createElement('div');
                    document.getElementById("map").appendChild(container);

                    camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 1, 10000);

                    scene = new THREE.Scene();
                    scene.background = new THREE.Color(0xf0f0f0);

                    const light = new THREE.DirectionalLight(0xffffff, 1);
                    light.position.set(1, 1, 1).normalize();
                    scene.add(light);

                    const geometry = new THREE.BoxGeometry(20, 20, 20);

                    for (let i = 0; i < 2000; i++) {

                        const object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({
                            color: Math.random() * 0xffffff
                        }));

                        object.position.x = Math.random() * 800 - 400;
                        object.position.y = Math.random() * 800 - 400;
                        object.position.z = Math.random() * 800 - 400;

                        object.rotation.x = Math.random() * 2 * Math.PI;
                        object.rotation.y = Math.random() * 2 * Math.PI;
                        object.rotation.z = Math.random() * 2 * Math.PI;

                        object.scale.x = Math.random() + 0.5;
                        object.scale.y = Math.random() + 0.5;
                        object.scale.z = Math.random() + 0.5;

                        scene.add(object);

                    }

                    raycaster = new THREE.Raycaster();

                    renderer = new THREE.WebGLRenderer();
                    renderer.setPixelRatio(window.devicePixelRatio);
                    renderer.setSize(window.innerWidth, window.innerHeight);
                    container.appendChild(renderer.domElement);

                    //stats = new Stats();
                    //container.appendChild(stats.dom);

                    document.addEventListener('mousemove', onDocumentMouseMove);

                    //

                    window.addEventListener('resize', onWindowResize);

                }

                function onWindowResize() {

                    camera.aspect = window.innerWidth / window.innerHeight;
                    camera.updateProjectionMatrix();

                    renderer.setSize(window.innerWidth, window.innerHeight);

                }

                function onDocumentMouseMove(event) {

                    event.preventDefault();

                    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

                }

                //

                function animate() {

                    requestAnimationFrame(animate);

                    render();
                    //stats.update();

                }

                function render() {

                    theta += 0.1;

                    camera.position.x = radius * Math.sin(THREE.MathUtils.degToRad(theta));
                    camera.position.y = radius * Math.sin(THREE.MathUtils.degToRad(theta));
                    camera.position.z = radius * Math.cos(THREE.MathUtils.degToRad(theta));
                    camera.lookAt(scene.position);

                    camera.updateMatrixWorld();

                    // find intersections

                    raycaster.setFromCamera(mouse, camera);

                    const intersects = raycaster.intersectObjects(scene.children);

                    if (intersects.length > 0) {

                        if (INTERSECTED != intersects[0].object) {

                            if (INTERSECTED) INTERSECTED.material.emissive.setHex(INTERSECTED.currentHex);

                            INTERSECTED = intersects[0].object;
                            INTERSECTED.currentHex = INTERSECTED.material.emissive.getHex();
                            INTERSECTED.material.emissive.setHex(0xff0000);

                        }

                    } else {

                        if (INTERSECTED) INTERSECTED.material.emissive.setHex(INTERSECTED.currentHex);

                        INTERSECTED = null;

                    }

                    renderer.render(scene, camera);

                }
            </script>
       -->
        </article>

        <article class="my-5" id="events">
            <div class="view parallax-events mb-3">
                <h2 class="display-4 text-white text-center">Events</h2>
            </div>
            <div class="container row mx-auto">
                <div class="card text-white col-md-8 border-0 my-3">
                    <!-- data-aos="fade-up" -->
                    <img src="../assets/images/cover_events.jpg" class="card-img rounded-0" alt="AR project image">
                    <div class="card-img-overlay ml-4">
                        <!-- data-aos="fade-right" -->
                        <a href="https://www.h-saigoku.town/chaya-bar/" class="btn btn-danger rounded-0 stretched-link" title="Learn more">Events</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="my-5" id="projects">
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center">Discover differently</h2>
            </div>
            <div class="container row mx-auto">
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <!-- data-aos="zoom-in" -->
                    <img src="../assets/images/cover_ar.jpg" class="card-img rounded-0" alt="AR project image">
                    <div class="card-img-overlay ml-4">
                        <a href="/projects/ar-project" class="btn btn-danger rounded-0 stretched-link" title="AR project">AR project</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <!-- data-aos="zoom-in" -->
                    <img src="../assets/images/cover_vr.jpg" class="card-img rounded-0" alt="VR project image">
                    <div class="card-img-overlay mr-4 text-right">
                        <a href="/projects/vr-project" class="btn btn-danger rounded-0 stretched-link" title="VR project">VR project</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <!-- data-aos="zoom-in" -->
                    <img src="../assets/images/cover_web.jpg" class="card-img rounded-0" alt="Web project image">
                    <div class="card-img-overlay mr-4 text-center">
                        <a href="/projects/web-project" class="btn btn-danger rounded-0 stretched-link" title="Web project">Web project</a>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="/team" class="btn btn-danger rounded-0 p-3" title="Go to the team"><i class="fas fa-users"></i> See the project team</a>
            </div>
        </article>

        <div class="my-3 text-center">
            <button class="btn btn-danger btn-rotate rounded-0" id="scroll-title" title="Scroll to the title"><i class="fas fa-arrow-up"></i></button>
        </div>
    </section>

    <?php include(__DIR__ . "/footer.inc.php"); ?>
</body>

</html>