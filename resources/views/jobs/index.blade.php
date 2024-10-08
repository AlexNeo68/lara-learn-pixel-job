<x-layout>
    <div class="space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">Let`s find your next job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web deloper ..."
                    class="rounded bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl" />
            </form>
        </section>


        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section class="pt-10">
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach


            </div>
        </section>
    </div>
</x-layout>
