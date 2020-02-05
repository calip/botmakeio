<?php
namespace Block;
/**
 * Botmakeio - Main Class
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
class Botmakeio extends \SCHLIX\cmsBlock {

    public function Run() {
        global $__botmakeio_loaded;
        if ($__botmakeio_loaded !== 'loaded') { // prevent the built-in duplicate blocks feature 
            $enable_bot = $this->config['bool_enable_bot'];
            $botmakeio_id = $this->config['str_botmakeio_id'];

            $__botmakeio_loaded = 'loaded';
            $this->loadTemplateFile('view.block', compact(array_keys(get_defined_vars())));
        }
    }

}
