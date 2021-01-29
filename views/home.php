<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <script src="../assets/js/timeline.js" defer></script>
    <script src="./assets/js/home.js" defer></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r125/three.js" integrity="sha512-1k30ak5bRjdWRjgzWKvGH36UXuWxLsw0QzoXdghXbgVu2Ur71UdLDPpwPcUPiLwvkZBJF/daLxkIH/idYW7UAg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://rawgit.com/mrdoob/three.js/master/examples/js/controls/OrbitControls.js"></script>
    <script src="../assets/js/three/FBXLoader.js"></script>
    <script src="../assets/js/three/inflate.min.js"></script>
    <script src="./assets/js/map.js" defer></script> -->
   <!-- <script src="../assets/js/three/three.js"></script>
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

            <!-- à garder very important
             <script id="vertexShader" type="x-shader/x-vertex">
                varying vec3 vNormal;
                void main() 
                {
                    vNormal = normalize( normalMatrix * normal );
                    gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
                }
            </script>
            <script id="fragmentShader" type="x-shader/x-vertex"> 
                varying vec3 vNormal;
                void main() 
                {
                    float intensity = pow( 0.7 - dot( vNormal, vec3( 0.0, 0.0, 1.0 ) ), 4.0 ); 
                    gl_FragColor = vec4( 1.0, 1.0, 0.0, 0.1 ) * intensity;
                }
            </script> -->
            <!-- <script src="./assets/js/map.js"></script> -->
            <script type="module">
                import * as THREE from '../assets/js/three/three.module.js';
                import {
                    OrbitControls
                } from '../assets/js/copy_threejs/jsm/controls/OrbitControls.js';
                import {
                    FBXLoader
                } from '../assets/js/copy_threejs/jsm/loaders/FBXLoader.js';
                import {
                    SVGLoader
                } from '../assets/js/copy_threejs/jsm/loaders/SVGLoader.js';

                


                let container, stats;
                let camera, scene, raycaster, renderer;

                let INTERSECTED;
                let theta = 0;
                let templeT,templeTPanel;
                let templeS,templeSPanel;
                let bridgeE,bridgeEPanel;
                let bridgeK,bridgeKPanel;
                let university,universityPanel;
                let parc,parcPanel;
                let pharmacy,pharmacyPanel;
                let map;
                let templePanel;
                let objectOVERED,objectSELECTED;
                const mouse = new THREE.Vector2();
                const radius = 100;

                scene = new THREE.Scene();
                // SCENE FOND BLANC //
                scene.background = new THREE.Color(0xFEFEFE);
                // _--------------_ //

                camera = new THREE.PerspectiveCamera(90, window.innerWidth / window.innerHeight, 0.1, 5000);
                camera.far = 500;
                camera.layers.enable(1);

                camera.position.x = 270;
                camera.position.y = 100;
                camera.position.z = 560;
                // Resize auto canvas  // 
                const canvas = document.querySelector('#canvas-div');
                renderer = new THREE.WebGLRenderer({
                    canvas
                });
                // -----------------  //

                // PAS DE PIXELISATION //
                renderer.setPixelRatio(window.devicePixelRatio);
                // ------------------- //

                renderer.setSize(innerWidth-50, innerHeight-50);

                // AJOUT DE LUMIERE AMBIANTE  //
                const light = new THREE.AmbientLight(0xFFFFFF,0.5); // soft white light
                scene.add(light);
                
                const lightt = new THREE.DirectionalLight(0xFF0000,0.3); // soft white light
                lightt.position.set(0, 150, 0);
                scene.add(lightt);
                const lightWhite = new THREE.DirectionalLight(0xFFFFFF,0.9); // soft white light
                lightWhite.position.set(0, 150, 0);
                scene.add(lightWhite);
                //spotlight over
                let spotLight = new THREE.SpotLight(0xFFFF00,0,500, Math.PI / 8);  // <============
                spotLight.position.set(0, 50, 0);
                spotLight.target.position.set(0, 0, 0);
                scene.add(spotLight);
                // -------------------------- //


                // SHADER GLOW A GARDER
                // var customMaterial = new THREE.ShaderMaterial( 
                // {
                //     uniforms: {  },
                //     vertexShader:   document.getElementById( 'vertexShader').textContent,
                //     fragmentShader: document.getElementById( 'fragmentShader').textContent,
                //     side: THREE.BackSide,
                //     blending: THREE.AdditiveBlending,
                //     transparent: true
                // }   );
                    
               
                // FBX LOADING  //
                const loader = new FBXLoader();

                const geometryBOX = new THREE.BoxGeometry( 50, 150, 50);
                const materialBOX = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0});
                //MAP
                loader.load(
                    '../assets/fbx/map.FBX',
                    (object) => {
                        object.scale.set(.005, .005, .005)
                        object.position.set(4,-0.5,-2)
                        object.updateMatrix();
                        map=object;
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )

                //BRIDGE ENKO
                loader.load(
                    '../assets/fbx/bridge.FBX',
                    (object) => {
                        bridgeE = object;
                        object.scale.set(.25, .25, .25)
                        object.position.set(-115,0,-475)   
                        object.rotateY(1.9024070747627)
                        bridgeEPanel = createPanel('Enko Bridge', 'This is a bridge', bridgeE.position.x + 50, bridgeE.position.y + 60, bridgeE.position.z + 0, 5,2);
                        bridgeEPanel.visible = false;
                        scene.add(bridgeEPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                // const geometry = new THREE.BoxGeometry( 50, 100, 50);
                // const material = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0.8});
                const bridgeEBOX = new THREE.Mesh( geometryBOX, materialBOX );
                bridgeEBOX.position.set(-115,0,-465);
                scene.add( bridgeEBOX );

                    //BRIDGE KYOBA
                    loader.load(
                    '../assets/fbx/bridge.FBX',
                    (object) => {
                        bridgeK = object;
                        object.scale.set(.25, .25, .25);
                        object.position.set(-400,0,-360);
                        object.rotateY(1.39626)
                        bridgeKPanel = createPanel('Kyoba Bridge', 'This is a bridge', bridgeK.position.x + 50, bridgeK.position.y + 60, bridgeK.position.z + 0, 4,2);
                        bridgeKPanel.visible = false;
                        scene.add(bridgeKPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                // const geometry = new THREE.BoxGeometry( 50, 100, 50);
                // const material = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0.8});
                const bridgeKBOX = new THREE.Mesh( geometryBOX, materialBOX );
                bridgeKBOX.position.set(-400,0,-350);
                scene.add( bridgeKBOX );

                //PARK                
            
                const parcBOX = new THREE.Mesh( geometryBOX, materialBOX );
                loader.load(
                    '../assets/fbx/parc.fbx',
                    (object) => {
                        parc = object;
                        object.scale.set(.20, .20, .20);
                        object.position.set(-445,9,-270);                  
                        parcBOX.position.set(-445,9,-300);
                        scene.add( parcBOX );
                        object.rotateY(1.515)
                        parcPanel = createPanel('Shrine Park', 'This is a park', parcBOX.position.x + 50, parcBOX.position.y + 60, parcBOX.position.z + 0, 5,2);
                        parcPanel.visible = false;
                        scene.add(parcPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                // const geometry = new THREE.BoxGeometry( 50, 100, 50);
                // const material = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0.8});


                //PHARMACY
                const pharmacyBOX = new THREE.Mesh( geometryBOX, materialBOX );
                loader.load(
                    '../assets/fbx/pharmacy.fbx',
                    (object) => {
                        pharmacy = object;
                        object.scale.set(.25, .25, .25);
                        object.position.set(-940,-12,-350);  
                        object.rotateY(-0.212)
                        pharmacyBOX.position.set(-990,-12,-340);  
                        scene.add( pharmacyBOX );
                        pharmacyPanel = createPanel('Pharmacy', 'This is a pharmacy', pharmacyBOX.position.x + 50, pharmacyBOX.position.y + 60, pharmacyBOX.position.z + 0, 5,2);
                        pharmacyPanel.visible = false;
                        scene.add(pharmacyPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )

                //TEMPLE TOKUEJi
                loader.load(
                    '../assets/fbx/Temples.fbx',
                    (object) => {
                        templeT=object;
                        object.scale.set(.25, .25, .25);
                        object.position.set(-545,0,-230) ;
                        templeTPanel = createPanel('Tokueji Temple', "This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever.", templeT.position.x + 50, templeT.position.y + 60, templeT.position.z + 0, 4.5,2);
                        templeTPanel.visible = false;
                        scene.add(templeTPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                // const geometry = new THREE.BoxGeometry( 50, 100, 50);
                // const material = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0});
                const templeTBOX = new THREE.Mesh( geometryBOX, materialBOX );
                templeTBOX.position.set(-545,0,-230);
                scene.add( templeTBOX );


                    //TEMPLE SHOKOJI
                    loader.load(
                    '../assets/fbx/Temples.fbx',
                    (object) => {
                        templeS=object;
                        object.scale.set(.25, .25, .25);
                        object.position.set(-580,0,-495);
                        templeSPanel = createPanel('Shokoji Temple', 'The temple of Shokoji has an ancient history - the original dates are not known, but it is known that the temple predates the city itself. In fact, the temple provided lodging to lord Mori Terumoto in 1589 while he was surveying the site that would eventually become Hiroshima Castle. Although some stories suggest that the leader of the famous 47 Ronin - Oishi - is buried here, this is somewhat an exaggeration. In actual fact, one of the retainers took a lock of Oishi’s hair and bought it to Hiroshima for burial. It was first taken to the nearby Kokuzenji Temple - as that was the family temple of the Asano lord that the ronin had avenged - however it was turned away. Instead, the hair was buried at Shokoji. The Shokoji Temple is one of the stops on the Futabanosato Historical Walking Trail.', templeS.position.x + 50, templeS.position.y + 60, templeS.position.z + 0, 5,2);
                        templeSPanel.visible = false;
                        scene.add(templeSPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                // const geometry = new THREE.BoxGeometry( 50, 100, 50);
                // const material = new THREE.MeshBasicMaterial({color:0xff0000, transparent:true, opacity:0});
                const templeSBOX = new THREE.Mesh( geometryBOX, materialBOX );
                templeSBOX.position.set(-580,0,-495);
                scene.add( templeSBOX );
                ///
                //UNIVERSITY
                loader.load(
                    '../assets/fbx/university.FBX',
                    (object) => {
                        university=object;
                        object.scale.set(.30, .30, .30);
                        object.position.set(170,0,395); 
                        object.layers.set(2);
                        object.rotateY(0.34)
                        universityPanel = createPanel('Medecine SCHOOL', 'This is an university', university.position.x + 50, university.position.y + 60, university.position.z + 0, 5,2);
                        universityPanel.visible = false;
                        scene.add(universityPanel)
                        object.updateMatrix();
                        scene.add(object);
                    },
                    (xhr) => {
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded')
                    },
                    (error) => {
                        console.log(error);
                    }
                )
                
                const universityBOX = new THREE.Mesh( geometryBOX, materialBOX );
                universityBOX.position.set(215,0,455); 
                scene.add( universityBOX );
                // const skeleton = new THREE.SkeletonHelper( university );
                // skeleton.visible = true;
                // scene.add( skeleton );
               // ------------------------  //

               
                const controls = new OrbitControls(camera, renderer.domElement);

				controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
				controls.dampingFactor = 0.35;

				controls.screenSpacePanning = false;

				controls.minDistance = 100;
				controls.maxDistance = 500;

				controls.maxPolarAngle = Math.PI / 2;
                //RAYCASTER ----//
                raycaster = new THREE.Raycaster();
                //--------------//


                document.addEventListener('mousemove', onDocumentMouseMove);
                document.addEventListener('click', onmouseClick);
                window.addEventListener( 'resize', onWindowResize );

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
                        objectSELECTED = intersects[0].object;
                        if(map !== objectSELECTED){
                            if(templeSBOX === objectSELECTED){
                                templeSPanel.visible = true;
                            } 
                            else if (templeTBOX === objectSELECTED){
                                templeTPanel.visible = true;
                            }
                            else if (bridgeEBOX === objectSELECTED){
                                bridgeEPanel.visible = true;
                            }
                            else if (bridgeKBOX === objectSELECTED){
                                bridgeKPanel.visible = true;
                            }
                            else if (universityBOX === objectSELECTED){
                                universityPanel.visible = true;
                            }
                            else if (pharmacyBOX === objectSELECTED){
                                pharmacyPanel.visible = true;
                            }
                            else if (parcBOX === objectSELECTED){
                                parcPanel.visible = true;
                            } else {
                                templeSPanel.visible = false;
                                templeTPanel.visible = false;
                                bridgeEPanel.visible = false;
                                bridgeKPanel.visible = false;
                                universityPanel.visible = false;
                                pharmacyPanel.visible = false;
                                parcPanel.visible = false;
                            }
                        } else {
                            templeSPanel.visible = false;
                            templeTPanel.visible = false;
                            bridgeEPanel.visible = false;
                            bridgeKPanel.visible = false;
                            universityPanel.visible = false;
                            pharmacyPanel.visible = false;
                            parcPanel.visible = false;
                        }
                    } else {
                            templeSPanel.visible = false;
                            templeTPanel.visible = false;
                            bridgeEPanel.visible = false;
                            bridgeKPanel.visible = false;
                            universityPanel.visible = false;
                            pharmacyPanel.visible = false;
                            parcPanel.visible = false;
                    }

                }
             

                const animate = function() {
                    requestAnimationFrame(animate);
                    update();
                    render();
                };

                function onWindowResize() {

                    camera.aspect = window.innerWidth / window.innerHeight;
                    camera.updateProjectionMatrix();

                    renderer.setSize( window.innerWidth, window.innerHeight );

                }
                function update(){

                    // find intersections

                    raycaster.setFromCamera(mouse, camera);

                    var intersects = raycaster.intersectObjects(scene.children, true);

                    if (intersects.length > 0) {
                        objectOVERED = intersects[0].object;

                        if(universityBOX == intersects[0].object || universityBOX == intersects[0].object.parent
                        || templeSBOX == intersects[0].object || templeSBOX == intersects[0].object.parent
                        || templeTBOX == intersects[0].object || templeTBOX == intersects[0].object.parent
                        || pharmacyBOX == intersects[0].object || pharmacyBOX == intersects[0].object.parent
                        || parcBOX == intersects[0].object || parcBOX == intersects[0].object.parent
                        || bridgeEBOX == intersects[0].object || bridgeEBOX == intersects[0].object.parent
                        || bridgeKBOX == intersects[0].object || bridgeKBOX == intersects[0].object.parent  ){
                            spotLight.position.set(objectOVERED.position.x, 75,objectOVERED.position.z)
                            spotLight.target.position.set(objectOVERED.position.x, objectOVERED.position.y, objectOVERED.position.z)
                            spotLight.intensity = 7;
                            spotLight.target.updateMatrixWorld();
                        } else {
                            spotLight.intensity = 0;
                        }

                    } else {
                        spotLight.intensity = 0;
                    }
                }
                function render() {
                    renderer.render(scene, camera);
                }

                function createPanel(titre, description, x_panel, y_panel, z_panel, text_size,description_size) {
                    const groupObject = new THREE.Group();
                    //PANEL
                    const geometry = new THREE.BoxGeometry(50, 60, 0.2);
                    const material = new THREE.MeshBasicMaterial({
                        color: 0xDCDCDC,
                        opacity: 0.7,
                    });
                    const cube = new THREE.Mesh(geometry, material);
                    cube.position.x = x_panel; //-250;
                    cube.position.z = z_panel; //99;
                    cube.position.y = y_panel; //0
                    groupObject.add(cube);
                    //FONT PANEL
                    const fontloader = new THREE.FontLoader();
                    fontloader.load('../assets/fonts/Roboto_Regular.json', function(font) {

                        const color = new THREE.Color(0x000000);

                        const matDark = new THREE.MeshBasicMaterial({
                            color: color,
                            side: THREE.DoubleSide
                        });

                        const matLite = new THREE.MeshBasicMaterial({
                            color: color,
                            transparent: true,
                            opacity: 1,
                            side: THREE.DoubleSide
                        });

                        const message = titre;

                        //15 = taille texte
                        const shapes = font.generateShapes(message, text_size);

                        const geometry = new THREE.ShapeGeometry(shapes);

                        geometry.computeBoundingBox();

                        const xMid = -0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);

                        geometry.translate(xMid, 0, 0);

                        // make shape ( N.B. edge view not visible )

                        //Position du texte 
                        const title = new THREE.Mesh(geometry, matLite);
                        title.position.z = z_panel + 1; //100;
                        title.position.x = x_panel ; //-310;
                        title.position.y = y_panel + 20; //120;
                        groupObject.add(title);

                    });


                    //Font description

                    fontloader.load('../assets/fonts/Roboto_Regular.json', function(font) {

                        const color = new THREE.Color(0x000000);

                        const matDark = new THREE.MeshBasicMaterial({
                            color: color,
                            side: THREE.DoubleSide
                        });

                        const matLite = new THREE.MeshBasicMaterial({
                            color: color,
                            transparent: true,
                            opacity: 1,
                            side: THREE.DoubleSide
                        });

                        function formatDescription(description) {
                            for(let i=0;i<description.length;i=i+1){
                                if(i%30==0){
                                    description = [description.slice(0, i), "\n", description.slice(i)].join('');
                                }
                            }
                            return description;
                        }
                        const message = formatDescription(description);
                        console.log(message);

                        //10 = taille texte
                        const shapes = font.generateShapes(message, description_size);

                        const geometry = new THREE.ShapeGeometry(shapes);

                        geometry.computeBoundingBox();

                        const xMid = -0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);

                        geometry.translate(xMid, 0, 0);

                        // make shape ( N.B. edge view not visible )

                        //Position du texte 
                        const descri = new THREE.Mesh(geometry, matLite);
                        descri.position.z = z_panel + 1; //100;
                        descri.position.x = x_panel; //-260;
                        descri.position.y = y_panel + 15; //90;
                        groupObject.add(descri);

                    });

                        return groupObject;
                        }

                animate();
            </script>
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