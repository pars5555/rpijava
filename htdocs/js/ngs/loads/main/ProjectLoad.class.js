ngs.ProjectLoad = Class.create(ngs.AbstractLoad, {
    initialize: function ($super, shortCut, ajaxLoader) {
        $super(shortCut, "home", ajaxLoader);
    },
    getUrl: function () {
        return "project";
    },
    getMethod: function () {
        return "POST";
    },
    getContainer: function () {
        return "content";
    },
    getName: function () {
        return "project";
    },
    afterLoad: function () {
        
    }
});
