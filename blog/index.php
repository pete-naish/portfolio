<?php
    $page_title = "Blog";
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
?>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction--fancy">
        <h1>The Blog</h1>
    </section>
    <section class="blog">
        <article class="blog__post">
            <div class="wrapper">
                <h2><a href="/blog/from-less-to-sass">Why we moved from Less to Sass</a></h2>
                <p>Saatchi &amp; Saatchi's London office is the first to have an in-house Digital branch. We create websites, digital campaigns, email newsletters, flash content and more for a wide range of clients. In the web development team, we're in the unique position of being able to set standards that will hopefully... </p>
                <a href="/blog/from-less-to-sass" class="button--positive">Read article</a>
            </div>
        </article>
        <article class="blog__post">
            <div class="wrapper">
                <h2><a href="/blog/about">Hey</a></h2>
                <p>Back when I was a young teenager, my dad brought home our first 'proper' computer. I wreaked havoc on it, blindly installing shit like BonziBuddy and getting all kinds of viruses. Desperately trying to get rid of all the crap I'd installed, I discovered Lifehacker, and subsequently spent hours tweaking... </p>
                <a href="/blog/about" class="button--positive">Read article</a>
            </div>
        </article>
        <section class="pagination">
            <div class="wrapper">
                <p>
                    Showing articles 2&ndash;2 of 2
                </p>
            </div>
        </section>
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