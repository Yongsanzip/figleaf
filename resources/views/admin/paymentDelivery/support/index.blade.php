<?php
// url : /admin_support
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

            <!-- search -->
            <div class="search">
                <form action="{{route('admin_support.index')}}">
                    <div class="search-select">
                        <select name="searchCondition">
                            <option disabled selected>- 검색기준 -</option>
                            <option value="title" {{isset($_GET['searchCondition']) ? ($_GET['searchCondition'] == 'title' ? 'selected' :'') : ''}} >프로젝트명</option>
                        </select>
                    </div>
                    <div class="search-keyword">
                        <input type="text" name="searchKeyword" value="{{(isset($_GET['searchKeyword'])) ? $_GET['searchKeyword'] : ''}}" class="required" data-title="검색어" placeholder="검색어를 입력하세요" spellcheck="false">
                        <button>검색</button>
                    </div>
                </form>
            </div>
            <div class="btn-wrap"style="margin-bottom: 1%">
                <button class="btn-black" onclick="fn_refund();">환불</button>
            </div>
            <!-- table -->
            <form id="refundForm" method="POST">
            <table class="table-data table-normal">
                <colgroup>
                    <col width="3%">
                    <col width="8%">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>

                    <col width="10%">
                </colgroup>
                <thead>
                <tr>
                    <th><input type="checkbox" id="chkAll"></th>
                    <th>여부</th>
                    <th>프로젝트명</th>
                    <th>후원일</th>
                    <th>이메일</th>
                    <th>후원자명</th>
                    <th>옵션</th>
                    <th>후원금액</th>
                    <th>
                        결제상태
                        <?php /*<button class="sort-column">정렬</button>*/?>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @if(count($datas) > 0)
                        @foreach($datas as $key=>$data)
                            <tr>
                                @if($data->condition < 11)
                                    <td><input type="checkbox" name="support[]" value="{{$data->id}}"></td>
                                @else
                                    <td></td>
                                @endif
                                <td onclick="fn_detail_link({{$data->project->id}})">{{project_status($data->project->condition)}}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})" class="text-left">{{$data->project->title}}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{$data->created_at}}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{$data->user->email}}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{$data->user->name}}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{$data->support_options->first()->option->option_name}} {{count($data->support_options) > 1 ? "외 ". count($data->support_options) .' 개' : '' }}</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{$data->total_amount}} 원</td>
                                <td onclick="fn_detail_link({{$data->project->id}})">{{support_condition($data->condition)}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">후원중인 프로젝트가 존재하지 않습니다. </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            </form>
            <!-- //table type1 -->
            <!-- paginiation -->
            <nav class="pagination-wrap">
                {!! $datas->links() !!}
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded",function(){
            $("#chkAll").click(function() {
                if ($(this).prop('checked')) {
                    $("input[name^=support]").prop('checked', true);
                } else {
                    $("input[name^=support]").prop("checked", false);
                }
            });


            $("input[name^=support]").click(function(e){
                $('#error'+e.currentTarget.value).hide();
            })
        })

        var fn_refund = function(){
            var params = new FormData($('#refundForm')[0]);

             if(confirm("해당 후원내역을 환불하시겠습니까?")){
                 formAjax('POST',true,'admin_refund',params,fn_refund_ajax_error,fn_refund_ajax_success)
             }
        }

        var fn_refund_ajax_error = function(e){
            console.log(e.msg);
        }
        var fn_refund_ajax_success = function(e){
            alert(e.msg);
            location.reload();
            console.log(e);
        }
        var fn_detail_link =function(e){
            location.href='/admin_support/'+e;
        }
    </script>
@endsection
