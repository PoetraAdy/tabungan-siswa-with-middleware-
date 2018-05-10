@include('formadmin.include.head');
<body class="">
    <div class="wrapper">
@include('formadmin.include.slide');
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Profile User</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Data User</h4>
                            <p class="card-category">Update Data User</p>
                        </div>
                        <div class="card-body">
                          <form action="{{ url('/dashboard/profup', $data->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put')}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama</label>
                                            <input value="{{ $data->nama }}" type="text" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Username</label>
                                            <input value="{{ $data->username }}" type="text" class="form-control" name="username" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input value="{{ $data->password }}" type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Role</label>
                                            <input value="{{ $data->role->role }}" type="text" class="form-control" name="role" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/faces/marc.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">{{ $data->nama }}</h4>
                      <center><a href="#" class="btn btn-primary">{{ $data->role->role }}</a></center>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
@include('formadmin.include.footer');
</html>
