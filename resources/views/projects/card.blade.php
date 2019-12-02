<div class="card" style="height: 150px; font-size: .85rem; border-top: 4px solid #007BFF">
    <div class="card-body">
        <h2 class="card-title h6 text-capitalize"><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h2>
        <p class="card-text text-black-50">{{ Illuminate\Support\Str::limit($project->description, 100) }}
            @if(strlen($project->description) > 100)
                <a href="/projects/{{ $project->id }}">Read more</a></p>
            @endif
    </div>
</div><!-- /End card -->