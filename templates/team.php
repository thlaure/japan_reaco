<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./head.php"); ?>
    <link rel="stylesheet" href="../assets/css/team.css">
    <?php include("./javascripts.php"); ?>
</head>

<body>
    <section class="container-fluid">
        <h1 class="display-2 text-center mb-5">Team</h1>
        <?php $members = json_decode(file_get_contents("../assets/docs/members.json")) ?>

        <article class="mb-5">
            <div class="parallax-teachers mb-3">
                <h2 class="display-3 mb-5 text-center text-white">Teachers</h2>
            </div>
            <div class="row container mx-auto">
                <?php foreach ($members->managers as $manager) : ?>
                    <div class="card col-md-3 border-0" style="width: 18rem;">
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

        <article class="mb-5">
            <div class="parallax-web mb-3">
                <h2 class="display-3 mb-5 text-center text-white">Web project</h2>
            </div>
            <div class="row container mx-auto">
                <?php foreach ($members->web as $web) : ?>
                    <div class="card border-0 col-md-3" style="width: 18rem;">
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

        <article class="mb-5">
            <div class="parallax-ar mb-3">
                <h2 class="display-3 mb-5 text-center text-white">AR project</h2>
            </div>
            <div class="row container mx-auto">
                <?php foreach ($members->ar as $ar) : ?>
                    <div class="card border-0 col-md-3" style="width: 18rem;">
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

        <article>
            <div class="parallax-vr mb-3">
                <h2 class="display-3 mb-5 text-center text-white">VR project</h2>
            </div>
            <div class="row container mx-auto">
                <?php foreach ($members->vr as $vr) : ?>
                    <div class="card border-0 col-md-3" style="width: 18rem;">
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
    </section>

    <?php include("./footer.php"); ?>
</body>

</html>