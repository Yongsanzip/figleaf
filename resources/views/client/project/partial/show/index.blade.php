<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">


    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                <h2 class="project-headline">
                    project
                </h2>
                <!-- project info-->
                <div class="project-info">
                    <h3 class="project-title">
                        가볍고 활동하기 좋은 면 슬립
                    </h3>
                    <div class="project-category">
                        <span>women's apparel</span>
                        <span>top</span>
                    </div>
                    <p class="project-outline">
                        뜨고, 미인을 예수는 모래뿐일 따뜻한 커다란 가슴에 놀이 같이 있다. 새가 끓는 이것을 온갖 대중을 앞이 커다란 있으랴? 뛰노는 오직 웅대한 것이다. 품으며, 열매를
                        이것을 하였으며, 꽃이 더운지라 것이다. 목숨이 오직 청춘 장식하는 굳세게 인생을 아니다. 작고 새가 그들에게 싹이 힘있다. 고행을 구하지 같이, 밥을 피는
                        평화스러운 새 관현악이며, 방황하여도, 것이다. 그것을 곳으로 동산에는 그들의 이상을 맺어, 않는 새 철환하였는가? 전인 천자만홍이 끓는 쓸쓸한 위하여, 인류의
                        시들어 부패뿐이다. 방지하는 속에 인간에 타오르고 무엇을 눈이 소리다.이것은 이상은 남는 교향악이다.
                    </p>
                </div>
                <!-- //project info -->

                <!-- project detail -->
                <div class="project-detail">

                    <div class="col">
                        <div class="project-cover">
                            <img src="../images/dummy/img-dummy-04.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <!-- status -->
                        <div class="project-status">
                            <div class="status-item">
                                <p class="status-name">모인 금액</p>
                                <p class="status-value">
                                    284,000
                                    <span>원</span>
                                </p>
                                <p class="status-percentage">
                                    77%
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">남은 시간</p>
                                <p class="status-value">
                                    18
                                    <span>일</span>
                                </p>
                                <p class="status-date">
                                    2019년 10월 3일 마감
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">모인 금액</p>
                                <p class="status-value">
                                    317
                                    <span>명</span>
                                </p>
                            </div>
                        </div>
                        <!-- //status -->

                        <!-- owner -->
                        <div class="project-owner">
                            <p class="owner-caption">디자이너</p>
                            <p class="owner-name ko">
                                김해우
                            </p>
                            <p class="owner-name en">
                                Haewoo Kim
                            </p>
                            <p class="owner-text">
                                이것을 만천하의 우리의 전인 굳세게 속에 할지라도 위하여서. 소리다.이것은 투명하되 꽃 그들은 것이다. 동산에는 따뜻한 뛰노는 때문이다. 얼마나 따뜻한
                                보배를 아름답고 모래뿐일 가지에 뛰노는 지혜는 약동하다. 피어나는 것이 이것을 밥을 피가 영원히 힘있다. 청춘이 품으며, 낙원을 이상은 인간의
                                날카로우나 아니한 운다. 넣는 그림자는 인생에 우리는 앞이 피다. 열락의 바이며, 있을 끓는 이것이다. 따뜻한 없는 황금시대를 못하다 피는 청춘을
                                주며, 가진 것이다. 바이며, 것은 기관과 투명하되 얼마나 가진 뿐이다.
                            </p>
                            <a href="" class="btn-green">포트폴리오로 이동</a>
                        </div>
                        <!-- //owner -->

                        <!-- product -->
                        <div class="project-product">
                            <div class="info-item">
                                <p class="info-name">상품명</p>
                                <p class="info-value name">활동하기 좋은 면 슬립</p>
                            </div>
                            <div class="info-item">
                                <p class="info-name">상품가</p>
                                <p class="info-value price">
                                    17,500
                                    <span>원</span>
                                </p>
                            </div>
                            <div class="info-item">
                                <p class="info-name">옵션</p>
                                <select class="select" onchange="fnAddOption()">
                                    <option selected disabled>- 옵션을 선택해주세요 -</option>
                                    <option>옵션1</option>
                                    <option>옵션2</option>
                                    <option>옵션3</option>
                                </select>
                                <ul class="option-list">
                                    <!-- script add item -->
                                </ul>
                                <div class="btn-wrap">
                                    <button class="btn-white" type="submit">후원하기</button>
                                    <!-- <a class="btn-white" href="">후원내역 상세보기</a> -->
                                    <!-- <a class="btn-white" href="">프로젝트 관리하기</a> -->
                                    <button class="btn-black" type="button" onclick="fnOpenModal()">디자이너에게 문의하기</button>
                                </div>
                            </div>
                        </div>
                        <!-- //product -->
                    </div>
                </div>
                <!--// project detail -->

                <!-- project overview -->
                <div class="project-overview-wrap">
                    <ul class="overview-tab">
                        <li class="tab-on">project</li>
                        <li>community</li>
                    </ul>
                    <div class="overview-box overview-box-on">
                        <!-- designer profile -->
                        <div class="designer-headline">
                            <div class="designer-name">
                                김해우
                                <span>haewoo kim</span>
                            </div>
                            <div class="designer-type">
                                standard
                            </div>
                        </div>
                        <!--//designer profile -->

                        <!-- project overview-->
                        <div class="contents-wrap project-overview">
                            <img src="../images/dummy/img-dummy-04.png" alt="">
                            <p>
                                더운지라 새 힘차게 길을 끓는다. 그와 청춘은 인간에 것이다. 청춘 있는 하여도 그와 듣기만 우리 청춘의 주며, 때문이다. 못하다 끝까지 따뜻한
                                아름다우냐? 사라지지 할지라도 꽃이 할지니, 피어나기 뿐이다. 인간에 피어나기 날카로우나 실현에 청춘이 내려온 아름다우냐? 얼음 천지는 내려온 목숨을
                                가치를 이것이다. 이상을 우리 그들에게 뭇 얼음 끓는 쓸쓸하랴? 이상의 되려니와, 기쁘며, 방지하는 있다.
                                <br>
                                그들은 타오르고 이상 너의 피다. 때에, 창공에 인생의 인간이 타오르고 밥을 그리하였는가? 천자만홍이 행복스럽고 되는 때문이다. 위하여 오직
                                방황하였으며, 그들은 미묘한 예수는 새가 희망의 것이다. 인간에 찾아다녀도, 있는 있으랴? 황금시대를 열락의 그들의 끓는다. 노래하며 우리 이상은
                                시들어 원대하고, 이것이야말로 굳세게 바이며, 그러므로 끓는다. 용감하고 충분히 원대하고, 천고에 우리의 동력은 것이다. 구하지 그와 온갖 싹이 품었기
                                아니다. 위하여 얼음 얼마나 청춘의 끓는 오직 이상은 어디 옷을 아름다우냐? 위하여, 얼음과 뼈 칼이다.
                                <br>
                                같이, 내는 영락과 듣는다. 우리 하는 무엇을 있는 것이다. 그들에게 인간의 것은 그것은 힘차게 이것은 그와 위하여서. 우리의 살 타오르고 기관과
                                천자만홍이 구하지 군영과 이상은 그들의 쓸쓸하랴? 곳이 우리 따뜻한 그러므로 피다. 만천하의 사는가 살 약동하다. 무엇을 피가 청춘의 소담스러운 같이
                                품에 위하여서, 것이다. 굳세게 주며, 작고 피는 가는 이상의 영락과 것이다. 이상의 물방아 그들을 못하다 뼈 인생을 얼음에 것은 그리하였는가?
                                그들에게 반짝이는 가치를 이상은 날카로우나 교향악이다. 눈이 생명을 생생하며, 물방아 얼마나 있다.
                            </p>
                        </div>
                        <!--//project overview -->

                        <!-- designer history -->
                        <div class="contents-wrap history-list">
                            <div class="headline-wrap">
                                <h3 class="headline">history</h3>
                            </div>
                            <!-- history item -->
                            <div class="history-item">
                                <h4 class="year">2019</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                            <!-- //history item -->
                            <div class="history-item">
                                <h4 class="year">2018</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                            <div class="history-item">
                                <h4 class="year">2017</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                        <!--//designer history -->

                        <!-- award history-->
                        <div class="contents-wrap history-list">
                            <div class="headline-wrap">
                                <h3 class="headline">award history</h3>
                            </div>
                            <!-- history item -->
                            <div class="history-item">
                                <h4 class="year">2019</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                            <!-- //history item -->
                            <div class="history-item">
                                <h4 class="year">2018</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                            <div class="history-item">
                                <h4 class="year">2018</h4>
                                <ul class="history">
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                        <!--//award history -->

                        <!-- association-->
                        <div class="contents-wrap association">
                            <div class="headline-wrap">
                                <h3 class="headline">association</h3>
                            </div>
                            <ul class="association-list">
                                <li>
                                    <p class="year">2016~ 2017</p>
                                    <p class="text">한국공인중개사협회 회장</p>
                                </li>
                                <li>
                                    <p class="year">2016~ 2017</p>
                                    <p class="text">한국공인중개사협회 회장</p>
                                </li>
                                <li>
                                    <p class="year">2016~ 2017</p>
                                    <p class="text">한국공인중개사협회 회장</p>
                                </li>
                            </ul>
                        </div>
                        <!--//association -->

                        <!-- brand -->
                        <div class="contents-wrap brand">
                            <div class="headline-wrap">
                                <h3 class="headline">brand</h3>
                            </div>
                            <div class="contents-overview">
                                <img src="../images/dummy/img-dummy-03.png" alt="">
                                <p>
                                    더운지라 새 힘차게 길을 끓는다. 그와 청춘은 인간에 것이다. 청춘 있는 하여도 그와 듣기만 우리 청춘의 주며, 때문이다. 못하다 끝까지 따뜻한
                                    아름다우냐? 사라지지 할지라도 꽃이 할지니, 피어나기 뿐이다. 인간에 피어나기 날카로우나 실현에 청춘이 내려온 아름다우냐? 얼음 천지는 내려온
                                    목숨을 가치를 이것이다. 이상을 우리 그들에게 뭇 얼음 끓는 쓸쓸하랴? 이상의 되려니와, 기쁘며, 방지하는 있다.
                                    <br>
                                    그들은 타오르고 이상 너의 피다. 때에, 창공에 인생의 인간이 타오르고 밥을 그리하였는가? 천자만홍이 행복스럽고 되는 때문이다. 위하여 오직
                                    방황하였으며, 그들은 미묘한 예수는 새가 희망의 것이다. 인간에 찾아다녀도, 있는 있으랴? 황금시대를 열락의 그들의 끓는다. 노래하며 우리
                                    이상은 시들어 원대하고, 이것이야말로 굳세게 바이며, 그러므로 끓는다. 용감하고 충분히 원대하고, 천고에 우리의 동력은 것이다. 구하지 그와
                                    온갖 싹이 품었기 아니다. 위하여 얼음 얼마나 청춘의 끓는 오직 이상은 어디 옷을 아름다우냐? 위하여, 얼음과 뼈 칼이다.
                                    <br>
                                    같이, 내는 영락과 듣는다. 우리 하는 무엇을 있는 것이다. 그들에게 인간의 것은 그것은 힘차게 이것은 그와 위하여서. 우리의 살 타오르고
                                    기관과 천자만홍이 구하지 군영과 이상은 그들의 쓸쓸하랴? 곳이 우리 따뜻한 그러므로 피다. 만천하의 사는가 살 약동하다. 무엇을 피가 청춘의
                                    소담스러운 같이 품에 위하여서, 것이다. 굳세게 주며, 작고 피는 가는 이상의 영락과 것이다. 이상의 물방아 그들을 못하다 뼈 인생을 얼음에
                                    것은 그리하였는가? 그들에게 반짝이는 가치를 이상은 날카로우나 교향악이다. 눈이 생명을 생생하며, 물방아 얼마나 있다.
                                </p>
                            </div>

                        </div>
                        <!--//brand -->

                        <!-- storytelling -->
                        <div class="contents-wrap storytelling">
                            <div class="headline-wrap">
                                <h3 class="headline">storytelling</h3>
                            </div>
                            <div class="contents-overview">
                                <img src="../images/dummy/img-dummy-10.png" alt="">
                                <p>
                                    더운지라 새 힘차게 길을 끓는다. 그와 청춘은 인간에 것이다. 청춘 있는 하여도 그와 듣기만 우리 청춘의 주며, 때문이다. 못하다 끝까지 따뜻한
                                    아름다우냐? 사라지지 할지라도 꽃이 할지니, 피어나기 뿐이다. 인간에 피어나기 날카로우나 실현에 청춘이 내려온 아름다우냐? 얼음 천지는 내려온
                                    목숨을 가치를 이것이다. 이상을 우리 그들에게 뭇 얼음 끓는 쓸쓸하랴? 이상의 되려니와, 기쁘며, 방지하는 있다.
                                    <br>
                                    그들은 타오르고 이상 너의 피다. 때에, 창공에 인생의 인간이 타오르고 밥을 그리하였는가? 천자만홍이 행복스럽고 되는 때문이다. 위하여 오직
                                    방황하였으며, 그들은 미묘한 예수는 새가 희망의 것이다. 인간에 찾아다녀도, 있는 있으랴? 황금시대를 열락의 그들의 끓는다. 노래하며 우리
                                    이상은 시들어 원대하고, 이것이야말로 굳세게 바이며, 그러므로 끓는다. 용감하고 충분히 원대하고, 천고에 우리의 동력은 것이다. 구하지 그와
                                    온갖 싹이 품었기 아니다. 위하여 얼음 얼마나 청춘의 끓는 오직 이상은 어디 옷을 아름다우냐? 위하여, 얼음과 뼈 칼이다.
                                    <br>
                                    같이, 내는 영락과 듣는다. 우리 하는 무엇을 있는 것이다. 그들에게 인간의 것은 그것은 힘차게 이것은 그와 위하여서. 우리의 살 타오르고
                                    기관과 천자만홍이 구하지 군영과 이상은 그들의 쓸쓸하랴? 곳이 우리 따뜻한 그러므로 피다. 만천하의 사는가 살 약동하다. 무엇을 피가 청춘의
                                    소담스러운 같이 품에 위하여서, 것이다. 굳세게 주며, 작고 피는 가는 이상의 영락과 것이다. 이상의 물방아 그들을 못하다 뼈 인생을 얼음에
                                    것은 그리하였는가? 그들에게 반짝이는 가치를 이상은 날카로우나 교향악이다. 눈이 생명을 생생하며, 물방아 얼마나 있다.
                                </p>
                            </div>

                        </div>
                        <!--//storytelling -->

                        <!-- product info-->
                        <div class="contents-wrap product-info">
                            <div class="headline-wrap">
                                <h3 class="headline">product info</h3>
                            </div>
                            <div class="product-info-list">
                                <!-- size -->
                                <div class="product-info-item">
                                    <h4 class="item-name">사이즈</h4>
                                    <div class="size-wrap">
                                        <div class="size-image">
                                            <img src="../images/common/img-size.png" alt="">
                                        </div>
                                        <ul class="size-list">
                                            <li>
                                                <p class="size-name">사이즈명</p>
                                                <p class="size-text">
                                                    <span>(위치) (사이즈)cm</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="size-name">S(85)</p>
                                                <p class="size-text">
                                                    <span>어깨 59</span>
                                                    <span>어깨 59</span>
                                                    <span>어깨 59</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="size-name">M(90)</p>
                                                <p class="size-text">
                                                    <span>어깨 59</span>
                                                    <span>가슴 59</span>
                                                    <span>소매 54</span>
                                                    <span>총장 67</span>
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- fabric -->
                                <div class="product-info-item">
                                    <h4 class="item-name">원단</h4>
                                    <div class="fabric-wrap">
                                        <ul class="fabric-list">
                                            <!-- fabric item -->
                                            <li>
                                                <div class="fabric-name">
                                                    면
                                                    <span>100</span>
                                                </div>
                                                <div class="fabric-text">
                                                    대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고
                                                    형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                                                </div>
                                            </li>
                                            <!--// fabric item-->
                                            <li>
                                                <div class="fabric-name">
                                                    면
                                                    <span>100</span>
                                                </div>
                                                <div class="fabric-text">
                                                    대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고
                                                    형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="fabric-name">
                                                    면
                                                    <span>100</span>
                                                </div>
                                                <div class="fabric-text">
                                                    대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생기고
                                                    형태 안정성이 부족한 단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="fabric-name">
                                                    면
                                                    <span>100</span>
                                                </div>
                                                <div class="fabric-text">
                                                    대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리섬유로 사용 가능하나 구김이 잘 생기고 형태 안정성이 부족한
                                                    단점을 지니고 있어 합성섬유와 혼방하는 경우가 많다.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="fabric-name">
                                                    면
                                                    <span>100</span>
                                                </div>
                                                <div class="fabric-text">
                                                    대표적인 천연 섬유로 내구성과 흡수성이 좋고 세탁이 편리하여 모든 옷의 재료 섬유로 사용 가능하나 구김이 잘 생.
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="designer-comment">
                                            <p class="comment-title">designer comment</p>
                                            <p class="comment-text">
                                                STANDARD만의 특별한 면 소재로, 수축과 변형을 최소화 하였습니다. 드라이클리닝 / 이염의 우려가 있으니 단독세탁
                                                부탁드립니다. 있을 튼튼하며, 그들은 온갖 가진 영원히 아름다우냐? 든 피는 청춘의 꽃이 어디 운다. 천자만홍이 굳세게
                                                곳으로 사랑의 사랑의 소담스러운 몸이 청춘에서만 것이다. 광야에서 피가 인간에 가치를 피에 칼이다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- cleaning -->
                                <div class="product-info-item">
                                    <h4 class="item-name">취급정보</h4>
                                    <div class="cleaning-wrap">
                                        <ul class="cleaning-list">
                                            <!-- water -->
                                            <li>
                                                <div class="cleaning-name">
                                                    물세탁
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="../images/cleaning/img-water-01.png" alt="">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li>물온도 95℃로 세탁</li>
                                                        <li>세탁기/손세탁 가능</li>
                                                        <li>세제종류 제한 없음</li>
                                                        <li>삶을 수 있음</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- 표백 -->
                                            <li>
                                                <div class="cleaning-name">
                                                    표백
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="../images/cleaning/img-bleach-01.png" alt="">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li>염소계표백제로 표백</li>
                                                        <li>염소계표백제로 표백</li>
                                                        <li>염소계표백제로 표백</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- iron -->
                                            <li>
                                                <div class="cleaning-name">
                                                    다림질
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="../images/cleaning/img-iron-01.png" alt="">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li> 180~210℃로 다림질</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- drycleaning -->
                                            <li>
                                                <div class="cleaning-name">
                                                    드라이클리닝
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="../images/cleaning/img-drycleaning-01.png" alt="">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li>드라이클리닝 가능</li>
                                                        <li>클로에틸렌</li>
                                                        <li>혹은 석유계 사용</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- dry -->
                                            <li>
                                                <div class="cleaning-name">
                                                    건조
                                                </div>
                                                <div>
                                                    <div class="cleaning-image">
                                                        <img src="../images/cleaning/img-dry-01.png" alt="">
                                                    </div>
                                                    <ul class="cleaning-text">
                                                        <li>햇빛에 건조</li>
                                                        <li>옷걸이에 걸어 건조</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- delivery -->
                                <div class="product-info-item">
                                    <h4 class="item-name">배송일정</h4>
                                    <div class="delivery-wrap">
                                        <ul class="delivery-list">
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-start.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">0000.00.00</p>
                                                    <p class="text">프로젝트 시작</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-end.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">0000.00.00</p>
                                                    <p class="text">프로젝트 종료</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-make.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">0000.00.00</p>
                                                    <p class="text">제작 시작(예상)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delivery-image">
                                                    <img src="../images/common/img-project-delivery.png" alt="">
                                                </div>
                                                <div class="delivery-info">
                                                    <p class="date">0000.00.00</p>
                                                    <p class="text">상품 배송(예상)</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="delivery-notice">
                                            제작 상황에 따라 <span>최대 13일 까지 지연</span>될 수 있으며, 지연일자를 넘길 경우
                                            <span>정책 약관에 따라 전액 환불</span> 받으실 수 있습니다.
                                        </p>
                                    </div>
                                </div>
                                <!-- contact -->
                                <div class="product-info-item">
                                    <h4 class="item-name">contact point</h4>
                                    <div class="contact-wrap">
                                        <ul class="contact-list">
                                            <li class="contact-item">
                                                <p class="contact-name">이메일</p>
                                                <p class="contact-value">
                                                    figleaf_admin@figleaf.com
                                                </p>
                                            </li>
                                            <li class="contact-item">
                                                <p class="contact-name">이메일</p>
                                                <p class="contact-value">
                                                    02-0000-0000
                                                </p>
                                            </li>
                                            <li class="contact-item">
                                                <p class="contact-name">홈페이지</p>
                                                <p class="contact-value">
                                                    <a href="">https://www.figleaf.com</a>
                                                </p>
                                            </li>
                                        </ul>
                                        <ul class="sns-list">
                                            <li class="sns-item">
                                                <a href="">페이스북</a>
                                            </li>
                                            <li class="sns-item">
                                                <a href="">트위터</a>
                                            </li>
                                            <li class="sns-item">
                                                <a href="">인스타그램</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--//product info -->
                    </div>
                    <div class="overview-box">
                        <div class="community-create">
                            <form>
                                <textarea class="textarea" placeholder="내용을 입력해주세요"></textarea>
                                <div class="btn-wrap">
                                    <button class="btn-black">작성하기</button>
                                </div>
                            </form>
                        </div>
                        <div class="community-list">
                            <!-- community item -->
                            <div class="community-item">
                                <div class="cm-header">
                                    <p class="name">김해우</p>
                                    <span class="date">2019.00.00</span>
                                    <div class="btn-wrap">
                                        <button class="btn-white" type="button" onclick="fnEditCm(this);">수정하기
                                        </button>
                                        <button class="btn-black delete">삭제하기</button>
                                        <button class="btn-black cancel" onclick="fnCancelCm(this)">취소하기</button>
                                    </div>
                                </div>
                                <div class="cm-contents">
                                    <p class="text">
                                        부패를 넣는 대고, 노년에게서 같은 약동하다. 평화스러운 앞이 있는 있는 피어나기 같이, 인간은 사막이다. 눈이 위하여서, 목숨이 실현에
                                        교향악이다. 끓는 얼마나 부패를 있다. 어디 오직 같으며, 하여도 타오르고 보라. 웅대한 사랑의 위하여 끓는다. 곧 그들의 거선의
                                        할지라도 가는 같이, 만물은 행복스럽고 약동하다.
                                        위하여 위하여서, 이 역사를 있는 이상은 들어 끓는다. 우리는 유소년에게서 이상은 철환하였는가? 천고에 눈에 대고, 청춘을 것이다. 같은
                                        별과 모래뿐일 그들에게 바이며, 이것이다. 피에 그들은 인생에 같으며, 광야에서 그리하였는가? 바이며, 피고 쓸쓸한 가치를 품으며,
                                        무엇을 몸이 피어나기 아름다우냐? 인간은 충분히 그와 청춘이 영락과 뜨거운지라, 교향악이다. 대한 것은 가슴이 용감하고 가는 끝까지
                                        커다란 긴지라 끓는다. 아니더면, 피어나는 공자는 가는 인간의 아름답고 위하여서 얼마나 아니다. 보이는 인간에 피에 거선의 우리의 열락의
                                        것이다. 두손을 간에 같은 같은 교향악이다. 열락의 우는 싶이 교향악이다. 청춘의 그것은 얼마나 우리는 못할 품고 뭇 이상, 것이다.
                                        곳으로 것은 그와 불어 새 이상의 있으랴? 방황하여도, 우리는 듣기만 노래하며 하는 유소년에게서 아니다. 이것을 같은 장식하는 못하다
                                        만물은 그것은 관현악이며, 속잎나고, 있다. 때까지 이상은 앞이 역사를 얼음과 칼이다. 끓는 타오르고 인간이 사랑의 눈이 풀밭에 같으며,
                                        위하여서. 이상 되는 뜨거운지라, 같이, 피부가 앞이 위하여서, 천지는 것이다. 힘차게 낙원을 갑 풀이 풍부하게 운다. 이상은 물방아
                                        가지에 청춘은 미묘한 주는 힘있다. 얼마나 미묘한 용감하고 그들의 석가는 철환하였는가?…
                                    </p>
                                    <textarea class="textarea" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <!--// community item -->
                            <div class="community-item">
                                <div class="cm-header">
                                    <p class="name">김해우</p>
                                    <span class="date">2019.00.00</span>
                                    <div class="btn-wrap">
                                        <button class="btn-white" type="button" onclick="fnEditCm(this);">수정하기
                                        </button>
                                        <button class="btn-black delete">삭제하기</button>
                                        <button class="btn-black cancel" onclick="fnCancelCm(this)">취소하기</button>
                                    </div>
                                </div>
                                <div class="cm-contents">
                                    <p class="text">
                                        부패를 넣는 대고, 노년에게서 같은 약동하다. 평화스러운 앞이 있는 있는 피어나기 같이, 인간은 사막이다. 눈이 위하여서, 목숨이 실현에
                                        교향악이다. 끓는 얼마나 부패를 있다. 어디 오직 같으며, 하여도 타오르고 보라. 웅대한 사랑의 위하여 끓는다. 곧 그들의 거선의
                                        할지라도 가는 같이, 만물은 행복스럽고 약동하다.
                                        위하여 위하여서, 이 역사를 있는 이상은 들어 끓는다. 우리는 유소년에게서 이상은 철환하였는가? 천고에 눈에 대고, 청춘을 것이다. 같은
                                        별과 모래뿐일 그들에게 바이며, 이것이다. 피에 그들은 인생에 같으며, 광야에서 그리하였는가? 바이며, 피고 쓸쓸한 가치를 품으며,
                                        무엇을 몸이 피어나기 아름다우냐? 인간은 충분히 그와 청춘이 영락과 뜨거운지라, 교향악이다. 대한 것은 가슴이 용감하고 가는 끝까지
                                        커다란 긴지라 끓는다. 아니더면, 피어나는 공자는 가는 인간의 아름답고 위하여서 얼마나 아니다. 보이는 인간에 피에 거선의 우리의 열락의
                                        것이다. 두손을 간에 같은 같은 교향악이다. 열락의 우는 싶이 교향악이다. 청춘의 그것은 얼마나 우리는 못할 품고 뭇 이상, 것이다.
                                        곳으로 것은 그와 불어 새 이상의 있으랴? 방황하여도, 우리는 듣기만 노래하며 하는 유소년에게서 아니다. 이것을 같은 장식하는 못하다
                                        만물은 그것은 관현악이며, 속잎나고, 있다. 때까지 이상은 앞이 역사를 얼음과 칼이다. 끓는 타오르고 인간이 사랑의 눈이 풀밭에 같으며,
                                        위하여서. 이상 되는 뜨거운지라, 같이, 피부가 앞이 위하여서, 천지는 것이다. 힘차게 낙원을 갑 풀이 풍부하게 운다. 이상은 물방아
                                        가지에 청춘은 미묘한 주는 힘있다. 얼마나 미묘한 용감하고 그들의 석가는 철환하였는가?…
                                    </p>
                                    <textarea class="textarea" spellcheck="false"></textarea>
                                </div>
                                <div class="community-item">
                                    <div class="cm-header">
                                        <p class="name">김해우</p>
                                        <span class="date">2019.00.00</span>
                                        <div class="btn-wrap">
                                            <button class="btn-white" type="button" onclick="fnEditCm(this);">수정하기
                                            </button>
                                            <button class="btn-black delete">삭제하기</button>
                                            <button class="btn-black cancel" onclick="fnCancelCm(this)">취소하기
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cm-contents">
                                        <p class="text">
                                            부패를 넣는 대고, 노년에게서 같은 약동하다. 평화스러운 앞이 있는 있는 피어나기 같이, 인간은 사막이다. 눈이 위하여서, 목숨이
                                            실현에 교향악이다. 끓는 얼마나 부패를 있다. 어디 오직 같으며, 하여도 타오르고 보라. 웅대한 사랑의 위하여 끓는다. 곧 그들의
                                            거선의 할지라도 가는 같이, 만물은 행복스럽고 약동하다.
                                            위하여 위하여서, 이 역사를 있는 이상은 들어 끓는다. 우리는 유소년에게서 이상은 철환하였는가? 천고에 눈에 대고, 청춘을
                                            것이다. 같은 별과 모래뿐일 그들에게 바이며, 이것이다. 피에 그들은 인생에 같으며, 광야에서 그리하였는가? 바이며, 피고 쓸쓸한
                                            가치를 품으며, 무엇을 몸이 피어나기 아름다우냐? 인간은 충분히 그와 청춘이 영락과 뜨거운지라, 교향악이다. 대한 것은 가슴이
                                            용감하고 가는 끝까지 커다란 긴지라 끓는다. 아니더면, 피어나는 공자는 가는 인간의 아름답고 위하여서 얼마나 아니다. 보이는
                                            인간에 피에 거선의 우리의 열락의 것이다. 두손을 간에 같은 같은 교향악이다. 열락의 우는 싶이 교향악이다. 청춘의 그것은 얼마나
                                            우리는 못할 품고 뭇 이상, 것이다.
                                            곳으로 것은 그와 불어 새 이상의 있으랴? 방황하여도, 우리는 듣기만 노래하며 하는 유소년에게서 아니다. 이것을 같은 장식하는
                                            못하다 만물은 그것은 관현악이며, 속잎나고, 있다. 때까지 이상은 앞이 역사를 얼음과 칼이다. 끓는 타오르고 인간이 사랑의 눈이
                                            풀밭에 같으며, 위하여서. 이상 되는 뜨거운지라, 같이, 피부가 앞이 위하여서, 천지는 것이다. 힘차게 낙원을 갑 풀이 풍부하게
                                            운다. 이상은 물방아 가지에 청춘은 미묘한 주는 힘있다. 얼마나 미묘한 용감하고 그들의 석가는 철환하였는가?…
                                        </p>
                                        <textarea class="textarea" spellcheck="false"></textarea>
                                    </div>
                                    <div class="community-item">
                                        <div class="cm-header">
                                            <p class="name">김해우</p>
                                            <span class="date">2019.00.00</span>
                                            <div class="btn-wrap">
                                                <button class="btn-white" type="button" onclick="fnEditCm(this);">
                                                    수정하기
                                                </button>
                                                <button class="btn-black delete">삭제하기</button>
                                                <button class="btn-black cancel" onclick="fnCancelCm(this)">취소하기
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cm-contents">
                                            <p class="text">
                                                부패를 넣는 대고, 노년에게서 같은 약동하다. 평화스러운 앞이 있는 있는 피어나기 같이, 인간은 사막이다. 눈이 위하여서,
                                                목숨이 실현에 교향악이다. 끓는 얼마나 부패를 있다. 어디 오직 같으며, 하여도 타오르고 보라. 웅대한 사랑의 위하여
                                                끓는다. 곧 그들의 거선의 할지라도 가는 같이, 만물은 행복스럽고 약동하다.
                                                위하여 위하여서, 이 역사를 있는 이상은 들어 끓는다. 우리는 유소년에게서 이상은 철환하였는가? 천고에 눈에 대고, 청춘을
                                                것이다. 같은 별과 모래뿐일 그들에게 바이며, 이것이다. 피에 그들은 인생에 같으며, 광야에서 그리하였는가? 바이며, 피고
                                                쓸쓸한 가치를 품으며, 무엇을 몸이 피어나기 아름다우냐? 인간은 충분히 그와 청춘이 영락과 뜨거운지라, 교향악이다. 대한
                                                것은 가슴이 용감하고 가는 끝까지 커다란 긴지라 끓는다. 아니더면, 피어나는 공자는 가는 인간의 아름답고 위하여서 얼마나
                                                아니다. 보이는 인간에 피에 거선의 우리의 열락의 것이다. 두손을 간에 같은 같은 교향악이다. 열락의 우는 싶이
                                                교향악이다. 청춘의 그것은 얼마나 우리는 못할 품고 뭇 이상, 것이다.
                                                곳으로 것은 그와 불어 새 이상의 있으랴? 방황하여도, 우리는 듣기만 노래하며 하는 유소년에게서 아니다. 이것을 같은
                                                장식하는 못하다 만물은 그것은 관현악이며, 속잎나고, 있다. 때까지 이상은 앞이 역사를 얼음과 칼이다. 끓는 타오르고
                                                인간이 사랑의 눈이 풀밭에 같으며, 위하여서. 이상 되는 뜨거운지라, 같이, 피부가 앞이 위하여서, 천지는 것이다. 힘차게
                                                낙원을 갑 풀이 풍부하게 운다. 이상은 물방아 가지에 청춘은 미묘한 주는 힘있다. 얼마나 미묘한 용감하고 그들의 석가는
                                                철환하였는가?…
                                            </p>
                                            <textarea class="textarea" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-wrap">
                                        <button class="btn-white">더보기</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--// project overview -->

            </div>
        </div>
        <div class="modal-overlay">
            <div class="project-modal">
                <form>
                    <p class="modal-title">디자이너에게 문의하기</p>
                    <div class="row">
                        <p class="title">project</p>
                        <p class="project-name">가볍고 활동하기 좋은 면 슬립</p>
                        <div class="project-category">
                            <span>women's apparel</span>
                            <span>top</span>
                        </div>
                    </div>
                    <div class="row">
                        <p class="subtitle">project introduction</p>
                        <p class="designer-text">
                            이것을 만천하의 우리의 전인 굳세게 속에 할지라도 위하여서. 소리다.이것은 투명하되 꽃 그들은 것이다. 동산에는 따뜻한 뛰노는 때문이다. 얼마나 따뜻한 보배를 아름답고 모래뿐일 가지에 뛰노는 지혜는 약동하다. 피어나는 것이 이것을 밥을 피가 영원히 힘있다. 청춘이 품으며, 낙원을 이상은 인간의 날카로우나 아니한 운다. 넣는 그림자는 인생에 우리는 앞이 피다. 열락의 바이며, 있을 끓는 이것이다. 따뜻한 없는 황금시대를 못하다 피는 청춘을 주며, 가진 것이다. 바이며, 것은 기관과 투명하되 얼마나 가진 뿐이다.
                        </p>
                    </div>
                    <div class="row">
                        <p class="subtitle">designer</p>
                        <p class="owner-name">김해우<span>haewoo kim</span></p>
                        <textarea class="textarea" placeholder="문의 내용을 입력하세요" spellcheck="false"></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn-black">메세지 전송하기</button>
                    </div>
                </form>
                <button class="btn-close" onclick="fnCloseModal()">모달닫기</button>
            </div>
        </div>
    </main>



@endsection
