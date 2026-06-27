<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();

        $solutions = Solution::withTranslation()->get()->map(function ($solution) use ($locale) {
            $rawListItems = is_string($solution->list_items)
                ? json_decode($solution->list_items, true)
                : $solution->list_items;

            $formattedListItems = [];
            if (is_array($rawListItems)) {
                foreach ($rawListItems as $item) {
                    if (isset($item[$locale])) {
                        $formattedListItems[] = $item[$locale];
                    } elseif (isset($item['id'])) {
                        $formattedListItems[] = $item['id'];
                    } else {
                        $formattedListItems[] = $item;
                    }
                }
            }

            return [
                'id' => $solution->id,
                'title' => $solution->title,
                'description' => $solution->description,
                'images' => $solution->images,
                'list_title' => $solution->list_title,
                'list_items' => $formattedListItems,
            ];
        });


        return view('pages.solutions.index', compact('solutions'));
    }
}
