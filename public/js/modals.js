$("body").on("click",".deleteModal",function(){
    var title = $(this).data('title');
    $("#deleteModal").find(".modalTitle").text(title);
    var form = $("#deleteModal").find("form");
    form.attr('action', $(this).data('delete-link'));
    console.log(form);
});

$("body").on("click",".colorModal",function(){
    var title = $(this).data('title');
    $("#colorModal").find(".modalTitle").text(title);
    var form = $("#colorModal").find("form");
    console.log(form);
    form.attr('action', $(this).data('color-link'));
    console.log(form);
});
