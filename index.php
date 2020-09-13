<?php

$re = '/\{\{([0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12})(.*)\}\}/miU';
$str = '{{2f520747-90c4-4100-b836-ad461d33907fLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum risus in maximus fermentum. Maecenas pretium vitae justo ac pulvinar. Nunc fringilla auctor nisl vitae finibus. Duis aliquam, erat vitae sollicitudin auctor}}{{4cfc5ea1-c75e-4f47-81d3-dcb9c91144cdPellentesque in lorem et lectus cursus faucibus. Proin euismod, tortor id lacinia ultrices, felis nisi fermentum metus, non volutpat libero diam sed enim}}{{c75a5849-45a5-478a-8199-d69caa9e878dCras gravida tempus nulla, sed placerat turpis tempus phare';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

$result = [];
foreach ($matches as $match) {
    $result[$match[1]] = $match[2];
}

var_dump($result);