@extends('master')

@section('title', 'Quên Mật Khẩu')
@section('content')
<div class="container">
    <div class="heading-link m-3">
         <ul class="item">
              <li class="home d-inline">
                   <a href="{{route('home')}}">Trang chủ</a>
              </li>
              >
              <li class="icon active d-inline">
                   <a href="{{route('forget')}}">Quên Mật Khẩu</a>
              </li>
         </ul>
    </div>
    <main class="main position-relative">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header h4"><b>Quên Mật Khẩu</b> </div>
                        <div class="card-body row">
                            @include('login.option')
                            
                            <div class="form-group col-9 d-inline">
                                <form class="form-horizontal" action="{{route('post.forget')}}" method="POST" enctype="multipart/form-data">
                                    @include('alert')
                                
                                    @csrf
                                   <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                             <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                                        </div>
                                   </div>
                                   
                                   <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                             <button type="submit" class="btn btn-login bg-primary text-white">Quên Mật Khẩu</button>
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
@endsection