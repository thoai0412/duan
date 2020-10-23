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


  //   $(function() {
  //     $(".tags_select2").select2({
  //         tags: true,
  //         tokenSeparators: [',',';']
  //     });
  //     ClassicEditor
  // .create(document.querySelector('#content'))
  // .catch(error => {
  //   console.error(error);
  // })
  // });

  