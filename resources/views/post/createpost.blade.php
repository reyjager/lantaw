<div class="card p-3">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Content Field -->
        <div class="form-group mt-4">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Submit Post</button>
            <button type="button" id="cancelCreatePost" class="btn btn-secondary ml-2">Cancel</button>
        </div>
    </form>
</div>

<!-- JavaScript to Hide the Form on Cancel -->
<script>
    document.getElementById('cancelCreatePost').addEventListener('click', function() {
        document.getElementById('createPostForm').style.display = 'none'; // Hide the form
        document.getElementById('showCreatePost').style.display =
            'inline'; // Show the "Create Post" button again
    });
</script>
