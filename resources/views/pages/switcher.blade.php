
@extends('layouts.switcher-master')

@section('styles')



@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Switcher</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Switcher</li>
                                </ol>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <div class="container">
                                <div class="row row-sm">
                                    <div class="col-xl-6 m-auto">
                                        <div class="card sidebar-right1">
                                            <div class="switcher-wrapper">
                                                <div class="card-body">
                                                    <div class="form_holder sidebar-right1">
                                                        <div class="row">
                                                            <div class="predefined_styles">
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Navigation Style</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Vertical Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                                        id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Horizontal Click Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                                        id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Horizontal Hover Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                                        id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft horizontal-switcher">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4">Horizontal Layout Style</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Default Logo</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch9"
                                                                                        id="default-logo" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="default-logo" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Center Logo</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch9"
                                                                                        id="center-logo" class="onoffswitch2-checkbox">
                                                                                    <label for="center-logo" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">LTR and RTL VERSIONS</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">LTR Version</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                                                        id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">RTL Version</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                                                        id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Theme Style</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Light Theme</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                                                        id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Dark Theme</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                                                        id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Theme Color</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Theme Primary</span>
                                                                                <div class="">
                                                                                    <input class="input-color-picker color-primary-light"
                                                                                        value="#5e2dd8" id="colorID" type="color"
                                                                                        data-id="primary" data-id1="primary-hover" data-id2="primary-border"
                                                                                        data-id7="transparentcolor" name="lightPrimary">
                                                                                </div>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Theme Background</span>
                                                                                <div class="">
                                                                                    <input class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
                                                                                        value="#202383" id="transparentBgColorID"
                                                                                        type="color" data-id5="dark-background" data-id6="dark-theme" name="transparentBackground">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Menu Styles</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle lightMenu d-flex">
                                                                                <span class="me-auto">Light Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                                        id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle colorMenu d-flex mt-2">
                                                                                <span class="me-auto">Color Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                                        id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle darkMenu d-flex mt-2">
                                                                                <span class="me-auto">Dark Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                                        id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Header Styles</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle lightHeader d-flex">
                                                                                <span class="me-auto">Light Header</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                                        id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle  colorHeader d-flex mt-2">
                                                                                <span class="me-auto">Color Header</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                                        id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle darkHeader d-flex mt-2">
                                                                                <span class="me-auto">Dark Header</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                                        id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Layout Width Styles</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Full Width</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                                        id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Boxed</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                                        id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Layout Positions</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Fixed</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                                        id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                                                    <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Scrollable</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                                        id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft leftmenu-styles">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Sidemenu layout Styles</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section">
                                                                            <div class="switch-toggle d-flex">
                                                                                <span class="me-auto">Default Menu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                                                    <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Icon with Text</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Icon Overlay</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Closed Sidemenu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch16" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Hover Submenu</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Hover Submenu Style 1</span>
                                                                                <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch18" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Double Menu</span>
                                                                                <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                            <div class="switch-toggle d-flex mt-2">
                                                                                <span class="me-auto">Double Menu with Tabs</span>
                                                                                <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                                        id="myonoffswitch20" class="onoffswitch2-checkbox">
                                                                                    <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swichermainleft">
                                                                    <h5 class="text-start fw-bold ms-2 mt-4 op-8">Reset All Styles</h5>
                                                                    <div class="skin-body">
                                                                        <div class="switch_section mt-5 mb-2">
                                                                            <button class="btn btn-danger btn-block" id="resetAll" type="button">Reset All
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

@endsection

@section('scripts')



@endsection
