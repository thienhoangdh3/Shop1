@extends('profile_admin.index')
@section('content')
<div class="justify-content-center">
    <div class="card">
        <div class="card-header h2">
          <b>Thêm Nick</b> 
          <a href="{{route('nick.index')}}" class="btn btn-dark text-light float-right ">
            <i class="far fa-list-alt"></i>  Danh Sách
          </a>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{route('nick.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('alert')
                    <div class="form-group row">
                        <label for="ingame" class="col-md-4 col-form-label text-md-right pt-4"><b>Ingame:</b></label>
                        <div class="col-md-6">
                            <em class="text-danger small">Yêu cầu nhập tất cả các trường ở dưới</em>
                            <input type="text" id="ingame" class="form-control" placeholder="Ingame"
                            value="{{ old('ingame') }}" name="ingame" required maxlength="11">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right"><b>Username*:</b></label>
                        <div class="col-md-6">
                            <input type="text" id="username" class="form-control" placeholder="Username"
                            value="{{ old('username') }}" name="username" required maxlength="30">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><b>Pasword:</b></label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" placeholder="Password"
                            value="{{ old('password') }}" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="level" class="col-md-4 col-form-label text-md-right"><b>Level:</b></label>
                        <div class="col-md-6">
                            <input type="number" id="level" class="form-control" placeholder="Level"
                            value="{{ old('level') }}" name="level" min="1" max="130" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ttgt" class="col-md-4 col-form-label text-md-right"><b>Trưởng Gia Tộc:</b></label>
                        <div class="col-md-6 pt-2">
                            <input type="checkbox" style="transform: scale(1.5);" id="ttgt" name="ttgt">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="class_acc" class="col-md-4 col-form-label text-md-right"><b>Class:</b></label>
                        <div class="col-md-6">
                            <select class="form-control" name="class_acc" id="class_acc">
                                <option active >-- Class --</option>
                                @foreach ($class as $class)
                                  <option value="{{$class->id}}" >{{$class->class}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="server" class="col-md-4 col-form-label text-md-right"><b>Server:</b></label>
                        <div class="col-md-6">
                            <select class="form-control" name="server_acc" id="server_acc">
                                <option active >-- Server --</option>
                                @foreach ($sv as $sv)
                                  <option value="{{$sv->id}}" >{{$sv->sv_name}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right"><b>Giá:</b></label>
                        <div class="col-md-6">
                            <input type="number" id="price" class="form-control" placeholder="Giá"
                            value="{{ old('price') }}" name="price" min="0" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="notes" class="col-md-4 col-form-label text-md-right"><b>Chi tiết Nick:</b></label>
                        <div class="col-md-6">
                            <textarea name="notes" id="notes" class="ckeditor" ></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="images" class="col-md-4 col-form-label text-md-right"><b>Ảnh:</b></label>
                        <div class="col-md-6">
                            <input type="file" name="images[]"  accept="image/*" id="images" multiple>
                        </div>
                    </div>

                    <div class="offset-md-5">
                        <button type="submit" class="btn btn-primary">
                            Xác Nhận
                        </button>
                    </div>
                    
                    
                </form>
            </div>
            
        </div>   
    </div>
</div>
@endsection