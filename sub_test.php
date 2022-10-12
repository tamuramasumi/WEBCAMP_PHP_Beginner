<?php

$family_name = "tamura";
$first_name = "masumi";
echo "{$family_name} {$first_name} \n";

$i = 123;

if ($i <= 100) {
    echo "100以下 \n";
} else {
    echo "100を超える \n";
}

if ($i < 50) {
    echo "50未満 \n";
} else if ($i < 100) {
    echo "100未満 \n";
} else if ($i < 150) {
    echo "150未満 \n";
} else {
    echo "150以上 \n";
}
