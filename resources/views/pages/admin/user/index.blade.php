@extends('layouts.admin')

@section('title')
    User    
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">User</h2>
              <p class="dashboard-subtitle">
                List Of Users
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('user.create')}}" class="btn btn-primary mb-3">
                                + Tambah User
                            </a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- isi untuk table nya --}}
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection


@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing : true,
            serverSide : true,
            ordering   : true,
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                {   data: 'id',name: 'id' },
                {   data: 'name', name: 'name' },
                {   data: 'email', name: 'email' },
                {   data: 'roles', name: 'roles' },
                {   
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>    
@endpush