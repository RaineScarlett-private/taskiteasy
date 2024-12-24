<x-layout>
    <form action="{{ route('posts.create') }}" method="GET">
        @CSRF
        <button type="submit" class="button is-primary">Create Post</button>
    </form>
        @foreach($posts as $post)
            <div class="content">
                <a class="is-size-5" href= "{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
                <br>
                <div class="is-size-11">
                    {!! $post->description !!}
            </div>
        @endforeach
</x-layout>
