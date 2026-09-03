<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentBlock;

class HomeController
{
    function index(Request $request)
	{
		$locale = app()->getLocale();
		$series = ContentBlock::forLocale($locale)->ofType('series')->active()->oldest()->orderByDesc('id')->get();
		$photos = ContentBlock::ofType('photo')->active()->latest()->orderByDesc('id')->limit(12)->get();
		$articles = ContentBlock::ofType('article')->active()->latest()->orderByDesc('id')->limit(4)->get();

		$pointersAR = [
			'صانع محتوى',
			'مدرب رياضي',
			'مغامر ورحالة',
			'متخصص في دول أمريكا اللاتينية',
			'متحدث تحفيزي',
			'دكتوراه في الذكاء الاصطناعي',
			'رسالتي: عالم متسامح'
		];
		$pointersEN = [
			'Content Creator',
			'Sports Coach',
			'Traveler and Adventurer',
			'Specialized in Latin American Countries',
			'Motivational Speaker',
			'PhD in A.I',
			'My Message: Peaceful Coexistence'
		];

		$records = [
			'series' => $series,
			'photos' => $photos,
			'articles' => $articles,
			'pointers' => $locale == 'ar' ? $pointersAR : $pointersEN,
		];
		
		return view('homepage', ['recs' => $records]);
	}

	function articles(Request $request) {
		return view('articles');
	}

	function episodes(Request $request) {
		if ($request->route('locale') == 'en')
			return HomeController::episodesEN($request);
		return HomeController::episodesAR($request);
	}

	function episodesAR(Request $request) {
		$sid = (int) $request->route('series');

		$serie = ContentBlock::forLocale('ar')->ofType('series')->active()->where('id', $sid)->firstOrFail();

		$ordered = ['عالم حمد'];

		$latest = !in_array($serie['title'], $ordered);

		return view('episodes', ['series' => $serie['title'], 'latest' => $latest]);
	}

	function episodesEN(Request $request) {
		$serie = (int) $request->route('series');
		$series = ['interviews'];
		
		if ($serie < 1 || $serie > count($series))
			abort(404);

		$origin = $series[$serie - 1];
		$episodes = ContentBlock::forLocale(app()->getLocale())->ofType('interview')->active()->where('origin', $origin)->latest()->orderByDesc('id')->get();
		if ($origin == 'interviews')
			$origin = "Interviews";

		if ($episodes->isEmpty()) {
			abort(404);
		}

		return view('episodes', ['episodes' => $episodes, 'series' => $origin]);
	}

	function episodePage(Request $request) {
		$exception = 'syrianmemory';

		$recordId = (int) $request->route('id');

		$episode = ContentBlock::forLocale(app()->getLocale())->ofType('interview')->active()->where('id', $recordId)->firstOrFail();

		$previous = ContentBlock::forLocale(app()->getLocale())
			->ofType('interview')
			->where('origin', $episode->origin)
			->where('link', 'not like', '%' . $exception . '%')
			->where(function ($query) use ($episode) {
				$query->where('created_at', '<', $episode->created_at)
					->orWhere(function ($query) use ($episode) {
						$query->where('created_at', $episode->created_at)
								->where('id', '<', $episode->id);
					});
			})
			->orderByDesc('created_at')
			->orderByDesc('id')
			->first();

		$prevID = $previous?->id ?? -1;

		$next = ContentBlock::forLocale(app()->getLocale())
			->ofType('interview')
			->active()
			->where('origin', $episode->origin)
			->where('link', 'not like', '%' . $exception . '%')
			->where(function ($query) use ($episode) {
				$query->where('created_at', '>', $episode->created_at)
					->orWhere(function ($query) use ($episode) {
						$query->where('created_at', $episode->created_at)
								->where('id', '>', $episode->id);
					});
			})
			->orderBy('created_at')
			->orderBy('id')
			->first();

		$nextID = $next?->id ?? -1;

		$link = str_replace(['watch?v=', '/shorts/'], '/embed/', $episode->link);

		return view('episode', ['episode' => $episode, 'link' => $link, 'prevID' => $prevID, 'nextID' => $nextID]);
	}

	function gallery(Request $request) {
		$year = $request->route('year');

		if ($year != null) {
			$album = ContentBlock::ofType('photo')->where('origin', $year)->latest()->orderByDesc('id')->get();
			if ($album->isEmpty())
				abort(404);
		}
		else {
			$year = -1;
			$album = ContentBlock::ofType('photo')
				->distinct()
				->orderBy('year', 'desc')
				->pluck('origin');
		}

		return view('gallery', ['year' => $year, 'album' => $album]);
	}
}
