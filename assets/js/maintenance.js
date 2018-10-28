var descCount = 0;
$(function () {
    $('input[name=txtDescription]').attr('name','desc[]');

    $('#addRentableBtn').on('click', function () {
        $('#AddName').val("");
        $('#AddDesc').val("");
        $('.additionalDesc').html("");
    });

    $('.addDescBtn').on('click', function (event, element) {
        var descCount = $('.descAdd').length;
        if (descCount < 6) {
            var html = "";
            html += "<div class='row descAdd descAdd" + descCount + "'><br>";
            html += '<div class="col-md-11"><input type="text" placeholder="Description" class="form-control" name ="desc[]" required></div>';
            html += '<div class="col-md-1"><button type="button" class="btn btn-danger" onclick="removeDesc(' + descCount + ')">X</button></div>';
            html += "</div>";
            $('.additionalDesc').append(html);
            descCount++;
        }
    });

    $('#addRentable').submit(function(event){
        event.preventDefault();
        var rentableType = $(this).data('type') == 1 ? 'residential' : $(this).data('type') == 2 ? 'parking' : 'commercial';
        var form = $(this).serializeArray();
        var formWithFiles = new FormData(this);
        formWithFiles.append('addRentable', true);
        formWithFiles.append('type', rentableType);

        $.ajax({
            url: "/apartment/controllers/rentable.php",
            type: "POST",
            data: formWithFiles,
            contentType: false,
            processData: false,
            success: function(res){
                res = JSON.parse(res);
                if(res.success){
                    alert(res.detail);
                    $('#myModalAdd').modal('hide');
                    location.reload();
                }else{
                    alert('Failed: ' + res.detail);
                }
            }
        });
    });
});

function removeDesc(id) {
    $('.descAdd' + id).remove();
}