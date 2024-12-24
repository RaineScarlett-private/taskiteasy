<x-layout>
    <div class="block">
        <h1> {{ $post->title }} </h1>
        <h2> {!! $post->description !!} </h2>
        @foreach($post->comments as $comment)
        <p>{!! $comment->content !!}</p>
        <hr/>
        @endforeach
    </div>
    <form action="{{ route('posts.edit', $post) }}" method="GET">
        @CSRF
        <button type="submit" class="button is-primary">Edit Post</button>
    </form>
    <form method="POST" action="{{ route('posts.destroy', $post) }}">
        @CSRF
        @method('DELETE')
        <button type="submit" class="button is-danger">Delete post</button>
    </form>
</x-layout>
