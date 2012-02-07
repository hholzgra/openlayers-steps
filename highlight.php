<html>
 <head>
  <title>Highlight Test</title>
  <link rel="stylesheet" title="Default" href="highlight/styles/sunburst.css">
  <script type="text/javascript" src="highlight/highlight.pack.js"></script>
  <script type="text/javascript">
   hljs.initHighlightingOnLoad(); 
  </script>
 </head>
 <body>
  <pre><code class="diff"><?php echo htmlspecialchars(file_get_contents("diff.txt"));?></code></pre>
 </body>
</html>
