@extends('layouts.main')


<style>
    #main table .badge {
        font-size: 16px !important;
        /* padding: 5px 10px; */
        /* border-radius: 10px; */
        /* background-color: #E9ECEF; */
    }
</style>

<div id="main" class="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header card-number">
                                <h6 class="font-bold">Rooms</h6>
                            </div>
                            <div class="card-body px-4 py-4-5">
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0 text-count">532</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header card-number">
                                <h6 class="font-bold">Users</h6>
                            </div>
                            <div class="card-body px-4 py-4-5">
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0 text-count">180.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header card-number">
                                <h6 class="font-bold">Total Bookings</h6>
                            </div>
                            <div class="card-body px-4 py-4-5">
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0 text-count">304</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Admin</h5>
                                        <h6 class="text-muted mb-0">superuser</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="card">
                            <div class="carfd-header">
                                <h4 class="title-card-barchart">Statistik Booking Setiap Bulan</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistik Ruangan</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Booking List Hari Ini</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Times</th>
                                                <th>Room</th>
                                                <th class="text-center">Purpose</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-md-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Riki Halim</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-md-2">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td class="col-md-1"><span class="badge bg-warning">Ongoing</span></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Riki Halim</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-md-2">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td class="col-md-1"><span class="badge bg-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Riki Halim</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-md-2">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td class="col-md-1"><span class="badge bg-danger">Decline</span></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Riki Halim</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-md-2">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td class="col-md-1"><span class="badge bg-warning">Ongoing</span></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Riki Halim</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-md-2">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td class="col-md-1"><span class="badge bg-success">Done</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2024 &copy; Mazer</p>
            </div>
        </div>
    </footer>
</div>
