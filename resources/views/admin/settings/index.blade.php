<x-app-layout>
    <div class="row">
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-3">System Settings</h4>
                    <ul class="nav flex-column">
                        <li><a class="active" data-toggle="tab" href="#general">General</a></li>
                        <li><a data-toggle="tab" href="#frontend">Frontend</a></li>
                        <li><a data-toggle="tab" href="#backend">Backend</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <!-- Card -->
            <div class="card h-100">
                <div class="card-body p-30">
                    <div class="tab-content">
                        <!-- General Settings -->
                        <div class="tab-pane fade show active" id="general">
                            <h4 class="mb-4">General Settings</h4>
                            <form action="{{ route('admin.settings.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="group" value="general">
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <label for="site_name" class="mb-2 font-14 bold">Site Name</label>
                                            <input type="text" id="site_name" name="site_name" class="theme-input-style" value="{{ \App\Models\Setting::get('site_name', 'Laravel Starter') }}" placeholder="Enter site name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <label for="site_email" class="mb-2 font-14 bold">Site Email</label>
                                            <input type="email" id="site_email" name="site_email" class="theme-input-style" value="{{ \App\Models\Setting::get('site_email') }}" placeholder="Enter site email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <label for="site_description" class="mb-2 font-14 bold">Site Description</label>
                                            <textarea id="site_description" name="site_description" class="theme-input-style style--two" placeholder="Enter site description">{{ \App\Models\Setting::get('site_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Frontend Settings -->
                        <div class="tab-pane fade" id="frontend">
                            <h4 class="mb-4">Frontend Settings</h4>
                            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="group" value="frontend">
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="upload-avatar d-xl-flex align-items-center flex-column mb-30">
                                            <div class="attach-file style--two rounded-0 align-items-end mb-3">
                                                <img src="{{ \App\Models\Setting::get('site_logo') ? asset('storage/' . \App\Models\Setting::get('site_logo')) : asset('Dashmin_html/assets/img/logo.png') }}" class="profile-avatar" alt="Site Logo" style="width: auto; height: 50px;">
                                                <div class="upload-button mb-20">
                                                    <img src="{{ asset('Dashmin_html/assets/img/svg/gallery.svg') }}" alt="" class="svg mr-2">
                                                    <span>Upload Logo</span>
                                                    <input class="file-input" type="file" name="site_logo" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="content text-center">
                                                <h4 class="mb-2">Site Logo</h4>
                                                <p class="font-12 c4">Allowed JPG, GIF or PNG.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="upload-avatar d-xl-flex align-items-center flex-column mb-30">
                                            <div class="attach-file style--two rounded-0 align-items-end mb-3">
                                                <img src="{{ \App\Models\Setting::get('site_favicon') ? asset('storage/' . \App\Models\Setting::get('site_favicon')) : asset('Dashmin_html/assets/img/favicon.png') }}" class="profile-avatar" alt="Site Favicon" style="width: 32px; height: 32px;">
                                                <div class="upload-button mb-20">
                                                    <img src="{{ asset('Dashmin_html/assets/img/svg/gallery.svg') }}" alt="" class="svg mr-2">
                                                    <span>Upload Favicon</span>
                                                    <input class="file-input" type="file" name="site_favicon" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="content text-center">
                                                <h4 class="mb-2">Site Favicon</h4>
                                                <p class="font-12 c4">Allowed JPG, GIF or PNG.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <label for="footer_text" class="mb-2 font-14 bold">Footer Text</label>
                                            <input type="text" id="footer_text" name="footer_text" class="theme-input-style" value="{{ \App\Models\Setting::get('footer_text') }}" placeholder="Enter footer text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Backend Settings -->
                        <div class="tab-pane fade" id="backend">
                            <h4 class="mb-4">Backend Settings</h4>
                            <form action="{{ route('admin.settings.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="group" value="backend">
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <label for="admin_pagination" class="mb-2 font-14 bold">Records Per Page</label>
                                            <input type="number" id="admin_pagination" name="admin_pagination" class="theme-input-style" value="{{ \App\Models\Setting::get('admin_pagination', 10) }}" placeholder="10">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</x-app-layout>
