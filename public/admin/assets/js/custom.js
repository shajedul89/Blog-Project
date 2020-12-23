(function($){
$(document).ready(function(){
    // CKEDITOR

    CKEDITOR.replace('post_editor');
    CKEDITOR.replace('post_editor_edit');

// logout setup

$('a#logout').click(function(e){

	e.preventDefault();

	$('form#logout_form').submit();


});

//convert Datatables

    $('table.data-table').DataTable();

// image preview
$(document).on('change','input#fimg',function(e){
    e.preventDefault();
    let post_img_url =URL.createObjectURL(e.target.files[0]);
    $('img#feather_img').attr('src',post_img_url);
    $('#first').hide();
    $('#second').show();
});

// post edit
    $(document).on('click','#post_edit',function (e){
        e.preventDefault();
      

        let edit_id = $(this).attr('tag_id');
    

        $.ajax({

            url : 'post-edit/' + edit_id,
            success : function(data){
             $('#edit_tag input[name="title"]').val(data.title);
             $('#feather_img_edit').attr('src','public/media/post_img/'+ data.image);
             $('.cat').html(data.cat_list);
             $('#edit_tag').modal('show');
            }

            
        })

    });



// category edit
    $(document).on('click','a#cat_edit',function (e){
        e.preventDefault();

        let id=$(this).attr('cat_id');

        $.ajax({
            url:'post-category-edit/'+ id,
            dataType:"json",
            success: function(data){
                $('#edit_cat form input[name="name"]').val(data.name);
                $('#edit_cat form input[name="id"]').val(data.id);
            }
        });
    });



});
})(jQuery)
