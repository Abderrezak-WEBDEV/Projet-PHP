<?php
$time_start = microtime(true);

// Sleep for a while
usleep(10000);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Le gagnant est $time bravo ! \n";
?>