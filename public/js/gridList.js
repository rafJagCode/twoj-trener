$(document).ready(function(){
    $("a.switcher").bind("click", function(e){
        e.preventDefault();

        var theid = $(this).attr("id");
        if($(this).hasClass("active-view-btn")) {
            return false;
        }
        else {
            if(theid == "grid_view_button") {
                $(this).addClass("active-view-btn").removeClass("lde");
                $("#list_view_button").removeClass("active-view-btn").addClass("lde");
                $("#icon_view").removeClass("fa-th-list").addClass("fa-th-large");
                
                $('#list_view').css('display','none');
                $('#grid_view').removeAttr('style');
    
                $("#section_class").removeClass("listings-right list").addClass("listings-grid-right");
            }
    
            else if(theid == "list_view_button") {
                $(this).addClass("active-view-btn").removeClass("lde");
                $("#grid_view_button").removeClass("active-view-btn").addClass("lde");
                $("#icon_view").removeClass("fa-th-large").addClass("fa-th-list");
    
                $('#grid_view').css('display','none');
                $('#list_view').removeAttr('style');
    
                $("#section_class").removeClass("listings-grid-right").addClass("listings-right list");
            }
        }
    });
});