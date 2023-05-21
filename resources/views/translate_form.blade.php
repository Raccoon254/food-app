<!DOCTYPE html>
<html lang="">
<head>
    <title>Translation</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('mainNav')
<div class="container py-5 w-4/12">
    <h1 class="m-4">Translation</h1>

    <form method="POST" class="w-[320px]" action="/translate">
        @csrf
        <div class="form-group m-4">
            <label for="language"></label>
            <select class="select select-warning w-[320px]" id="language" name="language">
                <option value="en">Select a Language</option>
                <option value="en">English</option>
                <option value="sw">Swahili</option>
                <option value="es">Spanish</option>
                <option value="fr">French</option>
                <option value="de">German</option>
                <option value="it">Italian</option>
                <option value="ja">Japanese</option>
                <option value="ko">Korean</option>
                <option value="pt">Portuguese</option>
                <option value="ru">Russian</option>
                <option value="zh-CN">Chinese (Simplified)</option>
            </select>
        </div>
        <div class="m-4">
            <label for="text"></label>
            <textarea placeholder="Enter Text" class="textarea textarea-warning w-[320px]" id="text" name="text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn w-[320px] btn-warning btn-outline ring-blue-500 ring-2 m-4">Translate</button>
    </form>

    @if(session('translated_text'))
        <div class="m-4">
            <strong>Translated Text:</strong> {{ session('translated_text') }}
        </div>
    @endif
</div>
</body>
</html>
