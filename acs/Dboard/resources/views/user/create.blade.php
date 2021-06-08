@extends('dboard::index')

@section('title',(isset($user))? 'Update: '.$user->name : 'Create new user')

@section('dboard_content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{(isset($user))? route('dboard.user.update',$user) : route('dboard.user.store')}}">
                @csrf
                @if(isset($user))
                    @method('PATCH')
                @endif
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{ (isset($user)) ? $user->name : old('name')}}" class="form-control" name="name" id="name" type="text" placeholder="Enter Name"/>
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact No</label>
                                <input name="contact_no" class="form-control" id="contact_no" type="text" value="{{(isset($user)) ? $user->contact_no : old('contact_no')}}" placeholder="+8801140963472">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" id="role">
                                    @if(request()->routeIs('dboard.user.create'))
                                        <option @if(old('role') == 'Data_Entry_Operator') selected @endif value="operator">Data Entry Operator</option>
                                        <option @if(old('role') == 'admin') selected @endif value="admin">Admin</option>
                                    @else
                                        <option @if($user->type == 'Data_Entry_Operator') selected @endif value="operator">Data Entry Operator</option>
                                        <option @if($user->type == 'Admin') selected @endif value="admin">Admin</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 offset-lg-1">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input value="{{(isset($user)) ? $user->email :old('email')}}" name="email" class="form-control" id="email" type="email" placeholder="Enter email"/>
                            </div>
                            @if(request()->routeIs('dboard.user.create'))
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password" class="form-control" id="password" type="password"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input name="password_confirmation" class="form-control" id="password_confirmation"
                                           type="password" placeholder="Confirm Password">
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
