$(document).ready(function (e) {

    $(document).on('click', 'a.texter_edit', function () {
        var id = $(this).attr('data-id');
        $('#editable_text' + id).addClass('hidden');
        $.ajax({
            url: '/nsautexter/texter/edit',
            type: 'GET',
            data: { id: id},
            success: function (data) {
                $('#edit_field' + id).html(data);
            }
        });
        return false;
    });

    $(document).on('mouseenter', 'a.texter_edit', function () {
        var id = $(this).attr('data-id');
        $('#editable_text' + id).css('background-color', '#faf4e3');
    });
    $(document).on('mouseleave', 'a.texter_edit', function () {
        var id = $(this).attr('data-id');
        $('#editable_text' + id).css('background-color', '#fff');
    });


    $(document).on('click', 'button.texter_save', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/nsautexter/texter/save',
            type: 'POST',
            data: { id: id, text: tinymce.activeEditor.getContent()},
            success: function (data) {
                $('#editable_text' + id)
                    .html(tinymce.activeEditor.getContent())
                    .append('<a class="texter_edit" href="#" data-id="'+id+'">[Редактировать]</a>')
                    .removeClass('hidden');
                $('#edit_field' + id).empty();
                unsetTiny();
            }
        });
        return false;
    });

    $(document).on('click', 'button.texter_cancel', function () {
        var id = $(this).attr('data-id');
        $('#editable_text' + id).removeClass('hidden');
        $('#edit_field' + id).empty();
        unsetTiny();
        return false;
    });

    function unsetTiny() {
        var i, t = tinyMCE.editors;
        for (i in t){
            if (t.hasOwnProperty(i)){
                t[i].remove();
            }
        }
    }
});

