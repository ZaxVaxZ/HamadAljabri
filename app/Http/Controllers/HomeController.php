<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentBlock;

class HomeController
{
    function index(Request $request)
	{
		$locale = app()->getLocale();
		$series = ContentBlock::ofType('series')->active()->oldest()->orderByDesc('id')->get();

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
			'pointers' => $locale == 'ar' ? $pointersAR : $pointersEN,
		];
		
		return view('homepage', ['recs' => $records]);
	}
}
