ngs.ContactLoad = Class.create(ngs.AbstractLoad, {
    initialize: function ($super, shortCut, ajaxLoader) {
        $super(shortCut, "home", ajaxLoader);
    },
    getUrl: function () {
        return "contact";
    },
    getMethod: function () {
        return "POST";
    },
    getContainer: function () {
        return "content";
    },
    getName: function () {
        return "contact";
    },
    afterLoad: function () {
        
    }
});
