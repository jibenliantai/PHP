<?php
for ($i = 1; $i <= 13; $i++) {
        if ($i == 14) {
        break;
    }
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "\n";
}
?>