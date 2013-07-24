<?php 
include_once('Core/Core.php');
include_once('Core/ChronosProgressBar.php');

$content = parseChanges('https://raw.github.com/MyRealityCoding/chronos/master/changes.xml');

$layout->setTitle('Changes');
$progress = '<div class="progress_area"><h2>Progress</h2>';
$progress .= generateProgress();
$progress .= '</div>';
$layout->addContent($progress);
$layout->addContent($content);
$layout->render();

?>
