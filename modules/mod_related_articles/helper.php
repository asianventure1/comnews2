<?php


/**
 * Helper class for Hello World! module
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModRelatedArticlesHelper
{

    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getList()
    {
        $app=JFactory::getApplication();

        $model = JModelLegacy::getInstance('Articles', 'ContentModel', array('ignore_request' => true));
        $category_id=$app->input->get('catid',0,'int');/*lay id category from url*/
        $model->setState('filter.category_id', $category_id);/*loc theo category*/
        $model->setState('filter.published', 1);
        $model->setState('params', JFactory::getApplication()->getParams());

        $items=$model->getItems();
        $content_id=$app->input->get('id',0,'int');

        /*lay cac articles khong cung voi article dang hien thi*/
        foreach($items as $key=> $item)
        {
            if($item->id==$content_id)
            {

                unset($items[$key]);
                break;
            }


        }

        /*lay link de hien thi*/
        foreach ($items as &$item)
        {
            $item->slug = $item->alias ? ($item->id . ':' . $item->alias) : $item->id;

            $item->parent_slug = ($item->parent_alias) ? ($item->parent_id . ':' . $item->parent_alias) : $item->parent_id;

            // No link for ROOT category
            if ($item->parent_alias == 'root')
            {
                $item->parent_slug = null;
            }

            $item->catslug = $item->category_alias ? ($item->catid . ':' . $item->category_alias) : $item->catid;
            $item->event   = new stdClass;

            $dispatcher = JEventDispatcher::getInstance();

            // Old plugins: Ensure that text property is available
            if (!isset($item->text))
            {
                $item->text = $item->introtext;
            }

            JPluginHelper::importPlugin('content');
            $dispatcher->trigger('onContentPrepare', array ('com_content.category', &$item, &$item->params, 0));

            // Old plugins: Use processed text as introtext
            $item->introtext = $item->text;

            $results = $dispatcher->trigger('onContentAfterTitle', array('com_content.category', &$item, &$item->params, 0));
            $item->event->afterDisplayTitle = trim(implode("\n", $results));

            $results = $dispatcher->trigger('onContentBeforeDisplay', array('com_content.category', &$item, &$item->params, 0));
            $item->event->beforeDisplayContent = trim(implode("\n", $results));

            $results = $dispatcher->trigger('onContentAfterDisplay', array('com_content.category', &$item, &$item->params, 0));
            $item->event->afterDisplayContent = trim(implode("\n", $results));
        }

        return $items;
    }
}