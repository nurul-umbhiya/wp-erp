(function ($) {

    var ERP_Accounting = {

        initialize: function () {
            $('body').on('click', '.erp-ac-ob-add-more', this.ob.moreField);
            $('body').on('click', '.erp-ac-ob-remove-field', this.ob.removeField);
        },

        ob: {
            moreField(e) {
                e.preventDefault();

                let clone = '<div class="erp-ac-ob-field-clone"><div class="row">' + '<label for="ob_names[]">Name</label><input type="text" name="ob_names[]" id="ob_names[]"><label for="ob_starts[]"> Start Date</label><input type="date" name="ob_starts[]" id="ob_starts[]"><label for="ob_ends[]"> End Date</label><input type="date" name="ob_ends[]" id="ob_ends[]"> <span><i class="fa fa-times-circle erp-ac-ob-remove-field"></i></span></div></div>';
                $('.erp-ac-multiple-ob-field').append(clone).find('.fa-times-circle').show();
            },

            removeField(e) {
                e.preventDefault();

                let self = $(this),
                    sub_ob_wrap = $('.erp-ac-multiple-ob-field'),
                    row_length = sub_ob_wrap.find('.row').length;

                if (row_length) {
                    self.closest('.row').remove();
                }
            }
        },
    };

    $(function () {
        ERP_Accounting.initialize();
    });

})(jQuery);