@extends('layouts.admin')
@section('content')
@include('includes.admin.savings')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-4 py-lg-8 "
            data-kt-sticky="true" data-kt-sticky-name="app-toolbar-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack flex-wrap ">



                <!--begin::Page title-->
                <div class="page-title d-flex py-2 py-lg-0 flex-column justify-content-center me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Loans
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/keen/demo5/index.html" class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            loans </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Search-->
                    <div
                        id="kt_header_search"
                        class="header-search d-flex align-items-stretch"

                        data-kt-search-keypress="true"
                        data-kt-search-min-length="2"
                        data-kt-search-enter="enter"
                        data-kt-search-layout="menu"

                        data-kt-menu-trigger="auto"
                        data-kt-menu-overflow="false"
                        data-kt-menu-permanent="true"
                        data-kt-menu-placement="bottom-end">

                        <!--begin::Search toggle-->
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-custom btn-sm btn-icon btn-color-primary bg-body">
                                <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                        </div>
                        <!--end::Search toggle-->

                        <!--begin::Menu-->
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text" class="search-input  form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i> </span>
                                    <!--end::Reset-->

                                    <!--begin::Toolbar-->
                                    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                        <!--begin::Preferences toggle-->
                                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
                                            <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                        <!--end::Preferences toggle-->

                                        <!--begin::Advanced search toggle-->
                                        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
                                            <i class="ki-duotone ki-down fs-2"></i>
                                        </div>
                                        <!--end::Advanced search toggle-->
                                    </div>
                                    <!--end::Toolbar-->
                                </form>
                                <!--end::Form-->

                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                                            Users </h3>
                                        <!--end::Category title-->




                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="/keen/demo5/assets/media/avatars/300-6.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="/keen/demo5/assets/media/avatars/300-2.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="/keen/demo5/assets/media/avatars/300-9.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="/keen/demo5/assets/media/avatars/300-14.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="/keen/demo5/assets/media/avatars/300-11.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                            Customers </h3>
                                        <!--end::Category title-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <img class="w-20px h-20px" src="/keen/demo5/assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <img class="w-20px h-20px" src="/keen/demo5/assets/media/svg/brand-logos/tvit.svg" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <img class="w-20px h-20px" src="/keen/demo5/assets/media/svg/misc/infography.svg" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                <span class="fs-7 fw-semibold text-muted">Administration</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <img class="w-20px h-20px" src="/keen/demo5/assets/media/svg/brand-logos/leaf.svg" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <img class="w-20px h-20px" src="/keen/demo5/assets/media/svg/brand-logos/tower.svg" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->

                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                            Projects </h3>
                                        <!--end::Category title-->


                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-notepad fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-semibold text-muted">#45670</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-frame fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-semibold text-muted">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                <span class="fs-7 fw-semibold text-muted">#21090</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">#34560</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->


                                    </div>
                                    <!--end::Items-->
                                </div>

                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Preferences-->
                            <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                <!--end::Heading-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                All
                                            </span>
                                        </label>
                                        <!--end::Option-->

                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="users" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                Users
                                            </span>
                                        </label>
                                        <!--end::Option-->

                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="orders" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                Orders
                                            </span>
                                        </label>
                                        <!--end::Option-->

                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="projects" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                Projects
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                Has attachment
                                            </span>
                                        </label>
                                        <!--end::Option-->

                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="any" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                Any
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                        <option value="next">Within the next</option>
                                        <option value="last">Within the last</option>
                                        <option value="between">Between</option>
                                        <option value="on">On</option>
                                    </select>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                            <option value="days">Days</option>
                                            <option value="weeks">Weeks</option>
                                            <option value="months">Months</option>
                                            <option value="years">Years</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                    <a href="/keen/demo5/utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                            <!--begin::Preferences-->
                            <form data-kt-search-element="preferences" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                <!--end::Heading-->

                                <!--begin::Input group-->
                                <div class="pb-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                            Projects
                                        </span>

                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                            Targets
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                            Affiliate Programs
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                            Referrals
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                            Users
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end pt-7">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                    <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search-->
                    <a href="#" class="btn btn-custom btn-icon btn-sm bg-body" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </a>

                    <a href="/keen/demo5/apps/user-management/users/list.html" class="btn btn-custom btn-flex btn-sm bg-body fw-bold">
                        <span class="text-gray-600">New Member</span>
                    </a>

                    <a href="#" class="btn btn-flex btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                        New Campaign
                    </a>


                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->

                    <!--begin::Primary button-->
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">



                <!--begin::Earnings-->
                <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                    <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Earnings</h3>
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pb-0">
                        <span class="fs-5 fw-semibold text-gray-600 pb-5 d-block">Last 30 day earnings calculated. Apart from arranging the order of topics.</span>

                        <!--begin::Left Section-->
                        <div class="d-flex flex-wrap justify-content-between pb-6">
                            <!--begin::Row-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                    <span class="fs-2x fw-bold text-gray-800 lh-1">
                                        <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
                                    </span>
                                    <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Net Earnings</span>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                    <span class="fs-2x fw-bold text-gray-800 lh-1">
                                        <span class="" data-kt-countup="true" data-kt-countup-value="80">0</span>%
                                    </span>
                                    <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Change</span>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                    <span class="fs-2x fw-bold text-gray-800 lh-1">
                                        <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
                                    </span>
                                    <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Fees</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Left Section-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Earnings-->
            </div>
            <!--end::Col-->

            <!--begin::Statements-->
            <div class="card" style="margin-left:3%; margin-right: 3%">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3 class="m-0 text-gray-800">Statement</h3>
                    </div>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">
                                    This Year
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">
                                    2023 </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2018_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">
                                    2022 </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2017_tab" class="nav-link text-active-gray-800 ms-8" data-bs-toggle="tab" role="tab" href="#kt_referrals_4">
                                    2021 </a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Tab Content-->
                <div id="kt_referred_users_tab_content" class="tab-content">
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                    <tr>
                                        <th class="min-w-175px ps-9">Date</th>
                                        <th class="min-w-150px px-0">Order ID</th>
                                        <th class="min-w-350px">Details</th>
                                        <th class="min-w-125px">Amount</th>
                                        <th class="min-w-125px text-center">Invoice</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->

                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">102445788</td>
                                        <td>Darknight transparency 36 Icons Pack</td>
                                        <td class="text-success">$38.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 24, 2020</td>
                                        <td class="ps-0">423445721</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-2.60</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 08, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Cartoon Mobile Emoji Phone Pack</td>
                                        <td class="text-success">$76.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Sep 15, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                        <td class="text-success">$5.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">May 30, 2020</td>
                                        <td class="ps-0">523445943</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-1.30</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Apr 22, 2020</td>
                                        <td class="ps-0">231445943</td>
                                        <td>Parcel Shipping / Delivery Service App</td>
                                        <td class="text-success">$204.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Feb 09, 2020</td>
                                        <td class="ps-0">426445943</td>
                                        <td>Visual Design Illustration</td>
                                        <td class="text-success">$31.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">984445943</td>
                                        <td>Abstract Vusial Pack</td>
                                        <td class="text-success">$52.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Jan 04, 2020</td>
                                        <td class="ps-0">324442313</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-0.80</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>

                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_2" class="card-body p-0 tab-pane fade " role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                    <tr>
                                        <th class="min-w-175px ps-9">Date</th>
                                        <th class="min-w-150px px-0">Order ID</th>
                                        <th class="min-w-350px">Details</th>
                                        <th class="min-w-125px">Amount</th>
                                        <th class="min-w-125px text-center">Invoice</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->

                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">May 30, 2020</td>
                                        <td class="ps-0">523445943</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-1.30</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Apr 22, 2020</td>
                                        <td class="ps-0">231445943</td>
                                        <td>Parcel Shipping / Delivery Service App</td>
                                        <td class="text-success">$204.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Feb 09, 2020</td>
                                        <td class="ps-0">426445943</td>
                                        <td>Visual Design Illustration</td>
                                        <td class="text-success">$31.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">984445943</td>
                                        <td>Abstract Vusial Pack</td>
                                        <td class="text-success">$52.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Jan 04, 2020</td>
                                        <td class="ps-0">324442313</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-0.80</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">102445788</td>
                                        <td>Darknight transparency 36 Icons Pack</td>
                                        <td class="text-success">$38.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 24, 2020</td>
                                        <td class="ps-0">423445721</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-2.60</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 08, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Cartoon Mobile Emoji Phone Pack</td>
                                        <td class="text-success">$76.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Sep 15, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                        <td class="text-success">$5.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>

                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_3" class="card-body p-0 tab-pane fade " role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                    <tr>
                                        <th class="min-w-175px ps-9">Date</th>
                                        <th class="min-w-150px px-0">Order ID</th>
                                        <th class="min-w-350px">Details</th>
                                        <th class="min-w-125px">Amount</th>
                                        <th class="min-w-125px text-center">Invoice</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->

                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">Feb 09, 2020</td>
                                        <td class="ps-0">426445943</td>
                                        <td>Visual Design Illustration</td>
                                        <td class="text-success">$31.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">984445943</td>
                                        <td>Abstract Vusial Pack</td>
                                        <td class="text-success">$52.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Jan 04, 2020</td>
                                        <td class="ps-0">324442313</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-0.80</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Sep 15, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                        <td class="text-success">$5.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">102445788</td>
                                        <td>Darknight transparency 36 Icons Pack</td>
                                        <td class="text-success">$38.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 24, 2020</td>
                                        <td class="ps-0">423445721</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-2.60</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 08, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Cartoon Mobile Emoji Phone Pack</td>
                                        <td class="text-success">$76.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">May 30, 2020</td>
                                        <td class="ps-0">523445943</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-1.30</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Apr 22, 2020</td>
                                        <td class="ps-0">231445943</td>
                                        <td>Parcel Shipping / Delivery Service App</td>
                                        <td class="text-success">$204.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>

                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_4" class="card-body p-0 tab-pane fade " role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                    <tr>
                                        <th class="min-w-175px ps-9">Date</th>
                                        <th class="min-w-150px px-0">Order ID</th>
                                        <th class="min-w-350px">Details</th>
                                        <th class="min-w-125px">Amount</th>
                                        <th class="min-w-125px text-center">Invoice</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->

                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">102445788</td>
                                        <td>Darknight transparency 36 Icons Pack</td>
                                        <td class="text-success">$38.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 24, 2020</td>
                                        <td class="ps-0">423445721</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-2.60</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">102445788</td>
                                        <td>Darknight transparency 36 Icons Pack</td>
                                        <td class="text-success">$38.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 24, 2020</td>
                                        <td class="ps-0">423445721</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-2.60</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Feb 09, 2020</td>
                                        <td class="ps-0">426445943</td>
                                        <td>Visual Design Illustration</td>
                                        <td class="text-success">$31.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Nov 01, 2020</td>
                                        <td class="ps-0">984445943</td>
                                        <td>Abstract Vusial Pack</td>
                                        <td class="text-success">$52.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Jan 04, 2020</td>
                                        <td class="ps-0">324442313</td>
                                        <td>Seller Fee</td>
                                        <td class="text-danger">$-0.80</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 08, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Cartoon Mobile Emoji Phone Pack</td>
                                        <td class="text-success">$76.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">Oct 08, 2020</td>
                                        <td class="ps-0">312445984</td>
                                        <td>Cartoon Mobile Emoji Phone Pack</td>
                                        <td class="text-success">$76.00</td>
                                        <td class="text-center"><button class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                                    </tr>

                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->

                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Statements-->
        </div>
        <!--end::Row-->

    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection