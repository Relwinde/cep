
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<h1 class="page-title">Affectation des élèves </h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
								</ol> --}}
					     	</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Responsive DataTable</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                @livewire('elements.affectation-table')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
@endsection

@section('scripts')

		<!-- SPARKLINE JS-->
		<script src="{{asset('build/assets/plugins/jquery/jquery.sparkline.min.js')}}"></script>

		<!-- CHARTJS CHART JS-->
		<script src="{{asset('build/assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('build/assets/plugins/chart/utils.js')}}"></script>

		<!-- ECHART JS-->
		<script src="{{asset('build/assets/plugins/echarts/echarts.js')}}"></script>


		<!-- SELECT2 JS -->
		<script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

		<!-- DATA TABLE JS-->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

		<!-- APEXCHART JS -->
		@vite('resources/assets/js/apexcharts.js')

		<!-- INDEX JS -->
		@vite('resources/assets/js/index1.js')

@endsection
