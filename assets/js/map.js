function main() {
  // VARIABLES//
  let objectOVERED, objectSELECTED;
  const mouse = new THREE.Vector2();
  const raycaster = new THREE.Raycaster();
  const loader = new THREE.FBXLoader();
  //////////////

  var scene = new THREE.Scene();
  // SCENE FOND BLANC //
  scene.background = new THREE.Color(0xfffffff);
  // _--------------_ //
  var camera = new THREE.PerspectiveCamera(
    75, // Field of View
    window.innerWidth / window.innerHeight, // aspect ratio
    0.1, // near clipping plane
    1000 // far clipping plane
  );

  // CANVAS //
  const canvas = document.querySelector("#canvas-div");
  var renderer = new THREE.WebGLRenderer({
    canvas,
    antialias: true, // smooth edges
  });
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.setPixelRatio(window.devicePixelRatio);
  const controls = new THREE.OrbitControls(camera, renderer.domElement);
  ///////////

  // AMBIENT LIGHT //
  const light = new THREE.AmbientLight(0xffffff, 0.7); // soft white light
  scene.add(light);
  //////////////////

  // OVERED LIGHT //
  let spotLight = new THREE.SpotLight(0xffff00, 5, 500, Math.PI / 8); // <============
  spotLight.position.set(0, 1000, 0);
  spotLight.target.position.set(0, 0, 0);
  scene.add(spotLight);
  // let spotLightHelper = new THREE.SpotLightHelper(spotLight);
  // scene.add(spotLightHelper);
  //////////////////

  //MAP
  // loader.load(
  //   "../assets/fbx/MAP SGK ROAD.fbx",
  //   (object) => {
  //     object.position.set(10, -2, 10);
  //     objecti.scale.set(0.01, 0.01, 0.01);
  //     object.updateMatrix();
  //     scene.add(object);
  //   },
  //   (xhr) => {
  //     console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
  //   },
  //   (error) => {
  //     console.log(error);
  //   }
  // );

  // //BRIDGE
  // loader.load(
  //   "../assets/fbx/bridge.FBX",
  //   (object) => {
  //     object.position.set(4, 0, -2);
  //     object.updateMatrix();
  //     scene.add(object);
  //   },
  //   (xhr) => {
  //     console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
  //   },
  //   (error) => {
  //     console.log(error);
  //   }
  // );
  // //PARK
  // loader.load(
  //   "../assets/fbx/parc.fbx",
  //   (object) => {
  //     object.position.set(-2, 0, -2);
  //     object.updateMatrix();
  //     scene.add(object);
  //   },
  //   (xhr) => {
  //     console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
  //   },
  //   (error) => {
  //     console.log(error);
  //   }
  // );

  // //PHARMACY;
  // loader.load(
  //   "../assets/fbx/pharmacy.fbx",
  //   (object) => {
  //     object.position.set(2, 0, -2);
  //     object.updateMatrix();
  //     scene.add(object);
  //   },
  //   (xhr) => {
  //     console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
  //   },
  //   (error) => {
  //     console.log(error);
  //   }
  // );

  //TEMPLE
  loader.load(
    "../assets/fbx/temple.fbx",
    (object) => {
      object.position.set(10, 0, 10);
      object.scale.set(1, 1, 1);
      object.updateMatrix();
      scene.add(object);
    },
    (xhr) => {
      console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
    },
    (error) => {
      console.log(error);
    }
  );

  // //UNIVERSITY
  // loader.load(
  //   "../assets/fbx/university.FBX",
  //   (object) => {
  //     object.position.set(-2, 0, 2);
  //     object.updateMatrix();
  //     scene.add(object);
  //   },
  //   (xhr) => {
  //     console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
  //   },
  //   (error) => {
  //     console.log(error);
  //   }
  // );
  // ------------------------  //

  camera.position.z = 500; // move camera back so we can see the cube

  document.addEventListener("mousemove", onDocumentMouseMove);
  document.addEventListener("click", onmouseClick);

  function onDocumentMouseMove(event) {
    event.preventDefault();

    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
  }

  function onmouseClick(event) {
    event.preventDefault();
    console.log("testtets");
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

    raycaster.setFromCamera(mouse, camera);
    var intersects = raycaster.intersectObjects(scene.children, true);
    if (intersects.length > 0) {
      console.log("test", intersects[0].object.parent);
      objectSELECTED = intersects[0].object.parent;
      objectSELECTED.scale.set(1.5, 1.5, 1.5);
    } else {
      if (objectSELECTED) objectSELECTED.scale.set(1, 1, 1);
    }
  }

  function update() {
    // find intersections

    raycaster.setFromCamera(mouse, camera);

    var intersects = raycaster.intersectObjects(scene.children, true);

    if (intersects.length > 0) {
      console.log("zerze", intersects[0].object);
      objectOVERED = intersects[0].object.parent;
      spotLight.position.set(
        objectOVERED.position.x,
        300,
        objectOVERED.position.z
      );
      spotLight.target.position.set(
        objectOVERED.position.x,
        objectOVERED.position.y,
        objectOVERED.position.z
      );
      spotLight.intensity = 10;
      spotLight.target.updateMatrixWorld();
    } else {
      spotLight.intensity = 0;
    }
  }

  const render = function () {
    renderer.render(scene, camera);
  };

  const animate = function () {
    requestAnimationFrame(animate);
    update();
    render();
  };

  animate();
}

main();
