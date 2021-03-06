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
      css: 'trn',
      lang: 'en',
    };
    settings = $.extend(settings, options || {});
    if (settings.css.lastIndexOf('.', 0) !== 0) {
      // doesn't start with '.'
      settings.css = '.' + settings.css;
    }

    var t = settings.t;

    // public methods
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

      if (res) {
        return res;
      } else {
        return index;
      }
    };

    this.g = this.get;

    // main
    this.find(settings.css).each(function (i) {
      var $this = $(this);

      var trnKey = $this.attr('data-trn-key');
      if (!trnKey) {
        trnKey = $this.html();
        $this.attr('data-trn-key', trnKey); // store key for next time
      }

      $this.html(that.get(trnKey));
    });

    return this;
  };
})(jQuery);

var dict = {
  // INTRODUCTION
  text_intro: {
    en: "Here begins your journey, on the island of millennial Japan, from traditional arts to age-old crafts, discovering ephemeral beauties and living treasures. Thanks to the immersive projects of our students, there are no more borders, you are in JAPAN, on the road of ancient Yamato, the Saigoku road tells you and makes you live its history, link between the capital and the pearl of Hiroshima. Welcome, dear visitors, to the floating world...",
    fr: "Ici commence votre voyage, sur l'île du Japon millénaire, des arts traditionnels aux métiers séculaires, découvertes des beautés éphémères et des trésors vivants. Grâce aux projets immersifs de nos étudiants, il n'y a plus de frontières, vous êtes au JAPON, sur la route de l'ancien Yamato, la Saigoku road vous raconte et vous fait vivre son histoire, lien entre la capitale et la perle d'Hiroshima. Bienvenue, chers visiteurs, dans le monde flottant...",
    jp: "ここからあなたの旅が始まります。千年以上の歴史のある日本の島で、伝統芸術から古くからの工芸品まで、儚い美しさや生きた宝物を発見する旅です。古代大和の道、西国街道、首都と広島を結ぶ歴史的な道など、ボーダーを越えた日本の魅力をご紹介します。皆さん、ようこそ浮世絵の世界へ、、是非お楽しみにください。",
  },
  // TIMELINE
  timeline_title: {
    en: "Timeline",
    fr: "Chronologie",
    jp: "タイムライン",
  },
  // TIMELINE CONTENT 1
  uptitle_early: {
    en: "Before the castle",
    fr: "Avant le château",
    jp: "お城の前",
  },
  title_early: {
    en: "EARLY HISTORY",
    fr: "DÉBUT DE L'HISTOIRE",
    jp: "初期の歴史",
  },
  prg1_early: {
    en: "The first traces of population appeared back in Jomon era, period which last from 1300 to 400 BC. However, there is no evidence of human presence before Kofun Period (250-538).",
    fr: "Les premières traces humaines dans la région d'Hiroshima datent de l'ère Jômon, une période qui s'étend de 1300 à 400 avant J-C. Il faut toutefois remonter à la période Kofun (env. 250-538) pour retrouver les premiers vestiges.",
    jp: "人口の痕跡が最初に現れたのは、紀元前1300年から400年の縄文時代。紀元前1300年から紀元前400年までの期間。しかし、古墳時代（250～538年）以前には人類が存在したという証拠はありません。",
  },
  prg2_early: {
    en: "Hirsohima was officialy founded in 1589. The name Hiroshima means literaly \"Wide Island\" in japanese.",
    fr: "La ville d'Hiroshima fût officiellement fondée en 1589. Son nom signifie \"Grande Île\" en japonais.",
    jp: "広島という名称は、戦国時代末期の1589年、この地を支配した戦国大名の毛利輝元が築城に際して命名しました。広島という地名は、「広い島」を意味します。",
  },
  prg3_early: {
    en: "The area was choosen for it's strategic location on the Ôta delta.",
    fr: "Le choix de l'emplacement de la ville est dû à son emplacement stratégique sur le delta d'Ôta.",
    jp: "このエリアが選ばれたのは、太田川の河口デルタという戦略的にも適した位置であったからです。",
  },
  // TIMELINE CONTENT 2
  uptitle_sengoku: {
    en: "From 1477 to 1573",
    fr: "De 1477 à 1573",
    jp: "1477年から1573年まで",
  },
  title_sengoku: {
    en: "SENGOKU PERIOD",
    fr: "PÉRIODE SENGOKU",
    jp: "戦国時代",
  },
  prg1_sengoku: {
    en: "Sengoku era is full of military conflict. This period is also called \"The Province in War Era\".",
    fr: "L'époque Sengoku est marquée par de nombreux conflits militaires. On appelle également cette période l'époque des provinces en guerre.",
    jp: "戦国時代は武力衝突が多く、この時代は「戦国時代の国」とも呼ばれています。",
  },
  prg2_sengoku: {
    en: "This era cover half of the Muromachi age wich is from 1336 to 1573. It's the last period before the dynasty of Tokugawa shogun takes place. It's in this age that the zen culture was born. Buildings were accompanied by those famous dry garden and the tea ceremony raised at this moment. Caractised by harmony, respect, purity and tranquility.",
    fr: "Cette époque couvre la seconde moitié de l'époque Muromachi qui s'étend de 1336 à 1573. C'est la dernière époque avant la mise en place de la dynastie des shoguns Tokugawa. C'est à cette époque que naît la culture du zen. Les constructions s'accompagnent des fameux jardins secs et la cérémonie du thé se développe. Elle se caractérise par l’harmonie, le respect, la pureté et la tranquilité.",
    jp: "この時代は、1336年から1573年までの室町時代の半分を占めており、徳川将軍家が誕生する前の最後の時代でもあります。また、禅の文化もこの時代に生まれました。有名な枯山水庭園も主流で、茶道もこの時期に始まりました。建物は有名な乾式庭園を伴っており、茶道はこの瞬間に発生しました。調和、尊敬、清らかさ、静けさが特徴です。",
  },
  prg3_sengoku: {
    en: "It's during the Sengoku Period that the West arrived on the area for exemple a portuguese ship took refuge in Japan to avoid a storm. As a result of trade exchange, cities are developed aroud harbours and internal commercial axes. Japan is also strongly developing its mining operations, mainly of gold and iron, but also its agricultural exploitation.",
    fr: "La période Sengoku correspond également à l'arrivée des premiers occidentaux sur le territoire et notamment un navire portugais qui s'est réfugié au Japon pour éviter une tempête. Sous l'impulsion des échanges commerciaux, les villes se développent principalement autour des ports et sur les grands axes commerciaux intérieurs. Le Japon développe aussi fortement ses exploitations minières principalement d'or et d'argent, mais aussi son exploitation agricole.",
    jp: "嵐を避けるためにポルトガルの船が日本に避難したように、西洋がこの地にやってきたのは戦国時代のことです。交易と共に、港や商業エリアを中心に都市が発展していきました。また、当時の日本では、金や鉄を中心とした鉱業や、農業も盛んに行われていました。",
  },
  // TIMELINE CONTENT 3
  uptitle_edo: {
    en: "From 1589 to 1871",
    fr: "De 1589 à 1871",
    jp: "1589から1871年まで",
  },
  title_edo: {
    en: "EDO PERIOD",
    fr: "PÉRIODE EDO",
    jp: "江戸時代",
  },
  prg1_edo: {
    en: "In 1589, not so long after the begining of Edo period, Hiroshima Castle was commissioned by Mōri Terumoto, head of the powerful Mōri clan and a member of Toyotomi Hideyoshi's Council of Five Elders. In 1593, the castle was finished, Mōri Terumoto moved in.",
    fr: "En 1589, peu de temps avant le début de la période Edo, Mōri Terumoto, chef du puissant et respecté du clan Mōri et membre du conseil des cinq anciens de Toyotomi Hideyoshi, ordonne la construction du château d’Hiroshima. En 1593, le château étant fini, Mōri Terumoto investit les lieux.",
    jp: "江戸時代に入って間もない1589年、広島城は豊臣秀吉の五大老会議の一員であった毛利家の当主である毛利輝元により築城され、1591年に輝元は広島城に移り、1599年に完成しました。",
  },
  prg2_edo: {
    en: "At this time, Hiroshima did not exist as entire city yet, the are was called Gokamura which means \"Five Villages\". Despite the change of autority on the castle, Hiroshima was a land of peace until 1869, these years of peace helped the city to grow.",
    fr: "À cette période, Hiroshima n’existait pas comme ville à part entière. C’était une zone géographique que l’on nommait Gokamura signifiant \"Cinq Villages\". Malgré le changement d’autorité sur le château, la zone Hiroshima fut une terre de paix jusqu’en 1869, ces années lui ont permis de se développer fortement.",
    jp: "当時の広島市は、まだ都市ではなく、五ヶ村と呼ばれていました。城の権限が変わったにもかかわらず、広島は1869年まで平和な土地であり、この平和な時代が広島の発展を助けたのです。",
  },
  prg3_edo: {
    en: "During the Meiji Restoration, Hiroshima Castle also named the Carp Castle was saved by the governement and was not one of the numerous castle being dismantled. It's turned into a military base at the end of Edo era.",
    fr: "Lors de la période de la restauration de Meiji, le château d’Hiroshima ou le château de la carpe fut protégé et ne fut pas l’un des nombreux châteaux démantelé. Il est alors transformé en base militaire à la fin de l’ère Edo.",
    jp: "「鯉城」という名で知られた広島城は、明治維新後も、解体されず、政府によって保存されました。明治時代の廃藩置県後の広島城内には、陸軍の施設が置かれていました。",
  },
  // TIMELINE CONTENT 4
  uptitle_imperial: {
    en: "From 1871 to 1939",
    fr: "De 1871 à 1939",
    jp: "1871年から1939年",
  },
  title_imperial: {
    en: "IMPERIAL PERIOD",
    fr: "PÉRIODE IMPÉRIALE",
    jp: "帝国時代",
  },
  prg1_imperial: {
    en: "After the Han system of estates was abolished in 1871, the city of Hiroshima became the capital of Hiroshima Prefecture. In April 1888 a new system of municipality was established. As a consequence of this, Hiroshima officially became one of the most important cities in Japan on April 1, 1889.",
    fr: "Après que le système des Han ou des domaines soit aboli en 1871, la ville d’Hiroshima devint la capitale de la préfecture d’Hiroshima. En avril 1888 un nouveau système de municipalité a été mis en place. En répercussion à cela, Hiroshima devient officiellement l’une des plus importantes villes du Japon le 1er Avril 1889.",
    jp: "1871年に廃藩置県が行われた後、広島市は、広島県の県庁所在地となりました。1888年（明治21年）4月には、新制度の市制が施行されました。この結果、1889年4月1日、広島市は正式に日本で最も重要な都市の一つとなりました。",
  },
  prg2_imperial: {
    en: "The San'yō railway was expanded in 1894, this extension was operational in the same year. A railway line was created between the main station and the port to facilitate transportation during the first Sino-Japanese war. During this war, the Japanese government temporarily moved its headquarters to Hiroshima Castle. Emperor Meiji kept his quarters at the castle from September 15, 1894 to April 27, 1895. The first exchanges between Chinese and Japanese representatives took place in Hiroshima from February 1-4, 1895.",
    fr: "Le chemin de fer San’yō fut agrandi en 1894, cette extension fut opérationnelle la même année. Une voie de chemin de fer a été créée entre la station principale et le port pour faciliter les transports durant la première guerre Sino-Japonaise. Lors de cette guerre, le gouvernement japonais déplaça temporairement son quartier général dans le château d’Hiroshima. L’empereur Meiji garda ses quartiers au château du 15 septembre 1894 au 27 avril 1895. Il faut savoir que les premiers échanges entre les représentants chinois et japonais se déroulèrent à Hiroshima du 1er au 4 février 1895.",
    jp: "山陽鉄道は1894年に拡張され、この拡張部分は同年に営業を開始しました。日清戦争時に、本駅と港の間に鉄道が敷設され、輸送の便宜が図られました。この戦争中に、日本政府は一時的に広島城に本部を移しました。明治天皇は、1894年9月15日から1895年4月27日まで広島城に宿舎を設置しました。また、1895年2月1日から4日まで、日中両国の代表者が、初めて交流したのも広島でした。",
  },
  prg3_imperial: {
    en: "After the Sino-Japanese War, the Russo-Japanese War pushed Japan into the world of industrialization. During the First World War, Hiroshima became an important point of military activity.",
    fr: "Après la guerre Sino-Japonaise, la guerre Russo-Japonaise poussa le Japon dans le monde de l’industrialisation. Lors de la première guerre mondiale, Hiroshima devint un point important de l’activité militaire.",
    jp: "日清戦争や日露戦争を経て、日本は工業化の世界に押し進みます。そして、第一次世界大戦中、広島は、軍事活動の重要なポイントになりました。",
  },
  // TIMELINE CONTENT 5
  uptitle_WWII: {
    en: "From 1939 to 1945",
    fr: "De 1939 à 1945",
    jp: "1939年から1945年",
  },
  title_WWII: {
    en: "WORLD WAR II AND THE ATOMIC BOMB",
    fr: "SECONDE GUERRE MONDIALE ET LA BOMBE ATOMIQUE",
    jp: "第二次世界大戦と原子爆弾",
  },
  prg1_WWII: {
    en: "On 6 August 1945, the B-29 bomber piloted by Paul Tibbets dropped a 15-kiloton uranium 235 atomic bomb on Hiroshima, destroying 62,000 buildings and killing 70,000 of the 350,000 inhabitants of Hiroshima, the first city in history to suffer this type of bombardment. Radiation-related injuries will bring the death toll to 140,000 in the months and years that follow.",
    fr: "Le 6 août 1945, le bombardier B-29 piloté par Paul Tibbets lâche sur Hiroshima une bombe atomique à l'uranium 235 d'une puissance de 15 kilotonnes, détruisant 62 000 bâtiments et faisant 70 000 morts sur les 350 000 habitants de Hiroshima, première ville de l'histoire à subir ce type de bombardement. Les blessures liées aux radiations porteront le bilan à 140 000 victimes dans les mois et années suivantes.",
    jp: "1945年8月6日、ポール・ティベッツが操縦するB-29爆撃機は、15キロトンのウラン235原子爆弾を広島に投下し、6万2千の建物を破壊し、35万人の住民のうち9万人から16.6万人が死亡し、史上初の被爆都市となります。また、原爆投下後の入市被爆者も含め56万人が被爆したとされています。",
  },
  prg2_WWII: {
    en: "According to the National Museum of the City of Hiroshima, the city would have been deliberately spared by the Americans during the conventional bombing to avoid any prior damage, in order to better assess the effects of the atomic bomb. That is why, after the bombing, American study stations were set up in the Hiroshima area to study its effects, as the launch tests that were done until the day of the bombing were only on a small scale.",
    fr: "Selon le musée national de la ville d'Hiroshima, la ville aurait été sciemment épargnée par les américains lors des bombardements conventionnels pour éviter tout dommage préalable, afin de mieux évaluer les effets de la bombe atomique. C'est pour cela qu'après le bombardement, des postes d'études américains furent installés dans la région d'Hiroshima pour étudier ses effets, les tests de lancement ayant été réalisés jusqu'au jour du bombardement n'étaient qu'à petite échelle.",
    jp: "According to the National Museum of the City of Hiroshima, the city would have been deliberately spared by the Americans during the conventional bombing to avoid any prior damage, in order to better assess the effects of the atomic bomb. That is why, after the bombing, American study stations were set up in the Hiroshima area to study its effects, as the launch tests that were done until the day of the bombing were only on a small scale.",
  },
  prg3_WWII: {
    en: "The Japanese wanted to surrender, and the Americans wanted to stop the war because there had been enough massacres. The Americans therefore passed a petition calling for an end to the war, but this petition was intercepted by Leslie Groves, an American general, who saw an economic interest in the use of the nuclear bomb. Since Harry Truman never received this petition, he ordered the bombing of Hiroshima. History will simply say that he used the atomic bomb to force the Japanese surrender.",
    fr: "Les japonais souhaitaient se rendre, et les américains souhaitaient arrêter la guerre car il y avait eu assez de massacres. Ces derniers ont donc fait passer une pétition demandant l'arrêt de la guerre, mais cette pétition a été interceptée par Leslie Groves, un général américain, qui voyait un intérêt économique à l'utilisation de la bombe nucléaire. Harry Truman n'ayant jamais reçu cette pétition, ordonna le bombardement d'Hiroshima. L'histoire dira simplement qu'il utilisa la bombe atomique pour forcer la reddition japonaise.",
    jp: "日本側は降伏を望み、アメリカ側は十分な虐殺があったので戦争を止めたいと考えていましたが、この嘆願書は、核爆弾の使用に経済的利益を見出していたアメリカの将軍、レスリー・グローブスによって阻止されてしまいました。ハリー・トルーマンはこの嘆願書を受け取ることなく、広島への原爆投下を命じました。歴史上、トルーマンは日本を降伏させるために原爆を使用したとだけ語られています。",
  },
  // TIMELINE CONTENT 6
  uptitle_postwar: {
    en: "From 1945 to nowadays",
    fr: "De 1945 à aujourd'hui",
    jp: "1945年から現在",
  },
  title_postwar: {
    en: "POSTWAR PERIOD",
    fr: "L'APRÉS GUERRE",
    jp: "戦後",
  },
  prg1_postwar: {
    en: "After the trauma, a plan to rebuild Hiroshima was launched, notably through the Hiroshima City Peace Memorial Construction Law, passed by the government in 1949, which provided funding for the city's rebirth. In the same year, the Japanese Parliament proclaimed Hiroshima \"City of Peace\".",
    fr: "Passé le traumatisme, un plan de reconstruction d'Hiroshima est lancé, via notamment la Loi de Construction du Mémorial de la Paix de la Ville d'Hiroshima, votée par le gouvernement en 1949 et qui prévoit le financement pour faire renaître la ville. La même année, le Parlement japonais proclame Hiroshima \"Cité de la paix\".",
    jp: "戦後、1949年に広島平和記念都市建設法が公布され、広島の再生のための資金が提供されるなど、広島の再建計画が始まり、同年、日本の国会は広島を「平和都市」と宣言しました。",
  },
  prg2_postwar: {
    en: "The Hiroshima Prefectural Trade Promotion Hall, a building located 160 meters from the epicenter and having resisted the blast, becomes the A-Bomb Dome. Around the monument, the Peace Memorial Arch was inaugurated in 1954 and the Memorial Museum in 1955. A victim of war, Hiroshima has since then been the first city to become an ambassador for peace, with its city hall promoting the abolition of nuclear weapons.",
    fr: "Le Hall préfectoral de promotion commerciale d'Hiroshima, bâtiment situé à 160 mètres de l'épicentre et ayant résisté à la déflagration, devient le Dôme de la Bombe A. Autour du monument, le Parc du Mémorial de la Paix est inauguré en 1954, le Musée du mémorial en 1955. Victime de la guerre, Hiroshima est depuis lors la première ville ambassadrice de la paix, sa mairie promouvant l'abolition des armes nucléaires.",
    jp: "震源地から160メートルの距離にあり、爆風に耐えた広島県貿易奨励館が、現在の原爆ドームです。原爆ドーム周辺には、1954年に平和記念アーチ、1955年に記念館が完成し、戦争の犠牲となった広島は、その後、核兵器廃絶を推進する市庁舎を持つ、世界で初めての平和大使となりました。",
  },
  prg3_postwar: {
    en: "In November 2010 at the Hiroshima Summit, the Dalai Lama and five other prize winners attended the Nobel Peace Prize Summit. The summit was dedicated to nuclear disarmament and held in Hiroshima. Hiroshima too has changed. The \"calcined plain\" is now a forward-looking city of 1.2 million inhabitants, as the new Orizuru Tower inaugurated in the summer of 2016. A city resolutely committed to its role as world capital of peace",
    fr: "En novembre 2010 lors du sommet d'Hiroshima, le Dalaï-lama] et cinq autres lauréats du prix ont participé au sommet des prix Nobel de la Paix. Ce sommet était consacré au désarmement nucléaire et organisé à Hiroshima. Hiroshima aussi a changé. La \"plaine calcinée\" est aujourd'hui une ville de 1,2 million d'habitants, tournée vers l'avenir, à l'image de la nouvelle Tour Orizuru inaugurée à l'été 2016. Une ville résolument engagée dans son rôle de capitale mondiale de la paix.",
    jp: "2010年11月、広島で開催された「ノーベル平和賞サミット」に、ダライ・ラマをはじめとする5人の受賞者が出席しました。このサミットは核軍縮を目的とし、広島で開催されました。2016年夏におりづるタワーが完成したように、広島もどんどん変化し続けています。「石灰化した平原」は、今や120万人の人口を抱える前向きな都市となり、国際平和文化都市として平和へのメッセージを全世界へ発信しています。",
  },
  // INTERACTIVE MAP
  interactive_title: {
    en: "Interactive map",
    fr: "Carte interactive",
    jp: "インタラクティブマップ",
  },
  kb_title: {
    en: "Kyobashi bridge",
    fr: "Pont Kyobashi",
    jp: "Kyobashi bridge"
  },
  kb_address: {
    en: "Minami Ward, 732-0828 Hiroshima, Japan",
    fr: "Minami Ward, 732-0828 Hiroshima, Japon",
    jp: "Minami Ward, 732-0828 Hiroshima, Japan"
  },
  kb_desc: {
    en: "Kyobashi Bridge was constructed as a national bridge across the Kyobashi River and completed in August 1927. Steel plates were originally used for the bridge girders, but they were requisitioned by the government during the war. On August 6, 1945, the bridge was exposed to the atomic bomb 1,380 meters from the hypocenter. Although the bridge's newel post was broken at the upper section, the function of the bridge was not in any way affected. The bridge was used as an evacuation route and for relief efforts for the injured.",
    fr: "Le pont de Kyobashi a été construit comme un pont national sur la rivière Kyobashi et a été achevé en août 1927. Des plaques d'acier ont été utilisées à l'origine pour les poutres du pont, mais elles ont été réquisitionnées par le gouvernement pendant la guerre. Le 6 août 1945, le pont a été exposé à la bombe atomique à 1380 mètres de l'hypocentre. Bien que le poteau du pont ait été cassé dans la partie supérieure, la fonction du pont n'a été en rien affectée. Le pont a été utilisé comme voie d'évacuation et pour les secours aux blessés.",
    jp: "Kyobashi Bridge was constructed as a national bridge across the Kyobashi River and completed in August 1927. Steel plates were originally used for the bridge girders, but they were requisitioned by the government during the war. On August 6, 1945, the bridge was exposed to the atomic bomb 1,380 meters from the hypocenter. Although the bridge's newel post was broken at the upper section, the function of the bridge was not in any way affected. The bridge was used as an evacuation route and for relief efforts for the injured."
  },
  eb_title: {
    en: "Enkobashi bridge",
    fr: "Pont Enkobashi",
    jp: "Enkobashi bridge"
  },
  eb_address: {
    en: "Enkobashicho, Minami Ward, Hiroshima, 732-0823, Japan",
    fr: "Enkobashicho, Minami Ward, Hiroshima, 732-0823, Japon",
    jp: "Enkobashicho, Minami Ward, Hiroshima, 732-0823, Japan"
  },
  eb_desc: {
    en: "In Hiroshima, kappa, a water goblin or an imaginary amphibious animal, is called \"enko.\" Enkobashi Bridge which was built across the Enko River had been an important bridge on the route connecting Kyoto with Kyushu ever since the Edo Period. The bridge was rebuilt as a permanent bridge in 1926 by the Hiroshima Prefectural government. It was a very ornate bridge and had a monkey engraved on the bridge railing and a statue of an eagle flapping its wings attached to a model of a globe on the newel post. As the war intensified, however, these ornaments were requisitioned by the government, and a bridge railing and newel post made of stone were installed instead. On August 6, 1945, the bridge was exposed to the atomic bomb 1,820 meters from the hypocenter, but it survived the blast caused by the atomic bomb and ensuing fires and was subsequently used as an evacuation route.",
    fr: "À Hiroshima, le kappa, un gobelin d'eau ou un animal amphibie imaginaire, est appelé \"enko\". Le pont Enkobashi, qui a été construit sur la rivière Enko, était un pont important sur la route reliant Kyoto à Kyushu depuis la période Edo. Le pont a été reconstruit comme un pont permanent en 1926 par le gouvernement de la préfecture d'Hiroshima. C'était un pont très orné, avec un singe gravé sur la balustrade du pont et une statue d'un aigle battant des ailes, attachée à un modèle de globe terrestre sur le poteau du pont. Cependant, comme la guerre s'intensifiait, ces ornements ont été réquisitionnés par le gouvernement, et une balustrade de pont et un poteau en pierre ont été installés à la place. Le 6 août 1945, le pont fut exposé à la bombe atomique à 1 820 mètres de l'hypocentre, mais il survécut à l'explosion de la bombe atomique et aux incendies qui s'ensuivirent et fut ensuite utilisé comme voie d'évacuation.",
    jp: "In Hiroshima, kappa, a water goblin or an imaginary amphibious animal, is called \"enko.\" Enkobashi Bridge which was built across the Enko River had been an important bridge on the route connecting Kyoto with Kyushu ever since the Edo Period. The bridge was rebuilt as a permanent bridge in 1926 by the Hiroshima Prefectural government. It was a very ornate bridge and had a monkey engraved on the bridge railing and a statue of an eagle flapping its wings attached to a model of a globe on the newel post. As the war intensified, however, these ornaments were requisitioned by the government, and a bridge railing and newel post made of stone were installed instead. On August 6, 1945, the bridge was exposed to the atomic bomb 1,820 meters from the hypocenter, but it survived the blast caused by the atomic bomb and ensuing fires and was subsequently used as an evacuation route."
  },
  st_title: {
    en: "Shoko-ji temple",
    fr: "Temple Shoko-ji",
    jp: "Shoko-ji temple"
  },
  st_address: {
    en: "Yamanecho, Higashi Ward, Hiroshima, 732-0048, Japan",
    fr: "Yamanecho, Higashi Ward, Hiroshima, 732-0048, Japon",
    jp: "Yamanecho, Higashi Ward, Hiroshima, 732-0048, Japan"
  },
  st_desc: {
    en: "The temple of Shokoji has an ancient history - the original dates are not known, but it is known that the temple predates the city itself. In fact, the temple provided lodging to lord Mori Terumoto in 1589 while he was surveying the site that would eventually become Hiroshima Castle. Although some stories suggest that the leader of the famous 47 Ronin - Oishi - is buried here, this is somewhat an exaggeration. In actual fact, one of the retainers took a lock of Oishi’s hair and bought it to Hiroshima for burial. It was first taken to the nearby Kokuzenji Temple - as that was the family temple of the Asano lord that the ronin had avenged - however it was turned away. Instead, the hair was buried at Shokoji. The Shokoji Temple is one of the stops on the Futabanosato Historical Walking Trail.",
    fr: "Le temple de Shokoji a une histoire ancienne - les dates d'origine ne sont pas connues, mais on sait que le temple est antérieur à la ville elle-même. En fait, le temple a servi de logement au seigneur Mori Terumoto en 1589, alors qu'il était en train d'étudier le site qui allait devenir le château d'Hiroshima. Bien que certaines histoires suggèrent que le chef du célèbre 47 ronin - Oishi - est enterré ici, c'est un peu exagéré. En fait, l'un des serviteurs a pris une mèche de cheveux d'Oishi et l'a achetée pour l'enterrer à Hiroshima. Elle a d'abord été transportée au temple Kokuzenji, situé à proximité, car c'était le temple familial du seigneur Asano que le ronin avait vengé, mais elle a été détournée. Au lieu de cela, les cheveux furent enterrés à Shokoji. Le temple Shokoji est l'une des étapes du sentier de randonnée historique de Futabanosato.",
    jp: "The temple of Shokoji has an ancient history - the original dates are not known, but it is known that the temple predates the city itself. In fact, the temple provided lodging to lord Mori Terumoto in 1589 while he was surveying the site that would eventually become Hiroshima Castle. Although some stories suggest that the leader of the famous 47 Ronin - Oishi - is buried here, this is somewhat an exaggeration. In actual fact, one of the retainers took a lock of Oishi’s hair and bought it to Hiroshima for burial. It was first taken to the nearby Kokuzenji Temple - as that was the family temple of the Asano lord that the ronin had avenged - however it was turned away. Instead, the hair was buried at Shokoji. The Shokoji Temple is one of the stops on the Futabanosato Historical Walking Trail."
  },
  tt_title: {
    en: "Tokuei-ji temple",
    fr: "Temple Tokuei-ji",
    jp: "Tokuei-ji temple"
  },
  tt_address: {
    en: "Kanayamacho, Naka Ward, Hiroshima, 730-0022, Japan",
    fr: "Kanayamacho, Naka Ward, Hiroshima, 730-0022, Japon",
    jp: "Kanayamacho, Naka Ward, Hiroshima, 730-0022, Japan"
  },
  tt_desc: {
    en: "This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever.",
    fr: "Cette photo montre le temple bouddhiste Tokueiji à Hiroshima, au Japon. Il a été détruit par les bombardements atomiques des États-Unis sur Hiroshima en 1945. Ce qui a coûté la vie à 166 000 personnes et détruit environ 90 % de la ville. Environ 60.000 bâtiments sur 90.000 sont perdus à jamais.",
    jp: "This shows the Tokueiji Buddhist Temple in Hiroshima, Japan. It was destroyed by the United States' Atomic bombings of Hiroshima in 1945. Which costs 166.000 people their lives, and destroyed about 90 Percent of the whole city. About 60.000 Buildings from 90.000 are lost forever."
  },
  som_title: {
    en: "School of Medicine",
    fr: "Ecole de médecine",
    jp: "School of Medicine"
  },
  som_address: {
    en: "1 Chome-2-3 Kasumi, Minami Ward, Hiroshima, 734-8553, Japan",
    fr: "1 Chome-2-3 Kasumi, Minami Ward, Hiroshima, 734-8553, Japon",
    jp: "1 Chome-2-3 Kasumi, Minami Ward, Hiroshima, 734-8553, Japan"
  },
  som_desc: {
    en: "The School of Medicine shares a common philosophy to cultivate the following personnel in medicine and health sciences: those who acquire a rich sense of humanity and broad knowledge appropriate for practitioners of medicine, health and welfare; basic knowledge, skills and attitude for professional practice; scientific and creative thinking abilities; a deep interest in regional medicine; global awareness.",
    fr: "L'École de médecine partage une philosophie commune visant à former le personnel suivant en médecine et en sciences de la santé : ceux qui acquièrent un riche sens de l'humanité et de vastes connaissances adaptées aux praticiens de la médecine, de la santé et du bien-être ; des connaissances, des compétences et une attitude de base pour la pratique professionnelle ; des capacités de réflexion scientifique et créative ; un profond intérêt pour la médecine régionale ; une conscience mondiale.",
    jp: "The School of Medicine shares a common philosophy to cultivate the following personnel in medicine and health sciences: those who acquire a rich sense of humanity and broad knowledge appropriate for practitioners of medicine, health and welfare; basic knowledge, skills and attitude for professional practice; scientific and creative thinking abilities; a deep interest in regional medicine; global awareness."
  },
  ap_title: {
    en: "Akamatsu pharmacy",
    fr: "Pharmacie Akamatsu",
    jp: "Akamatsu pharmacy"
  },
  ap_address: {
    en: "8-29 Hondori, Naka Ward, Hiroshima, 730-0035, Japan",
    fr: "8-29 Hondori, Naka Ward, Hiroshima, 730-0035, Japon",
    jp: "8-29 Hondori, Naka Ward, Hiroshima, 730-0035, Japan"
  },
  ap_desc: {
    en: "Akamatsu Pharmacy is an old drugstore established about 400 years ago. In July 1945, Mr. Akamatsu started his studies at a pharmaceutical college in Gifu Prefecture to become a pharmacist. The next month, the atomic bomb dropped by the United States exploded in the sky above his hometown. After World War II, Mr. Akamatsu rebuilt the pharmacy with his older brother, who had returned to Japan after completing his military service, and worked to once again make it a Hondori symbol. However, there were no photos of his parents’ beloved pharmacy taken before the atomic bombing. Unable to forget his expression of disappointment, we continued to collect information, ultimately discovering—in the Hiroshima University Archives in the city of Higashihiroshima—a photo taken around 1942 that showed the sign “Medicine, Akamatsu Pharmacy” and the store front.",
    fr: "La pharmacie Akamatsu est une ancienne pharmacie créée il y a environ 400 ans. En juillet 1945, M. Akamatsu a commencé ses études dans un collège pharmaceutique de la préfecture de Gifu pour devenir pharmacien. Le mois suivant, la bombe atomique larguée par les États-Unis a explosé dans le ciel de sa ville natale. Après la Seconde Guerre mondiale, M. Akamatsu a reconstruit la pharmacie avec son frère aîné, qui était retourné au Japon après son service militaire, et a travaillé pour en faire à nouveau un symbole du Hondori. Cependant, aucune photo de la pharmacie bien-aimée de ses parents n'a été prise avant le bombardement atomique. Ne pouvant oublier son expression de déception, nous avons continué à recueillir des informations, pour finalement découvrir - dans les archives de l'université d'Hiroshima, dans la ville d'Higashihiroshima - une photo prise vers 1942 qui montrait l'enseigne \"Médecine, pharmacie Akamatsu\" et la devanture du magasin.",
    jp:"Akamatsu Pharmacy is an old drugstore established about 400 years ago. In July 1945, Mr. Akamatsu started his studies at a pharmaceutical college in Gifu Prefecture to become a pharmacist. The next month, the atomic bomb dropped by the United States exploded in the sky above his hometown. After World War II, Mr. Akamatsu rebuilt the pharmacy with his older brother, who had returned to Japan after completing his military service, and worked to once again make it a Hondori symbol. However, there were no photos of his parents’ beloved pharmacy taken before the atomic bombing. Unable to forget his expression of disappointment, we continued to collect information, ultimately discovering—in the Hiroshima University Archives in the city of Higashihiroshima—a photo taken around 1942 that showed the sign “Medicine, Akamatsu Pharmacy” and the store front."
  },
  // EVENT
  event_title: {
    en: "Events",
    fr: "Événements",
    jp: "イベント",
  },
  event_desc: {
    en: "The Machinaka West National Highway Promotion Council is an association in charge of the promotion of the Saigoku road around Hiroshima. They organize a large amount of cultural events like music concerts, festivals and gastronomic discoveries. Discover all their events on their own website and learn more about the association.",
    fr: "Le Machinaka West National Highway Promotion Council est une association en charge de la promotion de la route de Saigoku autour d’Hiroshima. Ils organisent une grande variété d’interventions culturelles comme des concerts de musique traditionnelle, des festivals ou encore des découvertes gastronomiques. Découvrez tous leurs évènements sur leur propre site et apprenez en plus sur l’association.",
    jp: "まちなか西国街道推進協議会は、広島を中心とした西国街道の振興を担当する団体です。まちなか西国街道推進協議会は、広島周辺の西国街道の振興を目的とした協議会で、音楽会やお祭り、美食会などの文化イベントを数多く開催しています。まちなか西国街道推進協議会のウェブサイトでは、すべてのイベントを紹介しています。また、同協議会の詳細についてもご覧いただけます。"
  },
  discover_events: {
    en: "Discover all events",
    fr: "Découvrir les événements",
    jp: "すべてのイベントを見てみよう"
  },
  // PROJECTS
  discover_title: {
    en: "Discover differently",
    fr: "Découvrir différemment",
    jp: "異なる視点から発見しよう",
  },
  ar_button: {
    en: "AR project",
    fr: "Projet AR",
    jp: "ARプロジェクト",
  },
  vr_button: {
    en: "VR project",
    fr: "Projet VR",
    jp: "VRプロジェクト",
  },
  web_button: {
    en: "Web project",
    fr: "Projet Web",
    jp: "WEBプロジェクト",
  },
  project_team: {
    en: "See the project team",
    fr: "Voir toutes les équipes",
    jp: "プロジェクトチームについて",
  },
  footer: {
    en: "Developed by CNAM students in collaboration with Ingemedia students, french schools",
    fr: "Développé par les étudiants du CNAM en collaboration avec les étudiants d'Ingémédia, écoles françaises",
    jp: "CNAM、トゥーロン大学Ingemedia課等のフランスの学生により共同開発されました。",
  },
  back_button: {
    en: "Back",
    fr: "Retour",
    jp: "戻る"
  },
  projects: {
    en: "Projects",
    fr: "Projets",
    jp: "プロジェクト"
  },
  // VR
  vr_title: {
    en: "Hiroshima Castle town immersion: On the traces of the Saigoku Kaido",
    fr: "Immersion dans la ville du château d'Hiroshima : Sur les traces du Saigoku Kaido",
    jp: "広島城下町イマージョン: 西国街道の痕跡をたどる"
  },
  vr_desc1: {
    en: "This project immerses you in the Edo period, in the old streets of Hiroshima and more particularly known as Hondori street today. You are accompanied by a descendant of a famous merchant family of the time who is proud to tell the story of his city. Equip yourself with the virtual helmet, let yourself be guided and immerse yourself in the stories that blend into the pilgrimage of the Saigoku road.",
    fr: "Ce projet vous plonge dans la période Edo, dans les vieilles rues d'Hiroshima et plus particulièrement dans la rue Hondori aujourd'hui. Vous êtes accompagné par un descendant d'une célèbre famille de commerçants de l'époque qui est fier de raconter l'histoire de sa ville. Equipez-vous du casque virtuel, laissez-vous guider et immergez-vous dans les histoires qui se fondent dans le pèlerinage de la route de Saigoku.",
    jp: "本プロジェクトでは、江戸時代の広島の古い町並み、特に現在「本通り」として知られている通り等を歩いて体験することができます。本プロジェクトでは、当時の有名な商家の子孫が同行し、自分の街について誇りを持って語ります。バーチャルヘッドセットをつけて、ガイドに身を任せ、西国街道の巡礼に溶け込んだ世界を楽しんでみませんか。"
  },
  vr_desc2: {
    en: "We wish you a good exploration !",
    fr: "Nous vous souhaitons une bonne exploration !",
    jp: "どうぞお楽しみください！"
  },
  // AR
  ar_desc1: {
    en: "Due to the Coronavirus crisis, tourism has been really impacted in the entire world, including the city of Hiroshima. Everyone's freedom is limited, and priorities go more towards evenings with friends and family than towards culture and the discovery of heritage.",
    fr: "En raison de la crise du Coronavirus, le tourisme a été réellement touché dans le monde entier, y compris dans la ville d'Hiroshima. La liberté de chacun est limitée, et les priorités vont plus aux soirées entre amis et en famille qu'à la culture et à la découverte du patrimoine.",
    jp: "新型コロナウイルスにより、広島市だけでなく、世界各地の観光地にも大きな影響が出ています。人々の自由は制限され、文化や遺産などの発見よりも、友人や家族と過ごす時間が優先されている状況です。"
  },
  ar_desc2: {
    en: "That’s why we have developed the “Hiroshimap” smartphone application to help revitalize tourism in Hiroshima.",
    fr: "C'est pourquoi nous avons développé l'application pour smartphone \"Hiroshimap\" pour aider à revitaliser le tourisme à Hiroshima.",
    jp: "そこで、広島の観光を活性化させるために、スマートフォンアプリ「Hiroshimap」を開発しました。"
  },
  ar_desc3: {
    en: "Hiroshimap is a smartphone application using geolocalization that permits gathering points of interest on the Saigoku road. The application offers another option which consists in using the smartphone camera to exploit AR (Augmented Reality) technology. The application uses this AR technology to display essential information thanks to a virtual character.",
    fr: "Hiroshimap est une application pour smartphone utilisant la géolocalisation qui permet de rassembler des points d'intérêt sur la route de Saigoku. L'application offre une autre option qui consiste à utiliser la caméra du smartphone pour exploiter la technologie AR (Réalité Augmentée). L'application utilise cette technologie AR pour afficher des informations essentielles grâce à un personnage virtuel.",
    jp: "Hiroshimapは、西国街道の名所を紹介できるジオローカリゼーションを利用したスマートフォンアプリケーションです。スマートフォンのカメラを使用したAR（拡張現実）技術を利用することもできます。このアプリケーションでは、AR技術を利用して、必要な情報を仮想のキャラクターで表示します。"
  },
  ar_desc4: {
    en: "The goal is to make the visit of Hiroshima and get an overview of main monuments and points of interests. This will help to teach users the history of the city and to learn in a fun way.",
    fr: "L'objectif est de faire la visite d'Hiroshima et d'avoir un aperçu des principaux monuments et points d'intérêt. Cela permettra d'enseigner aux utilisateurs l'histoire de la ville et d'apprendre de manière ludique.",
    jp: "目的は、広島を訪問し、主要なモニュメントや興味のあるポイントの概要を知っていただくことです。これにより、ユーザーの皆様に広島の歴史を楽しく学んでいただけます。"
  },
  ar_desc5: {
    en: "The application is available on any Android smartphone.",
    fr: "L'application est disponible sur tout smartphone Android.",
    jp: "このアプリケーションは、Androidのスマートフォンでご利用いただけます。"
  },
  // WEB
  web_desc1: {
    en: "We build this website as part of a collaborative work between the CNAM and Ingemedia, respectively an IT engineering school and an audio-visual communication school, with the aim of promoting toursim in the Hiroshima region in Japan.",
    fr: "Nous avons construit ce site dans le cadre d'un travail de collaboration entre le CNAM et Ingémédia, respectivement une école d'ingénieurs en informatique et une école de communication audiovisuelle, dans le but de promouvoir le tourisme dans la région d'Hiroshima au Japon.",
    jp: "このウェブサイトは、日本の広島地域の観光を促進することを目的として、CNAMとトゥーロン大学Ingemedia課などのITエンジニアリングスクールとオーディオビジュアルコミュニケーションスクールとの共同作業の一環として構築しました。"
  },
  web_desc2: {
    en: "The timeline describes the main periods of the Hiroshima region, and the interactive map presents some monuments of the Saigoku road.",
    fr: "La timeline décrit les principales périodes de la région d'Hiroshima, et la carte interactive présente quelques monuments de la route de Saigoku.",
    jp: "タイムラインでは、広島エリアの主な歴史、インタラクティブマップでは西国街道のモニュメント等を紹介しています。"
  },
  // Projects participants
  title_participants: {
    en: "Project participants",
    fr: "Participants du projet",
    jp: "プロジェクト参加者"
  },
  intro_participants: {
    en: "It is a multidisciplinary project (web/AR/VR) developed by the students of two french schools, the CNAM and Ingemedia, in order to encourage tourism in Japan but more specifically in the Hiroshima region through Saigoku road.",
    fr: "Il s'agit d'un projet multidisciplinaire (web/AR/VR) développé par les élèves de deux écoles françaises toulonnaises, le CNAM et Ingémédia, afin d'encourager le tourisme au Japon mais plus spécifiquement dans la région d'Hiroshima par la route de Saigoku.",
    jp: "本事業は、CNAMとトゥーロン大学Ingemedia課のフランスの2校の学生が開発した学際的なプロジェクト（Web/AR/VR）で、日本への観光促進を目的としていますが、特に西国街道を通じた広島エリアへの観光を促進することを目的としています。"
  },
  cnam_teacher_coordinator: {
    en: "CNAM teacher and coordinator",
    fr: "Enseignante et coordinatrice au CNAM",
    jp: "CNAMの講師およびコーディネーター"
  },
  cnam_teacher: {
    en: "CNAM teacher",
    fr: "Enseignant au CNAM",
    jp: "CNAMの講師"
  },
  cnam_ingemedia_teacher: {
    en: "CNAM and Ingemedia teacher",
    fr: "Enseignant au CNAM et à Ingémédia",
    jp: "CNAMおよびトゥーロン大学Ingemedia課の講師"
  },
  ingemedia_director: {
    en: "Ingemedia director and teacher, CNAM teacher",
    fr: "Directeur d'Ingémédia / enseignant à Ingémédia et au CNAM",
    jp: "トゥーロン大学Ingemedia課のディレクターおよび講師、CNAMの講師"
  },
  web_manager: {
    en: "Web project manager / Web developer",
    fr: "Chef de projet web / Développeur web",
    jp: "Webプロジェクトマネージャー／Webデベロッパー"
  },
  web_dev: {
    en: "Web developer",
    fr: "Développeur web",
    jp: "Webデベロッパー"
  },
  graph_3D: {
    en: "Graphist / 3D designer",
    fr: "Graphiste / Designer 3D",
    jp: "グラフィッカー/3Dデザイナー"
  },
  web_3D: {
    en: "Web designer / 3D designer",
    fr: "Designer web / 3D",
    jp: "Webデザイナー/3Dデザイナー"
  },
  storytelling: {
    en: "Storytelling / Communication",
    fr: "Storytelling / Communication",
    jp: "ストーリーテリング/コミュニケーション"
  },
  ar_manager: {
    en: "AR project manager",
    fr: "Chef de projet AR",
    jp: "ARプロジェクトマネージャー"
  },
  com_manager: {
    en: "Communication Project Manager",
    fr: "Responsable communication",
    jp: "コミュニケーションプロジェクトマネージャー"
  },
  unity_lead: {
    en: "Unity3D lead developer",
    fr: "Lead développeur Unity3D",
    jp: "Unity３Dリード・デベロッパー"
  },
  unity: {
    en: "Unity3D developer",
    fr: "Développeur Unity3D",
    jp: "Unity３Dデベロッパー"
  },
  marketing: {
    en: "Marketing / Communication",
    fr: "Marketing / Communication",
    jp: "マーケティング/コミュニケーション"
  },
  cpt_design: {
    en: "Computer graphic designer",
    fr: "Infographiste",
    jp: "コンピューターグラフィックデザイナー"
  },
  graph_design: {
    en: "Graphic designer",
    fr: "Designer graphique",
    jp: "グラフィックデザイナー"
  },
  design_3d: {
    en: "3D designer",
    fr: "Designer 3D",
    jp: "３Dデザイナー"
  },
  design_2d: {
    en: "2D designer",
    fr: "Designer 2D",
    jp: "２Dデザイナー"
  },
  lead_3d: {
    en: "Lead 3D designer",
    fr: "Responsable design 3D",
    jp: "リード３Dデザイナー"
  },
  cnam: {
    en: "CNAM: IT and multimedia engineer",
    fr: "Ingénieur informatique au CNAM",
    jp: "CNAM：IT・マルチメディアエンジニア"
  },
  ingemedia: {
    en: "Ingemedia",
    fr: "Ingémédia",
    jp: "トゥーロン大学Ingemedia課"
  },
  num_creat: {
    en: "Ingemedia: numeric creation",
    fr: "Ingémédia : Création numérique",
    jp: "トゥーロン大学Ingemedia課: 数値化"
  },
  ing_communication: {
    en: "Ingemedia: project management and communication",
    fr: "Ingémédia : Communication et management de projet",
    jp: "トゥーロン大学Ingemedia課: プロジェクトマネジメントとコミュニケーション"
  },
  read_more: {
    en: "Read more",
    fr: "En savoir plus",
    jp: "Read more"
  }
};

if (!localStorage.getItem('lang')) {
  localStorage.setItem('lang', 'en');
}
localStorage.getItem('lang');

var translator = $('.lang-wrapper').translate({
  lang: localStorage.getItem('lang'),
  t: dict,
});

$('.lang-selector').on('click', function (e) {
  e.preventDefault();
  var elLanguage = $(this).attr('data-value');
  localStorage.setItem('lang', elLanguage);
  translator.lang(elLanguage);
});