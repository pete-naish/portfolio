<article class="project">
    <h3 class="project__title">Royal Central School of Speech and Drama</h3>
    <img class="project__image" src="/assets/img/content/project--precedent__central-school-speech-drama.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To rebuild their existing site as a fully-responsive, mobile-first experience with a Drupal back-end<br/> Accessible to AA standards</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Developing all HTML, CSS, and JavaScript in a component-based, reusable way</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest browsers spanning mobile, tablet, and desktop, including Internet Explorer 9+</p>
        <ul class="project__tools">
            <?php
                $icons = array('html5', 'css3', 'jquery', 'sass', 'bem', 'mixture', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="/central/">View front-end templates</a>
        <a class="button--positive" href="http://www.cssd.ac.uk/">View live website</a>
    </div>
</article>