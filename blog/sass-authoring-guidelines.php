<?php
    $page_title = "Sass authoring guidelines";
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
?>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
        ?>
        <section class="introduction--fancy"style="background-image: url(/assets/img/content/banner--architecture.jpg);">
            <h1>Sass authoring guidelines</h1>
        </section>
        <section class="blog">
            <article class="blog__post">
                <div class="wrapper">
                    <h2>About this project</h2>

                    <p>This document introduces a comprehensive style guide and CSS architecture that front-end devs should use in all projects going forwards.</p>
                    <p>This is intended to be easy to modify, scale, and adapt.</p>
                    <p>The project itself functions as a working example that can be downloaded and used to kick off new projects. It contains example sass partials and useful helpers and mixins to get you started.</p>

                    <h3>Key benefits</h3>

                    <ul>
                        <li>Allows for mobile-first, component-based development.</li>
                        <li>Easy to maintain and scale through consistent structure and simple, modular CSS partials.</li>
                        <li>Uses inline media queries rather than separate stylesheets for each breakpoint.</li>
                        <li>Uses the CSS cascade to full effect via the logical import order of CSS partials.</li>
                    </ul>

                    <h2>Contents</h2>

                    <ol>
                        <li>
                            <a href="#key-concepts">Key concepts</a>
                            <ol>
                                <li><a href="#component-based-development">Modular, component-based development</a></li>
                                <li><a href="#mobile-first">Mobile-first</a></li>
                                <li><a href="#nested-media-queries">Nested media queries</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#css-style-guide">CSS style guide</a>
                            <ol>
                                <li><a href="#specificity">Specificity</a></li>
                                <li><a href="#class-naming-convention">Class naming convention (BEM)</a></li>
                                <li><a href="#writing-rules">Writing rules</a></li>
                            </ol>
                        </li>
                        <li>
                            <a href="#css-architecture">CSS architecture</a>
                            <ol>
                                <li><a href="#css-folder-structure">CSS folder structure</a></li>
                                <li><a href="#css-source-order">CSS source order</a></li>
                            </ol>
                        </li>
                    </ol>

                    <h2 id="key-concepts">Key concepts</h2>

                    <h3 id="component-based-development">Modular, component-based development</h3>
                    <p>Instead of thinking about a website as a set of pages and templates, try to break designs into separate components. These components should be re-usable blocks that can be moved, repositioned, modified, and re-combined in order to build pages. Components may be part of bigger components. Typical components might be the header, footer, main navigation, carousel, etc.</p>
                    <p>Each component has its own Sass partial that contains all of the relevant styling for that component only.</p>

                    <h3 id="mobile-first">Mobile-first</h3>
                    <p>Mobile websites are usually more simple, and have fewer components than their desktop counterparts. When writing CSS, it makes sense to cover the simple (read: mobile) styles first, then add complexity as new breakpoints are required. This way, you are taking advantage of the CSS cascade, and in many cases only adding styles, rather than defining them for desktop and undoing them for mobile.</p>

                    <h3 id="nested-media-queries">Nested media queries</h3>
                    <p>Back in the day, you might have written all of your main 'desktop' CSS in one long file. There probably wouldn't be much of an order to the styles, and over time, new stuff just gets added to the bottom. There would most likely be a load of redundant code and <code class="language-markup">!important</code> declarations, and it just becomes a nightmare to maintain.</p>
                    <p>Responsive CSS would add to this nightmare. You might create a new Sass partial for each breakpoint, and call it something like <code class="language-markup">_min569-max840.scss</code>. This sucks because you'd have to rename the file, fix your <code class="language-markup">@import</code> statement, and curse yourself every time the breakpoint values change.</p>
                    <p>Nesting in Sass is a hotly-debated topic, but it can really improve the responsive nightmare illustrated above. When paired with component-based development, it becomes a dream.</p>
                    <p>Components can be entirely self contained within their Sass partial. New breakpoints can be nested, as and when they are needed, which keeps styles in order, and makes them easy to find, read,git  and maintain.</p>
                    <p>Having said that, I'd recommend avoiding nesting where possible, with the exception of the following:</p>
                    <ul>
                        <li>Pseudo states (e.g. <code class="language-markup">&amp;:hover</code>, <code class="language-markup">&amp;:active</code>)</li>
                        <li>Pseudo elements (e.g. <code class="language-markup">&amp;:before</code>, <code class="language-markup">&amp;:after</code>)</li>
                        <li>Sibling combinators (e.g. <code class="language-markup">+</code>, <code class="language-markup">~</code>)</li>
                        <li>Media queries (e.g. <code class="language-markup">@media screen and (max-width: 768px)</code>)</li>
                    </ul>
                    <p>It's best to use common sense and think about how your selectors will look once compiled.</p>


                    <h2 id="css-style-guide">CSS style guide</h2>

                    <h3 id="specificity">Specificity</h3>
                    <p>Firstly, a note on specificity. Specificity applies to your CSS selectors, and determines which CSS rules are applied to an element. Selectors with higher specificity override selectors with lower specificity. Using overly specific selectors can cause issues that are typically solved by sticking <code class="language-markup">!important</code> at the end of the rule. This is <strong>bad</strong>.</p>
                    <p><code class="language-markup">!important</code> has its place, as explained in the <a href="#">trumps</a> section of this document, but it usually causes further problems with specificity, and can be a sign that the CSS is badly written.</p>
                    <p>Specificity also increases when multiple selectors are used to target an element, e.g. <code class="language-markup">.nav-primary ul li a {}</code>.</p>
                    <p class="important">For this reason, you should <strong>only use classes in your HTML and CSS</strong>, and <strong>avoid ids</strong>. Of course, you can use ids for anchors and form elements that require them, just don't use ids for styling hooks. To further reduce specificity issues, you should <strong>apply classes to every element within a component</strong>, as described in the <a href="#">Class naming convention</a> section this document. Additionally, <strong>do not qualify your class selectors with an element</strong>, i.e. <code class="language-markup">div.nav-primary</code>. This increases selector specificity, and makes styles less portable. Using a class on its own allows you to add use it with different elements and the styles will still apply.</p>
                    <p>Read more about specificity on <a href="http://www.smashingmagazine.com/2007/07/27/css-specificity-things-you-should-know/">Smashing Magazine</a> and <a href="http://css-tricks.com/strategies-keeping-css-specificity-low/">CSS Tricks</a>.</p>

                    <h3 id="class-naming-convention">Class naming convention (BEM)</h3>
                    <p>A key part of component-based development comes from the class naming convention.</p>
                    <p>Each component (header, footer, navigation etc) is a <strong>block</strong>, which contains <strong>elements</strong> (list items, links, etc). Every <strong>element</strong> within a <strong>block</strong> should have a class that ties it to the <strong>block</strong>. Classes should be lowercase (no camelCase), and use the <a href="http://bem.info/">BEM</a> naming convention, e.g.:</p>

                    <pre><code class="language-markup">.block__element--modifier</code></pre>

                    <p>Double dashes <code class="language-markup">--</code> and underscores <code class="language-markup">__</code> are used to give visual separation, and allows you to use single dashes <code class="language-markup">-</code> or underscores <code class="language-markup">_</code> when naming a block, element, or modifier, e.g.:</p>

                    <pre><code class="language-markup">.social-links--small</code></pre>

                    <h4>Block</h4>

                    <p><code class="language-markup">.block</code> is the name given to the component. It may be hyphenated, e.g. <code class="language-markup">.nav-primary</code>.</p>
                    
                    <h4>Element</h4>

                    <p><code class="language-markup">__element</code> represents a descendent of <code class="language-markup">.block</code> that helps form <code class="language-markup">.block</code> as a whole, e.g.:</p>

                    <pre class="language-markup">
                        <code class="language-markup">
&lt;nav class="nav"&gt; &lt;!--this is the block--&gt;
&lt;ul class="nav__menu"&gt; &lt;!--this is an element within the 'nav' block--&gt;
    &lt;li class="nav__item"&gt; &lt;!--this is another element within the 'nav' block--&gt;
        &lt;a href="#" class="nav__link"&gt;Float me left&lt;/a&gt; &lt;!--this is another element within the 'nav' block--&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/nav&gt;
                        </code>
                    </pre>

                    <p>Note that <code class="language-markup">__element</code> identifiers should not be chained. i.e. don't write <code class="language-markup">nav__menu__item__link</code> - they should only be one level deep.</p>

                    <h4>Modifier</h4>

                    <p><code class="language-markup">--modifier</code> can be applied to a <code class="language-markup">.block</code> or an <code class="language-markup">__element</code>, and represents a different version or state of the <code class="language-markup">.block</code> or <code class="language-markup">__element</code>, e.g.:</p>
                    <pre class="language-markup">
                        <code class="language-markup">
&lt;nav class="nav nav--secondary"&gt; &lt;!--this is a variation of the 'nav' block shown above--&gt;
&lt;ul class="nav__menu"&gt;
    &lt;li class="nav__item"&gt;
        &lt;a href="#" class="nav__link"&gt;Float me left&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav__item"&gt;
        &lt;a href="#" class="nav__link"&gt;Float me left&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav__item nav__item--alt"&gt; &lt;!--this is a variation of 'nav__item'--&gt;
        &lt;a href="#" class="nav__link"&gt;Float me right&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/nav&gt;
                        </code>
                    </pre>

                    <p class="important">When a <code class="language-markup">--modifier</code> is used, the original <code class="language-markup">.block</code> or <code class="language-markup">__element</code> class <em>and</em> the <code class="language-markup">--modifier</code> class should be added in the markup. This makes it clear how variations of components interact with each other. In your CSS, simply do this:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
.nav {
    // styles that apply to both .nav and .nav--primary
}

.nav--primary {
    // styles that only apply to .nav--primary
}

                        </code>
                    </pre>

                    <p>Applying classes to every element may seem unnecessary and verbose, but ensures that any element can be targeted in your CSS with simple, low-specificity selectors, i.e. in most cases, a single class. This helps to keep nesting to a minimum, and styles remain easy to intentionally override.</p>

                    <p>For example:</p>

                     <pre class="language-scss">
                        <code class="language-scss">
.nav-primary {
    // styles
}

.nav-primary__menu {
    // styles   
}

.nav-primary__item {
    // styles
}               
                        </code>
                    </pre>

                    <p>There may be times when you cannot apply classes to every element within a block, such as wysiwyg content from a CMS. In this instance, the following can be used:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
.wysiwyg { // or .rte, as it's easier to type
    > h1 {
        // styles
    }
    > p {
        // styles
    }
    > img {
        // styles
    }
}
                        </code>
                    </pre>
                    <p>The direct child selector <code class="language-markup">></code> is used here to tightly scope styles.</p>

                    <h4>JavaScript hooks and states</h4>

                    <p>Avoid using styling classes as JavaScript hooks, and instead add JavaScript-specific classes to elements, using the <code class="language-markup">js-</code> prefix, e.g.:</p>

                    <pre class="language-markup">
                        <code class="language-markup">
&lt;button class="button--positive js-tree-toggle"&gt;Toggle&lt;/button&gt;
                        </code>
                    </pre>

                    <p>If you're using JavaScript to add classes to elements to reflect states, use classes prefixed with <code class="language-markup">is-</code> or <code class="language-markup">has-</code>, e.g.:</p>

                    <pre class="language-markup">
                        <code class="language-markup">
&lt;button class="button--positive js-tree-toggle is-active"&gt;Toggle&lt;/button&gt;
// or
&lt;form class="form-search js-validate has-errors"&gt;...&lt;/form&gt;
                        </code>
                    </pre>

                    <h4>Naming things</h4>

                    <p>The class name given to a <code class="language-markup">.block</code> or <code class="language-markup">__element</code> should be as general as possible, but it should still make sense to a developer. You should be able to tell which component you are editing, and what that component does, just by looking at the HTML or CSS (and not just the page in-browser). Keeping the name general means that a component can be placed anywhere on a site, and its name is not affected by the context.</p>

                    <p>Names should go from general to specific, usually identifying the type of component, and then a more specific identifier, e.g.:</p>

                    <p><code class="language-markup">home-carousel</code> is a bad class name, because if the same slider is used somewhere other than the home page, the name no longer makes sense.</p>

                    <p><code class="language-markup">carousel-primary</code> is better, as it makes scanning for a particular type of component faster. You can then use secondary, tertiary, alpha, beta, etc to name similar components.</p>

                    <p><a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/">Read this great article about the benefits of BEM</a>.</p>

                    <h3 id="writing-rules">Writing rules</h3>

                    <h4>General</h4>
                    <ul>
                        <li>Sass partials should be prefixed with an underscore.</li>
                        <li>Component partials should match the <code class="language-markup">.block</code> name that they reference, e.g <code class="language-markup">_nav.scss</code>.</li>
                        <li>Write CSS mobile-first when appropriate</li>
                        <li>Do not use ids (unless you're overriding something a CMS has generated and you can't add a class to the element).</li>
                    </ul>
                    
                    <h4>Formatting</h4>
                    <ul>
                        <li>One selector per line</li>
                        <li>Put a single space before the opening brace <code class="language-markup">{</code></li>
                        <li>Put a single space after the colon <code class="language-markup">:</code></li>
                        <li>Use semi-colon <code class="language-markup">;</code> after every declaration</li>
                        <li>No space before semi-colon <code class="language-markup">;</code></li>
                        <li>Put the closing brace <code class="language-markup">}</code> on a new line, and add an empty line after it, except when nesting selectors</li>
                    </ul>

                    <h4>Style</h4>
                    <ul>
                        <li>Use (short) hex color codes <code class="language-markup">#000</code> or rgba</li>
                        <li>Use shorthand notation where possible, e.g. <code class="language-markup">border: 1px solid #000;</code></li>
                        <li>Use double forward-slash <code class="language-markup">//</code> for comments</li>
                        <li>Use <code class="language-markup">'single quotes'</code> instead of <code class="language-markup">"double quotes"</code></li>
                        <li>Use <code class="language-markup">:before</code> and <code class="language-markup">:after</code> for pseudo elements</li>
                        <li>Put a single space after commas, e.g. <code class="language-markup">color: rgba(0, 0, 0, .5);</code></li>
                        <li>Omit the 0 when entering decimals between 0 and 1, e.g. <code class="language-markup">color: rgba(0, 0, 0, .5);</code></li>
                        <li>Omit units after 0 values, e.g. <code class="language-markup">font-size: 0;</code></li>
                        <li>Omit units from <code class="language-markup">line-height</code>, e.g. <code class="language-markup">line-height: 1.4</code></li>
                        <li>Avoid qualifying class names with an element selector e.g. <code class="language-markup">div.primary</code>. This increases selector specificity, and makes styles less portable. Using a class on its own allows you to add use it with different elements and the styles will still apply</li>
                        <li>Do not use quotes in URLs, e.g. <code class="language-markup">background-image: url(image.png);</code></li>
                        <li>Use 4 spaces for indentation</li>
                    </ul>

                    <h4>Font sizing</h4>
                    <ul>
                        <li>Set body font size to the standard paragraph size (from the PSD), not <code class="language-markup">62.5%</code></li>
                        <li>Use the Sass <code class="language-markup">rem-calc</code> function to set <code class="language-markup">px</code> font sizes that are converted to <code class="language-markup">rem</code> once compiled</li>
                    </ul>

                    <h4>Units</h4>
                    <ul>
                        <li>Use <code class="language-markup">box-sizing: border-box</code> (globally, if possible)</li>
                        <li>Use <code class="language-markup">rem</code> for font sizes</li>
                        <li>Use <code class="language-markup">%</code> for widths</li>
                        <li>Use <code class="language-markup">px</code> for padding and margins</li>
                    </ul>

                    <h4>Magic numbers</h4>
                    <ul>
                        <li>Use <code class="language-markup">bottom: 100%</code> or <code class="language-markup">top: 100%</code> etc. instead of magic numbers (e.g. <code class="language-markup">top: 177px</code>)</li>
                    </ul>

                    <h4>Grunt</h4>
                    <ul>
                        <li>Use <a href="https://github.com/nDmitry/grunt-autoprefixer"><code class="language-markup">grunt-autoprefixer</code></a> instead of a Sass mixin to handle browser prefixes</li>
                    </ul>

                    <h4>Nesting</h4>
                    <p>Only nest the following, if you can help it:</p>
                    <ul>
                        <li>Pseudo states (e.g. <code class="language-markup">&amp;:hover</code>, <code class="language-markup">&amp;:active</code>)</li>
                        <li>Pseudo elements (e.g. <code class="language-markup">&amp;:before</code>, <code class="language-markup">&amp;:after</code>)</li>
                        <li>Sibling combinators (e.g. <code class="language-markup">+</code>, <code class="language-markup">~</code>)</li>
                        <li>Media queries (e.g. <code class="language-markup">@media screen and (max-width: 768px)</code>)</li>
                    </ul>
                    <ul>
                        <li>Nest media queries within the parent (or top level) selector, as shown in the <a href="#full-example">full example</a></li>
                    </ul>

                    <h4>Declaration order</h4>
                    <ol>
                        <li>Extends</li>
                        <li>Includes (mixins)</li>
                        <li>Standard rules</li>
                        <li>Pseudo states</li>
                        <li>Pseudo elements</li>
                        <li>Descendents</li>
                        <li>Media queries (nested)</li>
                    </ol>

                    <h4 id="full-example">Full example</h4>
                    <pre class="language-scss">
                        <code class="language-scss">
.example {
    @extend %heading;
    @include clearfix();
    border: 1px solid #000;
    color: rgba(0, 0, 0, .5);
    background: url(/assets/img/placeholder--example.jpg) no-repeat center;
    padding: 0; // remove padding
    font-size: rem(20px);
    &amp;:hover,
    &amp;:active {
        color: #f00;
    }
    &amp;:before {
        // styles
    }
    @media-query(desktop) {
        font-size: rem(22px);
        &amp;:before {
            // styles
        }
    }
}

.example--special {
    border: 1px solid #f00;
}
                        </code>
                    </pre>

                    <h2 id="css-architecture">CSS architecture</h2>

                    <h3 id="css-folder-structure">CSS folder structure</h3>

                    <p>The folder structure for CSS is based on <a href="http://csswizardry.com/">Harry Roberts'</a> CSS Architecture for Big Front Ends. I attended his workshop at the <a href="http://futureofwebdesign.com/london-2014/">Future of Web Design 2014</a> conference, and it was outstanding.</p>
                    
                    <button class="button--positive js-tree-toggle">Toggle entire structure</button>

                    <ol class="tree">
                        <li class="tree__folder">
                            <label class="folder__label" for="css">css / <span class="hint">&lt; Click to expand and collapse</span></label>
                            <input type="checkbox" class="folder__checkbox" name="css" id="css">
                            <ol class="tree__container">
                                <li class="tree__folder">
                                    <label class="folder__label" for="sass">sass /</label>
                                    <input type="checkbox" class="folder__checkbox" name="sass" id="sass">
                                    <ol class="tree__container">
                                        <li class="tree__folder">
                                            <label class="folder__label" for="settings">settings /</label>
                                            <input type="checkbox" class="folder__checkbox" name="settings" id="settings">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss <span class="hint">&lt; Click files to view source</span></li>
                                                <li class="tree__file">_color.scss</li>
                                                <li class="tree__file">_type.scss</li>
                                                <li class="tree__file">_vars.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="tools">tools /</label>
                                            <input type="checkbox" class="folder__checkbox" name="tools" id="tools">
                                            <ol class="tree__container">
                                                <li class="tree__folder">
                                                    <label class="folder__label" for="helpers">helpers /</label>
                                                    <input type="checkbox" class="folder__checkbox" name="helpers" id="helpers">
                                                    <ol class="tree__container">
                                                        <li class="tree__file">_clearfix.scss</li>
                                                        <li class="tree__file">_hide-text.scss</li>
                                                        <li class="tree__file">_image-replacement.scss</li>
                                                        <li class="tree__file">_image-retina.scss</li>
                                                    </ol>
                                                </li>
                                                <li class="tree__folder">
                                                    <label class="folder__label" for="mixins">mixins /</label>
                                                    <input type="checkbox" class="folder__checkbox" name="mixins" id="mixins">
                                                    <ol class="tree__container">
                                                        <li class="tree__file">_font-face.scss</li>
                                                        <li class="tree__file">_media-query-hi-dpi.scss</li>
                                                        <li class="tree__file">_media-query.scss</li>
                                                    </ol>
                                                </li>
                                                <li class="tree__folder">
                                                    <label class="folder__label" for="functions">functions /</label>
                                                    <input type="checkbox" class="folder__checkbox" name="functions" id="functions">
                                                    <ol class="tree__container">
                                                        <li class="tree__file">_em-calc.scss</li>
                                                        <li class="tree__file">_percentage.scss</li>
                                                        <li class="tree__file">_strip-units.scss</li>
                                                    </ol>
                                                </li>
                                                <li class="tree__file">_all.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="generic">generic /</label>
                                            <input type="checkbox" class="folder__checkbox" name="generic" id="generic">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss</li>
                                                <li class="tree__file">_normalize.scss</li>
                                                <li class="tree__file">_reset.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="base">base /</label>
                                            <input type="checkbox" class="folder__checkbox" name="base" id="base">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss</li>
                                                <li class="tree__file">_form-elements.scss</li>
                                                <li class="tree__file">_headings.scss</li>
                                                <li class="tree__file">_links.scss</li>
                                                <li class="tree__file">_page.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="objects">objects /</label>
                                            <input type="checkbox" class="folder__checkbox" name="objects" id="objects">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss</li>
                                                <li class="tree__file">_accordion.scss</li>
                                                <li class="tree__file">_buttons.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="components">components /</label>
                                            <input type="checkbox" class="folder__checkbox" name="components" id="components">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss</li>
                                                <li class="tree__file">_accordion--primary.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__folder">
                                            <label class="folder__label" for="trumps">trumps /</label>
                                            <input type="checkbox" class="folder__checkbox" name="trumps" id="trumps">
                                            <ol class="tree__container">
                                                <li class="tree__file">_all.scss</li>
                                                <li class="tree__file">_helpers.scss</li>
                                                <li class="tree__file">_print.scss</li>
                                            </ol>
                                        </li>
                                        <li class="tree__file">app.scss</li>
                                    </ol>
                                </li>
                                <li class="tree__file"><a href="assets/css/app.css" target="_blank">app.css</a> <span class="hint">&lt; Click files to view source</span></li>
                                <li class="tree__file">app.min.css</li>
                            </ol>
                        </li>
                    </ol>

                    <h3 id="css-source-order">CSS source order</h3>

                    <p class="important">Click the folder names below to jump to more detailed descriptions of the contents, with examples.</p>

                     <ol>
                        <li><a href="#folder-settings"><code class="language-markup">settings</code></a> - Variables, feature switches and other project specific settings. These are defined first and will be picked up and used by the framework later on.</li>
                        <li><a href="#folder-tools"><code class="language-markup">tools</code></a> - Mixins and functions to make tasks easier. These appear early on so that they can be utilised in the main body of the codebase.</li>
                        <li><code class="language-markup">generic</code> - Resets, global box-sizing. These styles are really far reaching; they underpin every element we place on the page.</li>
                        <li><code class="language-markup">base</code> - Base elements, unclassed h1, ol, etc. These are semantic HTML elements that require some base styling for when they exist outside of a component context (e.g. a regular, bulleted list in some body copy).</li>
                        <li><code class="language-markup">objects</code> - Design patterns, objects, abstractions, and constructs.</li>
                        <li><code class="language-markup">components</code> - Styled components and modules. These build on top of semantic HTML elements and are referred to mainly through class selectors. Partial names should be named after the class that they describe, e.g. _nav--primary.scss. Partials should always start with an underscore.</li>
                        <li><code class="language-markup">trumps</code> - Style trumps, helper classes, and overrides. These need to override any other styles, and thus come last. It is common for these styles to be <code class="language-markup">!important</code></li>
                    </ol>

                    <p>The CSS structure and import order is important, and goes from general (affecting many elements), to specific (affecting just one element in one circumstance, for example). The order that styles are imported should match the order that the browser renders them. This way, you're typically adding styles to an element instead of taking them away, and the browser should render the page faster.</p>

                    <p>Each direct subfolder within the <code class="language-markup">sass</code> directory contains a partial called <code class="language-markup">_all.scss</code>, which contains <code class="language-markup">@import</code> statements for each partial within the same folder, e.g.:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
// css/sass/settings/_all.scss
@import 'vars',
        'color',
        'type';
                        </code>
                    </pre>

                    <p>Because it has subfolders, the <code class="language-markup">_all.scss</code> partial for <code class="language-markup">tools</code> is a little different:</p>

                    <pre class="language-scss">
                        <code class="language-scss">
// Custom Functions
@import 'functions/em-calc',
        'functions/percentage',
        'functions/grid-flex',
        'functions/strip-units',

        // CSS3
        'css3/font-face',
        'css3/media-query-hidpi',
        'css3/media-query',

        //Addons
        'addons/clearfix',
        'addons/hide-text',
        'addons/image-replacement',
        'addons/image-retina'; 
                        </code>
                    </pre>

                    <p>I won't list all of the different files here, so have a look through the <a href="#css-folder-structure">folder structure</a> and click on files you're interested in.</p>

                    <h4 id="folder-settings">1. settings</h4>
                    <p><code class="language-markup">settings</code> contains variables that are used throughout the project, such as color, type, font sizes, etc.</p>
                    <p>It's best to use separate partials for logical groups of variables.</p>
                    <p>Variables should follow the BEM naming convention outlined <a href="#class-naming-convention">previously</a>.</p>
                    <p>When defining color variables, it can be useful to avoid using specific color names, as these may change, and instead assign generic identifiers, e.g.:</p>
                    <pre class="language-scss">
                        <code class="language-scss">
$color--brand-red: #ea1e06;
$base--text-color: #333;
$base--brand-color: $color--brand-red;
                        </code>
                    </pre>

                    <h4 id="folder-tools">2. tools</h4>
                    <p><code class="language-markup">tools</code> contains mixins and functions. The tools included in this project are limited to ones that should be useful in almost every project. You are free to add or remove any you like. Be aware, however, that some mixins and functions may rely on each other to work.</p>
                    <p class="important">!!!!!!!!!!!!!!!!!!!!!!<code class="language-markup">_prefix</code> is included here because other mixins rely on it. You should avoid using this in your CSS, and use <a href="https://github.com/nDmitry/grunt-autoprefixer"><code class="language-markup">grunt-autoprefixer</code></a> to handle browser prefixes instead.!!!!!!!!!!!!!!!!!!!!!!</p>
                    <div class="article-meta">
                        <a href="/blog">Read another article</a>
                        <p>Written on Wednesday 19 August 2015</p>
                        <p>Tags: <span><a href="/blog/tag/sass">Sass</a></span>, <span><a href="/blog/tag/bem">BEM</a></span></p>
                    </div>
                    <div id="disqus_thread"></div>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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

            (function TreeNavigation() {

                var $buttonShowAll = $('.js-tree-toggle');
                var $treeContainer = $('.tree');


                bindEvents = function () {

                    $buttonShowAll.on('click', function (e) {
                        toggle(e);
                    });

                    $treeContainer.find('label').on('click', function (e) {

                        var index = $(this).parents('.tree__folder').index($treeContainer.find('.tree__folder'));

                        if ($treeContainer.hasClass('show-all')) {

                            $treeContainer.removeClass('show-all');
                            $buttonShowAll.removeClass('active');

                            $treeContainer.find('.tree__folder:lt(' + index + ')').each(function () {
                                $(this).find('input[type="checkbox"]').prop('checked', true);
                            });

                        }
                        else{

                            $treeContainer.removeClass('hide-all');
                        }
                    });
                }

                toggle = function (e) {

                    e.preventDefault();

                    var _class = ($treeContainer.hasClass('show-all') ? 'hide-all' : 'show-all');
                    $treeContainer.removeClass('show-all hide-all').addClass(_class);

                    $buttonShowAll.toggleClass('active');  
                }

                bindEvents();
            })();

        </script>
        <script src="/assets/js/prism.min.js"></script>
    </body>
</html>
