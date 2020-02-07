<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>1:1 문의</h2>
            </div>
            <!-- //headline -->

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="160px">
                    <col width="160px">
                    <col>
                    <col width="160px">
                </colgroup>
                <thead>
                <tr>
                    <th>등록일</th>
                    <th>회원명</th>
                    <th>제목</th>
                    <th>답변여부</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>완료</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- question  -->
            <p class="text-contents-white">
                놀이 전인 불러 이상이 눈에 풍부하게 뿐이다. 쓸쓸한 크고 인생을 찾아 황금시대의 가는 살았으며, 얼마나 것이다. 있으며, 그림자는 품고 약동하다. 인류의 사랑의 곳으로 미묘한 안고, 일월과 얼음이
                것이다.
                끓는 찬미를 무한한 가는 충분히 것이다. 청춘의 날카로우나 꾸며 생명을 천고에 지혜는 사막이다. 고동을 열락의 그들은 가슴에 뜨거운지라, 넣는 인생을 불어 그들은 것이다. 위하여 청춘 타오르고 같이, 같은
                예수는 피부가 철환하였는가? 찬미를 되려니와, 구할 노래하며 거친 할지니, 시들어 천하를 실현에 봄바람이다. 이것을 청춘의 앞이 피부가 천자만홍이 것이다.보라, 그러므로 운다.
                때까지 곳으로 투명하되 석가는 구하기 청춘을 속에 약동하다. 때에, 위하여 것은 뭇 인간이 남는 만물은 위하여 있는가? 것은 하였으며, 물방아 얼마나 인생에 뛰노는 찾아다녀도, 가슴이 것이다. 전인 싸인
                예가 맺어, 피다. 수 장식하는 유소년에게서 귀는 것이다. 따뜻한 길지 소리다.이것은 이 행복스럽고 끓는 보이는 있다. 사랑의 설산에서 관현악이며, 방황하였으며, 석가는 있는 바로 것이다. 얼마나 하여도
                넣는 미인을 수 무엇이 얼마나 피가 그러므로 것이다. 열매를 유소년에게서 끝까지 위하여, 교향악이다. 피부가 그들은 장식하는 같으며, 그들에게 끓는다. 그들의 풀이 너의 이상 그들에게 기쁘며,
                그리하였는가?
            </p>
            <!-- //question -->

            <div class="devider"></div>

            <!-- answer -->
            <div class="row mt-20">
                <h3 class="title">답변</h3>
                <p class="caption">2019-00-00 00:00</p>
            </div>

            @if(1)
            <p class="text-contents-gray">
                놀이 전인 불러 이상이 눈에 풍부하게 뿐이다. 쓸쓸한 크고 인생을 찾아 황금시대의 가는 살았으며, 얼마나 것이다. 있으며, 그림자는 품고 약동하다. 인류의 사랑의 곳으로 미묘한 안고, 일월과 얼음이
                것이다. 끓는 찬미를 무한한 가는 충분히 것이다. 청춘의 날카로우나 꾸며 생명을 천고에 지혜는 사막이다. 고동을 열락의 그들은 가슴에 뜨거운지라, 넣는 인생을 불어 그들은 것이다. 위하여 청춘 타오르고
                같이, 같은 예수는 피부가 철환하였는가? 찬미를 되려니와, 구할 노래하며 거친 할지니, 시들어 천하를 실현에 봄바람이다. 이것을 청춘의 앞이 피부가 천자만홍이 것이다.보라, 그러므로 운다.
                때까지 곳으로 투명하되 석가는 구하기 청춘을 속에 약동하다. 때에, 위하여 것은 뭇 인간이 남는 만물은 위하여 있는가? 것은 하였으며, 물방아 얼마나 인생에 뛰노는 찾아다녀도, 가슴이 것이다. 전인 싸인
                예가 맺어, 피다. 수 장식하는 유소년에게서 귀는 것이다. 따뜻한 길지 소리다.이것은 이 행복스럽고 끓는 보이는 있다. 사랑의 설산에서 관현악이며, 방황하였으며, 석가는 있는 바로 것이다. 얼마나 하여도
                넣는 미인을 수 무엇이 얼마나 피가 그러므로 것이다. 열매를 유소년에게서 끝까지 위하여, 교향악이다. 피부가 그들은 장식하는 같으며, 그들에게 끓는다. 그들의 풀이 너의 이상 그들에게 기쁘며,
                그리하였는가?
            </p>
                <div class="row text-right mt-20">
                    <button class="btn-white btn-m w-100px">삭제</button>
                    <button class="btn-black btn-m w-100px">수정</button>
                </div>

                <!-- //answer -->
            @elseif(2)
            <!-- noanswer -->
            <p class="text-contents-gray">
                답변이 없습니다.
            </p>
                <div class="row text-right mt-20">
                    <button class="btn-black btn-m w-100px">등록</button>
                </div>
             @else
                <!-- // 답변 등록 -->
                <textarea class="textarea mh-180px" placeholder="답변을 입력해주세요"></textarea>
                <!-- //answer -->

                <div class="row text-right mt-20">
                    <button class="btn-white btn-m w-100px">취소</button>
                    <button class="btn-black btn-m w-100px">작성</button>
                </div>
                <!-- // 답변 등록 -->
            @endif
            <!-- //noanswer -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
