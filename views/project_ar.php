<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . "/head.inc.php"); ?>
    <link rel="stylesheet" href="../assets/css/projects.css">
</head>

<body>
    <section>
        <header class="parallax-project-ar text-white">
            <div class="container-fluid">
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <h1 class="text-center mt-4 display-4">Projects</h1>
            <hr class="sm-separator w-25">
            <h2 class="text-center font-italic">AR</h2>
        </header>

        <div></div>

        <?php include(__DIR__ . "/participants.inc.php") ?>

        <div class="container-fluid text-center mb-5">
            <a href="/" class="btn btn-danger rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </section>

    <?php include(__DIR__ . "./footer.inc.php"); ?>
</body>

</html>