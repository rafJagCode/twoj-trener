$(document).ready(function() {

    $('.checkboxes-list > label').click(function()
    {
      var input = $(this).children('input');
      if(input.is(":checked"))
      {
        $(input).parent().css('background-color', '#753cda');
        $(input).parent().css('color', 'rgb(255, 255, 255)')
      }
      else
      {
        $(input).parent().css('background-color', '');
        $(input).parent().css('color', '#666')
      }
    });
});