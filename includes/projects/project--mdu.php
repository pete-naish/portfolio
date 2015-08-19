<article class="project">
    <h3 class="project__title">The MDU</h3>
    <img class="project__image" src="/assets/img/content/project--precedent__medical-defence-union.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To rebuild their existing site as a desktop-optimized experience with a Sitecore back-end<br/> Accessible to AA standards</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Creating all front-end templates and assets</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest desktop browsers, and Internet Explorer 7+</p>
        <ul class="project__tools">
            <?php
                $icons = array('jquery', 'sass', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="/mdu/">View front-end templates</a>
        <a class="button--positive" href="http://www.themdu.com/">View live website</a>
    </div>
</article>