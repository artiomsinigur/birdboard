<ul class="latest-updates-list list-unstyled" style="font-size: .85rem">
    @foreach($project->activity as $activity)
        <li class="latest-updates-item">
            <span class="py-1 d-block text-black-50">
                @include("projects.activity.{$activity->description}")
                <small class="text-color-light">{{ $activity->created_at->diffForHumans(null, true) }}</small>
            </span>
        </li>
    @endforeach
</ul>