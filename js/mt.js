/**
 * Created by Eduard V. Doloc on 25.07.2016.
 */

(function ($) {
    $(document).ready(function () {
        $('input[name="filter_mt"]').click(function () {
            $('input[name="post[]"]').each(function () {
                if ($(this).is(':checked')) {
                    var element = $(this).parent().parent().find('a.row-title');
                    window.open(element.attr('href'), '_blank');
                }
            });
        });
    });
}(jQuery));