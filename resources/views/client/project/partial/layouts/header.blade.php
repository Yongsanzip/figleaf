
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
                    {{ ceil($supporter_count/$data->success_count*100) }}%
                </p>
            </div>
            <div class="status-item">
                <p class="status-name">남은 시간</p>
                <p class="status-value">
                    @if($date_diff > 0)
                        {{ $date = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) }}
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
            <p class="owner-text">
                @if(isset($portfolio))
                {{ $portfolio->content_ko }}
                @endif
            </p>
            <a href="" class="btn-green">포트폴리오로 이동</a>
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
            <div class="info-item">
                @if(empty($option_id))
                <p class="info-name">옵션</p>
                <select class="select" id="select_option" onclick="fnAddOption(this)">
                    <option selected disabled>- 옵션을 선택해주세요 -</option>
                    @foreach($data->options as $option)
                        {{ $price =  $option->price - $data->options->first()->price }}
                        <option data-value="{{ $option->price }}" value="{{ $option->id }}">{{ $option->option_name }} {{ $price > 0 ? ($price > 0 ? '(+'.number_format($price).'원)' : number_format($price).'원)') : '' }}</option>
                    @endforeach
                @endif
                </select>
                <ul class="option-list">
                    <!-- script add item -->
                    @if(isset($option_id))
                        @for($i = 0; $i < count($option_id); $i++)
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
                <div class="btn-wrap">
                   <button class="btn-white" type="button" onclick="supportSubmit(this.parentElement.parentElement)">후원하기</button>
<?/*                    <button class="btn-white" type="button" onclick="paybtn();">후원하기</button>*/?>
                    <!-- <a class="btn-white" href="">후원내역 상세보기</a> -->
                    <!-- <a class="btn-white" href="">프로젝트 관리하기</a> -->
                    <button class="btn-black" type="button" onclick="fnOpenModal()">디자이너에게 문의하기</button>
                </div>
                <input type="hidden" name="project_id" value="{{ $data->id }}">
            </div>
                <!-- 필수 -->
                {{--***** 필 수 *****--}}
                <input type="hidden" name="version" value="1.0" >
                {{--mid :--}}
                <input type="hidden" name="mid" value="{{$mid}}" >
                {{--goodname :--}}
                <input type="hidden" name="goodname" value="테스트" >
                {{--oid :--}}
                <input type="hidden" name="oid" value="{{$orderNumber}}" >
                {{--price :--}}
                <input type="hidden"  name="price" value="{{$price}}" >
                <!--currency:[WON|USD]-->
                <input type="hidden"  name="currency" value="WON" >
                {{--buyername :--}}
                <input type="hidden"  name="buyername" value="홍길동" >
                {{--buyertel :--}}
                <input type="hidden"  name="buyertel" value="010-1234-5678" >
                {{--buyeremail :--}}
                <input type="hidden"  name="buyeremail" value="test@inicis.com" >
                <!--timestamp : -->
                <input type="hidden"  style="width:100%;" name="timestamp" value="{{$timestamp}}" >
                <!-- signature : -->
                <input type="hidden" style="width:100%;" name="signature" value="{{$sign}}" >
                {{--returnUrl :--}}
                <input type="hidden"  name="returnUrl" value="{{$siteDomain}}" >

                <input type="hidden"  name="mKey" value="{{$mKey}}" >

                <input type="hidden" style="width:100%;" name="gopaymethod" value="" >
                {{--offerPeriod : 제공기간ex)20150101-20150331, [Y2:년단위결제, M2:월단위결제, yyyyMMdd-yyyyMMdd : 시작일-종료일]--}}
                <input type="hidden"  name="offerPeriod" value="20160101-20161231" >
                {{--acceptmethod : ex)  billauth(card) , billauth(hpp)--}}
                <input type="hidden"  id="acceptmethod" name="acceptmethod" value="billauth(card)" >
                {{--결제일 알림 메세지 : 결제일 알림 메세지--}}
                <input type="hidden"  id="billPrint_msg" name="billPrint_msg" value="고객님의 매월 결제일은 24일 입니다." >
                {{--***** 표시 옵션 *****--}}
                {{--languageView : 초기 표시 언어 : [ko|en] (default:ko)--}}
                <input type="hidden"  name="languageView" value="" >
                {{--charset : 리턴 인코딩 [UTF-8|EUC-KR] (default:UTF-8)--}}
                <input type="hidden"  name="charset" value="" >
                {{--payViewType : 결제창 표시방법 [overlay] (default:overlay)--}}
                <input type="hidden"  name="payViewType" value="overlay" >
                {{--closeUrl : payViewType='overlay','popup'시 취소버튼 클릭시 창닥기 처리 URL(가맹점에 맞게 설정)
                close.jsp 샘플사용(생략가능, 미설정시 사용자에 의해 취소 버튼 클릭시 인증결과 페이지로 취소 결과를 보냅니다.)--}}
                <input type="hidden"  name="closeUrl" value="{{$siteDomain}}" >
                {{--popupUrl : payViewType='popup'시 팝업을 띄울수 있도록 처리해주는 URL(가맹점에 맞게 설정)
                popup.jsp 샘플사용(생략가능,payViewType='popup'으로 사용시에는 반드시 설정)--}}
                <input  type="hidden" name="popupUrl" value="{{$siteDomain}}/popup.php" >
                {{--***** 추가 옵션 *****--}}
                {{--merchantData : 가맹점 관리데이터(2000byte) 인증결과 리턴시 함께 전달됨--}}
                <input  type="hidden"  name="merchantData" value="" >
            </form>
        </div>
        <!-- //product -->
    </div>
</div>
<script language="javascript" type="text/javascript" src="https://stgstdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>
<script type="text/javascript">
    function paybtn() {
        INIStdPay.pay('supportSubmitForm');
    }

    function cardShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(card):FULLVERIFY";
    }

    function hppShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(HPP):HPP(1)";
    }
</script>
