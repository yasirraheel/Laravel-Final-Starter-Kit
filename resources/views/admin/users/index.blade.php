<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card mb-30">
                <div class="card-body pt-30 d-flex justify-content-between align-items-center">
                    <h4 class="font-20 ">User Management</h4>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-sm">
                        <i class="icofont-plus"></i> Create New
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="text-nowrap hoverable dh-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="img mr-3">
                                            <img src="{{ $user->profile_photo_url }}" class="rounded-circle" width="40" alt="{{ $user->name }}">
                                        </div>
                                        <div class="text">
                                            <h6 class="mb-0">{{ $user->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <div class="chip mr-2" title="{{ ucfirst(str_replace('_', ' ', $role->name)) }}">
                                            <div class="chip-content {{ $role->name === 'super_admin' ? 'primary' : 'secondary' }}">
                                                <div class="font-12">{{ ucfirst(str_replace('_', ' ', $role->name)) }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm mr-2" title="Edit">
                                            <i class="icofont-edit"></i>
                                        </a>
                                        @if(auth()->id() !== $user->id)
                                        <button type="button" class="btn btn-danger btn-sm" title="Delete" onclick="deleteConfirm('delete-form-{{ $user->id }}')">
                                            <i class="icofont-ui-delete"></i>
                                        </button>
                                        <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-30 pb-30 mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
