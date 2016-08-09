/** =============================
 * site manager.js
 * * ===========================
 * @author Patrick Chito-voro
 * @copyright 2015 Chito Systems.
 *
 * ============================= */

(function ($) {
    "use strict";
    /*global jQuery, document, window*/

    $(document).ready(function () {

        $(".datepickerfield").datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $(".timepickerfield").datetimepicker({
            format: 'HH:mm',
        });
    });
}(jQuery));