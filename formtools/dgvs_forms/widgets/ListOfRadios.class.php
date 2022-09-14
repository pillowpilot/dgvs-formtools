<?php

namespace Widgets;

class ListOfRadios
{
    public $legend;
    public $radios;

    public function __construct($legend)
    {
        $this->legend = $legend;
        $this->radios = array();
    }

    public function addRadio($radio)
    {
        $this->radios[] = $radio;
    }

    public function render()
    {
        $html = '<div class="field-group">';
        $html .= '<fieldset class="form-group border rounded-3 p-3">';
        $html .= '<legend class="float-none w-auto px-3">' . $this->legend . '</legend>';

        foreach ($this->radios as $radio) {
            $html .= $radio->render();
        }

        $html .= '</fieldset>';
        $html .= '</div>';

        return $html;
    }
}

?>