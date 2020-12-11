<article class="container my-5">
    <h3 class="display-4 mb-5">Participants</h3>
    <div class="row mx-auto">
        <?php foreach ($participants as $participant) : ?>
            <div class="card mb-3 col-md-6 border-0 mx-auto" data-aos="zoom-in" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $participant->image ? $participant->image : "../assets/images/team/default_avatar.png" ?>" class="card-img" alt="Portrait of <?= ucwords($participant->firstname) ?> <?= strtoupper($participant->name) ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h5 card-title"><?= ucwords($participant->firstname) ?> <?= strtoupper($participant->name) ?></h3>
                            <p class="card-text"><?= $participant->role ?></p>
                            <?php if (isset($participant->degree)) : ?>
                                <p class="card-text font-italic text-muted"><?= $participant->degree ?></p>
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