
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Tags</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
                                </ol>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Default tag</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag">First tag</span>
                                                        <span class="tag">Second tag</span>
                                                        <span class="tag">Third tag</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Link tag</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);" class="tag">First tag</a>
                                                        <a href="javascript:void(0);" class="tag">Second tag</a>
                                                        <a href="javascript:void(0);" class="tag">Third tag</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 CLOSED -->

                            <!-- ROW-2 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Rounded tag</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag tag-rounded">First tag</span>
                                                        <span class="tag tag-rounded">Second tag</span>
                                                        <span class="tag tag-rounded">Third tag</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Color tag</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag tag-blue">Blue tag</span>
                                                        <span class="tag tag-azure">Azure tag</span>
                                                        <span class="tag tag-indigo">Indigo tag</span>
                                                        <span class="tag tag-purple">Purple tag</span>
                                                        <span class="tag tag-pink">Pink tag</span>
                                                        <span class="tag tag-red">Red tag</span>
                                                        <span class="tag tag-orange">Orange tag</span>
                                                        <span class="tag tag-yellow">Yellow tag</span>
                                                        <span class="tag tag-lime">Lime tag</span>
                                                        <span class="tag tag-green">Green tag</span>
                                                        <span class="tag tag-teal">Teal tag</span>
                                                        <span class="tag tag-cyan">Cyan tag</span>
                                                        <span class="tag tag-gray">Gray tag</span>
                                                        <span class="tag tag-gray-dark">Dark gray tag</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Avatar tag</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                            Victoria
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                            Nathan
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            Alice
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/18.jpg')}}"></span>
                                                            Rose
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/16.jpg')}}"></span>
                                                            Peter
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                            Wayne
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}"></span>
                                                            Michelle
                                                        </span>
                                                        <span class="tag">
                                                            <span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/17.jpg')}}"></span>
                                                            Debra
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List of tags</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag">First tag</span>
                                                        <span class="tag">Second tag</span>
                                                        <span class="tag">Third tag</span>
                                                    </div>
                                                </div>
                                                <p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
                                                <div class="example">
                                                    <div class="tags">
                                                        <span class="tag">One</span>
                                                        <span class="tag">Two</span>
                                                        <span class="tag">Three</span>
                                                        <span class="tag">Four</span>
                                                        <span class="tag">Five</span>
                                                        <span class="tag">Six</span>
                                                        <span class="tag">Seven</span>
                                                        <span class="tag">Eight</span>
                                                        <span class="tag">Nine</span>
                                                        <span class="tag">Ten</span>
                                                        <span class="tag">Eleven</span>
                                                        <span class="tag">Twelve</span>
                                                        <span class="tag">Thirteen</span>
                                                        <span class="tag">Fourteen</span>
                                                        <span class="tag">Fifteen</span>
                                                        <span class="tag">Sixteen</span>
                                                        <span class="tag">Seventeen</span>
                                                        <span class="tag">Eighteen</span>
                                                        <span class="tag">Nineteen</span>
                                                        <span class="tag">Twenty</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Tag remove</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example tag-remove">
                                                    <div class="tags">
                                                        <span class="tag">
                                                            One
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                        <span class="tag">
                                                            Two
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                        <span class="tag">
                                                            Three
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                        <span class="tag">
                                                            Four
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Tag addons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <div class="tags">
                                                        <div class="tag">
                                                            npm
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </div>
                                                        <div class="tag tag-danger">
                                                            npm
                                                            <span class="tag-addon"><i class="fe fe-activity"></i></span>
                                                        </div>
                                                        <div class="tag">
                                                            bundle
                                                            <span class="tag-addon tag-success">passing</span>
                                                        </div>
                                                        <span class="tag tag-dark">
                                                            CSS gzip size
                                                            <span class="tag-addon tag-warning">20.9 kB</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-2 CLOSED -->

@endsection

@section('scripts')



@endsection
