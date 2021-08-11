<?php
                include('simple_html_dom.php');

                $html = file_get_html('http://localhost/phpmyadmin/index.php?route=/sql&db=student_db&table=admin&pos=0');
                echo $html->find('div.table-responsive-md',0)->innertext;




                ?>