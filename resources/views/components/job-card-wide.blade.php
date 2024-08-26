<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>



    <div class="flex-1 flex flex-col">
        <a href="/employers/{{ $job->employer->id }}"
            class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>

        <h3 class="group-hover:text-blue-800 text-xl mt-3 font-bold">{{ $job->title }}</h3>

        <p class="text-sm mt-auto text-gray-400">{{ $job->shedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>



</x-panel>
