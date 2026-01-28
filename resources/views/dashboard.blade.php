<x-app-layout>
    <div class="row">
        <div class="col-12 mb-4">
            @role('super_admin')
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Welcome Super Admin!</h4>
                <p>You have full access to manage the system.</p>
                <hr>
                <p class="mb-0">Use the sidebar to manage users, roles, and settings.</p>
            </div>
            @else
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Welcome, {{ Auth::user()->name }}!</h4>
                <p>This is your customer dashboard.</p>
            </div>
            @endrole
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-8">
            <!-- Card -->
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="increase">
                            <div class="card-title d-flex align-items-end mb-2">
                                <h2>86<sup>%</sup></h2>
                                <p class="font-14">Increased</p>
                            </div>
                            <h3 class="card-subtitle mb-2">Congratulation!</h3>
                            <p class="font-16">You've finished all of your tasks for this week.</p>
                        </div>
                        <div class="congratulation-img">
                            <img src="{{ asset('Dashmin_html/assets/img/media/congratulation-img.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>

        <div class="col-xl-2 col-md-4 col-sm-6">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="mb-1">Income</h4>
                            <p class="font-14 c3">Increase in Average</p>
                        </div>
                        <div class="">
                            <h2>50<sup>%</sup></h2>
                        </div>
                    </div>
                </div>
                <div id="apex_area-chart" class="chart"></div>
            </div>
            <!-- End Card -->
        </div>

        <div class="col-xl-2 col-md-4 col-sm-6">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="mb-1">Profit Report</h4>
                            <p class="font-14 soft-pink">Decrease in Average</p>
                        </div>
                        <div class="">
                            <h2>15<sup>%</sup></h2>
                        </div>
                    </div>
                </div>
                <div id="apex_area2-chart" class="chart"></div>
            </div>
            <!-- End Card -->
        </div>

        <div class="col-xl-2 col-md-4 col-sm-6">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
                <div class="card-body">
                    <div class="">
                        <h4 class="mb-1">Impression</h4>
                        <p class="font-14 text_color">Hover to see detail</p>
                    </div>
                </div>
                <div id="apex_area3-chart" class="chart"></div>
            </div>
            <!-- End Card -->
        </div>

        <div class="col-xl-2 col-md-4 col-sm-6">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
                <div class="card-body">
                    <div class="">
                        <h4 class="mb-1">Activity</h4>
                        <p class="font-14 text_color">Hover to see detail</p>
                    </div>
                </div>
                <div id="apex_area4-chart" class="chart"></div>
            </div>
            <!-- End Card -->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-12">
             <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Yearly Report</h4>
                    </div>
                    <div id="apex_column-chart" class="chart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-30">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Recent Users</h4>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="text-nowrap card_color-bg dh-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\User::latest()->take(5)->get() as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d F Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
