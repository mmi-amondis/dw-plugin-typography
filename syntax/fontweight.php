<?php
/**
 * DokuWiki Plugin Typography; Syntax typography fontweight
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Satoshi Sahara <sahara.satoshi@gmail.com>
 *
 */

require_once(dirname(__FILE__).'/base.php');

class syntax_plugin_typography_fontweight extends syntax_plugin_typography_base
{
    protected $pattern = array(
        1 => '<fw\b.*?>(?=.*?</fw>)',
        4 => '</fw>',
    );

}
