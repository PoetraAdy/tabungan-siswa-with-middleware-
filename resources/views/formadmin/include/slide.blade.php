<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            Admin Dashboard
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item  active">
              <a class="nav-link" href="{{ url('/dashboard/profile ')}}">
                  <i class="material-icons">person</i>
                  <p>Profile</p>
              </a>
          </li>

            <!-- Admin -->
            @if(session('sessionUser')->role->role == "Admin")
            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/dashboard ')}}">
                    <i class="material-icons">assignment_ind</i>
                    <p>User Control</p>
                </a>
            </li>
            <!-- Admin -->
            @endif

            <!-- Admin & Petugas -->
            @if(session('sessionUser')->role->role == "Admin" || session('sessionUser')->role->role == "Petugas")
            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/petugas ')}}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Tabungan Siswa</p>
                </a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/petugas/transaksi ')}}">
                    <i class="material-icons">credit_card</i>
                    <p>Transaksi</p>
                </a>
            </li>
            @endif
            <!-- Admin & Petugas -->

            <!-- Siswa -->
            @if(session('sessionUser')->role->role == "Siswa")
            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/siswa ')}}">
                    <i class="material-icons">credit_card</i>
                    <p>Transaksi Saya</p>
                </a>
            </li>
            @endif
            <!-- Siswa -->

            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/masuk/logout ')}}">
                    <i class="material-icons">block</i>
                    <p>Keluar</p>
                </a>
            </li>
        </ul>
    </div>
</div>
