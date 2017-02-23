let App = {
    Base       : {},
    Templates  : {},
    Controllers: {},
    Helpers    : {},
    Views      : {},
    Models     : {},
    Collections: {},
    Router     : {},
    Codemirror : {}
};

App.Helpers.View = Uit.View.extend({
    initialize              : function(options){
        Uit.View.prototype.initialize.apply(this, [options]);
    },
    render                  : function(){
        let template = $(this.template());
        this.$el.html(template);
        return this;
    }
});
App.Helpers.Clean = Uit.cleanView;
App.Helpers.Model = Uit.Model.extend({});
App.Helpers.Collection = Uit.Collection.extend({});
App.Helpers.Router = Uit.Router.extend({});
App.Helpers.Modal = Uit.Modal;
App.Helpers.Html = Uit.htmlView;
App.Helpers.ViewExists = Uit.checkViewExist;
App.Helpers.append = Uit.append;