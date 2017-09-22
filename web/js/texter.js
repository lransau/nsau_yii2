$(document).ready(function (e) {
    $(document).on('click', 'a.texter_edit', function () {
        var id = $(this).attr('data-id');
        $("div.editable_text").addClass('hidden');
        $.ajax({
            url: '/dispatcher/texter/default/edit',
            type: 'GET',
            data: { id: id},
            success: function (data) {
                $('#edit' + id).html(data);
            }
        });
        return false;
    });
    $(document).on('click', 'button.texter_save', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/dispatcher/texter/default/save',
            type: 'POST',
            data: { id: id, text: tinymce.activeEditor.getContent()},
            success: function (data) {
                $('div.editable_text')
                    .html(tinymce.activeEditor.getContent())
                    .append('<a class="texter_edit" href="#" data-id="'+id+'">[Редактировать]</a>')
                    .removeClass('hidden');
                $('#edit' + id).empty();
                unsetTiny();
            }
        });
        return false;
    });
    $(document).on('click', 'button.texter_cancel', function () {
        var id = $(this).attr('data-id');
        $("div.editable_text").removeClass('hidden');
        $('#edit' + id).empty();
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

