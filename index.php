<?php $title='Slideshow'; include(__DIR__ . '/../mall/header.php'); ?>

<h1>A rolling slideshow </h1>
<div class='slideshow'>
  <img src1='img/emma1.jpg' crop='0,200,0,300'/>
  <img src1='img/emma2.jpg' crop='0,200,0,0'/>
  <img src1='img/emma3.jpg' crop='0,200,0,220'/>
</div> <!-- end of slideshow -->

<p>Du använder min rullande bildspel genom att använda dig av enkel kod:
<pre>
  &lt;div class='slideshow'>
  &lt;img src1='img/emma1.jpg' crop='0,200,0,300'/>
</pre><br />

Och så många bilder du vill snurra på lägger du till av rad 2. Glöm heller inte lägga bilderna i den mappen.

Ladda ner samtliga filer ifrån <a href="">GitHub</a>, de filerna du behöver ha mest koll på är: index.php, plugin.js och style.less.
</p>
<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>
<script src="plugin.js"></script>
