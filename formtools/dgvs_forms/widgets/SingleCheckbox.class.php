<?php

namespace Widgets;

class SingleCheckbox
{
    public $labelText;
    public $name;
    public $namespace;

    public function __construct($labelText, $name, $namespace = '')
    {
        $this->labelText = $labelText;
        $this->name = $name;
        $this->namespace = $namespace;
    }

    public function generateUniqueName()
    {
        return $this->namespace . $this->name;
    }

    public function render()
    {
        $uniqueName = $this->generateUniqueName();
        
        $html = '<div class="field-group">';
        $html .= '<div class="form-check">';
        $html .= '<input type="checkbox" name="' . $uniqueName . '" id="' . $uniqueName . '" class="form-check-input"/>';
        $html .= '<label for="' . $uniqueName . '" class="form-check-label">' . $this->labelText . '</label>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}

?>