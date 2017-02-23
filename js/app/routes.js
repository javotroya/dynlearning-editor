'use strict';
App.Router.Main = Uit.Router.extend({
    className : 'main',
    routes    : {},
    initialize: function(){
        App.Helpers.Router.prototype.initialize.call(this);
    },
    execute   : function(){
        App.Helpers.Router.prototype.execute.apply(this, arguments);
    }
});