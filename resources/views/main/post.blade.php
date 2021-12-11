<div class="post">
    <div class="post-head">
        <div>
            <img src="{{URL::asset($profile)}}" alt="">
            <div class="post-name">
                <h2>{{$name}}</h2>
                <p>{{$location}}</p>
            </div>
        </div>
        <img style="height: 20px; width: 20px;" src="{{URL::asset('img/threedots.png')}}" />
    </div>
    <div class="post-img">
        <img src="{{URL::asset($post)}}" alt="">
    </div>
    <div class="post-likes">
        <div>
        <img style="margin-top: 12px;" src="https://img.icons8.com/material-outlined/28/000000/like.png"/>
            <img style="margin-left: 6px; margin-top: 12px;" src="https://img.icons8.com/material-outlined/34/000000/filled-topic.png" />
            <img style="margin-left: 6px; margin-top: 12px;" src="https://img.icons8.com/material-outlined/28/000000/share.png" />
        </div>
        <div>
            <button id="join">Join</button>
        </div>
    </div>
</div>
