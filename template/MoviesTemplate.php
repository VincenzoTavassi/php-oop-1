<div class="col">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= $movie->picture ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->title ?></h5>
                    <p class="card-text"><?= $movie->description ?></p>
                    <p class="card-text"><small class="text-muted">Generi: <?= $movie->getGenres() ?></small>
                    <p><small class="text-muted">ID: <?= $movie->id ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>