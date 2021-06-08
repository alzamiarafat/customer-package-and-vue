<div class="row">
    <div class="col-md-3">
        <a href="{{route('dboard.user.edit',['user'=>$user])}}">
            <i class="fa fa-edit"></i>
        </a>
    </div>
    @if(auth()->id() !== $user->id)
        <div class="col-md-3">
            <a onclick="delete_user('{{route('dboard.user.destroy',['user'=>$user])}}')" href="javascript:void(0);" class="text-danger drop-user">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    @endif

</div>
