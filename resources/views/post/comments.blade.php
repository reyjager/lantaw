<!-- resources/views/comments.blade.php -->

<div class="mt-4">
    @foreach ($post->comments as $comment)
        <div class="card p-3 mb-3">
            <p><strong>{{ $comment->user->name }}</strong> <span
                    class="text-muted">{{ $comment->created_at->format('d M, Y h:i A') }}</span></p>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>
