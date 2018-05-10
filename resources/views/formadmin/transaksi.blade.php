@include('formadmin.include.head');
<body class="">
    <div class="wrapper">
@include('formadmin.include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Transaksi</a>
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
                                    <h4 class="card-title">Data Transaksi</h4>
                                    <p class="card-category">Tabel Seluruh Data Transaksi</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <table id="tabel-data" class="table table-striped table-bordered">
                                          <thead class="text-primary">
                                            <tr>
                                              <th>Petugas</th>
                                              <th>Siswa</th>
                                              <th>Transaksi</th>
                                              <th>Sebesar</th>
                                              <th>Tanggal</th>
                                            </tr></thead>
                                          <tbody>
                                              @foreach($data[1] as $u)
                                              <tr>
                                                  <td>{{ $u->idpetugas[0]->nama }}</td>
                                                  <td>{{ $u->iduser[0]->nama }}</td>
                                                  <td>
                                                    <?php
                                                      if($u->tabung < 0) {
                                                        echo "Mengambil";
                                                      } else {
                                                        echo "Menabung";
                                                      } ?>
                                                  </td>
                                                  <td>{{ $u->tabung }}</td>
                                                  <td>{{ $u->tanggal }}</td>
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
