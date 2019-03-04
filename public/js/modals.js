$("body").on("click",".deleteModal",function(){
    var id = $(this).data('id');
    var title = $(this).data('title');
    $("#deleteModal").find(".modalTitle").text(title);
    var form = $("#deleteModal").find("form");
    form.attr('action', $(this).data('delete-link'));
});
