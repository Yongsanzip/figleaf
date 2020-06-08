<?php
// url : /admin_support/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>후원내역</h2>
            </div>
            <!-- //headline -->

            <div class="form-project">
                <h2 class="subtitle mr-4">{{$datas->title}}</h2>
                <div class="badge {{project_status_class($datas->condition)}}">{{project_status($datas->condition)}}</div>
                <a href="/project/{{$datas->id}}" class="btn-black btn-s h-28px float-right">프로젝트 더보기</a>
                <p class="project-text">
                    {{$datas->summary}}
                </p>
            </div>

            <div class="form-history mt-20">
                <h3 class="subtitle">총 18명의 후원자가 있습니다.</h3>

                <table class="table-data table-small mt-16">
                    <colgroup>
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col>
                        <col width="10%">
                        <col>
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>후원 일시</th>
                        <th>이메일</th>
                        <th>연락처</th>
                        <th>이름</th>
                        <th>디자이너명</th>
                        <th>옵션</th>
                        <th>수량</th>
                        <th>후원상태</th>
                        <th>은행명</th>
                        <th>계좌번호</th>
                        <th>예금주명</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas->supports as $key => $data)
                        <tr>
                            <td>{{$data->updated_at->format('Y-m-d')}}</td>
                            <td>{{$data->user->email}}</td>
                            <td>{{$data->user->cellphone}}</td>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->project->user->name}}</td>
                            <td>
                                <p class="data-box">{{$data->support_options->first()->option->option_name}} {{$data->support_options->count() > 1 ? '외 '.($data->support_options->count()-1).'개': '' }}</p>
                            </td>
                            <td>
                                <p class="data-box">{{$data->support_log ? $data->support_log->amount : '0'}}개</p>
                                <input type="number" class="text-field edit-box">
                            </td>
                            <td>{{support_condition($data->condition)}}</td>
                            <td>
                                <p class="data-box">{{$data->user->bank ? $data->user->bank->bank_name : '-'}}</p>
                            </td>
                            <td>
                                <p class="data-box">{{$data->user->bank_account_number}}</p>
                            </td>
                            <td>
                                <p class="data-box">{{$data->user->bank_account_holder}}</p>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="btn-wrap"style="margin-bottom: 1%">
                <a class="btn-black" href="/admin_support?page={{$page}}">목록으로</a>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
