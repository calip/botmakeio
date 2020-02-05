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
class Botmakeio
{
    constructor()
    {
        this.timeout= 1000;
        this.timer= null;
        SCHLIX.Event.onDOMReady(this.onDOMReady, this, true);
    }
    
    onDOMReady()
    {   
        SCHLIX.Event.on('code_snippet', 'input', this.onCodeSnippetChange, this, true);
    }
    
    onCodeSnippetChange(e)
    {
        clearTimeout(this.timer);
        this.timer = setTimeout(function () {
            var code_snippet = SCHLIX.Dom.get('code_snippet').value;
            var js_pattern = /newScript.src = "(.*?)"/;
            var js_url = code_snippet.split(js_pattern)[1];
            if (js_url !== undefined)
            {   
                var source = js_url.substring(js_url.lastIndexOf('/') + 1);
                var bot_id = source.split(/\.(?=[^\.]+$)/)[0];
                SCHLIX.Dom.get('botmakeio_id').value = bot_id;
                SCHLIX.Dom.get('code_snippet').value = "";
                SCHLIX.Alert.info('Botmakeio ID updated'); 
            } 
            else 
            {
                SCHLIX.Alert.error('Some form field values are invalid');
            }
        }, this.timeout);
    }
    
}

var __botmakeio = new Botmakeio();

