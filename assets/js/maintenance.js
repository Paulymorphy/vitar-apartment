var descCount = 0;
$(function () {
    $('input[name=txtDescription]').attr('name','desc[]');

    $('#addRentableBtn').on('click', );

    $('.addDescBtn').on('click', function () {
        addDescField();
    });

    $('.editRentable').on('click', function(){
        var id = $(this).data('id');
        $.ajax({
            url: "/apartment/controllers/rentable.php?id=" + id,
            type: "GET",
            success: res=>{
                res = JSON.parse(res);
                if(res.success){
                    $('#editRentable').data('id',res.data.id);
                    $('#EditName').val(res.data.montlyRate);
                    var desc = res.data.detailDesc.split(';');
                    $('#EditDesc').val(desc[0]);
                    clearField();
                    desc.forEach((e,i)=>{
                        if(i==0 || e == "") return;
                        addDescField(e);
                    });
                    $('#myModalEdit').modal('show');
                }else{
                    console.log(res.detail);
                }
            }
        })
    });
    
    $('.removeRentable').on('click', function(){
        var id = $(this).data('id');
        var form = {
            id: id,
            deleteRentable: true,
        };

        if(confirm('Are you sure?')){
            $.ajax({
                url: "/apartment/controllers/rentable.php",
                type: "POST",
                data: form,
                success: res=>{
                    res = JSON.parse(res);
                    if(res.success){
                        alert(res.detail);
                        location.reload();
                    }else{
                        console.log(res.detail);
                    }
                }
            })
        }

    });

    $('#addRentable').submit(function(event){
        event.preventDefault();
        var rentableType = $(this).data('type') == 1 ? 'residential' : $(this).data('type') == 2 ? 'parking' : 'commercial';
        var form = $(this).serializeArray(); // use this form for validation
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

    $('#editRentable').submit(function(event){
        event.preventDefault();
        var form = $(this).serializeArray(); // use this form for validation
        var formWithFiles = new FormData(this);
        formWithFiles.append('editRentable', true);
        formWithFiles.append('id', $(this).data('id'));

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
                    $('#myModalEdit').modal('hide');
                    location.reload();
                }else{
                    alert('Failed: ' + res.detail);
                }
            }
        });
    });

    $('.rentableTable').DataTable();

    function addDescField(value){
        var descCount = $('.descAdd').length;
        if (descCount < 6) {
            var html = "";
            html += "<div class='row descAdd descAdd" + descCount + "'><br>";
            html += '<div class="col-md-11"><input type="text" placeholder="Description" class="form-control" name ="desc[]" value="'+ (value || "") +'" required></div>';
            html += '<div class="col-md-1"><button type="button" class="btn btn-danger" onclick="removeDesc(' + descCount + ')">X</button></div>';
            html += "</div>";
            $('.additionalDesc').append(html);
            descCount++;
        }
    }

    function clearField(){
        $('#AddName').val("");
        $('#AddDesc').val("");
        $('.additionalDesc').html("");
    }
});

function removeDesc(id) {
    $('.descAdd' + id).remove();
}