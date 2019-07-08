$(document).ready(function () {
    $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        format: 'dd-mm-yyyy',
        weekStart: 1
    });

    $('#input-filters').on('click', function () {
        $(this).parent().find('.popover').show();
    })

    $(document).click(function (event) {
        if (!$(event.target).closest('.popover').length && !$(event.target).closest('#input-filters').length) {
            if ($('.popover').is(":visible")) {
                $('.popover').hide();
            }
        }
    });

    $('.popover input').on('change', function () {
        var filters = "";
        $('.popover input:checked').each(function () {
            if (!filters == "") {
                filters += `, `
            }
            filters += `${this.name}`
        })
        $('#input-filters').val(filters)
        var filters = "";
    })

    $('#input-dateFrom').on('change', function () {
        if ($('#input-dateTo').val() == "") {
            $('#input-dateTo').datepicker('show');
        }
    })

    $(document).on('click', '.hotel-details-category', function () {
        $(this).parent().find('.hotel-details-small').toggle();
    })

    $('#btn-book-now').on('click', function () {
        $('#hotel-rooms .hotel-details-small').show()
        $('html, body').animate({
            scrollTop: $('#hotel-rooms').offset().top
        }, 1000)
    })

});