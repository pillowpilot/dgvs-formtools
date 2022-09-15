document.addEventListener('DOMContentLoaded', function () {
    
    fetch('forms_json/botulismo.json')
    .then(res => res.json())
    .then(data => {
        console.log(data);
    });

    
});