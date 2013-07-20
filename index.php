<?php 
include_once('Core/Core.php');
include_once('Core/ChronosProgressBar.php');

$content = '<div>
                <div class="left">
                    <h2>Writing games with Chronos is fun.</h2>
                    Chronos is a java game toolkit with resource
                    management, game updating service and a scriptable
                    entity system.
                    <div class="space"><a href="wiki/" class="button_grey">Getting started ></a></div>
                </div>
                <div class="right"></div>
            </div>';

$progress = '<div class="progress"><h2>Progress</h2>';
$progressBar = new ChronosProgressBar($metaData);
$progress .= $progressBar;
$progress .= '</div>';

$layout->setTitle('Game Development Toolkit');
$layout->addContent($content);
$layout->addContent($progress);
$layout->render();

?>