@extends('layouts.app')

@section('title', 'Home')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item active">Home</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">

        @can('show_weekly_sales_purchases|show_month_overview')
        <div class="row mb-4">


            @can('show_month_overview')
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header">
                        Overview of {{ now()->format('F, Y') }}
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div class="chart-container" style="position: relative; height:auto; width:280px">
                            <canvas id="currentMonthChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            @endcan

                        @can('show_weekly_sales_purchases')
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header">
                        Sales & Purchases of Last 7 Days
                    </div>
                    <div class="card-body">
                        <canvas id="salesPurchasesChart"></canvas>
                    </div>
                </div>
            </div>
            @endcan
        </div>
        @endcan
    </div>
@endsection

@section('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"
            integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@push('page_scripts')
    @vite('resources/js/chart-config.js')
@endpush
