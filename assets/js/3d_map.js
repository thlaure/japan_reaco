require(['esri/Map', 'esri/views/SceneView'], function (Map, SceneView) {
    var map = new Map({
        basemap: 'topo-vector',
        ground: 'world-elevation'
    });

    var view = new SceneView({
        container: 'map',
        map: map,
        scale: 50000000,
        center: [-101.17, 21.78]
    });
});