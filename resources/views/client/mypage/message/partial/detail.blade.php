@forelse($datas as $data)
    @if($data->user_id == auth()->user()->id)
        <!-- 보낸 메세지 -->
        <li class="send">
            <div class="bubble">
                <p class="text">{{$data->content}}</p>
                <span class="time">{{$data->created_at->format('H:i')}}</span>
            </div>
        </li>
    @else
        <!-- 받은 메세지 -->
        <li class="receive">
            <div class="bubble">
                <p class="text">{{$data->content}}</p>
                <span class="time">{{$data->created_at->format('H:i')}}</span>
            </div>
        </li>
    @endif
@empty
@endforelse
