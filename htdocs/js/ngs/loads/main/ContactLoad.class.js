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
        jQuery('#upload_btn').click(function () {
            jQuery('#logo_picture').trigger("click");
        });
        jQuery('#logo_picture').change(function () {
            jQuery(this).parent('form').submit();
        });
    }
});
