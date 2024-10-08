
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Counters</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counters</li>
                                </ol>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row row-cards">
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting From 0
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example">
                                                <span id="timer-countup" class="h3 text-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting From 60 to 20
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example">
                                                <span id="timer-countinbetween" class="h3 text-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time 1 minute counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example">
                                                <span id="timer-countercallback" class="h3 text-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting days Limit
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example">
                                                <span id="timer-outputpattern" class="h3 text-info"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5>Employess</h5>
                                            <h2 class="counter text-success">2569</h2>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5>Profit</h5>
                                            <h2 class="counter text-success"> 2,56989.32</h2>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5>Errors</h5>
                                            <h2 class="counter text-success">0.8998</h2>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Day Counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="count-down row justify-content-center">
                                                <div class="col-6 col-sm-3 col-md-12 col-xl-2 countdown">
                                                    <span class="days text-primary ">35</span>
                                                    <span class="text-dark">Days</span>
                                                </div>
                                                <div class="col-6 col-sm-3 col-md-12 col-xl-2 countdown">
                                                    <span class="hours text-primary">17</span>
                                                    <span class="text-dark">Hours</span>
                                                </div>

                                                <div class="col-6 col-sm-3 col-md-12 col-xl-2 countdown">
                                                    <span class="minutes text-primary">50</span>
                                                    <span class="text-dark">Minutes</span>
                                                </div>
                                                <div class="col-6 col-sm-3 col-md-12 col-xl-2 countdown">
                                                    <span class="seconds text-primary">39</span>
                                                    <span class="text-dark">Seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED CLOSED -->

@endsection

@section('scripts')

		<!-- TIME COUNTER JS-->
		<script src="{{asset('build/assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{asset('build/assets/plugins/counters/counter.js')}}"></script>

		<!-- COUNT-DOWN JS-->
		<script src="{{asset('build/assets/plugins/counters/count-down.js')}}"></script>
		<script src="{{asset('build/assets/plugins/countdown/moment.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/countdown/moment-timezone.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/countdown/moment-timezone-with-data.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/countdown/countdowntime.js')}}"></script>

		<!-- COUNTERS JS-->
		<script src="{{asset('build/assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/counters/counters-1.js')}}"></script>

@endsection
