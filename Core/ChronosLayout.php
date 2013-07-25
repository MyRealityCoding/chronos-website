<?php
/* Layout for the project "Chronos"
 * 
 * @author Miguel Gonzalez <miguel-gonzalez@gmx.de>
 * @since 1.0
 * @version 1.0
 * @link http://my-reality.de Website of the author
 * @copyright (c) 2012, Miguel Gonzalez
 */
include_once('PageLayout.php');

class ChronosLayout extends PageLayout {
    
    private $metaData;
    
    function __construct($metaData) {
        parent::__construct();
        $this->addStyle('Content');
        $this->addStyle('ProgressBar');
        $this->metaData = $metaData;
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
        $this->addScript('http://dev.my-reality.de/jquery/icebearjs/1.0.1/jquery.icebearjs.min.js');
    }
    
    
    
    public function setTitle($title) {
        parent::setTitle('Chronos - ' . $title);
    }
    
    
    /**
     * Template structure for the galacticum website
     */
    protected function generateTemplate($content) {
        
        $versionString = $this->metaData['APP_VERSION'] . $this->metaData['APP_PHASE'];
        
        $result = '<div id="topbar">
                        <div id="wrapper">
                            <div id="top">
                                <div class="logo_small"></div>
                                <a href="index.php">About</a>
                                <a href="changes.php">Changes</a>
                                <a href="https://github.com/MyRealityCoding/chronos/wiki">Wiki</a>
                                <a href="javadoc/">Documentation</a>
                                <a href="http://code.google.com/p/chronos-game-toolkit/downloads/list" class="button_green right">Download v.' . $versionString . '</a>
                            </div>
                            <div id="content">' . $content . '</div>
                            <div id="footer">
                                <a href="http://my-reality.de/impressum/">Impressum</a>
                                <a href="http://my-reality.de">Entwickler-Blog</a>
                                &copy; 2013 my Reality Development
                            </div>
                        </div>
                    </div>';
        return $result;
    }
}
?>
