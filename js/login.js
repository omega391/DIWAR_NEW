//login
$(document).ready(function () {
  $(".loginshowhide").click(function () {
    var x = $(this).text();
    if (x == "Show") {
      $(this).text("Hide");
      $("#password").attr("type", "password");
    } else {
      $(this).text("Show");
      $("#password").attr("type", "text");
    }
  });
});

//button sign up
$("#login").click(function () {
  $(this).addClass("active");
});

//go to sign up


//   -----------------------///
//sign up
$(document).ready(function () {
  $(".signupshowhide").click(function () {
    var x = $(this).text();
    if (x == "Show") {
      $(this).text("Hide");
      $("#signuppassword").attr("type", "password");
    } else {
      $(this).text("Show");
      $("#signuppassword").attr("type", "text");
    }
  });
});
$(document).ready(function () {
  $(".signupshowhide2").click(function () {
    var y = $(this).text();
    if (y == "Show") {
      $(this).text("Hide");
      $("#signuppassword2").attr("type", "password");
    } else {
      $(this).text("Show");
      $("#signuppassword2").attr("type", "text");
    }
  });
});

//signup button
$("#signup").click(function () {
  $(this).addClass("active");
});

//go to log in
$("#gotologin").click(function () {
  $("#signuppage").hide();
  $("#loginpage").show();
});
