<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.php"); ?>
    <link rel="stylesheet" href="../assets/css/team.css">
    <?php include(__DIR__ . "./javascripts.php"); ?>
</head>

<body>
    <section>
        <header class="parallax-header-team text-white">
            <div class="container-fluid">
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <h1 class="text-center mt-4 display-4">Hiroshima Exploration</h1>
            <hr class="sm-separator w-25">
            <h2 class="text-center font-italic">Project Team</h2>
        </header>

        <div class="container mt-5">
            <blockquote class="blockquote">
                <p class="mb-0 text-justify"><i class="fas fa-quote-right"></i> It is a multidisciplinary project (web/AR/VR) developed by the students of two french schools, the CNAM and Ingemedia, in order to encourage tourism in Japan but more specifically in the Hiroshima region through Saigoku road.</p>
            </blockquote>
        </div>

        <article class="container my-5">
            <h2 class="display-4 mb-5">Teachers</h2>
            <div class="row container mx-auto">
                <?php foreach ($members->managers as $manager) : ?>
                    <div class="card col-md-3 border-0 mx-auto" style="width: 18rem;">
                        <img src="<?= $manager->image ?>" class="card-img-top rounded-circle" alt="Portrait of <?= $manager->firstname ?> <?= $manager->name ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $manager->firstname ?> <?= $manager->name ?></h5>
                            <p class="card-text font-italic"><?= $manager->role ?></p>
                            <?php foreach ($manager->socials as $social) : ?>
                                <div class="d-inline mx-2">
                                    <a href="<?= $social->link ?>" role="button" class="text-dark" title="Social media link"><i class="<?= $social->icon ?>" aria-hidden="true"></i></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </article>

        <article class="container my-5">
            <h2 class="display-4 mb-5">Web project</h2>
            <div class="row container mx-auto">
                <?php foreach ($members->web as $web) : ?>
                    <div class="card border-0 col-md-3 mx-auto" style="width: 18rem;">
                        <img src="<?= $web->image ?>" class="card-img-top rounded-circle" alt="Portrait of <?= $web->firstname ?> <?= $web->name ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $web->firstname ?> <?= $web->name ?></h5>
                            <p class="card-text font-italic"><?= $web->degree ?></p>
                            <p class="card-text"><?= $web->role ?></p>
                            <?php foreach ($web->socials as $social) : ?>
                                <div class="d-inline mx-2">
                                    <a href="<?= $social->link ?>" role="button" class="text-dark" title="Social media link"><i class="<?= $social->icon ?>" aria-hidden="true"></i></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </article>

        <article class="container my-5">
            <h2 class="display-4 mb-5">AR project</h2>
            <div class="row container mx-auto">
                <?php foreach ($members->ar as $ar) : ?>
                    <div class="card border-0 col-md-3 mx-auto" style="width: 18rem;">
                        <img src="<?= $ar->image ?>" class="card-img-top rounded-circle" alt="Portrait of <?= $ar->firstname ?> <?= $ar->name ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $ar->firstname ?> <?= $ar->name ?></h5>
                            <p class="card-text font-italic"><?= $ar->degree ?></p>
                            <p class="card-text"><?= $ar->role ?></p>
                            <?php foreach ($ar->socials as $social) : ?>
                                <div class="d-inline mx-2">
                                    <a href="<?= $social->link ?>" role="button" class="text-dark" title="Social media link"><i class="<?= $social->icon ?>" aria-hidden="true"></i></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </article>

        <article class="container my-5">
            <h2 class="display-4 mb-5">VR project</h2>
            <div class="row container mx-auto">
                <?php foreach ($members->vr as $vr) : ?>
                    <div class="card border-0 col-md-3 mx-auto" style="width: 18rem;">
                        <img src="<?= $vr->image ?>" class="card-img-top rounded-circle" alt="Portrait of <?= $vr->firstname ?> <?= $vr->name ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $vr->firstname ?> <?= $vr->name ?></h5>
                            <p class="card-text font-italic"><?= $vr->degree ?></p>
                            <p class="card-text"><?= $vr->role ?></p>
                            <?php foreach ($vr->socials as $social) : ?>
                                <div class="d-inline mx-2">
                                    <a href="<?= $social->link ?>" role="button" class="text-dark" title="Social media link"><i class="<?= $social->icon ?>" aria-hidden="true"></i></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </article>

        <div class="container-fluid text-center mb-5">
            <a href="/" class="btn btn-primary rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </section>

    <?php include(__DIR__ . "./footer.php"); ?>
</body>

</html>