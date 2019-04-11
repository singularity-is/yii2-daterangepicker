<?php
/**
 * @link https://github.com/singularity-is/yii2-daterangepicker
 * @copyright Copyright (c) 2019 Singularity Solution
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace singularity\daterangepicker;

use yii\bootstrap4\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use Yii;

class Daterangepicker extends InputWidget
{
    /**
     * @var array the options for the Date Range Picker JS plugin.
     * Please refer to the Date Range Picker plugin Web page for possible options.
     * @see http://www.daterangepicker.com/#options
     */
    public $clientOptions = [];
    /**
     * @var array the event handlers for the Date Range Picker JS plugin.
     * Please refer to the Date Range Picker plugin Web page for possible events.
     * @see http://www.daterangepicker.com/#events
     */
    public $clientEvents = [];

    /**
     * @var bool should calendar icon be included
     */
    public $hasAddon = true;

    /**
     * @var string calendar icon
     */
    public $addonIcon = 'fa fa-calendar';

    /**
     * @inheritdoc
     */
    public function run()
    {
        Html::addCssClass($this->options, 'form-control');

        $input = $this->renderInputHtml('input');

        echo $this->hasAddon ?
            Html::tag('div', $input . $this->getAddon(), ['class' => 'input-group input-group-merge']) :
            $input;

        $this->registerClientScript();
    }

    /**
     * Registers Date Range Picker plugin and the related events
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();

        DaterangepickerAsset::register($view);

        $id = $this->options['id'];

        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : 'null';

        $js[] = "jQuery('#{$id}').daterangepicker({$options});";

        foreach ($this->clientEvents as $eventName => $handler) {
            $js[] = "jQuery('#{$id}').on('{$eventName}', {$handler});";
        }

        $view->registerJs(implode("\n", $js));
    }

    /**
     * @return string
     */
    protected function getAddon()
    {
        return "<div class='input-group-append'><span class='input-group-text'><i class='{$this->addonIcon}'></i></span></div>";
    }
}
