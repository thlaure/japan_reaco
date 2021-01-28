<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="../assets/css/projects.css">
</head>

<body class="lang-wrapper">
    <section>
        <header class="parallax-project-ar text-white">
            <div class="text-right">
                <div class="btn-group lang-wrapper mr-md-3 mt-md-2" role="group" aria-label="Change language">
                    <div class="border-right">
                        <button type="button" class="btn btn-light btn-lang lang-selector rounded-0 border-0" data-value="en">EN</button>
                    </div>
                    <div class="border-right">
                        <button type="button" class="btn btn-light btn-lang lang-selector rounded-0 border-0" data-value="fr">FR</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-light btn-lang lang-selector rounded-0 border-0" data-value="jp">JP</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> <span class="trn">back_button</span></a>
            </div>
            <h1 class="text-center mt-4 display-4 trn">projects</h1>
            <hr class="sm-separator w-25">
            <h2 class="text-center font-italic"><?= strtoupper($project) ?></h2>
        </header>

        <div class="container my-5">
            <?php include(__DIR__ . "/project_" . $project . ".php") ?>
        </div>

        <?php include(__DIR__ . "/participants.inc.php") ?>

        <div class="container-fluid text-center mb-5">
            <a href="/" class="btn btn-danger rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> <span class="trn">back_button</span></a>
        </div>
    </section>

    <?php include(__DIR__ . "/footer.inc.php"); ?>
</body>

</html>