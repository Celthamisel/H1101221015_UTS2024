@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Form Pendidikan</p>
            <button class="btn btn-primary btn-sm ms-auto">Simpan</button>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Riwayat Pendidikan</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jenjang Pendidikan</label>
                <input class="form-control" type="text" value="Ketik disini...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Institusi Pendidikan</label>
                <input class="form-control" type="text" value="Ketik disini...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jurusan</label>
                <input class="form-control" type="text" value="Ketik disini...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tahun Lulus</label>
                <input class="form-control" type="text" value="Ketik disini...">
              </div>
            </div>

            <div class="container-fluid py-4">
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-0">
                      <h6>Daftar Riwayat Pendidikan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenjang Pendidikan</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Institusi</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Lulus</th>
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
                                    <h6 class="mb-0 text-sm">Sarjana</h6>
                                    <p class="text-xs text-secondary mb-0">Teknik Mesin</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Tanjungpura</p>
                                <p class="text-xs text-secondary mb-0">Kalimantan Barat</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">2014</span>
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
                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Sarjana</h6>
                                    <p class="text-xs text-secondary mb-0">Sistem Informasi</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Airlangga</p>
                                <p class="text-xs text-secondary mb-0">Jawa Timur</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary">2008</span>
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
                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Magister</h6>
                                    <p class="text-xs text-secondary mb-0">Ilmu Hukum</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Brawijaya</p>
                                <p class="text-xs text-secondary mb-0">Jawa Timur</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">2017</span>
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
                                    <h6 class="mb-0 text-sm">Doktor</h6>
                                    <p class="text-xs text-secondary mb-0">Teknik Kimia</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Indonesia</p>
                                <p class="text-xs text-secondary mb-0">Jawa Barat</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">2015</span>
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
                                    <h6 class="mb-0 text-sm">Magister</h6>
                                    <p class="text-xs text-secondary mb-0">Akuntansi</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Tanjungpura</p>
                                <p class="text-xs text-secondary mb-0">Kalimantan Barat</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary">2010</span>
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
                                    <h6 class="mb-0 text-sm">Doktor</h6>
                                    <p class="text-xs text-secondary mb-0">Manajemen Pendidikan</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Universitas Negeri Medan</p>
                                <p class="text-xs text-secondary mb-0">Sumatera Utara</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary">2007</span>
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

            </div>
            </main>
            <div class="fixed-plugin">
              <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="fa fa-cog py-2"> </i>
              </a>
              <div class="card shadow-lg">
                <div class="card-header pb-0 pt-3 ">
                  <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                  </div>
                  <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0 overflow-auto">
                  <!-- Sidebar Backgrounds -->
                  <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                  </div>
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                      <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                      <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                      <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                      <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                      <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                      <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                  </a>
                  <!-- Sidenav Type -->
                  <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                  </div>
                  <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
                  </div>
                  <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                  <!-- Navbar Fixed -->
                  <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                      <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                  </div>
                  <hr class="horizontal dark my-sm-4">
                  <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                      <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                  </div>
                  <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
                  <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
                  <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                      <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                      <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endsection