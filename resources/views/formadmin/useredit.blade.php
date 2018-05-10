@include('formadmin.include.head');
<body class="">
    <div class="wrapper">
@include('formadmin.include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">User Control</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Update User</h4>
                                    <p class="card-category">Update Data User</p>
                                </div>
                                <div class="card-body">
                                  @foreach($data[1] as $u)
                                  <form action="{{ url('/dashboard/update', $u->id) }}" method="post" enctype="multipart/form-data">
                                  @endforeach
                                    {{ csrf_field() }}
                                    {{ method_field('put')}}
                                        <div class="row">
                                            @foreach($data[1] as $u)
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama</label>
                                                    <input value="{{ $u->nama }}" type="text" class="form-control" name="nama" required>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Select Access</label>
                                                    <select class="form-control" name="id_role">
                                                      @foreach($data[0] as $u)
                                                      <option value="{{ $u->id }}">{{ $u->role }}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($data[1] as $u)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input value="{{ $u->username }}" type="text" class="form-control" name="username" required readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password</label>
                                                    <input value="{{ $u->password }}" type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
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
