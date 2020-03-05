<?php
// url : /designer
?>
@extends('client.layouts.app')
@section('content')
    <main class="container con-main">
        <!-- hero -->
        @include('client.layouts.partial.hero')
        <!-- //hero -->


        <div class="inner">
            <!-- designer -->
            <section class="con-designer">
                <div class="section-title-wrap">
                    <h2 class="section-title">designer</h2>
                    <span class="caption">디자이너</span>
                    <a href="" class="more">전체보기</a>
                </div>

                <div class="card-list">
                    @if(count($datas)>0)
                            @foreach($datas as $data)
                                <!-- card * 20 -->
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="{{$data->portfolio->portfolio_images ? asset('storage/'.$data->portfolio->portfolio_images->first()->image_path) :  asset('images/common/img_no_image.jpg')}}" alt="">
                                        </div>
                                        <div class="card-contents">
                                            <p class="card-title">{{$data->name}}</p>
                                            <p class="card-text">{!! $data->portfolio->content_ko !!}</p>
                                        </div>
                                        <a href="{{route('designer.show',['id'=>$data->portfolio->id])}}" class="link"></a>
                                    </div>
                                    <!-- //card -->
                            @endforeach
                        @else
                        <!-- card * 20 -->
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <p class="card-title">티르티르</p>
                                    <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                                </div>
                                <a href="" class="link"></a>
                            </div>
                        <!-- //card -->
                    @endif
                </div>
                <div class="btn-wrap">
                    <div class="btn-more">View More Designer</div>
                </div>
            </section>
            <!--// designer-->
        </div>

    </main>
@endsection
