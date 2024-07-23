<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$result = file_get_contents(API_URL);
$data = json_decode($result, true);

?>

<head>
    <meta charset="UTF-8">
    <title>The Next Marvel Movie</title>
    <meta name="description" content="The Next Marvel Movie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.0.6/css/pico.min.css">
</head>


<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster of <?= $data["title"] ?>" style="border-radius: 16px" />
    </section>

    <div>
        <h2><?= $data["title"] ?> premieres in <?= $data["days_until"] ?> days</h2>
        <h3>Premiere date: <?= $data["release_date"] ?></h3>
        <p>The next one is: <?= $data["following_production"]["title"] ?></p>
    </div>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        height: 100vh;
    }

    main {
        display: flex;
        flex-direction: column;
        justify-self: center;
    }

    section {
        display: flex;
        justify-content: center;
    }

    div {
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>