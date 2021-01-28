<!-- border-red-500 border-orange-500 border-yellow-500 border-green-500 border-teal-500 border-blue-500 border-indigo-500 border-purple-500 border-pink-500 -->
<div class="group bg-gray-100 transition-all leading-normal p-8 rounded-md transform hover:-translate-y-2 hover:shadow-md">
    <a href="{{ $entry->augmentedValue('url') }}" class="flex flex-col h-full no-shadow block text-gray-700 no-underline mb-4 hover:text-gray-900">
        <span class="flex gap-2 mb-8 items-center">
            <i class="inline-block rounded-full bg-{{ $entry->value('color') ? $entry->value('color')['label'] : '' }}-500 w-4 h-4"></i>
            <small class="block">{{ $entry->augmentedValue('date') }}</small>
        </span>
        <h3 class="text-lg font-bold mt-px mb-8">{{ $entry->augmentedValue('title') }}</h3>
        @if($header = collect($entry->augmentedValue('contents')->value())->where('type', 'header')->first())
            <div class="prose prose-lg mb-8">
                <p>{!! modify(\Illuminate\Support\Str::limit(modify($header['header']->value())->striptags(), 150))->smartypants() !!}</p>
            </div>
        @endif

        <span class="flex items-center transition-all gap-2 group-hover:gap-4 mt-auto">
            <span>Continue reading</span>
            <span class="w-4 h-4 inline-block">{!! tag('svg', ['src' => '/assets/svg/long-arrow-right.svg']) !!}</span>
        </span>
    </a>
</div>
