<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="../assets/css/team.css">
</head>

<body class="lang-wrapper">
    <section>
        <header class="parallax-header-team text-white">
            <?php include(__DIR__ . "/lang_wrapper.inc.php"); ?>
            <div class="container-fluid">
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <h1 class="text-center mt-4 display-4">Hiroshima Exploration</h1>
            <hr class="sm-separator w-25">
            <h2 class="text-center font-italic trn">title_participants</h2>
        </header>

        <div class="container mt-5">
            <blockquote class="blockquote">
                <p class="mb-0 text-justify"><i class="fas fa-quote-right"></i> <span class="trn">intro_participants</span></p>
            </blockquote>
        </div>

        <?php foreach ($projects as $key => $participants) : ?>
            <article id="<?= strtolower(str_replace(" ", "-", $key)) ?>" class="container my-5">
                <h2 class="display-4 mb-5"><?= strtoupper($key) ?></h2>
                <div class="row container mx-auto">
                    <?php foreach ($participants as $participant) : ?>
                        <div class="card mb-3 col-md-6 border-0 mx-auto" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= $participant->image ? $participant->image : "../assets/images/team/default_avatar.png" ?>" class="card-img" alt="Portrait of <?= ucwords($participant->firstname) ?> <?= strtoupper($participant->name) ?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= ucwords($participant->firstname) ?> <?= strtoupper($participant->name) ?></h5>
                                        <p class="card-text trn"><?= $participant->role ?></p>
                                        <?php if (isset($participant->degree)) : ?>
                                            <p class="card-text font-italic text-muted trn"><?= $participant->degree ?></p>
                                        <?php endif ?>
                                        <?php foreach ($participant->socials as $social) : ?>
                                            <div class="d-inline mx-2">
                                                <a href="<?= $social->link ?>" role="button" class="text-dark" title="Social media link"><i class="<?= $social->icon ?>" aria-hidden="true"></i></a>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </article>
        <?php endforeach ?>

        <div class="container-fluid text-center mb-5">
            <a href="/" class="btn btn-danger rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </section>

    <?php include(__DIR__ . "/footer.inc.php"); ?>
</body>

</html>