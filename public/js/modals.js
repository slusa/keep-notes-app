console.log('kurczaki');

$("body").on("click",".deleteModal",function(){
    var id = $(this).data('id');
    console.log(id);
    var title = $(this).data('title');
    console.log('title');
    $("#deleteModal").find(".modalTitle").text(title);
    var form = $("#deleteModal").find("form");
    console.log(form[0].action);
    form.attr('action', $(this).data('delete-link'));
    console.log(form[0].action);
});
