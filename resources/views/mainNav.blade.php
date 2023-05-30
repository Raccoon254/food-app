<!doctype html>
<html lang="en" class="dark">
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
@php
    $currentUrl = url()->current();
    $baseUrl = url('/');
    $route = \Illuminate\Support\Str::replaceFirst($baseUrl, '', $currentUrl);

$languages = [
    'ru' => 'Russian',
    'sw' => 'Swahili',
    'en' => 'English',
    'es' => 'Spanish',
    'fr' => 'French',
    'de' => 'German',
    'it' => 'Italian',
    'pt' => 'Portuguese',
    'ja' => 'Japanese',
    'zh' => 'Chinese',
    'hi' => 'Hindi',
    'ar' => 'Arabic',
    'ko' => 'Korean',
    'tr' => 'Turkish',
    'vi' => 'Vietnamese',
    'nl' => 'Dutch',
    'el' => 'Greek',
    'pl' => 'Polish',
    'sv' => 'Swedish',
    'no' => 'Norwegian',
    'da' => 'Danish',
    'fi' => 'Finnish',
    'he' => 'Hebrew',
    'hu' => 'Hungarian',
    'ro' => 'Romanian',
    'cs' => 'Czech',
    'id' => 'Indonesian',
    'th' => 'Thai',
    'af' => 'Afrikaans',
    'is' => 'Icelandic',
];

@endphp
 @if($route==="/cart")
     <div class="sticky top-0 sm:top-0 z-50 px-3">
         @include('navbar')
     </div>
 @elseif($route==="/translate")
     <div class="sticky top-0 sm:top-0 z-50 px-3">
         @include('navbar')
     </div>

 @else
     <div class=" top-0 z-50 px-3">
         @include('navbar')
     </div>
     <div class=" sticky top-0 sm:top-0 z-40">
         @include('categories', ['categories' => App\Models\Product::all()->pluck('category')->unique()])
     </div>
 @endif

<div class="translate-section">
    <form id="languageSelectForm">
        <label for="languageSelect"></label><select id="languageSelect">
            @foreach($languages as $code => $name)
                <option value="{{ $code }}">{{ $name }}</option>
            @endforeach
        </select>
        <button type="submit" class="data">Translate</button>
    </form>
</div>

<script>
    //wait for the page to fully load
    window.addEventListener('load', function () {
        document.querySelector('#languageSelectForm').addEventListener('submit', function(e) {
            e.preventDefault(); // prevent form submission
            const language = document.querySelector('#languageSelect').value;

            const elementsToTranslate = document.querySelectorAll('.data');
            const textsToTranslate = Array.from(elementsToTranslate).map((element, index) => ({
                id: index,
                text: element.textContent
            }));

            fetch('/translate-text', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    texts: textsToTranslate,
                    language: language
                })
            })
                .then(response => response.json())
                .then(data => {
                    data.forEach(item => {
                        elementsToTranslate[item.id].textContent = item.text;
                    });
                });
        });

    });

</script>
</body>
</html>
