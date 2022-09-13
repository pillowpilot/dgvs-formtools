<?php

namespace Widgets;

class Select
{
    public $labelText;
    public $name;
    public $namespace;
    public $options;

    public function __construct($labelText, $name, $namespace)
    {
        $this->labelText = $labelText;
        $this->name = $name;
        $this->namespace = $namespace;
        $this->options = array();
        $this->addOption('Sin Datos', '');
    }

    public function addOption($label, $value)
    {
        $this->options[] = array(
            'label' => $label,
            'value' => $value
        );
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
        $html .= '<select name="' . $uniqueName . '" id="' . $uniqueName . '" class="form-select">';

        foreach ($this->options as $option) {
            $html .= '<option value="' . $option['value'] . '">' . $option['label'] . '</option>';
        }
        
        $html .= '</select>';
        $html .= '</div>';

        return $html;
    }
}

?>