<?php
// url: /admin_notice
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>공지사항</h2>
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
                <colgroup>
                    <col width="80px">
                    <col>
                    <col width="160px">
                    <col width="180px">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>제목</th>
                    <th>
                        상단고정여부
                        <button class="sort-column">정렬</button>
                    </th>
                    <th>등록일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>41</td>
                    <td class="text-left">오픈기념 이벤트 안내</td>
                    <td>상단고정</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td class="text-left">공지사항 안내드립니다.</td>
                    <td>-</td>
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

            <div class="btn-wrap">
                <a href="{{route('admin_notice.create')}}" class="btn-black">작성하기</a>
            </div>

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
