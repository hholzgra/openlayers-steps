<html>
 <head>
  <title>Source</title>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.js"></script>
  <script type='text/javascript' src='syntaxhighlighter/scripts//shBrushXml.js'></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushJScript.js"></script>
  <link href="syntaxhighlighter/styles/shCore.css" rel="stylesheet" type="text/css" />
  <link href="syntaxhighlighter/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
  <pre class='brush: js, html-script: true'>
<?php
 echo htmlspecialchars(file_get_contents($_GET["name"]));
?>
  </pre>
  <script type="text/javascript">
     SyntaxHighlighter.all()
  </script>
 </body>
</html>
