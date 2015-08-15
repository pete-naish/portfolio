<!doctype html>
<html lang="en">
    <head>
        <title>Pete Naish | About</title>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
        ?>
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction--fancy"style="background-image: url(/assets/img/content/banner--macbook.jpg);">
            <h1>Hey</h1>
        </section>
        <section class="blog">
            <article class="blog__post">
                <div class="wrapper">
                    <p>Back when I was a young teenager, my dad brought home our first 'proper' computer. I wreaked havoc on it, blindly installing shit like BonziBuddy and getting all kinds of viruses. Desperately trying to get rid of all the crap I'd installed, I discovered Lifehacker, and subsequently spent hours tweaking the OS to make it super cool.</p>
                    <p>Those early years of computer abuse&mdash;inadvertantly installing viruses, wiping the OS, and rebuilding the machine ad nauseum&mdash;helped me develop a habit that, until recently, I had assumed all regular computer users shared: every time I install a new app, or use a new machine, I spend time going through its menus, looking for familiar options, and disabling or enabling ones that might improve my workflow.</p>
                    <p>You should know this about me: I love efficiency.</p>
                    <p>Recently, I've noticed that developers tend to provide software and operating systems that, in their vanilla state, have features that just get in the way of users like me. They treat every user as a novice. Things like Windows User Account Control really bother me. For users that know what they're doing, it has no reason to exist. It interrupts my workflow, harming my efficiency. For users that don't know what they're doing, I imagine these warnings are confusing and worrying.</p>
                    <p>So far in my professional career, I'd say that most people have no real interest in tweaking their machines to suit their needs. They're happy to live with the vanilla state.</p>
                    <p>I'm hoping to change that mindset. On this blog, I'm going to post small, easy-to-digest tips to help people get more out of their machines. Each post will hopefully include a screencast, along with write-ups and downloadable assets where appropriate. The posts will probably have a front-end dev flavour, but there should be good stuff here for everyone. I'll aim to cover OS X, Windows, Chrome, Sublime Text, Terminal, Sass, Grunt, and more.</p>
                    <p>I encourage commenting and sharing your own tips or suggestions to improve and build upon what I've written about here.</p>
                    <p>Thanks for stopping by,</p>
                    <p>Pete</p>
                    <div class="article-meta">
                        <a href="/blog">Read another article</a>
                        <p>Written on Thursday 26 February 2015</p>
                        <p>Tags: <span><a href="/blog/tag/about">About</a></span></p>
                    </div>
                    <div id="disqus_thread"></div>
                </div>
            </article>
        </section>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16479704-10', 'pete.nai.sh');
            ga('send', 'pageview');
            
            (function() {
                var disqus_shortname = 'petenaish';
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <script src="/assets/js/prism.min.js"></script>
    </body>
</html>
