<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" value="{{ old('title', $task->title ?? null) }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" name="description" value="{{ old('description', $task->description ?? null) }}">
</div>