<!doctype html>
<html lang="en">
    <head>
        <title>Pete Naish | Front-end Web Developer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-title" content="Pete Naish">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="application-name" content="Pete Naish">
        <meta name="description" content="Pete Naish is a London-based front-end developer with a passion for new technology. He builds mobile-first, responsive websites to AA standards, using hand-written HTML5, CSS3, and JavaScript.">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/app.css">
    </head>
    <body>
        <header>
            <a href="/">
                <img class="logo" width="153" src="/assets/img/frame/logo.png" alt="Pete Naish Front End Web Developer" title="Home">
            </a>
            <nav class="nav-primary">
                <ul class="nav-primary__items">
                    <li class="nav-primary__item">
                        <?php include 'templates/includes/icons/icon--github.php'; ?>
                    </li>
                    <li class="nav-primary__item">
                        <?php include 'templates/includes/icons/icon--linkedin.php'; ?>
                    </li>
                    <li class="nav-primary__item">
                        <?php include 'templates/includes/icons/icon--twitter.php'; ?>
                    </li>
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
        </header>
        <section class="introduction">
            <h1>I love creative problem solving, building <br>ambitious websites, wearing business <br>slippers, and drum &amp; bass</h1>
        </section>
        <section class="project-listing">
            <?php include 'templates/includes/projects/project--bbs.php'; ?>
            <?php include 'templates/includes/projects/project--central.php'; ?>
            <?php include 'templates/includes/projects/project--dll.php'; ?>
            <?php include 'templates/includes/projects/project--bb.php'; ?>
            <?php include 'templates/includes/projects/project--fscs.php'; ?>
            <?php include 'templates/includes/projects/project--parkinsons.php'; ?>
            <?php include 'templates/includes/projects/project--mdu.php'; ?>
            <?php include 'templates/includes/projects/project--cp.php'; ?>
        </section>

        <script>
        function scrollTo(o,n,t){var e=o.scrollTop,c=n-e,l=0,u=20,a=function(){l+=u;var n=Math.easeInOutQuad(l,e,c,t);o.scrollTop=n,t>l&&setTimeout(a,u)};a()}document.getElementsByClassName("logo")[0].onclick=function(e){e.preventDefault();scrollTo(document.body,0,500)},Math.easeInOutQuad=function(o,n,t,e){return o/=e/2,1>o?t/2*o*o+n:(o--,-t/2*(o*(o-2)-1)+n)};
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16479704-10', 'pete.nai.sh');
            ga('send', 'pageview');
        </script>
    </body>
</html>