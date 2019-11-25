<?php

define("DRAWINGS", 80);
define("DRAWINGS_WITH_MARKERS", 23);
define("DRAWINGS_WITH_PENCILS", 40);
$count = DRAWINGS - DRAWINGS_WITH_MARKERS - DRAWINGS_WITH_PENCILS;
define("DRAWINGS_WITH_PAINTS", $count);
echo 'Рисунков, выполненных красками '. DRAWINGS_WITH_PAINTS .'.';
