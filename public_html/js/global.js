;(function () {
    "use strict";

    if (typeof parent.document !== 'object') {
        throw 'environment: document is not an object';
    }

    if (typeof parent.document.addEventListener !== 'function') {
        throw 'environment: addEventListener function does not exists';
    }

    const init = function() {
        document.getElementById('contribute-link')
            .getElementsByTagName('a')[0]
            .addEventListener('click', showHideContribute, true);

        document.getElementById('about-link')
            .getElementsByTagName('a')[0]
            .addEventListener('click', showHideAbout, true);
    };

    function showHideContribute() {
        let box =  document.getElementById('contribute');
        if (box.classList.contains('hidden')) {
            box.classList.remove('hidden');
        } else {
            box.classList.add('hidden');
        }
    }

    function showHideAbout() {
        let box =  document.getElementById('about');
        if (box.classList.contains('hidden')) {
            box.classList.remove('hidden');
        } else {
            box.classList.add('hidden');
        }
    }

    document.addEventListener('DOMContentLoaded', init, false);
})(window);
