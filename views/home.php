<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <script src="./assets/js/home.js" defer></script>
    <script src="../assets/js/timeline.js" defer></script>
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
            <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
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
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('http://factsforkids.net/wp-content/uploads/2013/09/13.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year">From 1477 to 1573</span>
                            <span class="month">SENGOKU PERIOD</span>
                            <p>Sengoku era is full of military conflict. This period is also called "The Province in War Era".</p>
                            <p>This era cover half of the Muromachi age wich is from 1336 to 1573. It's the last period before the dynasty of Tokugawa shogun takes place. It's in this age that the zen culture was born. Buildings were accompanied by those famous dry garden and the tea ceremony raised at this moment. Caractised by harmony, respect, purity and tranquility.</p>
                            <p>It's during the Sengoku Period that the West arrived on the area for exemple a portuguese ship took refuge in Japan to avoid a storm. As a result of trade exchange, cities are developed aroud harbours and internal commercial axes. Japan is also strongly developing its mining operations, mainly of gold and iron, but also its agricultural exploitation.  </p>
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
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/timeline_ww2.jpg') center center; background-size:cover;"></div>
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
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/timeline_after_war.jpg') center center; background-size:cover;"></div>
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

            </div>
        </article>

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