/**
 * Process menus
 */
!function (d) {
    d.addEventListener("click", function (e) {
        var target = event.target || event.srcElement, targetMenu, menuLink;
        /**
         * Pass menu click to link
         */
        if (target.hasClass("mdc-simple-menu-item") && (menuLink = target.querySelector(".menu-link"))) {
            menuLink.click();
        }

        /**
         * Toggle menu
         */
        if (target.hasClass("menu-toggler") &&
            target.getAttribute("data-target-menu") &&
            (targetMenu = d.getElementById(target.getAttribute("data-target-menu")))
        ) {
            targetMenu.toggleClass("mdc-simple-menu--open");
        } else {
            [].forEach.call(d.querySelectorAll(".mdc-simple-menu"), function (menu) {
                menu.removeClass("mdc-simple-menu--open");
            });
        }
    });
}(document);
