<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)

            <a href="/jobs/{{$job['id']}}" class="  block px-4 py-6 border border-gray-200 rounded-lg">
                <div CLASS="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong>{{$job->id}} {{$job['title']}}</strong> Pays: ${{$job['salary']}} USD per year.
                </div>
            </a>

        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>


    </div>


</x-layout>

