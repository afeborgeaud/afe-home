<?php
echo '<header-left class="topnav">';
if ($section == "projects") echo '<a href="./index.php">*Projects</a>';
else echo '<a href="./index.php">Projects</a>';
if ($section == "research") echo '<a href="./research.php">*Research</a>';
else echo '<a href="./research.php">Research</a>';
if ($section == "posts") echo '<a href="./posts.php">*Posts</a>';
else echo '<a href="./posts.php">Posts</a>';
echo '</header-left>
<header-right class="items">
</header-right>';''
?>