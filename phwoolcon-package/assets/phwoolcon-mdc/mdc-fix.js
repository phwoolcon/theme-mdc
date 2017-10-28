/**
 * Process menus
 */
!function (d) {
    function processMenus(e) {
        var target = e.target || e.srcElement, targetMenu, menuLink;
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
    }

    d.addEventListener(d.ontouchstart ? "touchend" : "click", processMenus);

    d.on && d.on(d.ontouchstart ? "touchend" : "click", ".mdc-textfield", function () {
        var input = this.querySelector(".mdc-textfield__input");
        input && input.focus()
    })
}(document);
