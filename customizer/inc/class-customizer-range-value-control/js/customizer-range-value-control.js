/**
 * Script run inside a Customizer control sidebar
 */
(function($) {
    wp.customize.bind('ready', function() {
        rswRangeSlider();

    });

    var rswRangeSlider = function() {
        var rswSlider = $('.range-slider'),
            rswRange = $('.range-slider__range'),
            rswValue = $('.range-slider__value');

        rswSlider.each(function() {

            rswValue.each(function() {
                var rswValue = $(this).prev().attr('value');
				var suffix = ($(this).prev().attr('suffix')) ? $(this).prev().attr('suffix') : '';
                $(this).html(rswValue + suffix);
            });

            // Update the text value
        rswRange
            .on("input", function () {
                var suffix = ($(this).attr('suffix')) ? $(this).attr('suffix') : '';
                        $(this).next(rswValue).html(this.value + suffix );
                        $(this).attr('value', this.value);
                        //$(this).parent().parent().next('.oceanwp-range-input').attr('value', this.value);
            });

        });
    };

})(jQuery);
