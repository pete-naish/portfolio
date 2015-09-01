<article class="project">
    <h3 class="project__title">David Lloyd</h3>
    <img class="project__image" src="/assets/img/content/project--precedent__david-lloyd.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To rebuild their existing site as a fully-responsive, mobile-first experience with a Sitecore back-end<br/> Accessible to AA standards</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Developing all front-end templates, including AJAX Club Finder with geolocation and custom Google Maps</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest browsers spanning mobile, tablet, and desktop, including Internet Explorer 8+</p>
        <ul class="project__tools">
            <?php
                $icons = array('html5', 'css3', 'jquery', 'sass', 'prepros', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="/david-lloyd/" rel="nofollow">View front-end templates</a>
        <a class="button--positive" href="http://www.davidlloyd.co.uk/">View live website</a>
    </div>
</article>