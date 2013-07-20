<?php
/* Core file that includes all necessary files like the configuration and
 * a basic layout.
 * 
 * @author Miguel Gonzalez <miguel-gonzalez@gmx.de>
 * @since 1.0
 * @version 1.0
 * @link http://my-reality.de Website of the author
 * @copyright (c) 2012, Miguel Gonzalez
 */

// Include needed files
include_once('Configuration.php');
include_once('ChronosLayout.php');
include_once('functions.php');

$metaData = getMetaData('http://chronos-game-toolkit.googlecode.com/svn/trunk/Chronos/meta.xml');

$layout = new ChronosLayout($metaData);
$layout->setIcon('http://my-reality.de/wp-content/uploads/2012/11/chronos-icon.png');

?>
