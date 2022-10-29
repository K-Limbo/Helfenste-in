<?php
/** VARIABLES
 * @var $title      -> the title of the website
 *
 * @var $navigation -> the navigation bar used
 * @var $content    -> the acctual content of the site
 * @var $footer     -> the fotter of the App
 */
?>

<!DOCTYPE html>
    <html lang="en">
    
    <?=$this->fetch('base/head.php', ["title" => $title])?>

        <body>
					
            <?=$this->fetch('base/navigation.php')?>
            
            <?=$content?>
            
            <?=$this->fetch('base/footer.php')?>
            
        </body>
    </html>