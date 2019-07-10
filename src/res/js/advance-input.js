/**
 * User: h.ghasempour
 * Date: 4/30/2019
 * Time: 11:11 AM
 */
$(document).ready(function () {
    $('.advance-input-checkbox').bootstrapToggle();
    $(document).on('change', '.advance-input-checkbox', function () {
        var state = $(this).prop('checked');
        var id = $(this).parents(".with-input").find(this).attr("id");
        if (id !== undefined) {
            id = id.replace(/-checkbox/g, '');
            if (!state)
                $(document).find('[id="' + id + '"]').attr("disabled", "disabled");
            else
                $(document).find('[id="' + id + '"]').removeAttr("disabled");
        }
        $(this).parents('.advance-input').find(".has-success").removeClass('has-success');
        $(this).parents('.advance-input').find(".has-error").removeClass('has-error');
        $(this).parents('.advance-input').find('input[type="text"]').val('');
        $(this).parents('.advance-input').find('.help-block').text('');
    });
});