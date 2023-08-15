@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-body-tertiary">
                    <div class="input-box">
                        <input type="text" id="barcode" class="form-control" autofocus>
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="col-lg-12">
            <div class="box shadow-lg rounded bg-white mb-3">
                <div class="box-title border-bottom p-3">
                    <h6 class="m-0">Control de Asistencia</h6>
                </div>
                <div class="box-body p-0">
                    <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate" id="empleado_container"></div>
                            <div class="small" id="message_container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/asistencias/barcode.js') }}" defer></script>
@endsection
