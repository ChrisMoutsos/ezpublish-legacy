<?php
/**
 * File containing the imageInit() function.
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2
 * @version //autogentag//
 * @package kernel
 */


/**
 * Image manager instance
 *
 * @package kernel
 * @deprecated Deprecated as of 4.3, use {@link eZImageManager::factory()} instead.
 */

function imageInit()
{
    return eZImageManager::factory();
}

?>
