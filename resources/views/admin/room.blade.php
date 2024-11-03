@extends('layouts.main')

<style>
    .room-image img {
        width: 15rem;
        height: auto !important;
        object-fit: cover;
        /* border-radius: 10px; */
    }
</style>

<div id="main" class="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Rooms</h3>
    </div>
    <section class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Room List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Capacity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="room-image">
                                                            {{-- <img src="{{ asset('assets/compiled/jpg/5.jpg') }}"> --}}
                                                            <img src="https://voffice.co.id/storage/img/GALERI/PSB/Meeting-Room-PSB.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Ruang 1</p>
                                                </td>
                                                <td><i class="bi bi-person-fill"></i>100</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="room-image">
                                                            {{-- <img src="{{ asset('assets/compiled/jpg/5.jpg') }}"> --}}
                                                            <img src="https://voffice.co.id/storage/img/GALERI/PSB/Meeting-Room-PSB.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Ruang 1</p>
                                                </td>
                                                <td><i class="bi bi-person-fill"></i>100</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="room-image">
                                                            {{-- <img src="{{ asset('assets/compiled/jpg/5.jpg') }}"> --}}
                                                            <img src="https://voffice.co.id/storage/img/GALERI/PSB/Meeting-Room-PSB.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Ruang 1</p>
                                                </td>
                                                <td><i class="bi bi-person-fill"></i>100</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="room-image">
                                                            {{-- <img src="{{ asset('assets/compiled/jpg/5.jpg') }}"> --}}
                                                            <img src="https://voffice.co.id/storage/img/GALERI/PSB/Meeting-Room-PSB.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Ruang 1</p>
                                                </td>
                                                <td><i class="bi bi-person-fill"></i>100</td>
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
