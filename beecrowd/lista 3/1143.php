<?php
$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {
    echo $i . " " . pow($i, 2) . " " . pow($i, 3) . "\n";
}
?>
