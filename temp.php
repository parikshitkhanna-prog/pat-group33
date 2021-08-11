<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.codechef.com/users/ruchitha19');
echo $html->find('div.widget.pl0.pr0.widget-rating',0)->innertext;
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');

$html->find('div', 1)->class = 'bar';

$html->find('div[id=hello]', 0)->innertext = 'foo';

echo $html; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>



?>