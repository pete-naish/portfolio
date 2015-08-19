<article class="project">
    <h3 class="project__title">Cravendale Milk Poster</h3>
    <img class="project__image" src="/assets/img/content/project--saatchi__milkposter.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To create a single-page, backbone-driven app that allows users to create their own cartoon avatar with a custom slogan, and upload it to social media</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Developing all HTML, CSS, and JavaScript assets for the project, based on a design created in-house</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest browsers spanning mobile, tablet, and desktop, including Internet Explorer 9+</p>
        <ul class="project__tools">
            <?php
                $icons = array('html5', 'css3', 'backbone', 'jquery', 'sass', 'bem', 'grunt', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="http://www.cravendale.co.uk/milkposter/">View live website</a>
    </div>
</article>