
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <div class="row col-12">
        <a class="colnavbar-brand text-white col-sm-6 " href="{{route('home')}}"><img class="logo-bg" src="{{asset('img/TeamShop.png')}}" alt=""></a>

        <div class="collapse navbar-collapse col-sm-4 justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav center ">
              <li class="nav-item active ml-2">
                <a class="nav-link text-white" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item ml-2" >
                <a class="nav-link text-white" href="#">Nạp Ví</a>
              </li>

              <li class="nav-item ml-2">
                <a class="nav-link text-white" href="#">Lịch Sử</a>
              </li>
            </ul>
        </div>
    
        <div class="navbar-collapse col-sm-2 justify-content-start">
            {{-- <form class="form-inline ml-2 row justify-content-left form-search row">
                <input class="form-control col-8 mr-sm-2 input-search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
                <button class="btn btn-light my-2 my-sm-0 col-3 btn-search " type="submit">
                    <img class="icon-search" src="https://salt.tikicdn.com/ts/upload/ed/5e/b8/8538366274240326978318348ea8af7c.png">Tìm Kiếm
                </button>
            </form> --}}

            @if(session('fullname'))
                <div class="dropdown d-flex">
                    @if (!session('avatar'))
                        <img class="profile-icon" src="https://salt.tikicdn.com/ts/upload/67/de/1e/90e54b0a7a59948dd910ba50954c702e.png">
                    @else
                        <img class="profile-icon" src="{{session('avatar')}}">
                    @endif
                    
                    <span class="text-white d-flex" id="dropMenuUser" >
                            <span>
                                {{session('fullname')}}
                            </span>
                            <img class="arrowIcon" src="https://salt.tikicdn.com/ts/upload/d7/d4/a8/34939af2da1ceeeae9f95b7485784233.png">
                    </span>
                    
                    <div class="dropdown-menu" aria-labelledby="dropMenuUser">
                        <a class="dropdown-item" href="{{route('user-profile')}}">Thông Tin Của Tôi</a>
                        <a class="dropdown-item" href="#">Đơn Hàng Của Tôi</a>
                        <hr>
                        <a class="dropdown-item bg-danger text-white" href="{{ route('logout') }}">
                            Đăng Xuất
                        </a>
                    </div>
                </div>
            @else
                 <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="profile-icon" src="https://salt.tikicdn.com/ts/upload/67/de/1e/90e54b0a7a59948dd910ba50954c702e.png">Tài Khoản
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLogin">
                        <a class="dropdown-item btn bg-warning " href="{{route('login')}}">Đăng Nhập</a>
                        <a class="dropdown-item btn bg-warning " href="{{route('registration')}}">Đăng Ký</a>
                        <hr>
                        <a class="dropdown-item btn login-google" href="{{ route('login.google') }}">
                            <i class="fab fa-google-plus-g icon-google"></i><hr> Đăng Nhập Với Google
                        </a>
                    </div>
                </div>
            @endif
            


            {{-- <form class="d-flex">
                <button class="btn btn-outline-light d-flex" type="submit">
                    <i class="bi-cart-fill me-1 pr-1"></i> Cart
                    <span class="badge bg-warning text-white m-1 rounded-pill"> 0 </span>
                </button>
            </form> --}}
        </div>
    </div>
</nav>