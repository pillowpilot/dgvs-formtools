<?php

require_once './widgets/Checkbox.class.php';
require_once './widgets/SingleCheckbox.class.php';
require_once './widgets/ListOfCheckboxes.class.php';
require_once './widgets/Radio.class.php';
require_once './widgets/SingleRadio.class.php';
require_once './widgets/ListOfRadios.class.php';
require_once './widgets/Select.class.php';
require_once './widgets/TextInput.class.php';
require_once './widgets/DateInput.class.php';

use Widgets\Checkbox;
use Widgets\SingleCheckbox;
use Widgets\ListOfCheckboxes;
use Widgets\Radio;
use Widgets\SingleRadio;
use Widgets\ListOfRadios;
use Widgets\Select;
use Widgets\TextInput;
use Widgets\DateInput;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/form-section.css">
    <!-- Bootstrap v5.2.0 - CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario Botulismo</title>
</head>
<body>
    <form method="post">
        <div class="form-intro"></div>

<?php

$file = file_get_contents('./botulismo.json');
$json = json_decode($file, true);

abstract class NodeProcessor
{
    public function getAttribute($node, $attributeName)
    {
        $attrs = $node['_attr'];

        if (array_key_exists($attributeName, $attrs)) {
            return $attrs[$attributeName];
        }

        throw new Exception('Attribute <' . $attributeName . '> not found. Node: ' . print_r($node, true));
    }
    public function renderPrefix()
    {
        return '';
    }

    public function renderSuffix()
    {
        return '';
    }
}

class DefaultProcessor extends NodeProcessor
{
    public $nodeType;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->nodeType = $node['_node_type'];
        $this->namespace = $namespace;
    }

    public function renderPrefix()
    {
        return 'Unknown node type: ' . $this->nodeType . ' (' . $this->namespace . ') <br>';
    }
}

class SectionProcessor extends NodeProcessor
{
    public $title;
    public $namespace;

    public function __construct($node, $currentNamespace)
    {
        $this->title = $this->getAttribute($node, 'title');
        $this->namespace = $this->getAttribute($node, 'namespace');
    }

    public function renderPrefix()
    {
        $html = '<div class="form-section" namespace="' . $this->namespace . '">';
        $html .= '<div class="section-header"><span>' . $this->title . '</span></div>';
        $html .= '<div class="section-content">';
        return $html;
    }

    public function renderSuffix()
    {
        $html = '</div>';
        $html .= '</div>';
        return $html;
    }
}

class TextInputProcessor extends NodeProcessor
{
    public $label;
    public $name;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->label = $this->getAttribute($node, 'label');
        $this->name = $this->getAttribute($node, 'name');
        $this->namespace = $namespace;
    }

    public function renderPrefix()
    {
        $textInput = new TextInput($this->label, $this->name, $this->namespace);
        return $textInput->render();
    }
}

class DateInputProcessor extends NodeProcessor
{
    public $label;
    public $name;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->label = $this->getAttribute($node, 'label');
        $this->name = $this->getAttribute($node, 'name');
        $this->namespace = $namespace;
    }

    public function renderPrefix()
    {
        $dateInput = new DateInput($this->label, $this->name, $this->namespace);
        return $dateInput->render();
    }
}

class SelectProcessor extends NodeProcessor
{
    public $label;
    public $name;
    public $options;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->label = $this->getAttribute($node, 'label');
        $this->name = 'TODO'; // TODO
        $this->options = $this->getAttribute($node, 'options');
        $this->namespace = $namespace;
    }

    public function renderPrefix()
    {
        $select = new Select($this->label, $this->name, $this->namespace);

        foreach ($this->options as $option) {
            $select->addOption($option['label'], $option['value']);
        }

        return $select->render();
    }
}

class CheckboxProcessor extends NodeProcessor
{
    public $legend;
    public $name;
    public $options;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->options = $this->getAttribute($node, 'options');
        $this->name = $this->getAttribute($node, 'name');
        $this->namespace = $namespace;
        if (count($this->options) > 1) {
            $this->legend = $this->getAttribute($node, 'label');
        }
    }

    public function renderPrefix()
    {
        if (count($this->options) === 1 )
        {
            $option = $this->options[0];
            $singleCheckbox = new SingleCheckbox($option['label'], $option['value'], $this->namespace);
            return $singleCheckbox->render();
        }
        else
        {
            $listOfCheckboxes = new ListOfCheckboxes($this->legend);

            foreach ($this->options as $option) {
                $listOfCheckboxes->addCheckbox(new Checkbox($option['label'], $option['value'], $this->namespace));
            }

            return $listOfCheckboxes->render();
        }
    }
}

class RadioProcessor extends NodeProcessor
{
    public $legend;
    public $name;
    public $options;
    public $namespace;

    public function __construct($node, $namespace)
    {
        $this->legend = $this->getAttribute($node, 'label');
        $this->name = $this->getAttribute($node, 'name');
        $this->options = $this->getAttribute($node, 'options');
        $this->namespace = $namespace;
    }

    public function renderPrefix()
    {
        if (count($this->options) === 1 )
        {
            $option = $this->options[0];
            $singleRadio = new SingleRadio($option['label'], $option['value'], $this->namespace);
            return $singleRadio->render();
        }
        else
        {
            $listOfRadios = new ListOfRadios($this->legend);

            foreach ($this->options as $option) {
                $listOfRadios->addRadio(new Radio($option['label'], $option['value'], $this->namespace));
            }

            return $listOfRadios->render();
        }
    }

}

function processNode($node, $outputAcc, $currentLevel, $currentNamespace)
{
    $nodeType = $node['_node_type']; // Only requirement for node
    
    $prefix = '';
    $suffix = '';
    $nodeProcessor = null;
    if ($nodeType === 'section')
    {
        $nodeProcessor = new SectionProcessor($node, $currentNamespace);
        if ($currentLevel !== 0)
            $currentNamespace .= $nodeProcessor->namespace . '_';
    }
    else if ($nodeType === 'textInput')
    {
        $nodeProcessor = new TextInputProcessor($node, $currentNamespace);
    }
    else if ($nodeType === 'dateInput')
    {
        $nodeProcessor = new DateInputProcessor($node, $currentNamespace);
    }
    else if ($nodeType === 'select')
    {
        $nodeProcessor = new SelectProcessor($node, $currentNamespace);
    }
    else if ($nodeType === 'checkbox')
    {
        $nodeProcessor = new CheckboxProcessor($node, $currentNamespace);
    }
    else if ($nodeType === 'radio')
    {
        $nodeProcessor = new RadioProcessor($node, $currentNamespace);
    }
    else
    {
        $nodeProcessor = new DefaultProcessor($node, $currentNamespace);
    }

    $prefix = $nodeProcessor->renderPrefix();
    $suffix = $nodeProcessor->renderSuffix();

    $outputAcc .= $prefix;

    if (array_key_exists('_children', $node))
    {
        $children = $node['_children'];
        foreach ($children as $child)
        {
            $outputAcc .= processNode($child, '', $currentLevel + 1, $currentNamespace);
        }
    }

    $outputAcc .= $suffix;
    return $outputAcc;
}

function processJSON($json)
{
    return processNode($json, '', 0, '');
}

echo processJSON($json);

?>

</form>
    <!-- Bootstrap v5.2.0 - JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>