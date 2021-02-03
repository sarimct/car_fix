function confirmDelete(form) {
    console.log(form);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(function (willDelete) {
        if (willDelete) {
            $(form).submit();
        }
    });
}

function confirmComplete(id) {
    console.log(id);
    swal({
        title: "Are you sure?",
        text: "You want to mark complete this job?",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(function (willDelete) {
        if (willDelete) {
            $.ajax({
                url: "../confirmComplete/" + id,
                method: 'GET'
            }).done(function (response) {
                if (response === 'Success') {
                    location.reload();
                }
                else
                    alert('Something Went Wrong!');
            });
        }
    });
}

function formatFaIcon(state) {
    if (!state.id) return state.text; // optgroup
    return "<i class='fa fa-" + state.id + "'></i> " + state.text;
}

function defaultFormat(state) {
    return state.text;
}

$(function () {
    $('input:checkbox, input:radio').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
        increaseArea: '20%' // optional
    });

    $('.select2').each(function () {
        var format = $(this).data('format') ? $(this).data('format') : "defaultFormat";
        $(this).select2({
            theme: "bootstrap",
            templateResult: window[format],
            templateSelection: window[format],
            escapeMarkup: function (m) {
                return m;
            }
        });
    });

    $('input:checkbox.checkall').on('ifToggled', function (event) {
        var newState = $(this).is(":checked") ? 'check' : 'uncheck';
        var css = $(this).data('check');
        $('input:checkbox.' + css).iCheck(newState);
    });

    $('.property_image').on('click', function () {
        var id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(function (willDelete) {
            if (willDelete) {
                $.ajax({
                    url: "../../deleteCarImage/" + id,
                    context: document.body,
                    method: 'GET'
                }).done(function (response) {
                    if (response === 'Success') {
                        location.reload();
                    }
                    else
                        alert('Something Went Wrong!');
                });
            }
        });
    });
});

function confirmAcceptQuotation(quotation_id, request_id) {
    swal({
        title: "Are you sure?",
        text: "You want to accept this quotation?",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(function (willDelete) {
        if (willDelete) {
            $.ajax({
                url: "../confirmAcceptQuotation/" + quotation_id,
                method: 'GET'
            }).done(function (response) {
                if (response === 'Success') {
                    location.reload();
                }
                else
                    alert('Something Went Wrong!');
            });
        }
    });
}

$("#get_id").on('click', function () {
    var i = $(this).data("value");
    $("#quotation_id").val(i);
});

$(function () {
    var imgNum = 0;
    /* BOOTSTRAP SLIDER */
    $('.slider').slider();

    $('#imageGallery .prev').click(function () {
        imgNum--;
        if (imgNum < 1) {
            imgNum = $('.mySlides', $('#imageGallery')).length;
        }
        $.next();
    });
    $('#imageGallery .next').click(function () {
        imgNum++;
        if (imgNum > $('.mySlides', $('#imageGallery')).length) {
            imgNum = 1;
        }
        $.next();
    });

    $('#imageGallery').on('show.bs.modal', function () {
        //showDivs(1);
        imgNum = 1;
        $.next();
    });


    $.next = function () {
        var imagesGallery = $('#imageGallery');
        $('.mySlides', imagesGallery).hide();
        $('img.mySlides:nth-child(' + imgNum + ')', imagesGallery).show();
    };

    $('body').on('click', 'a.showGallery', function () {
        // TODO: Add Content in Modal Body
        var thisid = $(this).data('id');
        $('#displayImage img', $('#imageGallery')).remove();
        $('.showGallery[data-id="' + thisid + '"]').each(function () {
            var src = $(this).find('img').attr('src');
            console.log(src);

            $('#displayImage', $('#imageGallery')).append(
                '<img class="mySlides" src="' + src + '" />'
            )
        });

        $('#imageGallery').show();
        // showDivs(1);
    })
});

// dependent select 2
$(document).ready(function () {

    $('.select2').css('width', '100%');

    $.fn.customLoad = function () {
        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false,
            containerClass: 'bootstrap-timepicker',
            timeFormat: 'HH:mm:ss p'
        });
        $('.select2').each(function () {
            var format = $(this).data('format') ? $(this).data('format') : "defaultFormat";
            var thisSelectElement = this;
            var options = {
                theme: "bootstrap",
                templateResult: window[format],
                templateSelection: window[format],
                escapeMarkup: function (m) {
                    return m;
                }
            };

            if ($(thisSelectElement).data('url')) {
                var depends;
                if ($(thisSelectElement).data('depends')) {
                    depends = $('[name=' + $(thisSelectElement).data('depends') + ']');
                    depends.on('change', function () {
                        $(thisSelectElement).val(null).trigger('change')
                        // $(thisSelectElement).trigger('change');
                    });
                }
                var url = $(thisSelectElement).data('url');

                options.ajax = {
                    url: url,
                    dataType: 'json',
                    data: function (params) {
                        return {
                            term: params.term,
                            locale: 'en',
                            depends: $('option:selected', depends).val()
                        }
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data.data, function (obj, id) {
                                return {id: obj.id, text: obj.name};
                            })
                        };
                    }

                }
            }

            var tabindex = $(thisSelectElement).attr('tabindex');

            $(thisSelectElement).select2(options);

            $(thisSelectElement).attr('tabindex', tabindex);
            $(thisSelectElement).on(
                'select2:select', (
                    function () {
                        $(this).focus();
                    }
                )
            );
        });
    };

    $(document).customLoad();
});