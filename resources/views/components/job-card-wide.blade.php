<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>



    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">Laracasts</a>

        <h3 class="group-hover:text-blue-800 text-xl mt-3 font-bold">Video producer</h3>

        <p class="text-sm mt-auto text-gray-400">Full time - From $60,000</p>
    </div>


    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>



</x-panel>
