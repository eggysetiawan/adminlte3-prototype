try {
    window.$ = window.jQuery = require("jquery");
    require("admin-lte");
    require("admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js");
    require("admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");
    window.toastr = require("admin-lte/plugins/toastr/toastr.min.js");

    // datatables
    require("admin-lte/plugins/datatables/jquery.dataTables.min.js");
    require("admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js");
    require("admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js");
    require("admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js");
    require("admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js");
    require("admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js");
} catch (e) {}
