@extends('layouts.app')

@section('content')
    <div class="container  text-white rounded m-4">
        {{-- <h2>Posts</h2> --}}


        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPostModal">
            Create New Post
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createPostModalLabel">Create New Post</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('post.createpost')
                    </div>

                </div>
            </div>
        </div>

        <h2 class="mt-1">Previous Posts</h2>


        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
            <ul class="list-group ">

                @foreach ($posts as $post)
                    <li class="card list-group-item mb-4 bg-dark bg-opacity-50 text-white" style="cursor: pointer;"
                        data-bs-toggle="modal" data-bs-target="#postModal-{{ $post->post_id }}">
                        <h4>{{ $post->post_id }} ===> {{ $post->title }}</h4>
                        <p>{{ Str::limit($post->content, 150) }}</p>
                        <small class="text-muted">Posted on {{ $post->created_at->format('M d, Y') }}</small>

                        <!-- Display Comments Count -->
                        <div class="mt-2">
                            <small>{{ $post->comments->count() }}
                                {{ Str::plural('comment', $post->comments->count()) }}</small>
                        </div>
                        @foreach ($post->comments as $comment)
                            <div class="card bg-secondary text-white mb-2">
                                <div class="card-body">
                                    <p class="card-text">{{ $comment->content }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-light">
                                            <i class="fas fa-user"></i>
                                            {{ $comment->user->name ?? 'User #' . $comment->user_id }}
                                        </small>
                                        <small class="text-light">
                                            <i class="fas fa-clock"></i>
                                            {{ $comment->created_at->format('M d, Y \a\t h:i A') }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </li>

                    <!-- Modal for each post -->
                    <div class="modal fade" id="postModal-{{ $post->post_id }}" tabindex="-1"
                        aria-labelledby="postModalLabel-{{ $post->post_id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="postModalLabel-{{ $post->post_id }}">{{ $post->title }}
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="post-content mb-4">
                                        <p class="lead">{{ $post->content }}</p>
                                        <small class="text-muted">Posted by {{ $post->user->name ?? 'User' }} on
                                            {{ $post->created_at->format('M d, Y \a\t h:i A') }}</small>
                                    </div>

                                    <hr class="bg-secondary">

                                    <!-- Comments Section -->
                                    <h5 class="mb-3">Comments ({{ $post->comments->count() }})</h5>
                                    @if ($post->comments->isNotEmpty())
                                        <div class="comments-container mb-4">
                                            @foreach ($post->comments as $comment)
                                                <div class="card bg-secondary text-white mb-2">
                                                    <div class="card-body">
                                                        <p class="card-text">{{ $comment->content }}</p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <small class="text-light">
                                                                <i class="fas fa-user"></i>
                                                                {{ $comment->user->name ?? 'User #' . $comment->user_id }}
                                                            </small>
                                                            <small class="text-light">
                                                                <i class="fas fa-clock"></i>
                                                                {{ $comment->created_at->format('M d, Y \a\t h:i A') }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-info bg-dark border-secondary">
                                            No comments yet. Be the first to comment!
                                        </div>
                                    @endif

                                    <!-- Comment Form -->
                                    <form action="{{ route('post.comment') }}" method="POST" class="mt-3">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->post_id }}">

                                        <div class="form-group mb-3">
                                            <label for="comment-{{ $post->post_id }}" class="form-label">Add your
                                                comment</label>
                                            <textarea name="content" id="comment-{{ $post->post_id }}" class="form-control bg-dark text-white" rows="3"
                                                placeholder="Write your thoughts here..."></textarea>
                                            @error('content')
                                                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fas fa-paper-plane"></i> Post Comment
                                        </button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
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
