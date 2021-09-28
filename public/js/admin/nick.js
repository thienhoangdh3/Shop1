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
    // $(document).on('click', '.btn-delete', function(){ 
    //     var userid = $(this).val();
    //     if(confirm('Bạn Có Chắc Chắn Muốn Xóa Không?')){
    //         $.ajax({
    //            type    :'delete',
    //            url     : 'nhanvien/'+userid,
    //            success :function(data){
    //                window.location.reload();
    //                alert("Đã Xóa " + data.fullname);
    //            }
    //         });
    //     }
    // });

// Edit User
    $(document).on('click', '.btn-edit', function(){ 
        $('#view').attr('class', 'modals')
        // var userid = $(this).val();
        // console.log(userid);
        // $.ajax({
        //     type   : "GET",
        //     url    : 'nhanvien/' + userid + '/edit',
        //     success: function(data){
        //         $("h4#title").text("Sửa Thông Tin Nhân Viên ID: " + data.id)
        //         $("input#u-id").val(data.id);
        //         $("input#u-fullname").val(data.fullname);
        //         $("div.select-gender select").val(data.gender);
        //         $("input#u-address").val(data.address);
        //         $("input#u-username").val(data.username);
        //         $("input#u-birth").val(data.birth);
        //         $("input#u-joining").val(data.joining);
        //         $("input#u-phone").val(data.phone);
        //         $("input#u-email").val(data.email);
        //         $("input#u-identification").val(data.identification);
        //         $("div.select-position select").val(data.dpm_id);
        //         console.log(data);
        //     } 
        // });
    });

    // $(document).on('submit', '#form-update', function(){
    //     window.location.reload();
    //     if(confirm('Bạn Có Chắc Chắn Muốn Sửa Không?')){
    //         var id             = $('#u-id').val();
    //         var fullname       = $('#u-fullname').val();
    //         var gender         = $('#u-gender').val();
    //         var birth          = $('#u-birth').val();
    //         var address        = $('#u-address').val();
    //         var email          = $('#u-email').val();
    //         var phone          = $('#u-phone').val();
    //         var identification = $('#u-identification').val();
    //         var joining        = $('#u-joining').val();
    //         var postion        = $('#u-postion').val();
            

    //         console.log(id, fullname, gender, birth, address, email, phone, identification, joining, postion);
    //         $.ajax({
    //            type :'PATCH',
    //            url  : 'nhanvien/'+id,
    //            data : {
    //                 id             : id,
    //                 fullname       : fullname,
    //                 gender         : gender,
    //                 birth          : birth,
    //                 address        : address,
    //                 email          : email,
    //                 phone          : phone,
    //                 identification : identification,
    //                 joining        : joining,
    //                 dpm_id         : postion,
    //            },
    //            success:function(data){
    //                 window.location.reload();
    //                 if(data){ 
    //                         alert("Đã Sửa Thông Tin Người Dùng ID: " + data.id);
    //                 }else{
    //                         alert("Đã Tồn Tại Một Trường Không Hợp Lệ!");
    //                         window.stop();
    //                 }
    //            },
    //            error:function(data){
    //                console.log(data);
    //             //     window.location.reload();
    //             //    alert(data.responseJSON.errors.birth);
    //             //    alert(data.responseJSON.errors.email);
    //             //    alert(data.responseJSON.errors.phone);
    //             //    alert(data.responseJSON.errors.joining);
    //                 $('div#alert-err').show();
    //                 $('#err').text(data.responseJSON.errors.birth);
    //                 $('#err').text(data.responseJSON.errors.email);
    //                 $('#err').text(data.responseJSON.errors.phone_number);
    //                 $('#err').text(data.responseJSON.errors.date_joining);
    //                 window.stop();
    //            }
               
    //         });
    //     }
    //     // alert("abc");
    // });

});
