@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="offset-sm-2 col-sm-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('users/'.$user->id)}}">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control"
                            placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control"
                            placeholder="Masukkan Password">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection