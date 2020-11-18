(function($){
$(document).ready(function(){

// logout setup

$('a#logout').click(function(e){

	e.preventDefault();

	$('form#logout_form').submit();



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
