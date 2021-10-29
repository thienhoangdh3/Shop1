@extends('master')

@section('title', 'Nick ')
@section('content')
<section class="py-5">
<div class="container bootdey">
<div class="col-md-12">
<section class="panel">
      <div class="panel-body row">
          <div class="col-md-6">
              @php
                  $img = json_decode($datas->images, true);
              @endphp
              <div class="pro-img-details">
                  <img src="{{asset('storage/nick/' . $img[0])}}" alt="{{ $datas->ingame }}">
              </div>
              <div class="pro-img-list">
                @foreach ($img as $img)
                  <a href="#">
                      <img src="{{asset('storage/nick/' . $img)}}" alt="{{ $datas->ingame }}">
                  </a>
                @endforeach
<!--                   
                  <a href="#">
                      <img src="https://via.placeholder.com/115x100/FF7F50/000000" alt="">
                  </a>
                  <a href="#">
                      <img src="https://via.placeholder.com/115x100/20B2AA/000000" alt="">
                  </a>
                  <a href="#">
                      <img src="https://via.placeholder.com/120x100/20B2AA/000000" alt="">
                  </a> -->
              </div>
          </div>
          <div class="col-md-6">
              <h4 class="pro-d-title">
                  <a href="#" class="">
                      {{ $datas->ingame }}
                  </a>
              </h4>
              <p>
                  {!! $datas->notes !!}
              </p>
              <div class="product_meta">
                  <span class="posted_in"> <strong>Class :</strong> <a rel="tag" href="#">{{ $datas->nick_class->class }}</a>.</span>
                  <span class="tagged_as"><strong>Server :</strong> <a rel="tag" href="#">{{ $datas->nick_sv->sv_name }}</a>.</span>
              </div>
              <div class="m-bot15"> <strong>Giá : </strong> <span class="pro-price"> {{ $datas->price }}.000 VNĐ</span></div>
            
              <p>
                  <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Mua Ngay</button>
              </p>
          </div>
      </div>
  </section>
  </div>
  </div>

</section>

@endsection
