$(document).ready(function(){
    function sort(sort_type)
    // function sort(sort_type)
    {
        $.ajax({
            // url:"/trainers/sort?page="+page+"&sortby="+sort_type,
            url:"/trainers/sort?sortby="+sort_type,
            success:function(matchedTrainers)
            {
                // $('#grid_view').html('');
                $("#grid_view").html(matchedTrainers);
                // $('#list_view').html('');
                $("#list_view").html(matchedTrainers);
                console.log(matchedTrainers);
            }
        })
    }

    $('.sort_type').change(function(){
        // var sort_type = $(this).data('.sort_type');
        var sort_type = $('.sort_type').val();
        $('#sort_type_hidden').val(sort_type);
        // var page = $('#page_hidden').val();
        sort(sort_type);
    });

    // $(document).on('click', '.trainers a', function(event){
    //     event.preventDefault();
    //     var page = $(this).attr('href').split("page=")[1];
    //     $('#page_hidden').val(page);
    //     var sort_type = $('#sort_type_hidden').val();
    //     sort(page, sort_type);
    // });
});