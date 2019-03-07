$("body").on("click",".deleteModal",function(){
    var title = $(this).data('title');
    $("#deleteModal").find(".modalTitle").text(title);
    var form = $("#deleteModal").find("form");
    form.attr('action', $(this).data('delete-link'));
});

$("body").on("click",".colorModal",function(){
    var title = $(this).data('title');
    $("#colorModal").find(".modalTitle").text(title);
    var form = $("#modalTitle").find("form");
    form.attr('action', $(this).data('color-link'));
});
