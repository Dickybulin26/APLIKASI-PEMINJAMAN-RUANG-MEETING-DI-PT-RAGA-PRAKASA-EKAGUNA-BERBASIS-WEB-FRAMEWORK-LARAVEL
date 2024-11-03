@extends('layouts.main')

<div id="main" class="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Bookings</h3>
    </div>
    <section class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12">

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
                                                <th>Purpose</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Adam Daniel</p>
                                                    </div>
                                                </td>
                                                <td class="px-0 col-md-2">7.00 AM - 7.30 AM</td>
                                                <td class="col-auto px-0">Ruang 1</td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Meeting di ruang 1 untuk membahas
                                                        managemen keuangan perusahaan</p>
                                                </td>
                                                <td>
                                                    <div class="action-button d-flex gap-4">
                                                        <a href="#" class="btn btn-success">Accept</a>
                                                        <a href="#" class="btn btn-danger">Decline</a>
                                                    </div>
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
        </div>
    </section>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2024 &copy; Mazer</p>
            </div>
        </div>
    </footer>
</div>
