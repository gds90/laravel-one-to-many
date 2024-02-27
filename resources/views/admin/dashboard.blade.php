@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4 text-uppercase ">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-uppercase bg-danger-subtle ">Menù</div>

                    <div class="card-body">
                        <a href="{{ route('admin.projects.index') }}" class="dashboard-link">Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
