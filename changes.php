<?php 
include_once('Core/Core.php');
include_once('Core/ChronosProgressBar.php');

$content = parseChanges('http://chronos-game-toolkit.googlecode.com/svn/trunk/Chronos/changes.xml');

$layout->setTitle('Changes');
$progress = '<div class="progress"><h2>Progress</h2>';
$progressBar = new ChronosProgressBar($metaData);
$progress .= $progressBar;
$progress .= '</div>';
$layout->addContent($progress);
$layout->addContent($content);
$layout->render();

?>
