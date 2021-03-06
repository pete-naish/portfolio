<?php
    $page_title = "Front-end Web Developer";
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
?>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction">
            <h1>I love creative problem solving, building <br>ambitious websites, wearing business <br>slippers, and drum &amp; bass</h1>
        </section>
        <section class="availability">
            <p><a href="mailto:pete@nai.sh">I'm available for new contracts starting 19th October</a></p>
        </section>
        <section class="project-listing">
            <?php
                $projects = array('milkposter', 'frhank', 'directline', 'bbs', 'central', 'dll', 'bb', 'fscs', 'parkinsons', 'mdu', 'cp');

                foreach ($projects as $project) {
                    include($_SERVER['DOCUMENT_ROOT'] . "/includes/projects/project--" . $project . ".php");
                }
            ?>
        </section>

        <script>
        function scrollTo(o,n,t){var e=o.scrollTop,c=n-e,l=0,u=20,a=function(){l+=u;var n=Math.easeInOutQuad(l,e,c,t);o.scrollTop=n,t>l&&setTimeout(a,u)};a()}document.getElementsByClassName("logo")[0].onclick=function(e){e.preventDefault();scrollTo(document.body,0,500)},Math.easeInOutQuad=function(o,n,t,e){return o/=e/2,1>o?t/2*o*o+n:(o--,-t/2*(o*(o-2)-1)+n)};
        
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16479704-10', 'pete.nai.sh');
            ga('send', 'pageview');
        </script>
    </body>
</html>