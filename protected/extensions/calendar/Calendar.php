<?php

class Calendar extends CWidget {

    private $css = null;
    private $assetsFolder = null;
    private $assetsFolderName = 'assets';
    private $baseUrl = null;
    public $day;
    public $month;

    private function populateCssArrayFiles() {
        $this->css = array(
            '/css/calendar.css'
        );
    }

    private function loadAllCssScripts() {
        $this->populateCssArrayFiles();
        foreach ($this->css as $filename)
            Yii::app()->getClientScript()->registerCssFile($this->baseUrl . $filename);
    }

    private function setAssetsFolder() {
        $this->assetsFolder = dirname(__FILE__) . DIRECTORY_SEPARATOR . $this->assetsFolderName;
        $this->baseUrl = CHtml::asset($this->assetsFolder);
    }

    public function init() {
        $this->setAssetsFolder();
        $this->loadAllCssScripts();
        echo '
        <!-- begins Calendar widget -->
        <!-- begins Calendar widget -->
        <div class="calendar-box">
            <div class="calendar-strip">
                <div class="calendar-month">' . ($this->month) . '</div>
            </div>
            <div class="calendar-day">' . ( $this->day ) . '</div>
        </div>
        <!-- ends Calendar widget -->
        <!-- ends Calendar widget -->';
    }

}