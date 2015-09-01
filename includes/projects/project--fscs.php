<article class="project">
    <h3 class="project__title">FSCS Protection Checker</h3>
    <img class="project__image" src="/assets/img/content/project--precedent__fscs.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To create a campaign microsite that allows desktop and mobile users to find out about the Financial Services Compensation Scheme, and check whether their savings are protected</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Developing all HTML, CSS, and JavaScript for the microsite, including Protection Checker tool using jQuery, and CSS 3 animations</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest browsers across mobile and desktop, including Internet Explorer 8+</p>
        <ul class="project__tools">
            <?php
                $icons = array('html5', 'css3', 'jquery', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="/fscs/" rel="nofollow">View website</a>
    </div>
</article>