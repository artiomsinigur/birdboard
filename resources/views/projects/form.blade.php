{{ csrf_field() }}
<div class="form-group">
    <label for="titleControl">Title</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="titleControl" placeholder="Title" value="{{ $project->title ? $project->title : old('title') }}">
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="descriptionControl">Description</label>
    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="descriptionControl" rows="3" placeholder="Description">{{ $project->description ? $project->description : old('description') }}</textarea>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <button class="btn btn-primary" type="submit" name="edit">{{ $buttonText }}</button>
    <a href="/projects" class="btn btn-outline-secondary">Cancel</a>
</div>
