@extends('layouts.app')
@section('title')
    {{ 'View license' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-12 col-lg-12 col-md-12 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Username:</span>
                                    <span>violet.dev</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span>vafgot@vultukir.org</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Status:</span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Role:</span>
                                    <span>Author</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Tax id:</span>
                                    <span>Tax-8965</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Contact:</span>
                                    <span>(123) 456-7890</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Languages:</span>
                                    <span>French</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Country:</span>
                                    <span>England</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->
        </div>
    </div>
    <!-- / Content -->
@endsection
