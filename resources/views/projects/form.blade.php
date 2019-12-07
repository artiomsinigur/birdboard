{{ csrf_field() }}
<div class="form-group">
    <label for="titleControl">Title</label>
    <input type="text" name="title" class="form-control" id="titleControl" placeholder="Title" value="{{ $project->title }}">
</div>
@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="descriptionControl">Description</label>
    <textarea class="form-control" name="description" id="descriptionControl" rows="3" placeholder="Description">{{ $project->description }}</textarea>
</div>
@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div>
    <button class="btn btn-primary" type="submit" name="edit">{{ $buttonText }}</button>
    <a href="/projects" class="btn btn-outline-secondary">Cancel</a>
</div>
