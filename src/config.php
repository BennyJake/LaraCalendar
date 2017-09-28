<?php

return [
	'maps' => [
		'weekly' => \Uruloke\LaraCalendar\Restrictions\Weekly\Weekly::class,
		'notWeekly' => \Uruloke\LaraCalendar\Restrictions\Weekly\NotWeekly::class,
		'biWeekly' => \Uruloke\LaraCalendar\Restrictions\Weekly\BiWeekly::class,
		'evenWeeks' => \Uruloke\LaraCalendar\Restrictions\Weekly\EvenWeeks::class,
		'unevenWeeks' => \Uruloke\LaraCalendar\Restrictions\Weekly\UnevenWeeks::class,
		'withoutDay' => \Uruloke\LaraCalendar\Restrictions\Daily\WithoutDay::class,
		'withoutWeek' => \Uruloke\LaraCalendar\Restrictions\Weekly\WithoutWeek::class,
	],
	'drivers' => [
		'event' => \Uruloke\LaraCalendar\Models\Event::class
	]
];
