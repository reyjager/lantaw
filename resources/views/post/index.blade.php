@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Posts</h2>

        <!-- Create Post Button -->
        <button class="btn btn-primary mb-3" id="showCreatePost">Create Post</button>

        <!-- Include the Create Post Form (Initially Hidden) -->
        <div id="createPostForm" style="display: none;">
            @include('post.createpost')
        </div>

        <h2 class="mt-5">Previous Posts</h2>


        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ Str::limit($post->content, 150) }}</p>
                        <small class="text-muted">Posted on {{ $post->created_at->format('M d, Y') }}</small>

                        <!-- Display Comments Section -->
                        <div class="mt-4">
                            @if ($post->comments->isNotEmpty())
                                <ul class="list-group">
                                    @foreach ($post->comments as $comment)
                                        <li class="list-group-item">
                                            <p>{{ $comment->content }}</p>
                                            <small class="text-muted">
                                                Commented by User #{{ $comment->user_id }} on
                                                {{ $comment->created_at->format('M d, Y') }}
                                            </small>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No comments yet.</p>
                            @endif

                            <form action="{{ route('post.comment') }}" method="POST" class="mt-3">
                                @csrf

                                <div class="form-group">
                                    <textarea name="content" class="form-control" rows="3" placeholder="Add a comment"></textarea>
                                    @error('content')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>


                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit Comment<p>Post ID:
                                        {{ $post->post_id }}</p></button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- JavaScript to Show/Hide Create Post Form -->
    <script>
        document.getElementById('showCreatePost').addEventListener('click', function() {
            document.getElementById('createPostForm').style.display = 'block';
            this.style.display = 'none';
        });
    </script>
@endsection
