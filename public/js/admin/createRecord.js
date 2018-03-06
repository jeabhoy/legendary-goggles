$(document).ready(function () {

  //upload preview ajax
  $('#profilePictureInput').change(function ()
  {
    if (this.files && this.files[0])
    {
        var reader = new FileReader();
        reader.onload = function (e)
        {
            $('#profilePicture').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
  });

  //Civil status create page div
  if ($("#civilStatus").val() == "Married") {
    $("#marriedDiv").show();
  }
  else {
    $("#marriedDiv").hide();
  }
  $("#civilStatus").change(function()
  {
    var x = $("#civilStatus").val();
    if (x == 'Married')
    {
      $("#marriedDiv").show();
    }
    else
    {
      $("#marriedDiv").hide();
    }
  });

  //Show and hide firm div
  if ($('#doYouWork').val() == "Yes")
  {
    $("#firmDiv").show();
  }
  else
  {
    $("#firmDiv").hide();
  }
  $("#doYouWork").change(function() {
    var test = $(this).val();
    if (test == 'Yes') {
      $("#firmDiv").show();
    }
    else{
      $("#firmDiv").hide();
    }
  });

  //Show and hide who sends you to school div
  if ($('#whoSendsToSchool').val() == "Others")
  {
    $("#whoSendsToSchoolDiv").show();
  }
  else
  {
    $("#whoSendsToSchoolDiv").hide();
  }
  $("#whoSendsToSchool").change(function() {
    var test = $(this).val();
    if (test == 'Others') {
      $("#whoSendsToSchoolDiv").show();
    }
    else{
      $("#whoSendsToSchoolDiv").hide();
    }
  });

  //Show and hide father deceased div
  if ($("#fatherDeceased").is(':checked')) {
    $("#fatherDeceasedDiv").hide();
  }
  else{
    $("#fatherDeceasedDiv").show();
  }
  $("#fatherDeceased").click(function() {
    if ($(this).is(':checked')) {
      $("#fatherDeceasedDiv").hide();
    }
    else{
      $("#fatherDeceasedDiv").show();
    }
  });

  //Show and hide mother deceased div
  if ($("#motherDeceased").is(':checked')) {
    $("#motherDeceasedDiv").hide();
  }
  else{
    $("#motherDeceasedDiv").show();
  }
  $("#motherDeceased").click(function() {
    if ($(this).is(':checked')) {
      $("#motherDeceasedDiv").hide();
    }
    else{
      $("#motherDeceasedDiv").show();
    }
  });

  // Academic disable/enable strength
  if ($("#strength").val() == 'Understand lesson well') {
    $("#weakness1").attr("disabled", "disabled");
    $("#weakness2, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
  }
  if ($("#strength").val() == 'Find time to finish assignment') {
    $("#weakness2").attr("disabled", "disabled");
    $("#weakness1, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
  }
  if ($("#strength").val() == 'Work with classmates') {
    $("#weakness3").attr("disabled", "disabled");
    $("#weakness1, #weakness2, #weakness4, #weakness5").removeAttr("disabled");
  }
  if ($("#strength").val() == 'Develop confidence in discussion') {
    $("#weakness4").attr("disabled", "disabled");
    $("#weakness1, #weakness2, #weakness3, #weakness5").removeAttr("disabled");
  }
  if ($("#strength").val() == 'Balance between leisure and studies') {
    $("#weakness5").attr("disabled", "disabled");
    $("#weakness1, #weakness2, #weakness3, #weakness4").removeAttr("disabled");
  }
  $("#strength").change(function() {
    var test = $(this).val();
    if (test == 'Understand lesson well') {
      $("#weakness1").attr("disabled", "disabled");
      $("#weakness2, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
    }
    if (test == 'Find time to finish assignment') {
      $("#weakness2").attr("disabled", "disabled");
      $("#weakness1, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
    }
    if (test == 'Work with classmates') {
      $("#weakness3").attr("disabled", "disabled");
      $("#weakness1, #weakness2, #weakness4, #weakness5").removeAttr("disabled");
    }
    if (test == 'Develop confidence in discussion') {
      $("#weakness4").attr("disabled", "disabled");
      $("#weakness1, #weakness2, #weakness3, #weakness5").removeAttr("disabled");
    }
    if (test == 'Balance between leisure and studies') {
      $("#weakness5").attr("disabled", "disabled");
      $("#weakness1, #weakness2, #weakness3, #weakness4").removeAttr("disabled");
    }
  });

  // Academic disable/enable weakness
  if ($("#weakness").val() == 'Understand lesson well') {
    $("#strength1").attr("disabled", "disabled");
    $("#strength2, #strength3, #strength4, #strength5").removeAttr("disabled");
  }
  if ($("#weakness").val() == 'Find time to finish assignment') {
    $("#strength2").attr("disabled", "disabled");
    $("#strength1, #strength3, #strength4, #strength5").removeAttr("disabled");
  }
  if ($("#weakness").val() == 'Work with classmates') {
    $("#strength3").attr("disabled", "disabled");
    $("#strength1, #strength2, #strength4, #strength5").removeAttr("disabled");
  }
  if ($("#weakness").val() == 'Develop confidence in discussion') {
    $("#strength4").attr("disabled", "disabled");
    $("#strength1, #strength2, #strength3, #strength5").removeAttr("disabled");
  }
  if ($("#weakness").val() == 'Balance between leisure and studies') {
    $("#strength5").attr("disabled", "disabled");
    $("#strength1, #strength2, #strength3, #strength4").removeAttr("disabled");
  }
  $("#weakness").change(function() {
    var test = $(this).val();
    if (test == 'Understand lesson well') {
      $("#strength1").attr("disabled", "disabled");
      $("#strength2, #strength3, #strength4, #strength5").removeAttr("disabled");
    }
    if (test == 'Find time to finish assignment') {
      $("#strength2").attr("disabled", "disabled");
      $("#strength1, #strength3, #strength4, #strength5").removeAttr("disabled");
    }
    if (test == 'Work with classmates') {
      $("#strength3").attr("disabled", "disabled");
      $("#strength1, #strength2, #strength4, #strength5").removeAttr("disabled");
    }
    if (test == 'Develop confidence in discussion') {
      $("#strength4").attr("disabled", "disabled");
      $("#strength1, #strength2, #strength3, #strength5").removeAttr("disabled");
    }
    if (test == 'Balance between leisure and studies') {
      $("#strength5").attr("disabled", "disabled");
      $("#strength1, #strength2, #strength3, #strength4").removeAttr("disabled");
    }
  });
  //enable disable decide to enroll others input
  if ($('#decideToEnroll').val() == "Others")
  {
    $("#decideToEnrollOthers").removeAttr("disabled");
  }
  else
  {
    $("#decideToEnrollOthers").attr("disabled", "disabled");
  }
  $("#decideToEnroll").change(function() {
    var test = $(this).val();
    if (test == 'Others') {
      $("#decideToEnrollOthers").removeAttr("disabled");
    }
    else{
      $("#decideToEnrollOthers").attr("disabled", "disabled");
    }
  });

  //enable disable factor influenced others input
  if ($('#factorInfluenced').val() == "Others")
  {
    $("#factorInfluencedOthers").removeAttr("disabled");
  }
  else
  {
    $("#factorInfluencedOthers").attr("disabled", "disabled");
  }
  $("#factorInfluenced").change(function() {
    var test = $(this).val();
    if (test == 'Others') {
      $("#factorInfluencedOthers").removeAttr("disabled");
    }
    else{
      $("#factorInfluencedOthers").attr("disabled", "disabled");
    }
  });


    //Form dynamic create div
    if ($("#level").val() == "College") {
      $(".collegeShow").show();
      $(".collegeHide").hide();
      if ($("#civilStatus").val() == "Married") {
        $("#marriedDiv").show();
      }
      else {
        $("#marriedDiv").hide();
      }
      if ($('#doYouWork').val() == "Yes")
      {
        $("#firmDiv").show();
      }
      else
      {
        $("#firmDiv").hide();
      }
      if ($('#whoSendsToSchool').val() == "Others")
      {
        $("#whoSendsToSchoolDiv").show();
      }
      else
      {
        $("#whoSendsToSchoolDiv").hide();
      }
    }
    else if ($("#level").val() == "Grade 11" || $("#level").val() == "Grade 12") {
      $(".grade1112Show").show();
      $(".grade1112Hide").hide();
      if ($("#civilStatus").val() == "Married") {
        $("#marriedDiv").show();
      }
      else {
        $("#marriedDiv").hide();
      }
      if ($('#doYouWork').val() == "Yes")
      {
        $("#firmDiv").show();
      }
      else
      {
        $("#firmDiv").hide();
      }
      if ($('#whoSendsToSchool').val() == "Others")
      {
        $("#whoSendsToSchoolDiv").show();
      }
      else
      {
        $("#whoSendsToSchoolDiv").hide();
      }
    }
    else if ($("#level").val() == "Grade 7" || $("#level").val() == "Grade 8" || $("#level").val() == "Grade 9" || $("#level").val() == "Grade 10") {
      $(".grade710Show").show();
      $(".grade710Hide").hide();
      if ($("#civilStatus").val() == "Married") {
        $("#marriedDiv").show();
      }
      else {
        $("#marriedDiv").hide();
      }
      if ($('#doYouWork').val() == "Yes")
      {
        $("#firmDiv").show();
      }
      else
      {
        $("#firmDiv").hide();
      }
      if ($('#whoSendsToSchool').val() == "Others")
      {
        $("#whoSendsToSchoolDiv").show();
      }
      else
      {
        $("#whoSendsToSchoolDiv").hide();
      }
    }
    else {
      $(".grade16Show").show();
      $(".grade16Hide, #marriedDiv, #firmDiv, #whoSendsToSchoolDiv").hide();
      if ($("#civilStatus").val() == "Married") {
        $("#marriedDiv").hide();
      }
      if ($('#doYouWork').val() == "Yes")
      {
        $("#firmDiv").hide();
      }
      if ($('#whoSendsToSchool').val() == "Others")
      {
        $("#whoSendsToSchoolDiv").hide();
      }
    }

    $('#level').change(function ()
    {
      var x = $("#level").val();
      if (x == "College") {
        $(".collegeShow").show();
        $(".collegeHide").hide();
        if ($("#civilStatus").val() == "Married") {
          $("#marriedDiv").show();
        }
        else {
          $("#marriedDiv").hide();
        }
        if ($('#doYouWork').val() == "Yes")
        {
          $("#firmDiv").show();
        }
        else
        {
          $("#firmDiv").hide();
        }
        if ($('#whoSendsToSchool').val() == "Others")
        {
          $("#whoSendsToSchoolDiv").show();
        }
        else
        {
          $("#whoSendsToSchoolDiv").hide();
        }
      }
      else if (x == "Grade 11" || x == "Grade 12") {
        $(".grade1112Show").show();
        $(".grade1112Hide").hide();
        if ($("#civilStatus").val() == "Married") {
          $("#marriedDiv").show();
        }
        else {
          $("#marriedDiv").hide();
        }

        if ($('#doYouWork').val() == "Yes")
        {
          $("#firmDiv").show();
        }
        else
        {
          $("#firmDiv").hide();
        }

        if ($('#whoSendsToSchool').val() == "Others")
        {
          $("#whoSendsToSchoolDiv").show();
        }
        else
        {
          $("#whoSendsToSchoolDiv").hide();
        }
      }
      else if (x == "Grade 7" || x == "Grade 8" || x == "Grade 9" || x == "Grade 10") {
        $(".grade710Show").show();
        $(".grade710Hide").hide();
        if ($("#civilStatus").val() == "Married") {
          $("#marriedDiv").show();
        }
        else {
          $("#marriedDiv").hide();
        }

        if ($('#doYouWork').val() == "Yes")
        {
          $("#firmDiv").show();
        }
        else
        {
          $("#firmDiv").hide();
        }

        if ($('#whoSendsToSchool').val() == "Others")
        {
          $("#whoSendsToSchoolDiv").show();
        }
        else
        {
          $("#whoSendsToSchoolDiv").hide();
        }
      }
      else {
        $(".grade16Show").show();
        $(".grade16Hide, #marriedDiv, #firmDiv, #whoSendsToSchoolDiv").hide();
        if ($("#civilStatus").val() == "Married") {
          $("#marriedDiv").hide();
        }
        if ($('#doYouWork').val() == "Yes")
        {
          $("#firmDiv").hide();
        }
        if ($('#whoSendsToSchool').val() == "Others")
        {
          $("#whoSendsToSchoolDiv").hide();
        }
      }
    });
});
