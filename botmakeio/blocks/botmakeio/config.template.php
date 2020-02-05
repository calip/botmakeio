<?php
/**
 * Botmakeio - Config
 * 
 * Super simple and clean chatbot
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php 
global $HTMLHeader;
$script_src = CURRENT_SUBSITE_URL_PATH . '/blocks/botmakeio/botmakeio.admin.js';
$HTMLHeader->JAVASCRIPT($script_src);
?>
<h4><?= ___('Botmake.io Settings') ?></h4>
<schlix-config:checkbox config-key="bool_enable_bot" label="<?= ___('Enable Botmake.io') ?>" />
<schlix-config:textbox id="botmakeio_id" config-key="str_botmakeio_id" required="required" label="<?= ___('BotmakeIO ID') ?>"   />
<hr />
<strong><?= ___('Code Snippet') ?></strong>
<schlix-config:textarea id="code_snippet" config-key="str_code_snippet" style="min-height:100px" placeholder="{...}" />
<p><?= ___('Enter your botmake.io code snippet. you can find <a href="https://botmake.io/admin/embed" target="_blank">botmake.io</a> here.') ?></p>