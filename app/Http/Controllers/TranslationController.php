<?php

namespace App\Http\Controllers;

use Google\Cloud\Core\Exception\GoogleException;
use Google\Cloud\Core\Exception\ServiceException;
use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;

class TranslationController extends Controller
{
    public function form()
    {
        return view('translate_form');
    }

    /**
     * @throws GoogleException
     * @throws ServiceException
     */
    public function translate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $translate = new TranslateClient(['key' => env('GOOGLE_TRANSLATE_API_KEY')]);
        $result = $translate->translate($request->input('text'), [
            'target' => $request->input('language'),
        ]);

        return back()->with('translated_text', $result['text']);
    }

    /**
     * @throws GoogleException
     * @throws ServiceException
     */
    /**
     * @throws GoogleException
     * @throws ServiceException
     */
    public function translateText(Request $request): \Illuminate\Http\JsonResponse
    {
        $translate = new TranslateClient(['key' => env('GOOGLE_TRANSLATE_API_KEY')]);

        $translatedTexts = [];

        foreach ($request->input('texts') as $textItem) {
            $result = $translate->translate($textItem['text'], [
                'target' => $request->input('language'),
            ]);

            $translatedTexts[] = ['id' => $textItem['id'], 'text' => $result['text']];
        }

        return response()->json($translatedTexts);
    }



}
