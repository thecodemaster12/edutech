<div data-simplebar>
    <ul class="app-menu">

        <li class="menu-title">Menu</li>

        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                <span class="menu-text"> Dashboards </span>
                <span class="badge bg-primary rounded ms-auto">01</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.category.index') }}" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                <span class="menu-text"> Categories </span>
            </a>
        </li>

        {{-- <li class="menu-title">Custom</li>

        <li class="menu-item">
            <a href="apps-calendar.html" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                <span class="menu-text"> Calendar </span>
            </a>
        </li>

        <li class="menu-item">
            <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-file"></i></span>
                <span class="menu-text"> Extra Pages </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuExpages">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="pages-starter.html" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-invoice.html" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-login.html" class="menu-link">
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-recoverpw.html" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-500.html" class="menu-link">
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-layout"></i></span>
                <span class="menu-text"> Layouts </span>
                <span class="badge bg-blue ms-auto">New</span>
            </a>
            <div class="collapse" id="menuLayouts">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="layout-horizontal.html" class="menu-link">
                            <span class="menu-text">Horizontal</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="layout-sidenav-light.html" class="menu-link">
                            <span class="menu-text">Sidenav Light</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="layout-sidenav-brand.html" class="menu-link">
                            <span class="menu-text">Sidenav Brand</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="layout-topbar-dark.html" class="menu-link">
                            <span class="menu-text">Topbar Dark</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-title">Components</li>

        <li class="menu-item">
            <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-cookie"></i></span>
                <span class="menu-text"> UI Elements </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuComponentsui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="ui-alerts.html" class="menu-link">
                            <span class="menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-buttons.html" class="menu-link">
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-cards.html" class="menu-link">
                            <span class="menu-text">Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-carousel.html" class="menu-link">
                            <span class="menu-text">Carousel</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-dropdowns.html" class="menu-link">
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-video.html" class="menu-link">
                            <span class="menu-text">Embed Video</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-general.html" class="menu-link">
                            <span class="menu-text">General UI</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-grid.html" class="menu-link">
                            <span class="menu-text">Grid</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-images.html" class="menu-link">
                            <span class="menu-text">Images</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-list-group.html" class="menu-link">
                            <span class="menu-text">List Group</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-modals.html" class="menu-link">
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-offcanvas.html" class="menu-link">
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-placeholders.html" class="menu-link">
                            <span class="menu-text">Placeholders</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-progress.html" class="menu-link">
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-spinners.html" class="menu-link">
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tabs-accordions.html" class="menu-link">
                            <span class="menu-text">Tabs & Accordions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tooltips-popovers.html" class="menu-link">
                            <span class="menu-text">Tooltips & Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-typography.html" class="menu-link">
                            <span class="menu-text">Typography</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-briefcase-alt-2"></i></span>
                <span class="menu-text"> Components </span>
                <span class="badge bg-info ms-auto">Hot</span>
            </a>
            <div class="collapse" id="menuExtendedui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="components-range-slider.html" class="menu-link">
                            <span class="menu-text">Range Slider</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="components-sweet-alert.html" class="menu-link">
                            <span class="menu-text">Sweet Alert</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="components-loading-buttons.html" class="menu-link">
                            <span class="menu-text">Loading Buttons</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-aperture"></i></span>
                <span class="menu-text"> Icons </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuIcons">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="icons-boxicons.html" class="menu-link">
                            <span class="menu-text">Boxicons Icons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="icons-lucide.html" class="menu-link">
                            <span class="menu-text">Lucide Icons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="icons-mdi.html" class="menu-link">
                            <span class="menu-text">Material Design Icons</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuForms" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
                <span class="menu-text"> Forms </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuForms">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="forms-elements.html" class="menu-link">
                            <span class="menu-text">General Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-advanced.html" class="menu-link">
                            <span class="menu-text">Advanced</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-validation.html" class="menu-link">
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-quilljs.html" class="menu-link">
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-file-uploads.html" class="menu-link">
                            <span class="menu-text">File Uploads</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-table"></i></span>
                <span class="menu-text"> Tables </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuTables">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <span class="menu-text">Basic Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-datatables.html" class="menu-link">
                            <span class="menu-text">Data Tables</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                <span class="menu-text"> Charts </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuCharts">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="charts-apex.html" class="menu-link">
                            <span class="menu-text">Apex Charts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-morris.html" class="menu-link">
                            <span class="menu-text">Morris Charts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-chartjs.html" class="menu-link">
                            <span class="menu-text">Chartjs Charts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                <span class="menu-text"> Maps </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuMaps">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="maps-google.html" class="menu-link">
                            <span class="menu-text">Google Maps</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-vector.html" class="menu-link">
                            <span class="menu-text">Vector Maps</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i class="bx bx-share-alt"></i></span>
                <span class="menu-text"> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuMultilevel">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="#menuMultilevel2" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-text"> Second Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMultilevel2">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="javascript: void(0);" class="menu-link">
                                        <span class="menu-text">Item 1</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="javascript: void(0);" class="menu-link">
                                        <span class="menu-text">Item 2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMultilevel3" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-text">Third Level</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMultilevel3">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="javascript: void(0);" class="menu-link">
                                        <span class="menu-text">Item 1</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#menuMultilevel4" data-bs-toggle="collapse"
                                        class="menu-link waves-effect">
                                        <span class="menu-text">Item 2</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel4">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li> --}}
    </ul>
</div>