<!doctype html>
<html lang="en">
    <head>
        <title>Pete Naish | Why we moved from Less to Sass</title>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
        ?>
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction--fancy"style="background-image: url(/assets/img/content/banner--grass.jpg);">
            <h1>Why we moved from Less to Sass</h1>
        </section>
        <section class="blog">
            <article class="blog__post">
                <div class="wrapper">
                    <p>Saatchi &amp; Saatchi's London office is the first to have an in-house Digital branch. We create websites, digital campaigns, email newsletters, flash content and more for a wide range of clients. In the web development team, we're in the unique position of being able to set standards that will hopefully be adopted agency-wide, as Digital arms of Saatchi &amp; Saatchi pop up around the globe.</p>

                    <p>For this reason, we held a meeting to discuss our technology stack, and decide if there were any current industry standards or better alternatives we could switch to.</p>

                    <p>Before this meeting, our stack included:</p>

                    <ul>
                        <li>A custom PHP backend, called GCMS, built with <a href="http://www.codeigniter.com/">CodeIgnitor</a></li>
                        <li><a href="http://backbonejs.org/">Backbone</a></li>
                        <li><a href="http://lesscss.org/">Less</a></li>
                        <li><a href="http://gruntjs.com/">Grunt</a></li>
                        <li><a href="http://mercurial.selenic.com/">Mercurial</a></li>
                        <li>Manual deployment via SFTP</li>
                    </ul>

                    <p>and after:</p>

                    <ul>
                        <li>GCMS</li>
                        <li><a href="http://backbonejs.org/">Backbone</a></li>
                        <li><a href="http://sass-lang.com/">Sass</a></li>
                        <li><a href="http://gruntjs.com/">Grunt</a></li>
                        <li><a href="http://git-scm.com/">Git</a></li>
                        <li><a href="http://capistranorb.com/">Capistrano</a></li>
                    </ul>

                    <p>In this article, I'll write about our switch from Less to Sass.</p>

                    <p>We initially used Less because it complemented the rest of our stack, and could be implemented without any additional dependencies; it could be installed and compiled using NPM and grunt. To me, Less always felt like a less-capable alternative to Sass. I had used it when I first discovered CSS pre-processors, as at the time there was a JavaScript compiler that allowed me to try it out without much effort. It was pretty buggy, so I decided to take a look at Sass instead. Sass immediately felt more powerful, and I never looked back.</p>

                    <p>The way Less has added new features on top of plain CSS appears to be ill-thought-out. It has a habit of creating confusion with its syntax. For example, extends are written like so:</p>

                    <pre class="language-less">
                        <code class="language-less">
.a:extend(.b) {
    // styles go here
}
                        </code>
                    </pre>

                    <p>It's a strange usage of the colon, which in plain css is used to denote a pseudo state or element:</p>

                    <pre class="language-css">
                        <code class="language-css">
a:hover {}
a:before {}
                        </code>
                    </pre>

                    <p>Sass extends are much more explicit:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
.a {
    @extend .b;
    // styles go here
}
                        </code>
                    </pre>

                    <p>Mixins are also confusing in Less, as they're defined and used with classes:</p>

                    <pre class="language-less">
                        <code class="language-less">
// definition
.border-radius(@radius: 5px) {
    -webkit-border-radius: @radius;
    -moz-border-radius: @radius;
    border-radius: @radius;
}

// usage
.a {
    .border-radius(10px);
    color: red;
}
                        </code>
                    </pre>

                    <p>In Sass, it's much clearer:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
// definition
@mixin border-radius($radius) {
    -webkit-border-radius: $radius;
    -moz-border-radius: $radius;
    -ms-border-radius: $radius;
    border-radius: $radius;
}

// usage
.a {
    @include border-radius(10px);
    color: red;
}
                        </code>
                    </pre>

                    <p>Scanning and reading through Sass files is much easier because its syntax is intuitive and explicit.</p>

                    <p>In Less, variables are denoted with <code>@</code>, whereas Sass uses <code>$</code>. <code>$</code> isn't used anywhere else in plain CSS (except for the rarely-used [attribute$=value] selector), so it's safe to use in this new way. <code>@</code>, on the other hand, is used in plain CSS for directives like <code>@import</code> and <code>@media</code>. Sass uses <code>@</code> to add its own directives, such as @extend and @mixin, which makes absolute sense.</p>

                    <p>Overall, Sass has a much clearer syntax that doesn't interfere with or redefine plain CSS, but it's not just the syntax that made us switch; Sass has a more intelligent way handling of lists, loops, and maps, and accepts string interpolation for both properties and values. This leads to more powerful but less verbose functions and mixins that are far easier to understand.</p>

                    <p>In the following example (adapted from <a href="http://codepen.io/funzeye/pen/QwNMqV">this CodePen</a>), we define two colour palettes. We then use a map function to return palette variations for use in our css. This keeps our project's colours nicely organised and readable:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
// set variables
$white: #fff;
$black: #000;

$palettes: (
    maroon: (
        base: #8b2c41, 
        light: #d17f91,
        dark: #41000e,
        contrast: $white
    ),
    green: (
        base: #488329,
        light: #93c478,
        dark: #073e10,
        contrast: $black
    )
);

// palette function
@function palette($palette, $tone: 'base') {
    @return map-get(map-get($palettes, $palette), $tone);
}
  
// usage
.palette-example-1 {
    color: palette(maroon);
}

.palette-example-2 {
    color: palette(green, light);
    background-color: palette(green, contrast);
}

// output
.palette-example-1 {
    color: #8b2c41;
}

.palette-example-2 {
    color: #93c478;
    background-color: #000;
}
                        </code>
                    </pre>

                    <p>Snippets like this make the Sass community feel bigger and more forward-thinking than Less. Its features and syntax just make sense.</p>

                    <p>We won't be converting old projects over to Sass, we just have a cut-off point where all new projects will use it. We've developed a set of Sass guidelines to help with this transition, which also introduces a mobile-first, component-based front-end architecture and style guide. This will be covered in a future blog post.</p>
                    <div class="article-meta">
                        <a href="/blog">Read another article</a>
                        <p>Written on Monday 17 August 2015</p>
                        <p>Tags: <span><a href="/blog/tag/sass">Sass</a></span></p>
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
