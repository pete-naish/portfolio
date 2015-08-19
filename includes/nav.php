<nav class="nav-primary">
    <ul class="nav-primary__items">
        <?php
            $icons = array('github', 'linkedin', 'twitter');

            foreach ($icons as $icon) {
                echo '<li class="nav-primary__item">';
                include($_SERVER['DOCUMENT_ROOT'] . "/includes/icons/icon--". $icon .".php");
                echo '</li>';
            }
        ?>
        <li class="nav-primary__item">
            <a class="nav-primary__link--text" href="/blog" title="Visit Pete's Blog">Blog</a>
        </li>
        <li class="nav-primary__item">
            <a class="nav-primary__link--text" href="mailto:pete@nai.sh" title="Email Pete">Email</a>
        </li>
        <li class="nav-primary__item">
            <a class="nav-primary__link--text" href="http://pete.nai.sh/cv" title="Download a copy of Pete's CV">CV</a>
        </li>
    </ul>
</nav>