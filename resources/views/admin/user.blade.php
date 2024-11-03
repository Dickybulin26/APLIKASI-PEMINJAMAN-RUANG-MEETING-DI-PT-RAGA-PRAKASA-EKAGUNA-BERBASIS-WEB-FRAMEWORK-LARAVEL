@extends('layouts.main')

<div id="main" class="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Users</h3>
    </div>
    <section class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12">

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>User List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th class="text-center">Roles</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/1.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/2.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/3.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/4.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/5.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg">
                                                            <img src="{{ asset('assets/compiled/jpg/6.jpg') }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-0">
                                                    <p class="font-bold ms-3 mb-0">Udin Dalam</p>
                                                </td>
                                                <td>
                                                    <p class="font-bold ms-3 mb-0 text-center">Project Manager</p>
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
