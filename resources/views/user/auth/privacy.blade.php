@extends('user.layout.master')
@section('content')
            <div class="card-header">
                Privacy
            </div>
            <div class="card-body">
                <form action="{{url('/privacy/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cur_pw">Enter Current Password</label>
                        <input type="password" id="cur_pw" name="cur_pw" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="new_pw">Enter New Password</label>
                        <input type="password" id="new_pw" name="new_pw" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="con_pw">Enter Confirm Password</label>
                        <input type="password" id="con_pw" name="con_pw" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Change Password" class="btn btn-primary">
                    </div>
                </form>
    </div>
@endsection
