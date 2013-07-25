<?php 
include_once('Core/Core.php');
include_once('Core/ChronosProgressBar.php');

$content = '<div class="div_table">
                <div class="div_table_row">
                    <div class="left div_table_cell">
                        <h2>Writing games with Chronos is fun.</h2>
                        Chronos is a java game toolkit with resource
                        management, game updating service and a scriptable
                        entity system.
                        <div class="space"><a href="https://github.com/MyRealityCoding/chronos/wiki" class="button_grey">Getting started ></a></div>
                    </div>
                    <div class="div_table_cell right_align">
                        <div class="right"></div>
                    </div>
                </div>
            </div>';

$progress = '<div class="progress_area"><h2>Progress</h2>';

$progress .= generateProgress();

$progress .= '</div>';

$layout->setTitle('Game Development Toolkit');
$layout->addContent($content);
$layout->addContent($progress);
$layout->render();

?>