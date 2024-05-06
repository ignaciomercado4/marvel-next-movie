
<!--php api curl-->
<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    
    $ch = curl_init(API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    
    curl_close($ch);
?>


<!--html-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inconsolata:wght@200..900&family=Jersey+15&family=Orbitron:wght@400..900&family=Pixelify+Sans:wght@400..700&family=Play:wght@400;700&family=Press+Start+2P&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&family=Unbounded:wght@200..900&family=VT323&display=swap" rel="stylesheet">
    <title>MCU Next Movie</title>
</head>
<body class="bg-dark-subtle">
    <main class="align-middle">
        <div>
            <section class="container-fluid bg-dark">
                <h1 class="h1 fs-1 text-center text-light p-2 fw-bolder">
                    🎥MARVEL Upcoming Movies
                </h1>
            </section>
            <section class="container text-center">
                <img class="img-fluid m-2 border border-4 border-dark" style="max-height: 70vh;" src="<?= $data["poster_url"]?>" alt="">
                <h2 class="h2 m-2 fw-bolder">
                    Title: "<?= $data["title"] ?>"
                </h2>
                <h3 class="h3">
                    <?= $data["overview"] ?>
                </h3>
            </section>
            <section class="container-fluid text-center mt-4">
                <h3 class="h3">
                    📅Release date: <?= $data["release_date"] ?>, in <?= $data["days_until"] ?> days.
                </h3>
            </section>
        </div>
    </main>
    <footer class="bg-dark fixed-bottom text-light text-center">
        <h5 class="fw-light">
            Made by 
            <a href="https://github.com/ignaciomercado4">
                Igna
            </a>
            , with love 💙.
        </h5>
    </footer>
</body>

<!--styles-->
<style>
    body {
        font-family: "Space Grotesk", sans-serif;
    }

    main{
        height: 100vh;
    }
</style>

