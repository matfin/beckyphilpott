$(document).ready(function()
{
    $('.expandable-sub').next().css('display', 'none');
    
    $('.expandable-sub').click(function()
    {
        $(this).next().show('slow');
        return false;
    });
});