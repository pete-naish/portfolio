<article class="project">
    <h3 class="project__title">Parkinson's UK</h3>
    <img class="project__image" src="/assets/img/content/project--precedent__parkinsons-uk.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To rebuild their existing site as a desktop-optimized, easily-accessible experience with a Drupal back-end<br/> Accessible to AA standards</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Creating all front-end templates and assets, including custom assistive navigation controls</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest desktop browsers, and Internet Explorer 7+</p>
        <ul class="project__tools">
            <?php
                $icons = array('jquery', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="/parkinsons/" rel="nofollow">View front-end templates</a>
        <a class="button--positive" href="http://www.parkinsons.org.uk/">View live website</a>
    </div>
</article>