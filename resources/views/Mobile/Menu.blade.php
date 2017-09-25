<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title>AMP Menu</title>
    <link rel="canonical" href="?????">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>body{
            -webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>

    </style>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
</head>

<body>
<button on="tap:sidebar.toggle"
        class="ampstart-btn caps m2">Toggle sidebar</button>
    <amp-sidebar id="sidebar"
                 layout="nodisplay"
                 side="right">
        <amp-img class="amp-close-image"
                 src="/amp/img/ic_close_black_18dp_2x.png"
                 width="20"
                 height="20"
                 alt="close sidebar"
                 on="tap:sidebar.close"
                 role="button"
                 tabindex="0"></amp-img>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li> Nav item 1</li>
            <li>
                <amp-fit-text width="220"
                              height="20"
                              layout="responsive"
                              max-font-size="24">
                    Nav item 2 - &lt;amp-fit-text&gt;
                </amp-fit-text>
            </li>
            <li>
                <amp-fit-text width="220"
                              height="20"
                              layout="responsive"
                              max-font-size="24">
                    Nav item 3 - &lt;amp-fit-text&gt; longer text
                </amp-fit-text>
            </li>
            <li> Nav item 4 - Image
            </li>
            <li> Nav item 5</li>
            <amp-accordion disable-session-states>
                <section>
                    <h4>Section 1</h4>
                    <p>Bunch of awesome content.</p>
                </section>
                <section>
                    <h4>Section 2</h4>
                    <div>Bunch of even more awesome content. This time in a
                        <code>&lt;div&gt;</code>.</div>
                </section>
                <section>
                    <h4>Section 3</h4>
                    <figure>
                        <amp-img src="/img/amp.jpg"
                                 width="1080"
                                 height="610"
                                 layout="responsive"
                                 alt="an image"></amp-img>
                        <figcaption>Images work as well.</figcaption>
                    </figure>
                </section>
            </amp-accordion>
            <li> Nav item 6</li>
        </ul>
    </amp-sidebar>
</body>
</html>
