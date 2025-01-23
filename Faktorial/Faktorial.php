<?php
function faktorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

echo faktorial(5); // Output: 120
?>