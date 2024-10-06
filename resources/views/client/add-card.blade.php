@extends('layouts.admin')
@section('content')

@include('includes.admin.sidebar')


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
                        Card
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/index" class="text-muted text-hover-primary">
                                Dashboard </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Card
                        </li>
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
                                <i class="fas fa-search fs-2"></i><span class="path1"></span><span class="path2"></span></i>
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



                <!--begin::Earnings-->
                <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                    <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Current Account</h3>
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

                            <a href="#" class="btn btn-primary  px-6 flex-shrink-0 align-self-center">Deposit</a>
                            <a href="#" class="btn btn-primary  px-6 flex-shrink-0 align-self-center">Withdraw </a>
                        </div>
                        <!--end::Left Section-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Earnings-->


                <div class="row gy-5 gx-xl-12">
                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Row-->
                        <div class="row gx-5 gx-xl-10">
                            <!--begin::Col-->
                            <div class="col-sm-6 mb-5 mb-xl-10">



                                <!--begin::List widget 1-->
                                <div class="card card-flush custom-card" id="highlights-card" style="height: 400px;">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Highlights</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest social statistics</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::3D Card-->
                                        <div class="atm-card-container">
                                            <div class="atm-card">
                                                <!-- Front of the card -->
                                                <div class="atm-card-front">
                                                    <h4 class="bank-name">Bank of Tech</h4>
                                                    <div class="chip"></div>
                                                    <div class="card-number">1234 5678 9012 3456</div>
                                                    <div class="card-holder">
                                                        <span>Cardholder Name</span>
                                                        <span class="expiry">10/24</span>
                                                    </div>
                                                </div>
                                                <!-- Back of the card -->
                                                <div class="atm-card-back">
                                                    <div class="magnetic-strip"></div>
                                                    <div class="signature-strip">
                                                        <span>Cardholder Signature</span>
                                                    </div>
                                                    <div class="cvv-box">
                                                        <span>CVV: 123</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::3D Card-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List widget 1-->


                                <style>
                                    /* Card container for the 3D flipping effect */
                                    .atm-card-container {
                                        perspective: 1000px;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        height: 200px;
                                        margin-top: 20px;
                                    }

                                    .atm-card {
                                        width: 320px;
                                        height: 200px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transition: transform 0.6s;
                                    }

                                    .atm-card-container:hover .atm-card {
                                        transform: rotateY(180deg);
                                    }

                                    /* Front of the ATM card */
                                    .atm-card-front,
                                    .atm-card-back {
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        backface-visibility: hidden;
                                        border-radius: 15px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    }

                                    .atm-card-front {
                                        background-color: #2a9d8f;
                                        color: white;
                                        padding: 20px;
                                    }

                                    .bank-name {
                                        font-size: 18px;
                                        margin-bottom: 30px;
                                    }

                                    .chip {
                                        width: 40px;
                                        height: 30px;
                                        background-color: #f4a261;
                                        border-radius: 5px;
                                        margin-bottom: 15px;
                                    }

                                    .card-number {
                                        font-size: 18px;
                                        letter-spacing: 2px;
                                        margin-bottom: 20px;
                                    }

                                    .card-holder {
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                    }

                                    .card-holder span {
                                        font-size: 14px;
                                    }

                                    /* Back of the ATM card */
                                    .atm-card-back {
                                        background-color: #264653;
                                        color: white;
                                        transform: rotateY(180deg);
                                        padding: 20px;
                                    }

                                    .magnetic-strip {
                                        width: 100%;
                                        height: 40px;
                                        background-color: black;
                                        margin-bottom: 15px;
                                    }

                                    .signature-strip {
                                        height: 30px;
                                        background-color: white;
                                        color: black;
                                        padding: 5px;
                                        margin-bottom: 10px;
                                    }

                                    .cvv-box {
                                        text-align: right;
                                        font-size: 12px;
                                    }
                                </style>

                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-sm-6 mb-5 mb-xl-10">

                                <!--begin::List widget 2-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">External Links</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Most used resources</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">

                                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            </button>

                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Create Invoice
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">
                                                        Create Payment

                                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                            <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Generate Bill
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>

                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Plans
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Billing
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Statements
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                    <!--end::Input-->

                                                                    <!--end::Label-->
                                                                    <span class="form-check-label text-muted fs-6">
                                                                        Recuring
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">
                                                        Settings
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->

                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Title-->
                                            <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Google Analytics</a>
                                            <!--end::Title-->

                                            <!--begin::Action-->
                                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i> </button>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Title-->
                                            <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook Ads</a>
                                            <!--end::Title-->

                                            <!--begin::Action-->
                                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i> </button>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Title-->
                                            <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
                                            <!--end::Title-->

                                            <!--begin::Action-->
                                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i> </button>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Item-->


                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List widget 2-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                    </div>
                    <!--end::Col-->

                </div>
            </div>

            <!--end::Col-->
        </div>
        <!--end::Row-->



    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection