@include('formadmin.include.head');
<body class="">
    <div class="wrapper">
@include('formadmin.include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Tabungan Siswa</a>
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
                                  <form action="{{ url('/petugas/store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('post')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Id Siswa</label>
                                                    <input type="text" class="form-control" name="idsiswa" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Menabung / Mengambil</label>
                                                    <select class="form-control" name="opsi">
                                                      <option value="menabung">Menabung</option>
                                                      <option value="ambil">Ambil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Jumlah</label>
                                                    <input type="number" class="form-control" name="tabung" required>
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
                                    <h4 class="card-title">Data Siswa</h4>
                                    <p class="card-category">Tabel Seluruh Data Siswa</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <table id="tabel-data" class="table table-striped table-bordered">
                                          <thead class="text-primary">
                                            <tr>
                                              <th>Id</th>
                                              <th>Nama</th>
                                              <th>Username</th>
                                              <th>Hak Akses</th>
                                            </tr></thead>
                                          <tbody>
                                              @foreach($data[0] as $u)
                                              <tr>
                                                  <td>{{ $u->id }}</td>
                                                  <td>{{ $u->nama }}</td>
                                                  <td>{{ $u->username }}</td>
                                                  <td>{{ $u->role->role }}</td>
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
