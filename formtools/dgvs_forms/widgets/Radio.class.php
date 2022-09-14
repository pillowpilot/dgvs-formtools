<?php

namespace Widgets;

class Radio
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

        $html = '<div class="form-check">';
        $html .= '<input type="radio" name="' . $uniqueName . '" id="' . $uniqueName . '" class="form-check-input"/>';
        $html .= '<label for="' . $uniqueName . '" class="form-check-label">' . $this->labelText . '</label>';
        $html .= '</div>';

        return $html;
    }
}

?>