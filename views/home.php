<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="./assets/js/home.js" defer></script>
    <script src="./assets/js/timeline.js" defer></script>
</head>

<body class="lang-wrapper">
    <section>
        <div class="header" id="title">
            <?php include(__DIR__ . "/lang_wrapper.inc.php"); ?>
            <div class="inner-header flex mt-5">
                <h1 class="display-3" data-aos="zoom-out" data-aos-duration="1000">Hiroshima Exploration</h1>
                <h2 data-aos="zoom-out" data-aos-duration="1000">ひろしまたんけん</h2>
                <hr class="sm-separator w-25 my-md-5">
                <div class="mx-auto container mt-md-5 row" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold trn" id="scroll-timeline" title="Scroll to the timeline">timeline_title</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold trn" id="scroll-map" title="Scroll to the map">interactive_title</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold trn" id="scroll-events" title="Scroll to the events">event_title</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold trn" id="scroll-projects" title="Scroll to the projects">discover_title</button>
                    </div>
                </div>
            </div>

            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>

        <div class="container my-5">
            <p class="lead py-5 trn">text_intro</p>
        </div>

        <article>
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center trn">timeline_title</h2>
            </div>
            <div class="timeline-carousel" id="timeline">
                <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/before_the_castle.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_early</span>
                            <span class="month trn">title_early</span>
                            <p class="trn">prg1_early</p>
                            <p class="trn">prg2_early</p>
                            <p class="trn">prg3_early</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/sengoku.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_sengoku</span>
                            <span class="month trn">title_sengoku</span>
                            <p class="trn">prg1_sengoku</p>
                            <p class="trn">prg2_sengoku</p>
                            <p class="trn">prg3_sengoku</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/castle_edo.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_edo</span>
                            <span class="month trn">title_edo</span>
                            <p class="trn">prg1_edo</p>
                            <p class="trn">prg2_edo</p>
                            <p class="trn">prg3_edo</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/imperial_train.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_imperial</span>
                            <span class="month trn">title_imperial</span>
                            <p class="trn">prg1_imperial</p>
                            <p class="trn">prg2_imperial</p>
                            <p class="trn">prg3_imperial</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/ww2.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_WWII</span>
                            <span class="month trn">title_WWII</span>
                            <p class="trn">prg1_WWII</p>
                            <p class="trn">prg2_WWII</p>
                            <p class="trn">prg3_WWII</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>

                    <div class="timeline-carousel__item">
                        <div class="timeline-carousel__image">
                            <div class="media-wrapper media-wrapper--overlay" style="background: url('../assets/images/timeline/after_war.jpg') center center; background-size:cover;"></div>
                        </div>
                        <div class="timeline-carousel__item-inner">
                            <span class="year trn">uptitle_postwar</span>
                            <span class="month trn">title_postwar</span>
                            <p class="trn">prg1_postwar</p>
                            <p class="trn">prg2_postwar</p>
                            <p class="trn">prg3_postwar</p>
                            <!--<a href="#" class="read-more">Read more</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="view parallax-map mb-3">
                <h2 class="display-4 text-white text-center trn">interactive_title</h2>
            </div>
            <div id="map">
                <canvas class="map" id="canvas-div"></canvas>
                <?php include(__DIR__ . "./map.js.inc.php"); ?>
            </div>
        </article>

        <article class="my-5" id="events">
            <div class="view parallax-events mb-3">
                <h2 class="display-4 text-white text-center trn">event_title</h2>
            </div>
            <div class="container row mx-auto">
                <div class="card mb-3 mt-5 border-0">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="../assets/images/cover_events.jpg" class="card-img rounded-0" alt="AR project image">
                            <div class="card-img-overlay ml-4">
                                <a href="http://gethiroshima.com/features/art-entertainment/festivals/the-saigoku-kaido-in-shareo/" class="btn btn-danger rounded-0 stretched-link trn" title="Learn more">event_title</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title trn">event_title</h5>
                                <p class="card-text trn">event_desc</p>
                                <a href="http://gethiroshima.com/features/art-entertainment/festivals/the-saigoku-kaido-in-shareo/" class="btn btn-danger rounded-0 trn" title="Learn more">discover_events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="my-5">
            <div class="view parallax-projects mb-3">
                <h2 class="display-4 text-white text-center trn">discover_title</h2>
            </div>
            <div class="container row mx-auto" id="projects">
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <img src="../assets/images/cover_ar.jpg" class="card-img rounded-0" alt="AR project image">
                    <div class="card-img-overlay ml-4">
                        <a href="/projects/ar-project" class="btn btn-danger rounded-0 stretched-link trn" title="AR project">ar_button</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <img src="../assets/images/cover_vr.jpg" class="card-img rounded-0" alt="VR project image">
                    <div class="card-img-overlay mr-4 text-right">
                        <a href="/projects/vr-project" class="btn btn-danger rounded-0 stretched-link trn" title="VR project">vr_button</a>
                    </div>
                </div>
                <div class="card text-white col-md-6 border-0 mx-auto my-3">
                    <img src="../assets/images/cover_web.jpg" class="card-img rounded-0" alt="Web project image">
                    <div class="card-img-overlay mr-4 text-center">
                        <a href="/projects/web-project" class="btn btn-danger rounded-0 stretched-link trn" title="Web project">web_button</a>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="/team" class="btn btn-danger rounded-0 p-3" title="Go to the team"><i class="fas fa-users"></i> <span class='trn'>project_team</span></a>
            </div>
        </article>

        <div class="my-3 text-center">
            <button class="btn btn-danger btn-rotate rounded-0" id="scroll-title" title="Scroll to the title"><i class="fas fa-arrow-up"></i></button>
        </div>
    </section>

    <?php include(__DIR__ . "/footer.inc.php"); ?>
</body>

</html>