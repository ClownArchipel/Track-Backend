@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">
    Data Users
    </div>
    <div class="card-body">
    <table id="users" class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Action</th>
                </tr>
            </thead>
        </table>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
            $(function() {
                $('#users').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "/ajax/users",
                    columns: [
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ]
                });
            });
        </script>
@stop