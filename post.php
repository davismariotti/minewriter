<html>
<body>
<?php
$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
?>
Welcome <?php echo $author; ?>!<br>
Book Title: <?php echo $title; ?>
Content: <?php echo $content; ?> 


<php
$file = fopen("books/" . $author . "-" . $title, "w");
fwrite($file, "!" . $author . "\n!" . $title . "\n" . $content);
fclose($file);
echo "File Written!";
?>
</body>
</html>
