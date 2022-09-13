<?php

namespace Widgets;

class TextInput
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
        $html .= '<label for="' . $uniqueName . '">' . $this->labelText . '</label>';
        $html .= '<input type="text" name="' . $uniqueName . '" id="' . $uniqueName . '" class="form-control">';
        $html .= '</div>';

        return $html;
    }
}

?>