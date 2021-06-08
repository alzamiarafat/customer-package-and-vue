@extends('operator.index')

@push('post_scripts')
    <script type="text/javascript" src="{{asset("js/plugins/bootstrap-datepicker.min.js")}}"></script>
    <script>
        $('#date_of_birth').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
        });

    </script>
@endpush
@section('title',(isset($user))? 'Update: '.$user->name : 'Create new merchant')

@section('dboard_content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('operator.merchant.store')}}">
                @csrf
                @if(isset($user))
                    @method('PATCH')
                @endif
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input value="{{ (isset($user)) ? $user->name : old('name')}}" class="form-control" name="name" id="name" type="text" placeholder="Enter Full Name"/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father's Name</label>
                                <input name="father_name" class="form-control" id="father_name" type="text" value="{{old('father_name')}}" placeholder="Father's Name">
                            </div>
                            <div class="form-group">
                                <label for="mother_name">Mother's Name</label>
                                <input name="mother_name" class="form-control" id="mother_name" type="text" value="{{old('mother_name')}}" placeholder="Mother's Name">
                            </div>
                            <div class="form-group">
                                <label for="spouse_name">Spouse Name</label>
                                <input name="spouse_name" class="form-control" id="spouse_name" type="text" value="{{old('spouse_name')}}" placeholder="Spouse Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input value="{{(isset($user)) ? $user->email :old('email')}}" name="email" class="form-control" id="email" type="email" placeholder="Enter email"/>
                            </div>
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
                            <div class="form-group">
                                <label for="present_address">Present Address</label>
                                <textarea name="present_address" placeholder="Present Address" class="form-control" id="present_address" rows="4">{{old('present_address')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="permanent_address">Permanent Address</label>
                                <textarea name="permanent_address" placeholder="Permanent Address" class="form-control" id="permanent_address" rows="4">{{old('permanent_address')}}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label for="gender">Gender</label>
                            <fieldset class="form-group form-inline">
                                <div class="form-check mr-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" id="male" type="radio" name="gender" value="male" checked="">Male
                                    </label>
                                </div>
                                <div class="form-check mr-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" id="female" type="radio" name="gender" value="female">Female
                                    </label>
                                </div>
                                <div class="form-check mr-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" id="other" type="radio" name="gender" value="other">Other
                                    </label>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="date_of_birth">Date of birth</label>
                                <input name="date_of_birth" class="form-control" id="date_of_birth" type="text" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="civil_status">Civil Status</label>
                                        <select name="civil_status" class="form-control" id="civil_status">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select name="religion" class="form-control" id="religion">
                                            <option value="ISLAM">Islam</option>
                                            <option value="HINDU">Hindu</option>
                                            <option value="CHRISTIAN">Christian</option>
                                            <option value="BUDDHA">Buddha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input name="nationality" class="form-control" id="nationality" type="text" placeholder="Bangladeshi">
                            </div>
                            <div class="form-group">
                                <label for="nid">NID Number</label>
                                <input name="nid" class="form-control" id="nid" type="text">
                            </div>
                            <div class="form-group">
                                <label for="passport_no">Passport Number (if any)</label>
                                <input name="passport_no" class="form-control" id="passport_no" type="text">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="civil_status">Blood Group</label>
                                        <select name="blood_group" class="form-control" id="civil_status">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">AB+</option>
                                            <option value="B-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="designation_in_proprietorship">Designation in Proprietorship</label>
                                        <select name="designation_in_proprietorship" class="form-control" id="designation_in_proprietorship">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_no_work">Contact No (work)</label>
                                <input name="contact_no_work" class="form-control" id="contact_no_work" type="text" value="{{(isset($user)) ? $user->contact_no : old('contact_no_work')}}" placeholder="+8801140963472">
                            </div>
                            <div class="form-group">
                                <label for="contact_no_home">Contact No (home)</label>
                                <input name="contact_no_home" class="form-control" id="contact_no_home" type="text" value="{{(isset($user)) ? $user->contact_no : old('contact_no_home')}}" placeholder="+8801140963472">
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact">Emergency contact details</label>
                                <input name="emergency_contact" class="form-control" id="emergency_contact" type="text" value="{{(isset($user)) ? $user->contact_no : old('emergency_contact')}}" placeholder="+8801140963472">
                            </div>
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
