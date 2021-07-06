jQuery("a").each(function () {
    if (jQuery(this).attr("href") == "#") {
        jQuery(this).append(jQuery("<i>").attr("class", "fa fa-caret-down p-1"));
        jQuery(this).click(function (e) { 
            e.preventDefault();
        });
    }
});

jQuery(".elementor-button-link").each(function () {
    jQuery(this).attr("target", "blank");
});