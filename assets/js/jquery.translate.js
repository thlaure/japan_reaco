/**
 * @file jquery.translate.js
 * @brief jQuery plugin to translate text in the client side.
 * @author Manuel Fernandes
 * @site
 * @version 0.9
 * @license MIT license <http://www.opensource.org/licenses/MIT>
 *
 * translate.js is a jQuery plugin to translate text in the client side.
 *
 */

(function ($) {
  $.fn.translate = function (options) {
    var that = this; // a reference to ourselves

    var settings = {
      css: "trn",
      lang:
        "en",
    };
    settings = $.extend(settings, options || {});
    if (settings.css.lastIndexOf(".", 0) !== 0) {
      // doesn't start with '.'
      settings.css = "." + settings.css;
    }

    var t = settings.t;

    //public methods
    this.lang = function (l) {
      if (l) {
        settings.lang = l;
        this.translate(settings); // translate everything
      }

      return settings.lang;
    };

    this.get = function (index) {
      var res = index;

      try {
        res = t[index][settings.lang];
      } catch (err) {
        // not found, return index
        return index;
      }

      if (res) return res;
      else return index;
    };

    this.g = this.get;

    // main
    this.find(settings.css).each(function (i) {
      var $this = $(this);

      var trnKey = $this.attr("data-trn-key");
      if (!trnKey) {
        trnKey = $this.html();
        $this.attr("data-trn-key", trnKey); // store key for next time
      }

      $this.html(that.get(trnKey));
    });

    return this;
  };
})(jQuery);

var dict = {
  timeline_title: {
    en: "Timeline",
    fr: "Chronologie",
    jp: "Timeline",
  },
  interactive_title: {
    en: "Interactive map",
    fr: "Carte interactive",
    jp: "Interactive map",
  },
  event_title: {
    en: "Events",
    fr: "Événements",
    jp: "Events",
  },
  discover_title: {
    en: "Discover differently",
    fr: "Découvrir différemment",
    jp: "Discover differently",
  },
  text_intro: {
    en: "Intro EN",
    fr: "Intro FR",
    jp: "Intro JP",
  },
  //TIMELINE CONTENT 1//
  uptitle_early: {
    en: "Before the castle",
    fr: "Avant le château",
    jp: "Vefore the castle",
  },
  title_early: {
    en: "EARLY HISTORY",
    fr: "DÉBUT DE L'HISTOIRE",
    jp: "EARLY HISTORY",
  },
  prg1_early: {
    en: "The first traces of population appeared back in Jomon era, period which last from 1300 to 400 BC. However, there is no evidence of human presence before Kofun Period (250-538).",
    fr: "Les premières traces humaines dans la région d'Hiroshima datent de l'ère Jômon, une période qui s'étend de 1300 à 400 avant J-C. Il faut toutefois remonter à la période Kofun (env. 250-538) pour retrouver les premiers vestiges.",
    jp: "The first traces of population appeared back in Jomon era, period which last from 1300 to 400 BC. However, there is no evidence of human presence before Kofun Period (250-538).",
  },
  prg2_early: {
    en: "Hirsohima was officialy founded in 1589. The name Hiroshima means literaly \"Wide Island\" in japanese.",
    fr: "La ville d'Hiroshima fût officiellement fondée en 1589. Son nom signifie \"Grande Île\" en japonais.",
    jp: "Hirsohima was officialy founded in 1589. The name Hiroshima means literaly \"Wide Island\" in japanese.",
  },
  prg3_early: {
    en: "The area was choosen for it's strategic location on the Ôta delta.",
    fr: "Le choix de l'emplacement de la ville est dû à son emplacement stratégique sur le delta d'Ôta.",
    jp: "The area was choosen for it's strategic location on the Ôta delta.",
  },
  //TIMELINE CONTENT 2//
  uptitle_sengoku: {
    en: "From 1477 to 1573",
    fr: "De 1477 à 1573",
    jp: "From 1477 to 1573",
  },
  title_sengoku: {
    en: "SENGOKU PERIOD",
    fr: "PÉRIODE SENGOKU",
    jp: "SENGOKU PERIOD",
  },
  prg1_sengoku: {
    en: "Sengoku era is full of military conflict. This period is also called \"The Province in War Era\".",
    fr: "L'époque Sengoku est marquée par de nombreux conflits militaires. On appelle également cette période l'époque des provinces en guerre.",
    jp: "Sengoku era is full of military conflict. This period is also called \"The Province in War Era\".",
  },
  prg2_sengoku: {
    en: "This era cover half of the Muromachi age wich is from 1336 to 1573. It's the last period before the dynasty of Tokugawa shogun takes place. It's in this age that the zen culture was born. Buildings were accompanied by those famous dry garden and the tea ceremony raised at this moment. Caractised by harmony, respect, purity and tranquility.",
    fr: "Cette époque couvre la seconde moitié de l'époque Muromachi qui s'étend de 1336 à 1573. C'est la dernière époque avant la mise en place de la dynastie des shoguns Tokugawa. C'est à cette époque que naît la culture du zen. Les constructions s'accompagnent des fameux jardins secs et la cérémonie du thé se développe. Elle se caractérise par l’harmonie, le respect, la pureté et la tranquilité.",
    jp: "This era cover half of the Muromachi age wich is from 1336 to 1573. It's the last period before the dynasty of Tokugawa shogun takes place. It's in this age that the zen culture was born. Buildings were accompanied by those famous dry garden and the tea ceremony raised at this moment. Caractised by harmony, respect, purity and tranquility.",
  },
  prg3_sengoku: {
    en: "It's during the Sengoku Period that the West arrived on the area for exemple a portuguese ship took refuge in Japan to avoid a storm. As a result of trade exchange, cities are developed aroud harbours and internal commercial axes. Japan is also strongly developing its mining operations, mainly of gold and iron, but also its agricultural exploitation.",
    fr: "La période Sengoku correspond également à l'arrivée des premiers occidentaux sur le territoire et notamment un navire portugais qui s'est réfugié au Japon pour éviter une tempête. Sous l'impulsion des échanges commerciaux, les villes se développent principalement autour des ports et sur les grands axes commerciaux intérieurs. Le Japon développe aussi fortement ses exploitations minières principalement d'or et d'argent, mais aussi son exploitation agricole.",
    jp: "It's during the Sengoku Period that the West arrived on the area for exemple a portuguese ship took refuge in Japan to avoid a storm. As a result of trade exchange, cities are developed aroud harbours and internal commercial axes. Japan is also strongly developing its mining operations, mainly of gold and iron, but also its agricultural exploitation.",
  },
  //TIMELINE CONTENT 3//
  uptitle_edo: {
    en: "From 1589 to 1871",
    fr: "De 1589 à 1871",
    jp: "From 1589 to 1871",
  },
  title_edo: {
    en: "EDO PERIOD",
    fr: "PÉRIODE EDO",
    jp: "EDO PERIOD",
  },
  prg1_edo: {
    en: "In 1589, not so long after the begining of Edo period, Hiroshima Castle was commissioned by Mōri Terumoto, head of the powerful Mōri clan and a member of Toyotomi Hideyoshi's Council of Five Elders. In 1593, the castle was finished, Mōri Terumoto moved in.",
    fr: "En 1589, peu de temps avant le début de la période Edo, Mōri Terumoto, chef du puissant et respecté du clan Mōri et membre du conseil des cinq anciens de Toyotomi Hideyoshi, ordonne la construction du château d’Hiroshima. En 1593, le château étant fini, Mōri Terumoto investit les lieux.",
    jp: "In 1589, not so long after the begining of Edo period, Hiroshima Castle was commissioned by Mōri Terumoto, head of the powerful Mōri clan and a member of Toyotomi Hideyoshi's Council of Five Elders. In 1593, the castle was finished, Mōri Terumoto moved in.",
  },
  prg2_edo: {
    en: "At this time, Hiroshima did not exist as entire city yet, the are was called Gokamura which means \"Five Villages\". Despite the change of autority on the castle, Hiroshima was a land of peace until 1869, these years of peace helped the city to grow.",
    fr: "À cette période, Hiroshima n’existait pas comme ville à part entière. C’était une zone géographique que l’on nommait Gokamura signifiant \"Cinq Villages\". Malgré le changement d’autorité sur le château, la zone Hiroshima fut une terre de paix jusqu’en 1869, ces années lui ont permis de se développer fortement.",
    jp: "At this time, Hiroshima did not exist as entire city yet, the are was called Gokamura which means \"Five Villages\". Despite the change of autority on the castle, Hiroshima was a land of peace until 1869, these years of peace helped the city to grow.",
  },
  prg3_edo: {
    en: "During the Meiji Restoration, Hiroshima Castle also named the Carp Castle was saved by the governement and was not one of the numerous castle being dismantled. It's turned into a military base at the end of Edo era.",
    fr: "Lors de la période de la restauration de Meiji, le château d’Hiroshima ou le château de la carpe fut protégé et ne fut pas l’un des nombreux châteaux démantelé. Il est alors transformé en base militaire à la fin de l’ère Edo.",
    jp: "During the Meiji Restoration, Hiroshima Castle also named the Carp Castle was saved by the governement and was not one of the numerous castle being dismantled. It's turned into a military base at the end of Edo era.",
  },
  //TIMELINE CONTENT 4//
  uptitle_imperial: {
    en: "From 1871 to 1939",
    fr: "De 1871 à 1939",
    jp: "From 1871 to 1939",
  },
  title_imperial: {
    en: "IMPERIAL PERIOD",
    fr: "PÉRIODE IMPÉRIALE",
    jp: "IMPERIAL PERIOD",
  },
  prg1_imperial: {
    en: "After the Han system of estates was abolished in 1871, the city of Hiroshima became the capital of Hiroshima Prefecture. In April 1888 a new system of municipality was established. As a consequence of this, Hiroshima officially became one of the most important cities in Japan on April 1, 1889.",
    fr: "Après que le système des Han ou des domaines soit aboli en 1871, la ville d’Hiroshima devint la capitale de la préfecture d’Hiroshima. En avril 1888 un nouveau système de municipalité a été mis en place. En répercussion à cela, Hiroshima devient officiellement l’une des plus importantes villes du Japon le 1er Avril 1889.",
    jp: "After the Han system of estates was abolished in 1871, the city of Hiroshima became the capital of Hiroshima Prefecture. In April 1888 a new system of municipality was established. As a consequence of this, Hiroshima officially became one of the most important cities in Japan on April 1, 1889.",
  },
  prg2_imperial: {
    en: "The San'yō railway was expanded in 1894, this extension was operational in the same year. A railway line was created between the main station and the port to facilitate transportation during the first Sino-Japanese war. During this war, the Japanese government temporarily moved its headquarters to Hiroshima Castle. Emperor Meiji kept his quarters at the castle from September 15, 1894 to April 27, 1895. The first exchanges between Chinese and Japanese representatives took place in Hiroshima from February 1-4, 1895.",
    fr: "Le chemin de fer San’yō fut agrandi en 1894, cette extension fut opérationnelle la même année. Une voie de chemin de fer a été créée entre la station principale et le port pour faciliter les transports durant la première guerre Sino-Japonaise. Lors de cette guerre, le gouvernement japonais déplaça temporairement son quartier général dans le château d’Hiroshima. L’empereur Meiji garda ses quartiers au château du 15 septembre 1894 au 27 avril 1895. Il faut savoir que les premiers échanges entre les représentants chinois et japonais se déroulèrent à Hiroshima du 1er au 4 février 1895.",
    jp: "The San'yō railway was expanded in 1894, this extension was operational in the same year. A railway line was created between the main station and the port to facilitate transportation during the first Sino-Japanese war. During this war, the Japanese government temporarily moved its headquarters to Hiroshima Castle. Emperor Meiji kept his quarters at the castle from September 15, 1894 to April 27, 1895. The first exchanges between Chinese and Japanese representatives took place in Hiroshima from February 1-4, 1895.",
  },
  prg3_imperial: {
    en: "After the Sino-Japanese War, the Russo-Japanese War pushed Japan into the world of industrialization. During the First World War, Hiroshima became an important point of military activity.",
    fr: "Après la guerre Sino-Japonaise, la guerre Russo-Japonaise poussa le Japon dans le monde de l’industrialisation. Lors de la première guerre mondiale, Hiroshima devint un point important de l’activité militaire.",
    jp: "After the Sino-Japanese War, the Russo-Japanese War pushed Japan into the world of industrialization. During the First World War, Hiroshima became an important point of military activity.",
  },
  //TIMELINE CONTENT 5//
  uptitle_WWII: {
    en: "From 1939 to 1945",
    fr: "De 1939 à 1945",
    jp: "From 1939 to 1945",
  },
  title_WWII: {
    en: "WORLD WAR II AND THE ATOMIC BOMB",
    fr: "SECONDE GUERRE MONDIALE ET LA BOMBE ATOMIQUE",
    jp: "WORLD WAR II AND THE ATOMIC BOMB",
  },
  prg1_WWII: {
    en: "On 6 August 1945, the B-29 bomber piloted by Paul Tibbets dropped a 15-kiloton uranium 235 atomic bomb on Hiroshima, destroying 62,000 buildings and killing 70,000 of the 350,000 inhabitants of Hiroshima, the first city in history to suffer this type of bombardment. Radiation-related injuries will bring the death toll to 140,000 in the months and years that follow.",
    fr: "Le 6 août 1945, le bombardier B-29 piloté par Paul Tibbets lâche sur Hiroshima une bombe atomique à l'uranium 235 d'une puissance de 15 kilotonnes, détruisant 62 000 bâtiments et faisant 70 000 morts sur les 350 000 habitants de Hiroshima, première ville de l'histoire à subir ce type de bombardement. Les blessures liées aux radiations porteront le bilan à 140 000 victimes dans les mois et années suivantes.",
    jp: "On 6 August 1945, the B-29 bomber piloted by Paul Tibbets dropped a 15-kiloton uranium 235 atomic bomb on Hiroshima, destroying 62,000 buildings and killing 70,000 of the 350,000 inhabitants of Hiroshima, the first city in history to suffer this type of bombardment. Radiation-related injuries will bring the death toll to 140,000 in the months and years that follow.",
  },
  prg2_WWII: {
    en: "According to the National Museum of the City of Hiroshima, the city would have been deliberately spared by the Americans during the conventional bombing to avoid any prior damage, in order to better assess the effects of the atomic bomb. That is why, after the bombing, American study stations were set up in the Hiroshima area to study its effects, as the launch tests that were done until the day of the bombing were only on a small scale.",
    fr: "Selon le musée national de la ville d'Hiroshima, la ville aurait été sciemment épargnée par les américains lors des bombardements conventionnels pour éviter tout dommage préalable, afin de mieux évaluer les effets de la bombe atomique. C'est pour cela qu'après le bombardement, des postes d'études américains furent installés dans la région d'Hiroshima pour étudier ses effets, les tests de lancement ayant été réalisés jusqu'au jour du bombardement n'étaient qu'à petite échelle.",
    jp: "According to the National Museum of the City of Hiroshima, the city would have been deliberately spared by the Americans during the conventional bombing to avoid any prior damage, in order to better assess the effects of the atomic bomb. That is why, after the bombing, American study stations were set up in the Hiroshima area to study its effects, as the launch tests that were done until the day of the bombing were only on a small scale.",
  },
  prg3_WWII: {
    en: "The Japanese wanted to surrender, and the Americans wanted to stop the war because there had been enough massacres. The Americans therefore passed a petition calling for an end to the war, but this petition was intercepted by Leslie Groves, an American general, who saw an economic interest in the use of the nuclear bomb. Since Harry Truman never received this petition, he ordered the bombing of Hiroshima. History will simply say that he used the atomic bomb to force the Japanese surrender.",
    fr: "Les japonais souhaitaient se rendre, et les américains souhaitaient arrêter la guerre car il y avait eu assez de massacres. Ces derniers ont donc fait passer une pétition demandant l'arrêt de la guerre, mais cette pétition a été interceptée par Leslie Groves, un général américain, qui voyait un intérêt économique à l'utilisation de la bombe nucléaire. Harry Truman n'ayant jamais reçu cette pétition, ordonna le bombardement d'Hiroshima. L'histoire dira simplement qu'il utilisa la bombe atomique pour forcer la reddition japonaise.",
    jp: "The Japanese wanted to surrender, and the Americans wanted to stop the war because there had been enough massacres. The Americans therefore passed a petition calling for an end to the war, but this petition was intercepted by Leslie Groves, an American general, who saw an economic interest in the use of the nuclear bomb. Since Harry Truman never received this petition, he ordered the bombing of Hiroshima. History will simply say that he used the atomic bomb to force the Japanese surrender.",
  },
  //TIMELINE CONTENT 6//
  uptitle_postwar: {
    en: "From 1945 to nowadays",
    fr: "De 1945 à aujourd'hui",
    jp: "From 1945 to nowadays",
  },
  title_postwar: {
    en: "POSTWAR PERIOD",
    fr: "L'APRÉS GUERRE",
    jp: "POSTWAR PERIOD",
  },
  prg1_postwar: {
    en: "After the trauma, a plan to rebuild Hiroshima was launched, notably through the Hiroshima City Peace Memorial Construction Law, passed by the government in 1949, which provided funding for the city's rebirth. In the same year, the Japanese Parliament proclaimed Hiroshima \"City of Peace\".",
    fr: "Passé le traumatisme, un plan de reconstruction d'Hiroshima est lancé, via notamment la Loi de Construction du Mémorial de la Paix de la Ville d'Hiroshima, votée par le gouvernement en 1949 et qui prévoit le financement pour faire renaître la ville. La même année, le Parlement japonais proclame Hiroshima \"Cité de la paix\".",
    jp: "After the trauma, a plan to rebuild Hiroshima was launched, notably through the Hiroshima City Peace Memorial Construction Law, passed by the government in 1949, which provided funding for the city's rebirth. In the same year, the Japanese Parliament proclaimed Hiroshima \"City of Peace\".",
  },
  prg2_postwar: {
    en: "The Hiroshima Prefectural Trade Promotion Hall, a building located 160 meters from the epicenter and having resisted the blast, becomes the A-Bomb Dome. Around the monument, the Peace Memorial Arch was inaugurated in 1954 and the Memorial Museum in 1955. A victim of war, Hiroshima has since then been the first city to become an ambassador for peace, with its city hall promoting the abolition of nuclear weapons.",
    fr: "Le Hall préfectoral de promotion commerciale d'Hiroshima, bâtiment situé à 160 mètres de l'épicentre et ayant résisté à la déflagration, devient le Dôme de la Bombe A. Autour du monument, le Parc du Mémorial de la Paix est inauguré en 1954, le Musée du mémorial en 1955. Victime de la guerre, Hiroshima est depuis lors la première ville ambassadrice de la paix, sa mairie promouvant l'abolition des armes nucléaires.",
    jp: "The Hiroshima Prefectural Trade Promotion Hall, a building located 160 meters from the epicenter and having resisted the blast, becomes the A-Bomb Dome. Around the monument, the Peace Memorial Arch was inaugurated in 1954 and the Memorial Museum in 1955. A victim of war, Hiroshima has since then been the first city to become an ambassador for peace, with its city hall promoting the abolition of nuclear weapons.",
  },
  prg3_postwar: {
    en: "In November 2010 at the Hiroshima Summit, the Dalai Lama and five other prize winners attended the Nobel Peace Prize Summit. The summit was dedicated to nuclear disarmament and held in Hiroshima. Hiroshima too has changed. The \"calcined plain\" is now a forward-looking city of 1.2 million inhabitants, as the new Orizuru Tower inaugurated in the summer of 2016. A city resolutely committed to its role as world capital of peace",
    fr: "En novembre 2010 lors du sommet d'Hiroshima, le Dalaï-lama] et cinq autres lauréats du prix ont participé au sommet des prix Nobel de la Paix. Ce sommet était consacré au désarmement nucléaire et organisé à Hiroshima. Hiroshima aussi a changé. La \"plaine calcinée\" est aujourd'hui une ville de 1,2 million d'habitants, tournée vers l'avenir, à l'image de la nouvelle Tour Orizuru inaugurée à l'été 2016. Une ville résolument engagée dans son rôle de capitale mondiale de la paix.",
    jp: "In November 2010 at the Hiroshima Summit, the Dalai Lama and five other prize winners attended the Nobel Peace Prize Summit. The summit was dedicated to nuclear disarmament and held in Hiroshima. Hiroshima too has changed. The \"calcined plain\" is now a forward-looking city of 1.2 million inhabitants, as the new Orizuru Tower inaugurated in the summer of 2016. A city resolutely committed to its role as world capital of peace",
  },
  ar_title: {
    en: "AR project",
    fr: "Projet AR",
    jp: "AR project",
  },
  vr_title: {
    en: "VR project",
    fr: "Projet VR",
    jp: "VR project",
  },
  web_title: {
    en: "Web project",
    fr: "Projet Web",
    jp: "Web project",
  },
  project_team: {
    en: "See the project team",
    fr: "Voir toutes les équipes",
    jp: "See the project team",
  },
  footer: {
    en: "Developed by CNAM students in collaboration with Ingemedia students, french schools",
    fr: "Développé par les étudiants du CNAM en collaboration avec les étudiants d'Ingémédia, écoles françaises",
    jp: "Developed by CNAM students in collaboration with Ingemedia students, french schools",
  },
};

if (!localStorage.getItem("lang")) {
  localStorage.setItem("lang", "en");
}
localStorage.getItem("lang");

var translator = $(".lang-wrapper").translate({
  lang: localStorage.getItem("lang"),
  t: dict,
});

$(".lang-selector").on("click", function (e) {
  e.preventDefault();
  var elLanguage = $(this).attr("data-value");
  localStorage.setItem("lang", elLanguage);
  translator.lang(elLanguage);
});