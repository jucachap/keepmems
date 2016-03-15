@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="{{ url('memservices/user') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- User Name -->
            <div class="form-group">
                <label for="user-name" class="col-sm-3 control-label">User</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="user-name" class="form-control">
                </div>
            </div>

            <!-- User email -->
            <div class="form-group">
                <label for="user-email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="email" name="email" id="user-email" class="form-control">
                </div>
            </div>

            <!-- Add User Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add User
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection