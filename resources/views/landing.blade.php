@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					<div class="list-group">
						<h3>Available endpoints <h6>endpoints update automatically on DB inserts</h6></h3>
						<hr>
						{{-- news --}}

						<a href="{{ route('news') }}" target="_blank" class="list-group-item">GET: api/news</a>

						<?php
							$news = \App\News::all();

							foreach ($news as $item) {
								$elem = '<a href="' . route("news_item", ["url" =>  $item->id]) . '" target="_blank" class="list-group-item">GET: api/news/'. $item->id . '</a>';

								echo html_entity_decode($elem);
							}

							echo html_entity_decode('<hr>');
						?>

						{{-- jobs --}}

						<a href="{{ route('jobs') }}" target="_blank" class="list-group-item">GET: api/jobs</a>

						<?php
							$jobs = \App\Job::all();

							foreach ($jobs as $job) {
								$elem = '<a href="' . route("job", ["url" =>  $job->id]) . '" target="_blank" class="list-group-item">GET: api/job/'. $job->id . '</a>';

								echo html_entity_decode($elem);
							}

							echo html_entity_decode('<hr>');
						?>

						{{-- carousel --}}

						<a href="{{ route('carousel') }}" target="_blank" class="list-group-item">GET: api/carousel</a>

						<?php
							$carousels = \App\Carousel::all();

							foreach ($carousels as $carousel) {
								$elem = '<a href="' . route("carousel_item", ["url" =>  $carousel->id]) . '" target="_blank" class="list-group-item">GET: api/carousel/'. $carousel->id . '</a>';

								echo html_entity_decode($elem);
							}

							echo html_entity_decode('<hr>');
						?>

						{{-- pages --}}

						<?php
							$pages = \App\Page::all();

							foreach ($pages as $page) {
								$elem = '<a href="' . route("page", ["url" =>  $page->url]) . '" target="_blank" class="list-group-item">GET: api/page/'. $page->url . '</a>';

								echo html_entity_decode($elem);
							}

							echo html_entity_decode('<hr>');
						?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
