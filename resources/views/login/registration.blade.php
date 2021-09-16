@extends('master')

@section('title', 'Đăng Ký')
@section('content')
<div class="container">
    <div class="heading-link m-3">
         <ul class="item">
              <li class="home d-inline">
                   <a href="{{route('home')}}">Trang chủ</a>
              </li>
              >
              <li class="icon active d-inline">
                   <a href="{{route('registration')}}">Đăng Ký</a>
              </li>
         </ul>
    </div>
    <main class="main position-relative">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header h4"><b>Đăng Ký</b> </div>
                        <div class="card-body row">
                            @include('login.option')
                            
                            <div class="form-group col-9 d-inline">
                                <form class="form-horizontal" action="{{route('post.registration')}}" method="POST" enctype="multipart/form-data">
                                    @include('alert')
                                
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="fullname">Họ và tên:</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{old('fullname')}}" class="form-control" name="fullname" id="fullname" placeholder="Nhập họ và tên">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{old('email')}}" class="form-control" name="email" id="email" placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="password">Mật khẩu:</label>
                                        <div class="col-sm-10">
                                            <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-6" for="confirmpass">Nhập Lại Mật khẩu:</label>
                                        <div class="col-sm-10">
                                            <input type="password" value="{{old('confirmpass')}}" class="form-control" id="confirmpass" name="confirmpass" placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-6" for="avatar">Ảnh Đại Diện:</label>
                                        <div class="col-sm-10 ">
                                            <input type="file" class="btn border col-sm-12" id="avatar" name="avatar" accept="image/*" >
                                        </div>
                                    </div>
                                    <input type="hidden" name="recaptcha" id="recaptcha" required>
                        
                                   <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                             <button type="submit" class="btn btn-login bg-primary text-white">Đăng Ký</button>
                                        </div>
                                   </div>
                                </form>      
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
         grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'registration'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
</script>
@endsection