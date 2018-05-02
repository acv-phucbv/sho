$(document).ready(function () {

    $('input[name="date_type_normal"]').click(function () {
        if ($(this).prop('checked')) {
            $('.search-prefix').hide();
            $('.search-year-jp').hide();
            $('.search-year').show();
        }
        else {
            $('.search-prefix').show();
            $('.search-year').hide();
            $('.search-year-jp').show();
        }
    })

    if ($('input[name="date_type_normal"]').is(':checked')) {
        $('.search-prefix').hide();
        $('.search-year-jp').hide();
        $('.search-year').show();
    }
    else {
        $('.search-prefix').show();
        $('.search-year').hide();
        $('.search-year-jp').show();
    }

    $('#iso_time').change(function () {
        showInputDate();
    });
    showInputDate();

    $('.input-date-iso').autotab({ tabOnSelect: true, format: 'number' });
    $('.input-date').autotab({ tabOnSelect: true, format: 'number' });

    $('form.without-enter').each(function() {
        $(this).find('input').keypress(function(e) {
            // Enter pressed?
            if(e.which == 10 || e.which == 13) {
                return false;
            }
        });
    });

    $('#submit-export').click(function (e) {
        e.preventDefault();
        $('#form-export').submit();
    })

    $("#zipcode_lookup").on('click', function () {
        var pre = $("input[name=pref21]").val();
        var addr = $("input[name=addr21]").val();
        var strt = $("input[name=strt21]").val();
        var address = pre+addr+strt;
        $("#staff_address").val(address);
    });
})

function autoNextInput(selector) {
  $(selector).keyup(function () {
    if (this.value.length == this.maxLength) {
        next = $(this).next(selector);
        if(next.is(':hidden')){
            next = next.next(selector);
        }
        next.val('').focus();
    }
  });
}

function showInputDate() {
    var iso_time = $('#iso_time');
    if (iso_time.is(':checked')) {
        $('.japan_time').hide();
        $('.iso_time').show();
    } else {
        $('.japan_time').show();
        $('.iso_time').hide();
    }
}