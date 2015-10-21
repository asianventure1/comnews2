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
class ModFakeReviewsHelper
{

    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getListReviews()
    {
        // Get a db connection.
        $db = JFactory::getDbo();

        // Create a new query object.
        $query = $db->getQuery(true);

        // Select all records from the user profile table where key begins with "custom.".
        // Order it by the ordering field.
        $query->select($db->quoteName(array('name', 'email','date' , 'userphoto', 'reviewtext')));
        $query->from($db->quoteName('#__revews_content'));

        // Reset the query using our newly populated query object.
        $db->setQuery($query);
        /*echo $query->dump();*/
        $result = $db->loadObjectList();
        /*echo '<pre>';
        Print_r($result);
        echo '</pre>';*/
        return $result;
    }
}