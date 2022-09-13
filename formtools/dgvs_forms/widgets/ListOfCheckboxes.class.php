<?php

namespace Widgets;

class ListOfCheckboxes
{
    public $legend;
    public $checkboxes;

    public function __construct($legend)
    {
        $this->legend = $legend;
        $this->checkboxes = array();
    }

    public function addCheckbox($checkbox)
    {
        $this->checkboxes[] = $checkbox;
    }

    public function render()
    {
        $html = '<div class="field-group">';
        $html .= '<fieldset class="form-group border rounded-3 p-3">';
        $html .= '<legend class="float-none w-auto px-3">' . $this->legend . '</legend>';

        foreach ($this->checkboxes as $checkbox) {
            $html .= $checkbox->render();
        }

        $html .= '</fieldset>';
        $html .= '</div>';

        return $html;
    }
}

?>