<?php
// url : /designer
?>
@extends('client.layouts.app')
@section('content')
    <main class="container con-main">
      <div class="inner">
            <!-- designer -->
            <section class="con-designer">
                <div class="section-title-wrap">
                    <h2 class="section-title">designer</h2>
                    <span class="caption">디자이너</span>
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
                                    <img src="{{asset('images/common/img_no_image.jpg')}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <p class="card-title">등록된 디자이너가 없습니다</p>
                                    <p class="card-text">-</p>
                                </div>
                                <a href="" class="link"></a>
                            </div>
                        <!-- //card -->
                    @endif
                </div>
                <nav class="pagination-wrap">
                    @if($datas->count())
                        {!! $datas->appends(request()->except('page'))->render() !!}
                    @endif
                </nav>
            </section>
            <!--// designer-->
        </div>

    </main>
@endsection
