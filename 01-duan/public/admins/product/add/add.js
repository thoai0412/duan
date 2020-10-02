$(function() {
        $(".tags_select_choose").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
        ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
      console.error(error);
    })
    });


    