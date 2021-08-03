import * as THREE from 'https://cdn.skypack.dev/three@0.128.0/build/three.module.js';

import {OrbitControls} from 'https://cdn.skypack.dev/three@0.128.0/examples/jsm/controls/OrbitControls.js';

import {OBJLoader} from 'https://cdn.skypack.dev/three@0.128.0/examples/jsm/loaders/OBJLoader.js';

//canvas settings
//var canvas = document.querySelector('canvas'); 
// var CANVAS_WIDTH = 700, CANVAS_HEIGHT = 500;


const scene = new THREE.Scene();
// const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / 
// window.innerHeight, 0.1, 1000);

//https://stackoverflow.com/questions/29884485/threejs-canvas-size-based-on-container
const camera = new THREE.PerspectiveCamera(70, 2, 1, 1000);
camera.position.z = 5;

const renderer = new THREE.WebGLRenderer({canvas: document.querySelector("canvas")});
// renderer.setSize(CANVAS_WIDTH, CANVAS_HEIGHT);

function resizeCanvasToDisplaySize() {
    const canvas = renderer.domElement;
    const width = canvas.clientWidth;
    const height  = canvas.clientHeight;

    if (canvas.width !== width ||canvas.height !== height) {
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();

    }
    
}

//canvas.appendChild(renderer.domElement);

//Add cube to scene

// const geometry = new THREE.BoxGeometry();
// const material = new THREE.MeshPhongMaterial({
//     color: 0x555555,
//     specular: 0xffffff,
//     shininess: 50,
//     shading: THREE.SmoothShading
//   });
// const cube = new THREE.Mesh(geometry, material);
// scene.add(cube);

// Object Loader
// instantiate a loader
const loader = new OBJLoader();

// load a resource
loader.load(
    // resource url
    'assets/three_models/Male.OBJ',
    //called when resource is loaded
    function onLoad(Object) {
        
        scene.add(Object);
        scene.children[1].position.set(0, 0, 10);
        //renderer.render();
    },
    //called when loading is in progress
    function whileLoading(xhr) {
        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
    },
    function onError(error) {
        console.log('An error ocurred when loading the human model.');
    }
);

//0xff80C0
const pointLight = new THREE.PointLight(0xfffff, 2, 0);
pointLight.position.set(5,5,5);

const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(pointLight, ambientLight); 

const controls = new OrbitControls(camera, renderer.domElement);

const gridhelper = new THREE.GridHelper(200 , 50);
scene.add(gridhelper);


const animate = function () {
    requestAnimationFrame(animate);

    resizeCanvasToDisplaySize();

    controls.update();

    renderer.render(scene, camera);
}

animate();


