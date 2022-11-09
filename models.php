<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <?php require_once(__DIR__ . '/snippets/navbar.php'); ?>

    <section class="car-display">
        <div class="inner">
            <div class="header">
                <p class="sub-title">Nieuw</p>
                <p class="title">911 GT3 RS</p>
                <p class="description">Vanaf €325.200,00(consumentenadviesprijs)</p>
            </div>
            <div class="body">
                <img class="car" src="https://files.porsche.com/filestore/image/multimedia/none/992-gt3-rs-modelexplorer/normal/c310eed8-1a15-11ed-80f5-005056bbdc38;sO;twebp/porsche-normal.webp">
            </div>
            <div class="footer">
                <div class="top">
                    <div class="block power">
                        <p class="title">386 kW/525 pk</p>
                        <p class="description">Vermogen (kW)/Vermogen (pk)</p>
                    </div>
                    <div class="block acceleration">
                        <p class="title">3,2 s</p>
                        <p class="description">Acceleratie van 0-100 km/u</p>
                    </div>
                    <div class="block speed">
                        <p class="title">296 km/h</p>
                        <p class="description">Topsnelheid</p>
                    </div>
                </div>
                <div class="bottom">
                    <div class="block WLTP">
                        <p class="title">296 km/h</p>
                        <p class="description">Technische gegevens</p>
                    </div>
                    <div class="block display-buttons">
                        <button class="btn transparant">
                            <p class="arrowright-white">Technische gegevens</p>
                        </button>
                        <button class="btn transparant">
                            <p class="arrowright-white">Configureren</p>
                        </button>
                        <button class="btn transparant">
                            <p class="arrowright-white">Vergelijk</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="stickyheader">
        <div class="items">
            <li class="item">
                <p>Idee 911 GT3 RS</p>
            </li>
            <li class="item">
                <p>360 Ervaring</p>
            </li>
            <li class="item">
                <p>Galerij</p>
            </li>
            <li class="item">
                <p>Details</p>
            </li>
            <li class="item">
                <p>Models & date</p>
            </li>
            <li class="item">
                <p>Configurator</p>
            </li>
            <li class="item">
                <p>individualisering</p>
            </li>
            <li class="item">
                <p>Contact</p>
            </li>
            <li class="item">
                <p>Meer informatie</p>
            </li>
        </div>
    </div>

    <div class="video-wrapper">
        <video width="100%" crossorigin="" autoplay="" poster="https://files.porsche.com/filestore/video/multimedia/none/modelseries-911gt3-rs-intro-perfection/zoom/7fb841ae-0723-11ed-80f5-005056bbdc38;twebp/porsche-image.webp" loop="" muted="" playsinline="" preload="none">
            <source src="https://files.porsche.com/filestore/video/multimedia/none/modelseries-911gt3-rs-intro-perfection/video-mp4/bcd675e6-067d-11ed-80f5-005056bbdc38/porsche-video.mp4" type="video/mp4">
        </video>
        <div class="text">
            <p>Perfectie is nooit het begin</p>
        </div>
    </div>

    <div class="video-wrapper">
        <video width="100%" crossorigin="" autoplay="" poster="https://files.porsche.com/filestore/video/multimedia/none/modelseries-911gt3-rs-intro-goal/zoom/954ca1a9-0723-11ed-80f5-005056bbdc38;twebp/porsche-image.webp" loop="" muted="" playsinline="" preload="none">
            <source src="https://files.porsche.com/filestore/video/multimedia/none/modelseries-911gt3-rs-intro-goal/video-mp4/d37fba61-067e-11ed-80f5-005056bbdc38/porsche-video.mp4" type="video/mp4">
        </video>
        <div class="text">
            <p>Maar altijd het doel.</p>
        </div>
    </div>

    <section class="blog">
        <div class="container">
            <div class="inner">
                <div class="block">
                    <div class="header">
                        <h1>De 911 GT3 RS. Sportmade</h1>
                        <p class="description">Atleten weten dat voor topprestaties meer nodig is dan perfecte omstandigheden en geluk. Doorslaggevend is de onvoorwaardelijke wil om bij elke training sneller en sterker te worden. Om alles aan de orde te stellen – vooral zichzelf. En om van elke fout het maximale te leren. Want de grootste uitdaging is om onverslaanbaar te blijven. Met die instelling blijft <nobr>Porsche</nobr> de grenzen verleggen. Voor nog betere prestaties op het circuit – dankzij radicale downforce en de uitgebreide toepassing van lichtgewicht materialen. Ervaar de nieuwe 911 GT3 RS in optima forma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="image-wrapper">
        <img width="100%" src="https://files.porsche.com/filestore/image/multimedia/none/modelseries-911gt3-rs-highlights-performance/normal/0e40253a-0f14-11ed-80f5-005056bbdc38;sN;twebp;c1697;gc/porsche-normal.webp" />
        <div class="text">
            <p>Maar altijd het doel.</p>
        </div>
    </div>

    <div class="image-wrapper">
        <img width="100%" src="https://files.porsche.com/filestore/image/multimedia/none/modelseries-911gt3-rs-highlights-chassis/normal/22a0ebfb-0f14-11ed-80f5-005056bbdc38;sH;twebp;c1693;gc/porsche-normal.webp" />
        <div class="text">
            <p>Maar altijd het doel.</p>
        </div>
    </div>

    <section>
        <div class="inner">
            <h1>Gallerij.</h1>
            <div class="block">
                <div class="left"></div>
                <div class="right"></div>
            </div>
        </div>
    </section>

    <?php require_once(__DIR__ . '/snippets/footer.php'); ?>

    <script src="js/script.js"></script>
</body>

</html>