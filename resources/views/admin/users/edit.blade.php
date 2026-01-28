<x-app-layout>
    <div class="row">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title">Edit User</h4>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">
                            <i class="icofont-arrow-left"></i> Back to List
                        </a>
                    </div>

                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="d-block mb-2">Roles</label>
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

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
