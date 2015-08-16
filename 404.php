<!doctype html>
<html lang="en">
    <head>
        <title>Pete Naish | 404 Page Not Found</title>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
        ?>
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction--fancy" style="background-image: url(/assets/img/content/banner--sea.jpg);">
            <h1>Looks like you're lost</h1>
        </section>
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