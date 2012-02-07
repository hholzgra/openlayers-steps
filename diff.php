<html>
 <head>
  <title>Source</title>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.js"></script>
  <script type='text/javascript' src='syntaxhighlighter/scripts//shBrushDiff.js'></script>
  <link href="syntaxhighlighter/styles/shCore.css" rel="stylesheet" type="text/css" />
  <link href="syntaxhighlighter/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
 </head>
 <body><!-- foo -->
  <pre class='brush: diff'>
<?php
   $fp = popen("/usr/bin/diff -ubBw " . $_GET['old'] . " " . $_GET['new'], "r");
   while (!feof($fp)) {
     echo htmlspecialchars(fread($fp, 4096));
   }
   pclose($fp);
?>
  </pre>
  <script type="text/javascript">
     SyntaxHighlighter.all()
  </script>
 </body>
</html>
