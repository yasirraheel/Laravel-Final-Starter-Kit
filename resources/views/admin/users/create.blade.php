<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="font-20">Create New User</h4>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">
                    <i class="icofont-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-xl-6">
                <!-- Personal Information Card -->
                <div class="card mb-30">
                    <div class="card-body p-30">
                        <div class="edit-personal-info mb-5">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">Personal Information</h4>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-3">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter full name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-3">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="col-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter email address">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <!-- Roles Card -->
                <div class="card mb-30">
                    <div class="card-body p-30">
                        <div class="account-setting">
                            <div><h4 class="mb-20 pt-2">Roles</h4></div>

                            @foreach($roles as $role)
                            <div class="form-group mb-4 d-flex align-items-center">
                                <div class="mr-3">
                                    <!-- Switch -->
                                    <label class="switch">
                                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ (is_array(old('roles')) && in_array($role->name, old('roles'))) ? 'checked' : '' }}>
                                        <span class="control"></span>
                                    </label>
                                    <!-- End Switch -->
                                </div>
                                <div>
                                    <label class="mb-0">{{ ucfirst(str_replace('_', ' ', $role->name)) }}</label>
                                </div>
                            </div>
                            @endforeach
                            @error('roles')
                                <div class="text-danger mt-2 small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Password Card -->
                <div class="card mb-30">
                    <div class="card-body p-30">
                        <div class="change-password">
                            <div><h4 class="mb-4 pt-2">Password</h4></div>

                            <div class="form-group mb-4">
                                <label for="password" class="bold font-14 mb-2">Password</label>
                                <input type="password" class="theme-input-style @error('password') is-invalid @enderror" id="password" name="password" required placeholder="********">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-10">
                                <label for="password_confirmation" class="bold font-14 mb-2">Confirm Password</label>
                                <input type="password" class="theme-input-style" id="password_confirmation" name="password_confirmation" required placeholder="********">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-right">
                <div class="button-group pt-1">
                    <button type="submit" class="btn">Create User</button>
                    <a href="{{ route('admin.users.index') }}" class="link-btn bg-transparent mr-3 soft-pink">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>