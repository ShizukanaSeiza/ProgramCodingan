<?php
function jumlahDigit($n) {
    if ($n < 10) {
        return 1;
    } else {
        return 1 + jumlahDigit($n / 10);
    }
}

echo jumlahDigit(12345); // Output: 5
?>