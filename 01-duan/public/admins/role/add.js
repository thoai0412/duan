$(function() {
    $(".tags_select_choose").select2({
        tags: true,
        tokenSeparators: [',',';']
    });
    ClassicEditor
.create(document.querySelector('#content'))
.catch(error => {
  console.error(error);
})
});
$('.checkbox_wrapper').on('click', function() {
    $(this).parents('.card').find('.checkbox_childrent').prop('checked', $(this).prop('checked'));
});
$('.checkall').on('click', function() {
    $(this).parents().find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
    $(this).parents().find('.checkbox_wrapper').prop('checked',$(this).prop('checked'));
});