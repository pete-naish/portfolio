<article class="project">
    <h3 class="project__title">Beauty Box</h3>
    <img class="project__image" src="/assets/img/content/project--freelance__beauty-box.png">
    <div class="project__info">
        <h4 class="info__label">Project brief</h4>
        <p class="info__text">To build a single-page, fully-responsive, mobile-first brochure site with a Perch back-end</p>
        <h4 class="info__label">My role</h4>
        <p class="info__text">Creating all HTML, CSS, and JavaScript, and integrating Perch content management system</p>
        <h4 class="info__label">Browser support</h4>
        <p class="info__text">Latest browsers spanning mobile, tablet, and desktop, including Internet Explorer 9+</p>
        <ul class="project__tools">
            <?php
                $icons = array('html5', 'css3', 'jquery', 'sass', 'compass', 'git');

                foreach ($icons as $icon) {
                    echo '<li class="project__tool">';
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
    <div class="project__actions">
        <a class="button--positive" href="http://beautyboxknebworth.co.uk">View live website</a>
    </div>
</article>