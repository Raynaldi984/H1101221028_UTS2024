@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="text-center font-bold">GAJI</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendidikan</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Budi Santoso</h6>
                            <p class="text-xs text-secondary mb-0">budi123@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manajer</p>
                        <p class="text-xs text-secondary mb-0">Manajer Proyek</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Rp 10.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Magister (S2)</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Ahmad Fauzi</h6>
                            <p class="text-xs text-secondary mb-0">fauziahmad@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manajemen</p>
                        <p class="text-xs text-secondary mb-0">Supervisor</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Rp 8.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Sarjana (S1)</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fitriani Setiawan</h6>
                            <p class="text-xs text-secondary mb-0">fitri2244@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Staff</p>
                        <p class="text-xs text-secondary mb-0">HRD</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Rp 6.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Sarjana (S1)</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Dewi Lestari</h6>
                            <p class="text-xs text-secondary mb-0">dewi12@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Karyawan</p>
                        <p class="text-xs text-secondary mb-0">UI/UX</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Rp 4.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Sarjana (S1)</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gaji</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        // Fungsi untuk mengubah gaji berdasarkan jabatan yang dipilih
        function updateGaji() {
            var jabatan = document.getElementById("jabatan").value;
            var gaji = document.getElementById("gaji");

            // Memperbarui nilai gaji berdasarkan jabatan
            switch (jabatan) {
                case "Manajer":
                    gaji.value = "10000000";
                    break;
                case "Supervisor":
                    gaji.value = "8000000";
                    break;
                case "Staff":
                    gaji.value = "6000000";
                    break;
                case "Karyawan":
                    gaji.value = "4000000";
                    break;
                default:
                    gaji.value = "";
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Form Gaji</h1>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Nama
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Masukkan Nama">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jabatan">
                    Jabatan
                </label>
                <!-- List of jabatan -->
                <select onchange="updateGaji()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jabatan">
                    <option value="Manajer">Manajer</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Staff">Staff</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gaji">
                    Gaji
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gaji" type="number" placeholder="Gaji" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pendidikan">
                    Pendidikan
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pendidikan">
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</body>

</html>

@endsection