<!doctype html>
<html lang="en">
    <head>
        <title>Pete Naish | Front-end Web Developer</title>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
        ?>
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction">
            <h1>I love creative problem solving, building <br>ambitious websites, wearing business <br>slippers, and drum &amp; bass</h1>
        </section>
        <section class="project-listing">
            <?php 
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--frhank.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--bbs.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--central.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--dll.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--bb.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--fscs.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--parkinsons.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--mdu.php");
               include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--cp.php");
            ?>
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