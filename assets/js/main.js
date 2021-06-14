jQuery("a").each(function () {
    if (jQuery(this).attr("href") == "#") {
        jQuery(this).append(jQuery("<i>").attr("class", "fas fa-caret-down p-1"));
        jQuery(this).click(function (e) { 
            e.preventDefault();
        });
    }
});