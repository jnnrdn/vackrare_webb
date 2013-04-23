// Hide and show welcome message

jQuery(document).ready(function($){
        $(".hide-button a").click(function(){
            $("#front-page-intro").slideToggle('slow');
            $(this).text($(this).text() == 'Show' ? 'Hide' : 'Show');
            return false;
        });
});
