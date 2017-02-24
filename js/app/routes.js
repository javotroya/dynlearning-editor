'use strict';
App.Router.Main = Uit.Router.extend({
    className : 'main',
    routes    : {
        ''  : 'init'
    },
    initialize: function(){
        App.Helpers.Router.prototype.initialize.call(this);
    },
    execute   : function(){
        App.Helpers.Router.prototype.execute.apply(this, arguments);
        this._loadSections();
    },
    _loadSections: function(){
        $.get('/_inc/header.html', function(data){
            $('body').prepend(data);
        });
        $.get('/_inc/sidebar.html', function(data){
            $('.section--main > .row').prepend(data);
            $('body').on('click', '.directory a', function(e){
                e.preventDefault();
                $(this).next().slideToggle();
            });
        });
        $.get('/_inc/editor.html', function(data){
            $('.section--main > .row').prepend(data);
            let htmlmixed = {
                name       : "htmlmixed",
                scriptTypes: [{
                    matches: /\/x-handlebars-template|\/x-mustache/i,
                    mode   : null
                },
                              {
                                  matches: /(text|application)\/(x-)?vb(a|script)/i,
                                  mode   : "vbscript"
                              }]
            };
            let editor    = CodeMirror.fromTextArea(document.getElementById("editor"), {
                mode           : 'css',
                lineNumbers    : true,
                styleActiveLine: true,
                matchBrackets  : true,
                theme          : 'material',
                lineWrapping   : true,
                autofocus      : true,
                autoCloseBrackets: true,
                matchTags: {bothTags: true},
                extraKeys: {'Ctrl-Space': 'autocomplete'}
            });
        });
    },
    init: function(){
        console.log(this);
    }
});