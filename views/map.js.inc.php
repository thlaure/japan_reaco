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
    let templeT, templeTPanel;
    let templeS, templeSPanel;
    let bridgeE, bridgeEPanel;
    let bridgeK, bridgeKPanel;
    let university, universityPanel;
    let parc, parcPanel;
    let pharmacy, pharmacyPanel;
    let map;
    let templePanel;
    let objectOVERED, objectSELECTED;
    const mouse = new THREE.Vector2();
    const radius = 100;
    scene = new THREE.Scene();
    // SCENE FOND BLANC
    scene.background = new THREE.Color(0xFEFEFE);
    camera = new THREE.PerspectiveCamera(90, window.innerWidth / window.innerHeight, 0.1, 5000);
    camera.far = 500;
    camera.layers.enable(1);
    camera.position.x = 270;
    camera.position.y = 100;
    camera.position.z = 560;
    // Resize auto canvas
    const canvas = document.querySelector('#canvas-div');
    renderer = new THREE.WebGLRenderer({
        canvas
    });

    // No pixelisation
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(innerWidth - 50, innerHeight - 50);
    // Adding ambiant light
    const light = new THREE.AmbientLight(0xFFFFFF, 0.5); // soft white light
    scene.add(light);
    const lightt = new THREE.DirectionalLight(0xbc032c, 0.3); // soft white light
    lightt.position.set(0, 150, 0);
    scene.add(lightt);
    const lightWhite = new THREE.DirectionalLight(0xFFFFFF, 0.9); // soft white light
    lightWhite.position.set(0, 150, 0);
    scene.add(lightWhite);
    // spotlight over
    let spotLight = new THREE.SpotLight(0xFFFF00, 0, 500, Math.PI / 8);
    spotLight.position.set(0, 50, 0);
    spotLight.target.position.set(0, 0, 0);
    scene.add(spotLight);
    // FBX LOADING
    const loader = new FBXLoader();
    const geometryBOX = new THREE.BoxGeometry( 50, 150, 50);
    const materialBOX = new THREE.MeshBasicMaterial({ color: 0xff0000, transparent: true, opacity: 0 });
    // MAP
    loader.load(
        '../assets/fbx/map.fbx',
        (object) => {
            object.scale.set(.005, .005, .005);
            object.position.set(4, -0.5, -2);
            object.updateMatrix();
            map = object;
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    // BRIDGE ENKO
    loader.load(
        '../assets/fbx/bridge.FBX',
        (object) => {
            bridgeE = object;
            object.scale.set(.25, .25, .25);
            object.position.set(-115,0,-475);
            object.rotateY(1.9024070747627);
            bridgeEPanel = createPanel('Enko Bridge', 'This is a bridge', bridgeE.position.x + 50, bridgeE.position.y + 60, bridgeE.position.z + 0, 5, 2);
            bridgeEPanel.visible = false;
            scene.add(bridgeEPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    const bridgeEBOX = new THREE.Mesh(geometryBOX, materialBOX);
    bridgeEBOX.position.set(-115, 0, -465);
    scene.add(bridgeEBOX);
    // BRIDGE KYOBA
    loader.load(
        '../assets/fbx/bridge.FBX',
        (object) => {
            bridgeK = object;
            object.scale.set(.25, .25, .25);
            object.position.set(-400, 0, -360);
            object.rotateY(1.39626);
            bridgeKPanel = createPanel('Kyoba Bridge', 'This is a bridge', bridgeK.position.x + 50, bridgeK.position.y + 60, bridgeK.position.z + 0, 4, 2);
            bridgeKPanel.visible = false;
            scene.add(bridgeKPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )
    const bridgeKBOX = new THREE.Mesh(geometryBOX, materialBOX);
    bridgeKBOX.position.set(-400, 0, -350);
    scene.add(bridgeKBOX);

    // PARK
    const parcBOX = new THREE.Mesh( geometryBOX, materialBOX );
    loader.load(
        '../assets/fbx/parc.fbx',
        (object) => {
            parc = object;
            object.scale.set(.20, .20, .20);
            object.position.set(-445, 9, -270);
            parcBOX.position.set(-445, 9, -300);
            scene.add(parcBOX);
            object.rotateY(1.515);
            parcPanel = createPanel('Shrine Park', 'This is a park', parcBOX.position.x + 50, parcBOX.position.y + 60, parcBOX.position.z + 0, 5, 2);
            parcPanel.visible = false;
            scene.add(parcPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    // PHARMACY
    const pharmacyBOX = new THREE.Mesh( geometryBOX, materialBOX );
    loader.load(
        '../assets/fbx/pharmacy.fbx',
        (object) => {
            pharmacy = object;
            object.scale.set(.25, .25, .25);
            object.position.set(-940, -12, -350);
            object.rotateY(-0.212)
            pharmacyBOX.position.set(-990, -12, -340);
            scene.add( pharmacyBOX );
            pharmacyPanel = createPanel('Pharmacy', 'This is a pharmacy', pharmacyBOX.position.x + 50, pharmacyBOX.position.y + 60, pharmacyBOX.position.z + 0, 5, 2);
            pharmacyPanel.visible = false;
            scene.add(pharmacyPanel);
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

    // TEMPLE TOKUEJi
    loader.load(
        '../assets/fbx/Temples.fbx',
        (object) => {
            templeT=object;
            object.scale.set(.25, .25, .25);
            object.position.set(-545, 0, -230);
            templeTPanel = createPanel('Tokueji Temple', "This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever.", templeT.position.x + 50, templeT.position.y + 60, templeT.position.z + 0, 4.5, 2);
            templeTPanel.visible = false;
            scene.add(templeTPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    const templeTBOX = new THREE.Mesh(geometryBOX, materialBOX);
    templeTBOX.position.set(-545,0,-230);
    scene.add(templeTBOX);
    // TEMPLE SHOKOJI
    loader.load(
        '../assets/fbx/Temples.fbx',
        (object) => {
            templeS=object;
            object.scale.set(.25, .25, .25);
            object.position.set(-580,0,-495);
            templeSPanel = createPanel('Shokoji Temple', 'The temple of Shokoji has an ancient history - the original dates are not known, but it is known that the temple predates the city itself. In fact, the temple provided lodging to lord Mori Terumoto in 1589 while he was surveying the site that would eventually become Hiroshima Castle. Although some stories suggest that the leader of the famous 47 Ronin - Oishi - is buried here, this is somewhat an exaggeration. In actual fact, one of the retainers took a lock of Oishi’s hair and bought it to Hiroshima for burial. It was first taken to the nearby Kokuzenji Temple - as that was the family temple of the Asano lord that the ronin had avenged - however it was turned away. Instead, the hair was buried at Shokoji. The Shokoji Temple is one of the stops on the Futabanosato Historical Walking Trail.', templeS.position.x + 50, templeS.position.y + 60, templeS.position.z + 0, 5,2);
            templeSPanel.visible = false;
            scene.add(templeSPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    const templeSBOX = new THREE.Mesh(geometryBOX, materialBOX);
    templeSBOX.position.set(-580, 0, -495);
    scene.add(templeSBOX);
    // UNIVERSITY
    loader.load(
        '../assets/fbx/university.FBX',
        (object) => {
            university=object;
            object.scale.set(.30, .30, .30);
            object.position.set(170, 0, 395);
            object.layers.set(2);
            object.rotateY(0.34);
            universityPanel = createPanel('Medecine SCHOOL', 'This is an university', university.position.x + 50, university.position.y + 60, university.position.z + 0, 5, 2);
            universityPanel.visible = false;
            scene.add(universityPanel);
            object.updateMatrix();
            scene.add(object);
        },
        (xhr) => {
            // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        (error) => {
            console.log(error);
        }
    )

    const universityBOX = new THREE.Mesh(geometryBOX, materialBOX);
    universityBOX.position.set(215, 0, 455);
    scene.add(universityBOX);
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
    controls.dampingFactor = 0.35;
    controls.screenSpacePanning = false;
    controls.minDistance = 100;
    controls.maxDistance = 500;
    controls.maxPolarAngle = Math.PI / 2;
    // RAYCASTER
    raycaster = new THREE.Raycaster();
    document.addEventListener('mousemove', onDocumentMouseMove);
    document.addEventListener('click', onmouseClick);
    window.addEventListener('resize', onWindowResize);

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
            if (map !== objectSELECTED) {
                if (templeSBOX === objectSELECTED) {
                    templeSPanel.visible = true;
                } else if (templeTBOX === objectSELECTED) {
                    templeTPanel.visible = true;
                } else if (bridgeEBOX === objectSELECTED) {
                    bridgeEPanel.visible = true;
                } else if (bridgeKBOX === objectSELECTED) {
                    bridgeKPanel.visible = true;
                } else if (universityBOX === objectSELECTED) {
                    universityPanel.visible = true;
                } else if (pharmacyBOX === objectSELECTED) {
                    pharmacyPanel.visible = true;
                } else if (parcBOX === objectSELECTED) {
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
        renderer.setSize(window.innerWidth, window.innerHeight);
    }

    function update() {
        // Find intersections
        raycaster.setFromCamera(mouse, camera);
        var intersects = raycaster.intersectObjects(scene.children, true);
        if (intersects.length > 0) {
            objectOVERED = intersects[0].object;
            if (universityBOX == intersects[0].object || universityBOX == intersects[0].object.parent
            || templeSBOX == intersects[0].object || templeSBOX == intersects[0].object.parent
            || templeTBOX == intersects[0].object || templeTBOX == intersects[0].object.parent
            || pharmacyBOX == intersects[0].object || pharmacyBOX == intersects[0].object.parent
            || parcBOX == intersects[0].object || parcBOX == intersects[0].object.parent
            || bridgeEBOX == intersects[0].object || bridgeEBOX == intersects[0].object.parent
            || bridgeKBOX == intersects[0].object || bridgeKBOX == intersects[0].object.parent) {
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

    function createPanel(titre, description, x_panel, y_panel, z_panel, text_size, description_size) {
        const groupObject = new THREE.Group();
        // PANEL
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
        // FONT PANEL
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
            // Text size = 15
            const shapes = font.generateShapes(message, text_size);
            const geometry = new THREE.ShapeGeometry(shapes);
            geometry.computeBoundingBox();
            const xMid = -0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);
            geometry.translate(xMid, 0, 0);
            // Text position
            const title = new THREE.Mesh(geometry, matLite);
            title.position.z = z_panel + 1; //100;
            title.position.x = x_panel; //-310;
            title.position.y = y_panel + 20; //120;
            groupObject.add(title);
        });

        // Font description
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
                for (let i = 0; i < description.length; i = i + 1) {
                    if (i % 30 === 0) {
                        description = [description.slice(0, i), "\n", description.slice(i)].join('');
                    }
                }
                return description;
            }

            const message = formatDescription(description);
            // Text size = 10
            const shapes = font.generateShapes(message, description_size);
            const geometry = new THREE.ShapeGeometry(shapes);
            geometry.computeBoundingBox();
            const xMid = -0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);
            geometry.translate(xMid, 0, 0);
            // Text position
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