<?php
$stat = stat('doc_signs');
echo "<h2>PHP is Working!</h2>";
echo 'time: ' . $stat['mtime']; /* time of last modification (Unix timestamp) */
echo 'size: ' . $stat['size'];  /* size in bytes */
?>