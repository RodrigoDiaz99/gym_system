$(function(){
   console.log(permissions)
   $('.category').click(function() {
    var checked = this.checked;
    $(this).siblings('.sub-permissions').find(':checkbox').prop('checked', checked);
});

$('.sub-permissions :checkbox').click(function() {
    var checked = this.checked;
    $(this).parents('.sub-permissions').siblings('.category').prop('checked', checked);
});
});
