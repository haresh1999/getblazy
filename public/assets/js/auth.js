function select2_option_design_mutiple(state) {
  // console.log($(state.element).attr("data-img"));

  var $state = $('<span><img src="' + $(state.element).attr("data-img") + '" class="img-flag" width="20"/> ' + state.text + "</span>");
  return $state;
}

function select2_option_design_mutiple_selected(state) {
  // console.log('state',state);
  var $state = $(`<span><img class="img-flag" width="20" alt="odm_${state.text}"/> <span></span></span>`);

  const cc = $(state.element).attr("data-cc");
  $state.find("span").text(`+${cc}`);
  $state.find("img").attr("src", $(state.element).attr("data-img"));
  return $state;
}

$("#country-flag").select2({
  // dropdownParent: $("#signup-modal"),
  templateResult: select2_option_design_mutiple,
  templateSelection: select2_option_design_mutiple_selected,
});

$(function () {
  $('input[name="birth_date"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    timePicker: false,
    minYear: 1901,
    maxYear: "{{ date('Y',strtotime('-21 years')) }}",
    autoUpdateInput: false,
    locale: {
      cancelLabel: 'Clear'
    },
  });

  $('input[name="birth_date"]').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

  $('input[name="birth_date"]').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
  });
});