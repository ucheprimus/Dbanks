@extends('layouts.admin')

@section('content')
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
                        Projects Dashboard
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
                            Dashboards </li>
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
                                                <img src="/admin/assets/media/avatars/300-6.jpg" alt="" />
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
                                                <img src="/admin/assets/media/avatars/300-2.jpg" alt="" />
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
                                                <img src="/admin/assets/media/avatars/300-9.jpg" alt="" />
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
                                                <img src="/admin/assets/media/avatars/300-14.jpg" alt="" />
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
                                                <img src="/admin/assets/media/avatars/300-11.jpg" alt="" />
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
                                                    <img class="w-20px h-20px" src="/admin/assets/media/svg/brand-logos/volicity-9.svg" alt="" />
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
                                                    <img class="w-20px h-20px" src="/admin/assets/media/svg/brand-logos/tvit.svg" alt="" />
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
                                                    <img class="w-20px h-20px" src="/admin/assets/media/svg/misc/infography.svg" alt="" />
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
                                                    <img class="w-20px h-20px" src="/admin/assets/media/svg/brand-logos/leaf.svg" alt="" />
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
                                                    <img class="w-20px h-20px" src="/admin/assets/media/svg/brand-logos/tower.svg" alt="" />
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
                                <!--end::Recently viewed-->
                                <!--begin::Recently viewed-->
                                <div class="mb-5" data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                        <!--begin::Label-->
                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-325px">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                <span class="fs-7 text-muted fw-semibold">#45789</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                <span class="fs-7 text-muted fw-semibold">#84050</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                <span class="fs-7 text-muted fw-semibold">#67945</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                <span class="fs-7 text-muted fw-semibold">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                    <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#24005</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <!--begin::Icon-->
                                    <div class="pt-10 pb-10">
                                        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Message-->
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Empty-->
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
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">

                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #080655">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                    <!--end::Amount-->

                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-semibold fs-6">Active Projects</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
                                        <span>43 Pending</span>
                                        <span>72%</span>
                                    </div>

                                    <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                                        <div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->

                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                                    <!--end::Amount-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <!--begin::Title-->
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                <!--end::Title-->

                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                        <img alt="Pic" src="/admin/assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="/admin/assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                        <img alt="Pic" src="/admin/assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                    </a>
                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">

                        <!--begin::Card widget 17-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                        <!--end::Amount-->

                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                            2.2%
                                        </span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div
                                        id="kt_card_widget_17_chart"
                                        style="min-width: 70px; min-height: 70px"
                                        data-kt-size="70"
                                        data-kt-line="11">
                                    </div>
                                </div>
                                <!--end::Chart-->

                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class=" fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->

                        <!--begin::List widget 25-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-800">Highlights</h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar d-none">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fw-bold">
                                            Loading date range...
                                        </div>
                                        <!--end::Display range-->

                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
                                    <!--end::Section-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">7.8</span>
                                        <!--end::Number-->

                                        <span class="text-gray-500 fw-bold fs-6">/10</span>
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
                                    <!--end::Section-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">730</span>
                                        <!--end::Number-->


                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings</div>
                                    <!--end::Section-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">$2,309</span>
                                        <!--end::Number-->


                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->



                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->


                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-10 mb-xl-0">

                        <!--begin::Timeline widget 3-->
                        <div class="card h-md-100">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">What’s up Today</span>

                                    <span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span>
                                </h3>

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-7 px-0">
                                <!--begin::Nav-->
                                <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                                            <span class="fs-7 fw-semibold">Fr</span>
                                            <span class="fs-6 fw-bold">20</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                            <span class="fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 fw-bold">21</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                                            <span class="fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 fw-bold">22</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                                            <span class="fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 fw-bold">23</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                                            <span class="fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 fw-bold">24</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                                            <span class="fs-7 fw-semibold">We</span>
                                            <span class="fs-6 fw-bold">25</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                                            <span class="fs-7 fw-semibold">Th</span>
                                            <span class="fs-6 fw-bold">26</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                                            <span class="fs-7 fw-semibold">Fri</span>
                                            <span class="fs-6 fw-bold">27</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                                            <span class="fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 fw-bold">28</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                                            <span class="fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 fw-bold">29</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                                            <span class="fs-7 fw-semibold">Mo</span>
                                            <span class="fs-6 fw-bold">30</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->

                                </ul>
                                <!--end::Nav-->

                                <!--begin::Tab Content (ishlamayabdi)-->
                                <div class="tab-content mb-2 px-9">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_1">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_2">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_3">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_5">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_6">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_7">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_8">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_9">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_10">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_timeline_widget_3_tab_content_11">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    16:30 - 17:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        PM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Dashboard UI/UX Design Review </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    10:20 - 11:00
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    Marketing Campaign Discussion </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="text-gray-800 fw-semibold fs-2">
                                                    12:00 - 13:40
                                                    <span class="text-gray-500 fw-semibold fs-7">
                                                        AM </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Description-->
                                                <div class="text-gray-700 fw-semibold fs-6">
                                                    9 Degree Project Estimation Meeting </div>
                                                <!--end::Description-->

                                                <!--begin::Link-->
                                                <div class="text-gray-500 fw-semibold fs-7">
                                                    Lead by
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->

                                </div>
                                <!--end::Tab Content-->

                                <!--begin::Action-->
                                <div class="float-end d-none">
                                    <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>

                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Timeline widget 3-->




                        <!--begin::Timeline widget 3-->
                        <div class="card card-flush d-none h-md-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">What's on the road?</h3>

                                    <div class="fs-6 text-gray-500">Total 482 participants</div>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Select-->
                                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                        <option value="1" selected>Options</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body p-0">
                                <!--begin::Dates-->
                                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_0">

                                            <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                            <span class="fs-6 text-gray-800 fw-bold">20</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_1">

                                            <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 text-gray-800 fw-bold">21</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_2">

                                            <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 text-gray-800 fw-bold">22</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active"
                                            data-bs-toggle="tab" href="#kt_schedule_day_3">

                                            <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                            <span class="fs-6 text-gray-800 fw-bold">23</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_4">

                                            <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 text-gray-800 fw-bold">24</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_5">

                                            <span class="text-gray-500 fs-7 fw-semibold">We</span>
                                            <span class="fs-6 text-gray-800 fw-bold">25</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_6">

                                            <span class="text-gray-500 fs-7 fw-semibold">Th</span>
                                            <span class="fs-6 text-gray-800 fw-bold">26</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_7">

                                            <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                            <span class="fs-6 text-gray-800 fw-bold">27</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_8">

                                            <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 text-gray-800 fw-bold">28</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_9">

                                            <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 text-gray-800 fw-bold">29</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_10">

                                            <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                            <span class="fs-6 text-gray-800 fw-bold">30</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a
                                            class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                            data-bs-toggle="tab" href="#kt_schedule_day_11">

                                            <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 text-gray-800 fw-bold">31</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                </ul>
                                <!--end::Dates-->

                                <!--begin::Tab Content-->
                                <div class="tab-content px-9">
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_0" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Mark Randall</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    11:00 - 11:45

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Sales Pitch Proposal </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Weekly Team Stand-Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Mark Randall</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Committee Review Approvals </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_2" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Sales Pitch Proposal </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Yannis Gloverson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    14:30 - 15:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Mark Randall</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_3" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">David Stevenson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Weekly Team Stand-Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Yannis Gloverson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    16:30 - 17:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Development Team Capacity Review </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">David Stevenson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_4" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    16:30 - 17:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    9 Degree Project Estimation Meeting </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    16:30 - 17:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Development Team Capacity Review </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Karina Clarke</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Marketing Campaign Discussion </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_5" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    9 Degree Project Estimation Meeting </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Committee Review Approvals </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Michael Walters</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    9 Degree Project Estimation Meeting </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Karina Clarke</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_6" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Development Team Capacity Review </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Michael Walters</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Committee Review Approvals </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_7" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Dashboard UI/UX Design Review </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    14:30 - 15:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Weekly Team Stand-Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Michael Walters</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_8" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Yannis Gloverson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    11:00 - 11:45

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Yannis Gloverson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_9" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    16:30 - 17:30

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Sales Pitch Proposal </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Weekly Team Stand-Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">David Stevenson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Creative Content Initiative </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_10" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    11:00 - 11:45

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    9 Degree Project Estimation Meeting </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    10:00 - 11:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Sales Pitch Proposal </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    12:00 - 13:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Weekly Team Stand-Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_11" class="tab-pane fade show ">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    13:00 - 14:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        pm </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Marketing Campaign Discussion </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Michael Walters</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Marketing Campaign Discussion </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">
                                                    9:00 - 10:00

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                                        am </span>
                                                </div>
                                                <!--end::Time-->

                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    Lunch & Learn Catch Up </a>
                                                <!--end::Title-->

                                                <!--begin::User-->
                                                <div class="text-gray-500">
                                                    Lead by <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Timeline widget-3-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->




            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->



</div>
<!--end:::Main-->

@endsection