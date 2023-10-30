$(document).ready(function () {
    $(".btn").click(function() {
        $(".Login-form").show(2000);
       $(".Login-form").slideToggle(3000);
       $(".login-inner").fadeIn(2000);
       $(".login-form-header").slideToggle(1000);
      });
});