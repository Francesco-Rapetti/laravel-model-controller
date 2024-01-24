<div class="card glass" style="width: 18rem;">
    <div class="card-header">
        @yield("title", $movie->title)
    </div>
    <ul class="rounded-4 list-group list-group-flush">
        <li class="list-group-item">@yield("originalTitle", $movie->original_title)</li>
        <li class="list-group-item">@yield("nationality", $movie->nationality)</li>
        <li class="list-group-item">@yield("date", $movie->date)</li>
        <li class="list-group-item">@yield("vote", $movie->vote)</li>
    </ul>
</div>