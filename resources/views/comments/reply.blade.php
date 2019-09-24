@foreach($comments as $comment)
<div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{ $comment->user->name }}</h5>
            {{ $comment->message }}
        <div class="display-comment">
            @if($logged != null)
                <form method="post" action="{{ route('comments.reply') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="comment_body" class="form-control" />
                        <input type="hidden" name="post_id" value="{{ $post_id }}" />
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                    </div>
                    @error('custom'.$comment->id)
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Reply" />
                    </div>
                </form>
            @endif
            @include('comments.reply', ['comments' => $comment->replies, 'logged' => $logged])
        </div>
    </div>
</div>
@endforeach
@if($comments->contains('links'))
    {{ $comments->links() }}
@endif