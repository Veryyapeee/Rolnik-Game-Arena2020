$("#opt").change(function() {
  if ($(this).is(":checked")) {
    $("#next").removeAttr("disabled");
  } else {
    $("#next").attr("disabled", "disabled");
  }
});
