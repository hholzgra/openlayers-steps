<html>
 <head>
  <title>OpenLayers Step by Step</title>
  <script type="text/javascript" src="jquery.js"></script>
  <script>
function foo(name) 
{
  jQuery("div[name*='step']").hide();
  jQuery("div[name='"+name+"']").show();
}
  </script>
 </head>
 <body>
  <h1>OpenLayers Step by Step</h1>
  <hr />
  <ul> 
<?php

function my_cmp($a, $b)
{
  $a = (int)str_replace("step-","",$a); 
  $b = (int)str_replace("step-","",$b); 

  if ($a == $b) {
      return 0;
  }

  return ($a < $b) ? -1 : 1;
}

$names = glob("step-*/index.*");

usort($names, "my_cmp");

$oldname = "";
foreach ($names as $name) {
  switch (basename($name)) {
    case "index.html":
    case "index.php":

      $content = file_get_contents($name); 
      if (preg_match('|title>(.*)</title|mi', $content, $matches)) {
        echo "<li>";
        echo "<a target='step' href='$name' onclick='foo(\"$name\")'>$matches[1]</a>";
        echo "<div name='$name' style='display: none'>";
	echo "<ul>";
        echo "<li><a href='source.php?name=$name' target='step'>Source</a></li>";
        if (!empty($oldname)) {
          echo "<li><a href='diff.php?old=$oldname&new=$name' target='step'>Diff to previous</a></li>";
        }
	if (file_exists(dirname($name)."/notes.html")) {
	  echo "<li><a target='step' href='".dirname($name)."/notes.html'>Notes</a></li>";
	}
        echo "</li>";
        echo "</div>";
        echo "</li>\n";
        $oldname = $name;
      }
      break;
    default:
      // ignore
      break; 
  }
}
?>
  </ul>
 </body>
</html>
