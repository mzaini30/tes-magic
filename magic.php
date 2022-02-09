<?php include "html-1.php" ?>

<style>
* {
	tab-size: 2;
}
</style>

<!-- Mermaid -->

<script type="magic" src="https://unpkg.com/mermaid@8.13.10/dist/mermaid.min.js"></script>
<div class="mermaid">
graph TD;
    A-->B;
    A-->C;
    B-->D;
    C-->D;
</div>
<script type="magic">mermaid.initialize({startOnLoad:true});</script>

<!-- Highlight -->

<link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.4.0/build/styles/default.min.css">
<script type="magic" src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.4.0/build/highlight.min.js"></script>

<pre><code class="language-css">.nama {
	color: blue;
	background: red;
}</code></pre>

<script type="magic">hljs.highlightAll();</script>

<script>
	<?php include "magic.min.js" ?>
</script>

<?php include "html-2.php" ?>
