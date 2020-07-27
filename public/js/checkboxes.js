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

    //na razie sztywna ilosc dyscyplin
    for(var i = 0; i < 9; i++)
    {
        // console.log($('.checkboxes-list > label').eq(i).is(':checked'));
        if($('.checkboxes-list > label').children('input').eq(i).is(':checked'))
        {
            $('.checkboxes-list > label').children('input').eq(i).parent().css('background-color', '#753cda');
            $('.checkboxes-list > label').children('input').eq(i).parent().css('color', 'rgb(255, 255, 255)');
        }
    }
});