<main>
    <h1>Marvel Premiere</h1>
    <section>
        <img src="<?= $poster_url ?>" width="300" alt="Poster of <?= $title ?>" style="border-radius: 16px" />
    </section>

    <div class="container">
        <h2><?= $title ?> | <?= $until_message ?></h2>
        <h3>Premiere date: <?= $release_date ?></h3>
        <p>The next one is: <?= $following_production ?></p>
    </div>
</main>