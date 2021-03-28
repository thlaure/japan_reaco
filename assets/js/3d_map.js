require(['esri/config', 'esri/WebScene', 'esri/views/SceneView', 'esri/widgets/Legend'], function (esriConfig, WebScene, SceneView, Legend) {
  esriConfig.apiKey = 'AAPKe3a7d43a10d54d96b014a50eaf207b9dg_9gVGaWRnx4gtebfyoaBAPNWRw4B0cLmaoPOtpPfgOMXLxOHccQYMvvSEAQuQvS';

  const webscene = new WebScene({
    portalItem: {
      id: '654b1005452d403bbfe58ad1e59bb079'
    }
  });

  const view = new SceneView({
    container: 'map',
    map: webscene,
    // center: [132.4552927, 34.3852029],
    // zoom: 16
  });

  const legend = new Legend ({
    view:view
  });

  view.ui.add(legend, 'top-right');
});