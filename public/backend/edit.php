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
include '../../../backend/allArticles.php';

$artCount = count(getArticles());
$catCount = count(getCat());

/**
 * Hier wird beim Artikel eine Kategorie zugewiesen
 */
if(isset($_POST['mappingArtCat']))
{
	for($i = 1; $i <= $artCount; $i++){
		if (isset($_POST['a_id_'.$i])){
			for($x = 1; $x <= $catCount; $x++){
				if (isset($_POST['c_id_'.$x])){
					foreach(getArticles() as $article){
						if($article->a_id == $i){
							foreach(getCat() as $category){
								if($category->c_id == $x){

									$sql = "UPDATE articles SET categorie = ( SELECT categories.name
									FROM categories
									WHERE c_id = '$category->c_id' ) 
									WHERE a_id = '$article->a_id'";

									if(startConnection()->query($sql) === true)
									{
										echo "<p><h2>New Article has been added.</h2></p>";
									}
									else
									{
										echo "Error: ".$sql."<br>".startConnection()->error;
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
