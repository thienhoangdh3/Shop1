$.ajaxSetup({
	headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
});
$(document).off('focusin.modal');

$(document).ready(function(){
    $('div#alert-err').hide();
    // $('div.col-sm-12 col-md-6').removeClass('col-sm-12 col-md-6');


    $(document).on('click', '.btn-view', function() {
        var id_nick = $(this).val();
        console.log(id_nick);
        $.ajax({
            type    : "GET",
            url     : '/admin/nick/' + id_nick,
            success : function(data){
                console.log(data);
                let images = JSON.parse(data.images);
                let notes = data.notes;
                
                $("h5#id_nick").text('Thông Tin Chi Tiết Nick Mã: ' + data.id)
                $("span#id").text(data.id);
                $("span#ingame").text(data.ingame);
                $("span#level").text(data.level);
                $("span#class_nick").text(data.nick_class.class);
                $("span#sv_nick").text(data.nick_sv.sv_name);
                switch (data.clan) {
                    case 0:
                        $("span#ttgt").text("Không");
                        break;
                    case 1:
                        $("span#ttgt").text("Có");
                        break;
                }
                $("span#price").text(data.price);
                $("span#username").text(data.username);
                $("span#password").text(data.password);
                $("span#notes").append(notes);
                
                images.forEach(val => {
                    var image = document.createElement("IMG");
                    image.alt = "Alt information for image";
                    image.setAttribute('class', 'images_nick');
                    image.src="../../storage/nick/" + val;
                    image.id = "myImg";
                    $("span#images").append(image);
                });
                $('button#edit').val(data.id);
            }
        });
    }); 

    $('#view').on('hidden.bs.modal', function () {
        // do something…
        $("span#images").html("");
        $("span#notes").html("");
    });


    $(document).on('change', 'select', function(){
        var ttgt = $('#ttgt').val();
        var status = $('#status').val();
        var sv = $('#servers').val();
        var cls = $('#class_acc').val();
        $.ajax({
            type : "GET",
            url : '/admin/nick/search/' + sv + '/' + cls + '/' + ttgt + '/' + status,
            success : function(data){
                console.log(data);
            }
        });
    });


    // Delete User
    $(document).on('click', '.btn-delete', function(){ 
        var nickid = $(this).val();
        if(confirm('Bạn Có Chắc Chắn Muốn Xóa Không?')){
            $.ajax({
               type    : 'get',
               url     : nickid,
               success :function(data){
                   window.location.reload();
                   alert("Đã Xóa Nick Ingame Là: " + data);
               },
               error: function(data){
                    console.log(data);
               }
            });
        }
    });
});
