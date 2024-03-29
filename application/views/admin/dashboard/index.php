<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        Dashboard
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card h-100">
                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="px-4 mb-4 mb-xl-0 mb-xxl-4">
                            <h1 class="text-primary">Welcome to Halocat!</h1>
                                <p class="text-gray-700 mb-0">Love Your Cat</p>
                                <div id="reward-notification"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="loading-text" class="col-12 text-center">
            <i class="fa fa-pulse fa-spinner"></i> Loading Dashboard Data...
        </div>
    </div>
    <div id="dashboard-summary" style="display: none;">
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Contents</div>
                                <div id="statistics-campaigns">-</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">User Registered</div>
                                <div id="statistics-user_registered">-</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">Website Activity</div>
                    <div class="card-body">
                        <div class="chart-bar"><canvas id="chartWebsiteActivity" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated <span id="chartWebsiteActivity-date"></span> at <span id="chartWebsiteActivity-time"></span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">New User Registration</div>
                    <div class="card-body">
                        <div class="chart-bar"><canvas id="chartNewUserRegistration" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated <span id="chartNewUserRegistration-date"></span> at <span id="chartNewUserRegistration-time"></span></div>
                </div>
            </div>
        </div> -->
    </div>
</div>