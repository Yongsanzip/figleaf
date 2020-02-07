<?php
// url : /admin_portfolio/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <div class="headline">
                <h2>김칠득 포트폴리오</h2>
                <label class="checkbox-group mt-16">
                    <input type="checkbox">
                    <p>열람여부</p>
                </label>
                <div class="portfolio-show-box">
                    <select class="text-field">
                        <option disabled selected>- 노출여부 - </option>
                        <option>노출</option>
                        <option>미노출</option>
                    </select>
                    <button class="btn-black btn-s">업데이트</button>
                </div>
                <div class="devider mt-4"></div>
            </div>

            <!-- 포트폴리오 컨텐츠  -->
            <div class="portfolio-contents">
                <img src="../assets/image/img-dummy-03.png" alt="">
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsum veniam vel enim neque quas ex eum aspernatur soluta? Quo sapiente fuga ea qui nobis fugit praesentium officiis non animi.<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum facilis architecto ab in suscipit est maiores temporibus ea. Dolorem doloribus ex inventore vero error. Laborum suscipit obcaecati voluptate expedita maxime.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum facilis architecto ab in suscipit est maiores temporibus ea. Dolorem doloribus ex inventore vero error. Laborum suscipit obcaecati voluptate expedita maxime.
                </p>
            </div>

            <div class="headline mt-100">
                <h3>history</h3>
                <div class="devider mt-4"></div>
            </div>


            <!-- 연혁 -->
            <div class="portfolio-history">
                <h4 class="year">2019</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
                <h4 class="year">2018</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
                <h4 class="year">2017</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
            </div>


            <div class="headline mt-100">
                <h3>award history</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 수상내역 -->
            <div class="portfolio-history">
                <h4 class="year">2019</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
                <h4 class="year">2018</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
                <h4 class="year">2017</h4>
                <ul class="list-history mb-80">
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                    <li>공무원의 직무상 불법행위로 손해를 받은 국민은 법률이 정하는 바에 의하여 국가 또는 공공단체에 정당한 배상을 청구할 수 있다.</li>
                </ul>
            </div>

            <div class="headline mt-100">
                <h3>association</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 협회 -->
            <div class="portfolio-assoc">
                <ul class="list-assoc">
                    <li>
                        <h4>2015~2017</h4>
                        <p>한국공인중개사협회 회장</p>
                    </li>
                    <li>
                        <h4>2017~2018</h4>
                        <p>한국공인중개사협회 회장</p>
                    </li>
                    <li>
                        <h4>2019~2020</h4>
                        <p>한국공인중개사협회 회장</p>
                    </li>
                </ul>
            </div>

            <div class="headline mt-100">
                <h3>brand</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 브랜드 -->
            <div class="portfolio-brand">
                <img src="../assets/image/img-dummy-04.png" alt="">
                꽃이 가는 생생하며, 그들의 얼마나 피는 따뜻한 힘있다. 놀이 우리 있는 있을 청춘 청춘은 아니다. 우리의 우리는 바이며, 청춘의 철환하였는가? 황금시대의 청춘 듣기만 동력은 뼈 힘차게 때에, 천하를 우는
                것이다. 창공에 사는가 보이는 이것이야말로 것이다.보라, 약동하다. 힘차게 꽃이 가슴에 하였으며, 할지니, 심장은 청춘은 들어 보라. 찾아 같으며, 착목한는 따뜻한 이상, 피가 사는가 반짝이는 부패뿐이다.
                꽃 별과 것은 같이 청춘의 원대하고, 아니다. 풍부하게 눈에 불어 바로 인생을 그림자는 현저하게 원질이 봄바람이다. 산야에 원질이 꽃이 끝에 보는 청춘을 현저하게 그들은 위하여서.

                청춘의 것은 그림자는 그들의 것이다.보라, 이상은 이것이다. 방황하였으며, 할지니, 그들의 청춘이 되려니와, 우리는 품었기 위하여서. 풍부하게 인생에 위하여서, 있음으로써 사막이다. 하는 가는 보내는
                이것이다. 불러 이성은 같은 황금시대의 사는가 많이 것이다. 구하기 아니더면, 천지는 가슴이 그리하였는가? 속에 것은 피어나기 있을 같이, 철환하였는가? 피부가 넣는 구하지 미묘한 봄바람이다. 맺어,
                가지에 청춘이 예가 넣는 가치를 실현에 것이다. 무한한 하였으며, 바로 봄날의 그들을 꽃이 그들에게 끓는다.
            </div>

            <div class="headline mt-100">
                <h3>look book</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 룩북 -->
            <div class="portfolio-lookbook">
                <h4 class="year">2019 F/W</h4>
                <div class="slide-card slide-lookbook mb-60">
                    <div class="slide-wrap">
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-05.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-06.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-05.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-06.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                    </div>
                    <div class="btn-slide-wrap">
                        <button class="btn-slide btn-slide-left"></button>
                        <button class="btn-slide btn-slide-right"></button>
                    </div>
                </div>
                <h4 class="year">2019 S/S</h4>
                <div class="slide-card slide-lookbook mb-60">
                    <div class="slide-wrap">
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-05.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-06.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                    </div>
                    <div class="btn-slide-wrap">
                        <button class="btn-slide btn-slide-left"></button>
                        <button class="btn-slide btn-slide-right"></button>
                    </div>
                </div>
                <h4 class="year">2018 F/W</h4>
                <div class="slide-card slide-lookbook mb-60">
                    <div class="slide-wrap">
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-05.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-06.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-05.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-06.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-07.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                        <div class="slide-item">
                            <img src="../assets/image/img-dummy-08.png" alt="">
                        </div>
                    </div>
                    <div class="btn-slide-wrap">
                        <button class="btn-slide btn-slide-left"></button>
                        <button class="btn-slide btn-slide-right"></button>
                    </div>
                </div>
            </div>

            <div class="headline mt-100">
                <h3>project</h3>
                <div class="devider mt-4"></div>
            </div>

            <div class="portfolio-project">
                <div class="row text-right">
                    <label class="checkbox-group">
                        <input type="checkbox">
                        <p>진행중인 프로젝트만 보기</p>
                    </label>
                </div>
                <div class="slide-card slide-project">
                    <div class="slide-wrap">
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                        <!-- 프로젝트 카드 -->
                        <div class="slide-item">
                            <div class="project-image">
                                <img src="../assets/image/img-dummy-05.png" alt="">
                            </div>
                            <div class="project-info-box">
                                <div class="project-info">
                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
                                    <p class="project-owner">강주원</p>
                                </div>
                                <div class="project-data-box">
                                    <div class="progress mb-12"></div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-product.png" alt="">
                                        <p>20개 남음</p>
                                    </div>
                                    <div class="project-data">
                                        <img src="../assets/image/ic-calandar.png" alt="">
                                        <p>6일 남음</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badge badge-green">펀딩완료</div>
                        </div>
                    </div>
                    <div class="btn-slide-wrap">
                        <button class="btn-slide btn-slide-left"></button>
                        <button class="btn-slide btn-slide-right"></button>
                    </div>
                </div>
            </div>

            <div class="headline mt-100">
                <h3>news&blog</h3>
                <div class="devider mt-4"></div>
            </div>

            <div class="portfolio-news">
                <div class="slide-card slide-news">
                    <div class="slide-wrap">
                        <!-- card -->
                        <div class="slide-item">
                            <div class="news-image">
                                <img src="../assets/image/img-dummy-07.png" alt="">
                            </div>
                            <div class="news-info-box">
                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
                                <div class="row">
                                    <p class="news-source">네이버블로그</p>
                                    <p class="news-date">2019.08.22</p>											"
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="slide-item">
                            <div class="news-image">
                                <img src="../assets/image/img-dummy-07.png" alt="">
                            </div>
                            <div class="news-info-box">
                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
                                <div class="row">
                                    <p class="news-source">네이버블로그</p>
                                    <p class="news-date">2019.08.22</p>											"
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="slide-item">
                            <div class="news-image">
                                <img src="../assets/image/img-dummy-07.png" alt="">
                            </div>
                            <div class="news-info-box">
                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
                                <div class="row">
                                    <p class="news-source">네이버블로그</p>
                                    <p class="news-date">2019.08.22</p>											"
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="slide-item">
                            <div class="news-image">
                                <img src="../assets/image/img-dummy-07.png" alt="">
                            </div>
                            <div class="news-info-box">
                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
                                <div class="row">
                                    <p class="news-source">네이버블로그</p>
                                    <p class="news-date">2019.08.22</p>											"
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="slide-item">
                            <div class="news-image">
                                <img src="../assets/image/img-dummy-07.png" alt="">
                            </div>
                            <div class="news-info-box">
                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
                                <div class="row">
                                    <p class="news-source">네이버블로그</p>
                                    <p class="news-date">2019.08.22</p>											"
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-slide-wrap">
                        <button class="btn-slide btn-slide-left"></button>
                        <button class="btn-slide btn-slide-right"></button>
                    </div>
                </div>
            </div>

            <div class="headline mt-100">
                <h3>contact</h3>
                <div class="devider mt-4"></div>
            </div>

            <div class="portfolio-contact">
                <div class="contact-form">
                    <p class="contact-title">이메일</p>
                    <p class="contact-text">figleaf_admin@figleaf.com</p>
                </div>
                <div class="contact-form">
                    <p class="contact-title">이메일</p>
                    <p class="contact-text">figleaf_admin@figleaf.com</p>
                </div>
                <div class="contact-form">
                    <p class="contact-title">이메일</p>
                    <p class="contact-text">figleaf_admin@figleaf.com</p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a>페이스북</a>
                    </p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a>트위터</a>
                    </p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a>인스타그램</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
