@extends('layouts.app')

@section('content')
    <h1>Role Assignment</h1>
    <p>This page is to assign a role to the user</p>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <form action="{{ route('update') }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>
                            <input type="text" class="form-control" name="roles[{{ $role->id }}]"
                                value="{{ $role->name }}" disabled id="role-name-{{ $role->id }}">
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm edit-btn"
                                data-role-id="{{ $role->id }}">
                                <i class="bi bi-pencil"></i> Edit
                            </button>

                            <button type="submit" class="btn btn-success btn-sm save-btn" name="save"
                                value="{{ $role->id }}" style="display: none;">
                                <i class="bi bi-save"></i> Save
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>



    <!-- JavaScript -->
    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const roleId = this.getAttribute('data-role-id');
                const inputField = document.getElementById(`role-name-${roleId}`);
                const saveButton = this.nextElementSibling; // Get the Save button beside it

                // Enable input field for editing
                inputField.disabled = false;
                inputField.focus();

                // Hide Edit button, show Save button
                this.style.display = 'none';
                saveButton.style.display = 'inline-block';
            });
        });
    </script>
@endsection
