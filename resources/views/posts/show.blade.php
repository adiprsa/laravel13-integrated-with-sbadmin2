<x-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Post</h1>
    </div>
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control form-control-plaintext" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control form-control-plaintext" required>{{ $post->content }}</textarea>
            </div>
            <div class="d-flex justify-content-end">
                <a href="/posts" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</x-layout>