<?php

$height=['john'=>178,'robert'=>189,'tommy'=>186];
print_r($height);
echo '<hr>';

echo $height['tommy'];
echo '<hr>';

foreach ($height as $key => $value) {
    echo $key.':'.$value.'<hr>';
}

