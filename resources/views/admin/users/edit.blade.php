<x-app-layout>
    <div class="row">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card mb-30">
                <div class="card-body p-30">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="font-20">Edit User</h4>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">
                            <i class="icofont-arrow-left"></i> Back to List
                        </a>
                    </div>

                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="edit-personal-info mb-5">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">User Information</h4>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-3">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-3">
                                    <label>Roles</label>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        @foreach($roles as $role)
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="role_{{ $role->id }}" name="roles[]" value="{{ $role->name }}"
                                                    {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="role_{{ $role->id }}">
                                                    {{ ucfirst(str_replace('_', ' ', $role->name)) }}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @error('roles')
                                        <div class="text-danger mt-2 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
