class Node {
    constructor() {
        this.nodeType = this.constructor.name; // FF does not print the class name in console.log
    }
}

class DefaultNode extends Node {
    constructor(o) {
        super();
        this['_node_type'] = o['_node_type'];
        this.node = o;
    }
}

class SectionNode extends Node {
    constructor(o) {
        super();
        this.title = o['_attr']['title'];
        this.namespace = o['_attr']['title'];
    }
    setChildren(children) {
        this.children = children;
    }
    addChild(node) {
        this.children.push(node);
    }
}

class InputNode extends Node {
    constructor(o) {
        super();
        this.name = o['_attr']['name'];
        this.label = o['_attr']['label'];
    }
}

class TextInputNode extends InputNode { }

class DateInputNode extends InputNode { }

class WithOptionsNode extends Node {
    constructor(o) {
        super();
        this.name = o['_attr']['name'];
        this.label = o['_attr']['label'];
        this.options = o['_attr']['options'];
    }
}

class CheckboxNode extends WithOptionsNode { }

class SelectNode extends WithOptionsNode { }

class RadioNode extends WithOptionsNode { }

export {
    DefaultNode,
    SectionNode,
    TextInputNode,
    DateInputNode,
    CheckboxNode,
    SelectNode,
    RadioNode
};
