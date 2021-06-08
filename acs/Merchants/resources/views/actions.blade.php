<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <a href="{{route('dboard.user.edit',['user'=>$user])}}" class="btn btn-primary text-white">Edit</a>
        @if(auth()->id() !== $user->id)|
                <a onclick="delete_user('{{route('dboard.user.destroy',['user'=>$user])}}')" href="javascript:void(0);" class="btn btn-danger">
                   Delete
                </a>
            </div>
        @endif
    
    </div>
</body>
</html>








{{-- <div class="row">
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

</div> --}}
