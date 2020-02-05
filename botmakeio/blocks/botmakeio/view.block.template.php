<?php
/**
 * Botmakeio - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * Super simple and clean chatbot
 * 
 * @copyright 2020 Beplas Studio
 *
 * @license MIT
 *
 * @package botmakeio
 * @version 1.0.3
 * @author  Beplas Studio <alip@beplasstudio.com>
 * @link    https://beplasstudio.com/
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($enable_bot): ?>
    <?php if ($botmakeio_id): ?>
        <script type="text/javascript"> 
            let headID = document.getElementsByTagName("head")[0]; 
            let newCss = document.createElement('link'); 
            newCss.rel = 'stylesheet'; 
            newCss.type = 'text/css'; 
            newCss.href = "https://botmake.io/embed/<?= ___h($botmakeio_id)?>.css"; 
            let newScript = document.createElement('script'); 
            newScript.src = "https://botmake.io/embed/<?= ___h($botmakeio_id)?>.js"; 
            newScript.type = 'text/javascript'; 
            headID.appendChild(newScript); 
            headID.appendChild(newCss);
        </script>
    <?php else: ?>
        <!-- NOTE - botmake.io was not set up correctly - please add code snippet -->
        <script>console.error("botmake.io has not been set from configuration");</script>
    <?php endif ?>
<?php endif ?>