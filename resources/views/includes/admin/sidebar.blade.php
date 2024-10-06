<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar "
    data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary ">


        <!--begin::Logo-->
        <div class="app-sidebar-logo d-none d-lg-flex flex-center pt-8 pb-5" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            <a href="/keen/demo5/index.html">
                <img alt="Logo" src="/admin/assets/media/logos/default-small-dark.svg" class="h-35px" />
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Logo-->
        <!--begin::Primary menu-->
        <div
            class="app-sidebar-menu flex-grow-1 hover-scroll-overlay-y scroll-ms my-7 my-lg-5"
            id="kt_aside_menu_wrapper"

            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu"
            data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div
                id="kt_aside_menu"
                class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2"><!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="fas fa-chart-area fs-2"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu content-->
                            <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">DASHBOARD</span></div><!--end:Menu content-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/index') ? 'active' : '' }}" href="/index"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/summary') ? 'active' : '' }}" href="/summary"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Account Summary</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link" {{ Request::is('/history') ? 'active' : '' }} href="/history"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Transaction History</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/add-account') ? 'active' : '' }}" href="/add-account"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Account</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/add-card') ? 'active' : '' }}" href="/add-card"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Card</span></a><!--end:Menu link--></div><!--end:Menu item-->

                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2"><!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="fas fa-random fs-2"></i><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu content-->
                            <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">TRANSFER | DEPOSIT </span></div><!--end:Menu content-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--> <a href="/in-transfer"> <span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">IN-transfers (Between accounts)</span></span></a><!--end:Menu link--><!--begin:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--> <a href="/ex-transfer"><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ex-transfer (other banks)</span></span></a> <!--end:Menu link--><!--begin:Menu sub--> </div><!--end:Menu item--><!--begin:Menu item-->

                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->


                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2"><!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="fas fa-chart-line fs-2"></i><span class="path1"></span><span class="path2"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu content-->
                            <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">INVESTMENTS | SAVINGS | LOAN</span></div><!--end:Menu content-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Overview </span><span></span></span><!--end:Menu link--><!--begin:Menu sub-->

                        </div><!--end:Menu item--><!--begin:Menu item-->

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--> <a href="/savings"><span class="menu-link"><span class="menu-bullet"><i class="bullet bullet-dot"></i></span><span class="menu-title">Savings</span><span></span></span></a> <!--end:Menu link--><!--begin:Menu sub-->

                        </div><!--end:Menu item--><!--begin:Menu item-->

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--> <a href="/investments"><span class="menu-link"><span class="menu-bullet"><i class="bullet bullet-dot"></i></span><span class="menu-title">Investments</span><span></span></span></a> <!--end:Menu link--><!--begin:Menu sub-->

                        </div><!--end:Menu item--><!--begin:Menu item-->

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--> <a href="/loans"><span class="menu-link"><span class="menu-bullet"><i class="bullet bullet-dot"></i></span><span class="menu-title">Loan</span><span></span></span></a> <!--end:Menu link--><!--begin:Menu sub-->

                        </div><!--end:Menu item--><!--begin:Menu item-->

                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->


                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2"><!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="fas fa-user fs-2"><span class="path1"></span><span class="path2"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu content-->
                            <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">PROFILE</span></div><!--end:Menu content-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/keen/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Info</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/keen/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Security (2FA)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/keen/demo5/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Change Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item-->



                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2"><!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="fas fa-power-off fs-2"><span class="path1"></span><span class="path2"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu content-->
                            <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">LOGOUT</span></div><!--end:Menu content-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Primary menu-->
        <!--begin::Footer-->



        <!--end::Footer-->
    </div>
    <!--end::Sidebar primary-->

    <!--begin::Sidebar secondary-->
    <div class="app-sidebar-secondary ">


        <!--begin::Sidebar secondary menu-->
        <div class="menu menu-sub-indention menu-rounded menu-column menu-active-bg menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 py-4 py-lg-6"
            id="kt_app_sidebar_secondary_menu"
            data-kt-menu="true">

            <div
                id="kt_app_sidebar_secondary_menu_wrapper"

                class="hover-scroll-y mx-2 mx-lg-4"

                data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_app_sidebar_secondary_menu"
                data-kt-scroll-offset="20px">

                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu content-->
                    <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">Dashboard</span></div><!--end:Menu content-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/index') ? 'active' : '' }}" href="/index"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/summary') ? 'active' : '' }}" href="/summary"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Account Summary</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/summary') ? 'active' : '' }}" href="{{url('/history')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Transaction History</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/add-account') ? 'active' : '' }}" href="/add-account"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Account</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ Request::is('/add-card') ? 'active' : '' }}" href="/add-card"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Card</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->

            </div>
        </div>
        <!--end::Sidebar secondary menu-->
    </div>
    <!--end::Sidebar secondary-->

    <!--begin::Sidebar secondary toggle-->
    <button id="kt_app_sidebar_secondary_toggle" class="app-sidebar-secondary-toggle btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-color-primary position-absolute translate-middle z-index-1 start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-4"
        data-kt-toggle="true"
        data-kt-toggle-state="active"
        data-kt-toggle-target="body"
        data-kt-toggle-name="app-sidebar-secondary-collapse">

        <i class="ki-duotone ki-arrow-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i></button> <!--end::Sidebar secondary toggle-->

</div>
<!--end::Sidebar-->