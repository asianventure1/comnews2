<?php
/**
 * Hello World! Module Entry Point
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
// Include the syndicate functions only once
$doc=JFactory::getDocument();
$doc->addStyleSheet(JUri::root().'modules/mod_related_articles/css/style.css');

//related slider
$doc->addStyleSheet(JUri::root().'modules/mod_related_articles/css/prettyphoto.css');
$doc->addScript(JUri::root().'modules/mod_related_articles/js/slider_relatednews/jquery.flexslider-min.js');
$doc->addScript(JUri::root().'modules/mod_related_articles/js/slider_relatednews/js/jquery.prettyphoto.js');
$doc->addScript(JUri::root().'modules/mod_related_articles/js/slider_relatednews/init.js');

require_once dirname(__FILE__) . '/helper.php';


$list = ModRelatedArticlesHelper::getList($params);

require JModuleHelper::getLayoutPath('mod_related_articles');