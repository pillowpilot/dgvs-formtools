class NodeToHTML {
    getPrefix() { return ''; }
    getSuffix() { return ''; }
}

class DefaultToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }

    getPrefix() {
        return `<p>Default Node of <strong>${this.node.nodeType}</strong></p>`;
    }
}

class SectionToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }

    getPrefix() {
        const title = this.node.title;
        const namespace = this.node.namespace;
        return `<div class="form-section" namespace="${namespace}">
            <div class="section-header"><span>${title}</span></div>
            <div class="section-content">`;
    }

    getSuffix() {
        return `</div></div>`;
    }
}

class TextInputToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }
    getPrefix() {
        const name = this.node.name;
        const label = this.node.label;
        return `<div class="form-group">
            <label for="${name}">${label}</label>
            <input type="text" class="form-control" id="${name}" name="${name}">
            </div>`;
    }
}

class DateInputToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }
    getPrefix() {
        const name = this.node.name;
        const label = this.node.label;
        return `<div class="form-group">
            <label for="${name}">${label}</label>
            <input type="date" class="form-control" id="${name}" name="${name}">
            </div>`;
    }
}

class SelectToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }
    getPrefix() {
        const name = this.node.name;
        const label = this.node.label;
        const options = this.node.options;
        let html = `<div class="form-group">
            <label for="${name}">${label}</label>
            <select class="form-select" id="${name}" name="${name}">`;
        html += options.map(o => `<option value="${o.value}">${o.label}</option>`).reduce((a, b) => a + b, '');
        html += `</select></div>`;
        return html;
    }
}

class CheckboxToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }
    getPrefix() {
        const name = this.node.name;
        const label = this.node.label;
        const options = this.node.options;
        let html = `<div class="form-group">`;
        html += options.length > 1 ? `<fieldset class="form-group border rounded-3 p-3">
        <legend class="float-none w-auto px-3">${label}</legend>` : '';

        html += options.map(o => `<div class="form-check">
        <input class="form-check-input" type="checkbox" name="${o.value}" id="${o.value}" value="${o.value}">
        <label class="form-check-label" for="${o.value}">${o.label}</label>
        </div>`).reduce((acc, curr) => acc + curr, '');

        html += options.length > 1 ? `</fieldset>` : '';
        html += `</div>`;
        return html;
    }
}

class RadioToHTML extends NodeToHTML {
    constructor(node) {
        super();
        this.node = node;
    }
    getPrefix() {
        const name = this.node.name;
        const label = this.node.label;
        const options = this.node.options;
        let html = `<div class="form-group">`;
        html += options.length > 1 ? `<fieldset class="form-group border rounded-3 p-3">
        <legend class="float-none w-auto px-3">${label}</legend>` : '';

        html += options.map(o => `<div class="form-check">
        <input class="form-check-input" type="radio" name="${name}" id="${o.value}" value="${o.value}">
        <label class="form-check-label" for="${o.value}">${o.label}</label>
        </div>`).reduce((acc, curr) => acc + curr, '');

        html += options.length > 1 ? `</fieldset>` : '';
        html += `</div>`;
        return html;
    }
}


export {
    DefaultToHTML,
    SectionToHTML,
    TextInputToHTML,
    DateInputToHTML,
    SelectToHTML,
    CheckboxToHTML,
    RadioToHTML
};