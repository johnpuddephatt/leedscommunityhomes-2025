<div class="page-header">

  <div class="container">

    @if($page->section ?? false)
      <nav class="page-back">
        <a href="/section/{{$page->section->slug}}" class="page--back">&larr; Back to {{ $page->section->name }}</a>
      </nav>
    @endif

    @if($page->icon)
      <img class="page--icon" src="{!! $page->icon !!}">
    @endif

    <h1 class="title">{!! $title !!}</h1>

    <div class="page-header--description">
      @if($page->excerpt ?? false)
        <p class="excerpt">{!! $page->excerpt !!}</p>
      @elseif($page->description ?? false)
          {!! $page->description !!}
      @endif
    </div>

  </div>

</div>
