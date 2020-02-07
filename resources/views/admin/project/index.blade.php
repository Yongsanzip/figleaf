<?php
// url : /admin_project
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>프로젝트</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <div class="search-select">
                    <select>
                        <option disabled selected>- 검색기준 -</option>
                        <option>검색기준</option>
                        <option>검색기준</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" placeholder="검색어를 입력하세요" spellcheck="false">
                    <button>검색</button>
                </div>
            </div>

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>여부</th>
                    <th>카테고리</th>
                    <th>제목</th>
                    <th>디자이너명</th>
                    <th>수량</th>
                    <th>판매량</th>
                    <th>총 판매금액</th>
                    <th>시작일</th>
                    <th>종료일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>41</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>진행중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>완료</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>대기중</td>
                    <td>Women > Dress</td>
                    <td>빈티지느낌 물씬나는 여름용 롱원피스</td>
                    <td>함초롱박이</td>
                    <td>30</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>2019-00-00</td>
                    <td>2019-00-00</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                <ul class="pagination">
                    <li><a> preview </a></li>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>4</a></li>
                    <li><a>5</a></li>
                    <li><a>6</a></li>
                    <li><a>7</a></li>
                    <li><a>8</a></li>
                    <li><a>9</a></li>
                    <li><a> next </a></li>
                </ul>
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
