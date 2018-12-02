<ul class="media-list">
@foreach
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->mail,50 }}" alt="">
        </div>
        <div class="media-body">
            {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!}
        </div>
        <div>
            <p>{!! nl2br(e($task->content)) !!}</p>
        </div>
        <div>
            @if (Auth::id() == $micropost->user_id)
                {!! Form::open(['route'['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! submit('Delete', ['class' => 'btn btn-daner btn-xs]) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}