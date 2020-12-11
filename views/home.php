<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <script src="./assets/js/home.js" defer></script>
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