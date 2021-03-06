
<h2 class="project-headline">
    project
</h2>
<!-- project info-->
<div class="project-info">
    <h3 class="project-title">
        {{ $data->title }}
    </h3>
    <div class="project-category">
        <span>{{ $data->category->category_name }}</span>
        <span>{{ $data->category_detail->category_name }}</span>
    </div>
    <p class="project-outline">
        {{ $data->summary }}
    </p>
</div>
<!-- //project info -->

<!-- project detail -->
<div class="project-detail">

    <div class="col">
        <div class="project-cover">
            <img src="{{ asset('storage/'.$data->main_image->image_path) }}" alt="">
        </div>
    </div>
    <div class="col">
        <!-- status -->
        <div class="project-status">
            <div class="status-item">
                <p class="status-name">모인 금액</p>
                <p class="status-value">
                    {{ number_format($total_cost) }}
                    <span>원</span>
                </p>
                <p class="status-percentage">
                    {{ floor($supporter_count/$data->success_count*100) }}%
                </p>
            </div>
            <div class="status-item">
                <p class="status-name">남은 시간</p>
                <p class="status-value">
                    @if($date_diff >= 0)
                        {{ $date = floor((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) +1 }}
                        <span>일</span>
                    @else
                        마감
                    @endif
                </p>
                <p class="status-date">
                    {{ date_format($data->deadline, 'Y년 m월 d일') }} 마감
                </p>
            </div>
            <div class="status-item">
                <p class="status-name">후원자 수</p>
                <p class="status-value">
                    {{ $supporter_count }}
                    <span>명</span>
                </p>
            </div>
        </div>
        <!-- //status -->

        <!-- owner -->
        <div class="project-owner">
            <p class="owner-caption">디자이너</p>
            <p class="owner-name ko">
                {{ $data->introduction->designer_name }}
            </p>
            @if(isset($portfolio))
            <p class="owner-text">
                {{ $portfolio->content_ko }}
            </p>
            <a href="{{route('designer.show',['id'=>$portfolio->id])}}" class="btn-green">포트폴리오로 이동</a>
            @endif
        </div>
        <!-- //owner -->

        <!-- product -->
        <div class="project-product">
            <div class="info-item">
                <p class="info-name">상품명</p>
                <p class="info-value name">{{ $data->options->first()->option_name }}</p>
            </div>
            <div class="info-item">
                <p class="info-name">상품가</p>
                <p class="info-value price">
                    {{ number_format($data->options->first()->price) }}
                    <span>원</span>
                </p>
            </div>
            <form action="{{ route('project_support.index') }}" method="GET" id="supportSubmitForm">
                <input type="hidden" id="login_check" value="{{$auth_check}}">
            <div class="info-item">
                <ul class="option-list">
                    <!-- script add item -->
                    @if(isset($support->support_options))
                        @for($i = 0; $i < count($support->support_options); $i++)
                            <li class="option-item">
                                <div class="option-value">
                                    <span class="option-name">{{ $option_arr['option_name'][$i] }}</span>
                                    <input class="option-amount" name="option_amount[]" min="1" type="number" value="{{ $option_arr['option_amount'][$i] }}" readonly>
                                    <input class="optionId" min="1" name="option_id[]" type="hidden" value="{{ $option_arr['option_id'][$i] }}">
                                    <span class="option-price">{{ number_format($option_arr['option_price'][$i]) }}원</span>
                                </div>
                            </li>
                        @endfor
                    @endif
                </ul>
                @if($page_type =='project')
                            <div class="btn-wrap">
                                @if(in_array($data->condition,[2,5]))
                                <button class="btn-white" type="button" onclick="supportSubmit(this.parentElement.parentElement)">후원하기</button>
                                @endif
                                <?/*<a class="btn-white" href="">후원내역 상세보기</a>*/?>
                                <?/*<a class="btn-white" href="">프로젝트 관리하기</a>*/?>
                                <button class="btn-black" type="button" onclick="fnOpenModal()">디자이너에게 문의하기</button>
                            </div>

                @endif
                <input type="hidden" name="project_id" value="{{ $data->id }}">
            </div>
            </form>
        </div>
        <!-- //product -->
    </div>
</div>

