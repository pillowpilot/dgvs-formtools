import {DefaultNode, SectionNode, TextInputNode, DateInputNode, SelectNode, CheckboxNode, RadioNode} from './AST.js';
import {DefaultToHTML, SectionToHTML, TextInputToHTML, DateInputToHTML, SelectToHTML, CheckboxToHTML, RadioToHTML} from './NodeProcessors.js';

document.addEventListener('DOMContentLoaded', function () {

    const jsonToAST = (data) => {
        console.log(data);

        const DISPATCHING_RULES = {
            'section': SectionNode,
            'textInput': TextInputNode,
            'dateInput': DateInputNode,
            'checkbox': CheckboxNode,
            'select': SelectNode
        };
        
        const jsonObjectToAST = (o) => {
            const NodeClass = DISPATCHING_RULES[o['_node_type']] || DefaultNode;
            
            const node = new NodeClass(o);
            o['_children']? node.setChildren(jsonListToAST(o['_children'])) : '';
            
            return node;
        };
        
        const jsonListToAST = (l) => {
            return l.map(jsonObjectToAST);
        };
        
        const ast = jsonObjectToAST(data);
        console.log(ast);
        return ast;
    };

    const astToHTML = (ast) => {
        const DISPATCHING_RULES = {
            SectionNode: SectionToHTML,
            TextInputNode: TextInputToHTML,
            DateInputNode: DateInputToHTML,
            SelectNode: SelectToHTML,
            CheckboxNode: CheckboxToHTML,
            RadioNode: RadioToHTML,
        };
        
        const astToHTML = (node) => {
            const NodeClass = DISPATCHING_RULES[node.constructor.name] || DefaultToHTML;
            
            const nodeToHTML = new NodeClass(node);
            const prefix = nodeToHTML.getPrefix();
            const suffix = nodeToHTML.getSuffix();

            const childrenHTML = node.children? node.children.map(astToHTML).join('') : '';
            const nodeHTML = prefix + childrenHTML + suffix;
            
            return nodeHTML;
        };
        
        const html = astToHTML(ast);
        // console.log(html);
        return html;
    }
    
    fetch('forms_json/botulismo.json')
    .then(res => res.json())
    .then(jsonToAST)
    .then(astToHTML)
    .then(html => document.getElementById('form-container').innerHTML = html);
});