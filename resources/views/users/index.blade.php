<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: pink">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: white; text-align: left;">
                                    <th style="padding: 10px; width: 5%; color: black;">ID</th>
                                    <th style="padding: 10px; width: 15%; color: black;">Nama Lengkap</th>
                                    <th style="padding: 10px; width: 10%; color: black;">Username</th>
                                    <th style="padding: 10px; width: 17%; color: black;">Email</th>
                                    <th style="padding: 10px; width: 25%; color: black;">Alamat</th>
                                    <th style="padding: 10px; width: 15%; color: black;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="color: black; background-color:white;">
                                @forelse ($users as $user)
                                    <tr>
                                        <td style="padding: 10px;">{{ $user->userid }}</td>
                                        <td style="padding: 10px;">{{ $user->name }}</td>
                                        <td style="padding: 10px;">{{ $user->username }}</td>
                                        <td style="padding: 10px;">{{ $user->email }}</td>
                                        <td style="padding: 10px;">{{ $user->alamat }}</td>
                                        <td style="padding: 10px; text-align: center;">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('users.destroy', $user->userid) }}" method="POST">
                                            <a href="{{ route('users.edit', $user->userid) }}" class="btn btn-sm" style="background-color: sandybrown; color: black;">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm" style="background-color: firebrick; color: white;">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" style="text-align: center; padding: 10px; border: 1px solid black;">
                                            <div class="alert alert-danger">
                                                Data User belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div style="margin-top: 10px;">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
          </div>

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('tmp/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('tmp/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('tmp/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('tmp/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('tmp/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('tmp/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('tmp/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('tmp/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>