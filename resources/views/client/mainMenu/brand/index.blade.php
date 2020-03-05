<?php
// url : /brand
?>
@extends('client.layouts.app')
@section('content')
    <main class="container con-main">
        <!-- hero -->
    @include('client.layouts.partial.hero')
    <!-- //hero -->


        <div class="inner">
            <!-- brand -->
            <section class="con-brand">
                <div class="section-title-wrap">
                    <h2 class="section-title">brand</h2>
                    <span class="caption">브랜드</span>
                    <a href="" class="more">전체보기</a>
                </div>

                <div class="card-list">
                @if(count($datas)>0)
                    @foreach($datas as $data)
                        @if(isset($data->portfolio->brand))
                        <!-- card * 20 -->
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{$data->portfolio->brand_logo_images ? asset('storage/'.$data->portfolio->brand_logo_images->first()->image_path) :  asset('images/common/img_no_image.jpg')}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <p class="card-title">{{$data->portfolio->brand->name_ko}}</p>
                                    <p class="card-text">{!! $data->portfolio->brand->contents_ko !!}</p>
                                </div>
                                <a href="{{route('designer.show',['id'=>$data->portfolio->id])}}" class="link"></a>
                            </div>
                            <!-- //card -->
                        @endif
                    @endforeach
                @else
                    <!-- card * 20 -->
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('images/common/img_no_image.jpg')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">등록된 브랜드가 없습니다</p>
                                <p class="card-text">-</p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <!-- //card -->
                    @endif
                </div>
                <div class="btn-wrap">
                    <div class="btn-more">View More Brand</div>
                </div>
            </section>
            <!--// brand -->
        </div>

    </main>

@endsection
