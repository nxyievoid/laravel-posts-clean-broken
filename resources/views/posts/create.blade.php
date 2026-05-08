<x-app-layout>
    <h1>Create post</h1>

    <x-error-message :errors="$errors" />

    <form action="{{ route('post.index') }}" method="post">
        @csrf

        <div>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
        </div>
        <div>
            <input type="submit" value="create">
        </div>
    </form>
</x-app-layout>
