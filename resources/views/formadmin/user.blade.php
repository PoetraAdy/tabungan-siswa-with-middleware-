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
                                    <h4 class="card-title">Insert User</h4>
                                    <p class="card-category">Masukkan Data User</p>
                                </div>
                                <div class="card-body">
                                  <form action="{{ url('/dashboard/store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('post')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama</label>
                                                    <input type="text" class="form-control" name="nama" required>
                                                </div>
                                            </div>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input type="text" class="form-control" name="username" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password</label>
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Insert</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Data User</h4>
                                    <p class="card-category">Tabel Seluruh Data User</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <table id="tabel-data" class="table table-striped table-bordered">
                                          <thead class="text-primary">
                                              <tr><th>Nama</th>
                                              <th>Username</th>
                                              <th>Hak Akses</th>
                                              <th>Action</th>
                                          </tr></thead>
                                          <tbody>
                                              @foreach($data[1] as $u)
                                              <tr>
                                                  <td>{{ $u->nama }}</td>
                                                  <td>{{ $u->username }}</td>
                                                  <td>{{ $u->role->role }}</td>
                                                  <td>
                                                  <form action="{{ url('dashboard/delete', $u->id)}}" method="post">
                                                  <a href="{{ url('dashboard/edit', $u->id )}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                  </form>
                                                  </td>
                                              </tr>
                                              @endforeach
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
</body>
@include('formadmin.include.footer');
</html>
