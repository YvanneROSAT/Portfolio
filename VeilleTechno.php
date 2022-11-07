<?php
require('header_&_footer/header.php');
?>

<div class="container">
    <div class="row">
        <h1> Ma veille technologique</h1>
        <p><strong>Définition</strong>La veille technologique consiste à s’informer de façon systématique sur les techniques les plus récentes et surtout sur leur mise à disposition commerciale et ainsi rester informé sur les nouveautés. Je réalise ma veille à l’aide de mots-clés et de flux RSS</p>
        <h1>Outil</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/feedly2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/feedly.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <h1>La blockchain</h1>
        <p>J’ai choisi comme thème de ma veille technologique, l’écosystème tout autour de la blockchain.</p>
        <h3>Définition de la blockchain</h3>
        <p>Selon le site jesuisundev.com : "La Blockchain est une technologie de stockage et d’échange de données numériques qui est décentralisée et infalsifiable."</p>
        <p>Voici une vidéo d‘OWEN SIMONIN qui explique de manière plus simple la technologie blockcahain : </p>

        <!-- Videos explicative -->
        <div class="col">
            <div style="padding:50% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/765228179?h=7be7f0bc9f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Definition_de_la_blockchain">
                </iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>

        <h1>Mes sources</h1>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="image/blockchain-france.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Blog blockchain france</h5>
                <a href="#" class="btn btn-primary text-white">Voir le site</a>
            </div>
        </div>
    </div>
</div>
</div>

<?php
require('header_&_footer/footer.php');
?>