<x-layout>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @CSRF
        @method('PUT')
        <div>
            <label>Title</label>
            <br>
            <input type="text" name="title" value="{{ old('title', $post) }}">
            @error('title')<p>{{ $message }}</p> @enderror
        </div>
        <br>
        <div>
            <label>Description</label>
            <br>
            <textarea name="description">{{ old('description', $post) }}</textarea>
            @error('description')<p>{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="button is-primary">Save</button>
        <button type="reset" class="button is-warning">Reset</button>
    </form>
</x-layout>
