<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <script src="./assets/js/home.js" defer></script>
    <script src="../assets/js/timeline.js" defer ></script>
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

        <div class="container mt-5">
            <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
        </div>

        <div id="timeline">
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center">Timeline</h2>
            </div>
            <section class="timeline-carousel">
                <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
                <!--Timeline item = EARLY HISTORY-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('https://www.historyonthenet.com/wp-content/uploads/2016/12/135151-004-0D4D550E.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">Avant le châteaux</span>
                            <span class="month">EARLY HISTORY</span>
                            <p>Les premières traces humaines dans la région d'Hiroshima datent de l'ère Jômon, une période qui s'étend de 1300 à 400 avant J-C. Il faut toutefois remonter à la période Kofun ( env. 250-538) pour retrouver les premiers vestiges.</p>
                            <p>La ville d'Hiroshima fût officiellement fondée en 1589. Son nom signifie "grande île" en japonais.</p>
                            <p>Le choix de l'emplacement de la ville est dû à son emplacement stratégique sur le delta d'Ôta.</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->
                
                <!--Timeline item = SENGOKU PERIOD-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('http://factsforkids.net/wp-content/uploads/2013/09/13.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">De 1477 à 1573 </span>
                            <span class="month">SENGOKU PERIOD</span>
                            <p>L'époque Sengoku est marquée par de nombreux conflits militaires. On appelle également cette période l'époque des provinces en guerre.</p>
                            <p>Cette époque couvre la seconde moitié de l'époque Muromachi qui s'étend de 1336 à 1573. C'est la dernière époque avant la mise en place de la dynastie des shoguns Tokugawa.
                                C'est à cette époque que nait la culture du zen. Les constructions s'accompagnent des fameux jardins secs et la cérémonie du thé se développe. Elle se caractérise par l’harmonie, le respect, la pureté et la tranquillité.</p>
                            <p>La période Sengoku correspond également à l'arrivée des premiers occidentaux sur le territoire et notamment un navire portugais qui s'est réfugié au Japon pour éviter une tempête. Sous l'impulsion des échanges commerciaux, les villes se développent principalement autour des ports et sur les grands axes commerciaux intérieurs. Le Japon développe aussi fortement ses exploitation minière principalement d'or et d'argent, mais aussi son exploitation agricole.</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->
                
                <!--Timeline item = EDO PERIOD-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('https://cdn-images-1.medium.com/max/2000/1*tjpdoOeFp6PfczMjqh6JEA.jpeg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">De 1589 à 1871</span>
                            <span class="month">EDO PERIOD</span>
                            <p>En 1589, peu de temps avant le début de la période Edo, Mōri Terumoto, chef du puissant et respecté clan Mōri et membre du conseil des cinq anciens de Toyotomi Hideyoshi, ordonne la construction du château d’Hiroshima.
                                En 1593, le château étant fini, Mōri Terumoto investit les lieux.</p>
                            <p>À cette période, Hiroshima n’existait pas comme ville à part entière. C’était une zone géographique que l’on nommait Gokamura signifiant “Cinq Villages”.
                                Malgré le changement d’autorité sur le château, la zone Hiroshima fut une terre de paix jusqu’en 1869, ces années lui ont permis de se développer fortement.</p>
                            <p>Lors de la période de la restauration de Meiji, le château d’Hiroshima ou le château de la carpe fut protégé et ne fut pas l’un des nombreux châteaux démantelé.
                                Il est alors transformé en base militaire à la fin de l’ère Edo.</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->

                <!--Timeline item = IMPERIAL PERIOD-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('https://ichef-1.bbci.co.uk/news/660/media/images/72349000/jpg/_72349652_generals-on-horseback.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">De 1871 à 1939</span>
                        <span class="month">IMPERIAL PERIOD</span>
                            <p>Après que le système des Han ou des domaines soit aboli en 1871, la ville d’Hiroshima devint la capitale de la préfecture d’Hiroshima.
                                En avril 1888 un nouveau système de municipalité a été mis en place. En répercussion à cela, Hiroshima devient officiellement l’une des plus importantes villes du Japon le 1er Avril 1889.</p>
                            <p>Le chemin de fer San’yō fut agrandi en 1894, cette extension fut opérationnelle la même année. Une voie de chemin de fer fut créée entre la station principale et le port pour faciliter les transports durant la première guerre Sino-Japonaise.
                                Lors de cette guerre, le gouvernement japonais déplaça temporairement son quartier général dans le château d’Hiroshima. L’empereur Meiji garda ses quartiers au château du 15 septembre 1894 au 27 avril 1895.
                                Il faut savoir que les premiers échanges entre les représentants chinois et japonais se déroulèrent à Hiroshima du 1er au 4 février 1895.</p>
                            <p>Après la guerre Sino-Japonaise, la guerre Russo-Japonaise poussa le Japon dans le monde de l’industrialisation.
                                Lors de la première guerre mondiale, Hiroshima devint un point important de l’activité militaire.</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->
                
                <!--Timeline item = WORLD WAR II-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/timeline_ww2.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">De 1939 à 1945</span>
                            <span class="month">Seconde Guerre Mondiale et bombe atomique</span>
                            <p>Le 6 août 1945, le bombardier B-29 piloté par Paul Tibbets lâche sur Hiroshima une bombe atomique à l'uranium 235 d'une puissance de 15 kilotonnes, détruisant 62 000 bâtiments et faisant 70 000 morts sur les 350 000 habitants de Hiroshima, première ville de l'histoire à subir ce type de bombardement. Les blessures liées aux radiations porteront le bilan à 140 000 victimes dans les mois et années suivantes.</p>
                            <p>Selon le musée national de la ville d'Hiroshima, la ville aurait été sciemment épargnée par les américains lors des bombardements conventionnels pour éviter tout dommage préalable, afin de mieux évaluer les effets de la bombe atomique. C'est pour cela qu'après le bombardement, des postes d'études américains furent installés dans la région de Hiroshima pour étudier ses effets, les tests de lancement ayant été faits jusqu'au jour du bombardement n'étaient qu'à petite échelle.</p>
                            <p>Les japonais souhaitaient se rendre, et les américains souhaitaient arrêter la guerre car il y avait eu assez de massacres. Ces derniers ont donc fait passer une pétition demandant l'arrêt de la guerre, mais cette pétition a été interceptée par Leslie Groves, un général américain, qui voyait un intérêt économique à l'utilisation de la bombe nucléaire. Harry Truman n'ayant jamais reçu cette pétition, ordonna le bombardement de Hiroshima. L'histoire dira simplement qu'il utilisa la bombe atomique pour forcer la reddition japonaise.</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->
                
                <!--Timeline item = POST WORLD WAR II-->
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/timeline_after_war.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">De 1945 à aujourd'hui</span>
                            <span class="month">Après la seconde guerre mondiale</span>
                            <p>Passé le traumatisme, un plan de reconstruction d'Hiroshima est lancé, via notamment la Loi de Construction du Mémorial de la Paix de la Ville d'Hiroshima, votée par le gouvernement en 1949 et qui prévoit le financement pour faire renaître la ville. La même année, le Parlement japonais proclame Hiroshima "Cité de la paix".</p>
                            <p>Le Hall préfectoral de promotion commerciale d'Hiroshima, bâtiment situé à 160 mètres de l'épicentre et ayant résisté à la déflagration, devient le Dôme de la Bombe A. Autour du monument, le [Parc du Mémorial de la Paix](https://www.vivrelejapon.com/ville-hiroshima/parc-du-memorial-de-la-paix) est inauguré en 1954, le Musée du mémorial en 1955. Victime de la guerre, Hiroshima est depuis lors la première ville ambassadrice de la paix, sa mairie promouvant l'abolition des armes nucléaires.</p>
                            <p>En novembre 2010 lors du sommet d'Hiroshima, le [Dalaï-lama](https://fr.wikipedia.org/wiki/Dala%C3%AF-lama) et cinq autres lauréats du prix ont participé au sommet des [prix Nobel de la Paix](https://fr.wikipedia.org/wiki/Prix_Nobel_de_la_Paix). Ce sommet était consacré au désarmement nucléaire et organisé à Hiroshima.
                                Hiroshima aussi a changé. La "plaine calcinée" est aujourd'hui une ville de 1,2 million d'habitants, tournée vers l'avenir, à l'image de la nouvelle [Tour Orizuru](https://www.vivrelejapon.com/ville-hiroshima/orizuru-tower) inaugurée à l'été 2016. Une ville résolument engagée dans son rôle de capitale mondiale de la paix</p>
                        <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                <!--/Timeline item-->
                </div>
            </section>
            <!--Timeline carousel-->
        </div>

        <div id="map">

        </div>

        <article class="my-5" id="events">
            <div class="view parallax-events mb-3">
                <h2 class="display-4 text-white text-center">Events</h2>
            </div>
            <div class="container row mx-auto">
                <div class="card text-white col-md-8 border-0 my-3" data-aos="fade-up">
                    <img src="../assets/images/cover_events.jpg" class="card-img rounded-0" alt="AR project image">
                    <div class="card-img-overlay ml-4" data-aos="fade-right">
                        <a href="https://www.h-saigoku.town/chaya-bar/" class="btn btn-danger rounded-0" title="Learn more">Events</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="my-5" id="projects">
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center">Discover differently</h2>
            </div>
            <div class="container row mx-auto">
                <div class="card text-white col-md-6 border-0 mx-auto my-3" data-aos="zoom-in">
                    <img src="../assets/images/cover_ar.jpg" class="card-img rounded-0" alt="AR project image">
                    <div class="card-img-overlay ml-4">
                        <a href="/projects/ar-project" class="btn btn-danger rounded-0" title="AR project">AR project</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3" data-aos="zoom-in">
                    <img src="../assets/images/cover_vr.jpg" class="card-img rounded-0" alt="VR project image">
                    <div class="card-img-overlay mr-4 text-right">
                        <a href="/projects/vr-project" class="btn btn-danger rounded-0" title="VR project">VR project</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3" data-aos="zoom-in">
                    <img src="../assets/images/cover_web.jpg" class="card-img rounded-0" alt="Web project image">
                    <div class="card-img-overlay mr-4 text-center">
                        <a href="/projects/web-project" class="btn btn-danger rounded-0" title="Web project">Web project</a>
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