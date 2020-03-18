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
                        <select>
                            <option>- 검색기준 -</option>
                            <option>검색기준</option>
                            <option>검색기준</option>
                        </select>
                    </div>
                    <div class="search-keyword">
                        <input type="text" placeholder="검색어를 입력하세요" spellcheck="false">
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

                    <col width="10%">
                </colgroup>
                <thead>
                <tr>
                    <th><input type="checkbox" name="chkAll"></th>
                    <th>여부</th>
                    <th>프로젝트명</th>
                    <th>후원일</th>
                    <th>이메일</th>
                    <th>후원자명</th>
                    <th>옵션</th>
                    <th>
                        결제상태
                        <button class="sort-column">정렬</button>
                    </th>
                </tr>
                </thead>
                <tbody>


                    @if(count($datas) > 0)
                        @foreach($datas as $key=>$data)
                            <tr>
                                <td><input type="checkbox" name="support{{$key+1}}" value="{{$data->id}}"></td>
                                <td>{{project_status($data->project->condition)}}</td>
                                <td class="text-left">{{$data->project->title}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->user->email}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->support_options->first()->option->option_name}} {{count($data->support_options) > 1 ? "외 ". count($data->support_options) .' 개' : '' }}</td>
                                <td>{{support_condition($data->condition)}}</td>
                            </tr>
                            <input type="hidden" name="data{{$key}}" value="{{$key}}">
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
            $("input[name=chkAll]").click(function() {
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
            console.log(params);
            formAjax('POST',true,'admin_refund',params,fn_reffund_ajax_error,fn_refund_ajax_success)
            // if(confirm("해당 후원내역을 환불하시겠습니까?")){
            //     formAjax('POST',true,'admin_refund',params,fn_reffund_ajax_error,fn_refund_ajax_success)
            // }
        }

        var fn_reffund_ajax_error = function(e){
                console.log(e);
        }
        var fn_refund_ajax_success = function(e){
            console.log(e);
        }
    </script>
@endsection
