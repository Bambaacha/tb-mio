<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */
function dumpVar($_ = null)
    {
        $args = func_get_args();
        foreach($args as $argv)
        {
            if($argv === true)
            {
                $r = 'true';
            }
            elseif($argv === false)
            {
                $r = 'false';
            }
            elseif($argv === null)
            {
                $r = 'NULL';
            }
            else
            {
                $r = print_r($argv, true);
            }

            if(isset($_SERVER['APACHE_RUN_USER']))
            {
                echo '<pre>'.tb_htmlspecialchars($r).'</pre>';
            }
            else
            {
                echo $r;
            }

            echo "\n";
        }
    }

include '../../../backend/allCategories.php';

foreach (getCat() as $category) {
	return $category->Kategorien;
}