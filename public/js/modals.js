$("body").on("click",".deleteModal",function(){
    var title = $(this).data('title');
    $("#deleteModal").find(".modalTitle").text(title);
    var form = $("#deleteModal").find("form");
    form.attr('action', $(this).data('delete-link'));
});

$("body").on("click",".colorModal",function(){
    var title = $(this).data('title');
    var color = $(this).data('color');
    $("#colorModal").find(".modalTitle").text(title).css({ color: color });;
    var form = $("#colorModal").find("form");
    form.attr('action', $(this).data('color-link'));
});

