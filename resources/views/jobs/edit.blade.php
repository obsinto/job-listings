<x-layout>

    <x-slot:heading>
        Edit Job {{$job->title}}
    </x-slot:heading>
    <!--
      This example requires some changes to your config:

      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ],
      }
      ```
    -->
    <form METHOD="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="title"
                                       id="title"
                                       value="{{$job->title}}"
                                       autocomplete="title"

                                       class="block flex-1 border-0 bg-transparent py-1.5  px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                       placeholder="Shift Leader">
                            </div>
                            @error('title')
                            <p class="text-red text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror

                            <div class="sm:col-span-4 py-3">
                                <label for="salary"
                                       class="block text-sm/6 font-medium text-gray-900"
                                >Salary</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                        <input type="salary"
                                               name="salary"
                                               id="salary"
                                               value="{{$job->salary}}"

                                               autocomplete="salary"
                                               class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                               placeholder="$50,000 Per Year.">
                                    </div>

                                    @error('salary')
                                    <p class="text-red text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                                    @enderror


                                </div>
                            </div>

                        </div>
                        {{--                        Um exemplo de como lidar com erros em laravel--}}
                        {{--                        @if($errors->any())--}}
                        {{--                            <ul>--}}
                        {{--                                @foreach($errors->all() as $error)--}}
                        {{--                                    <li>{{$error}}</li>--}}
                        {{--                                @endforeach--}}

                        {{--                            </ul>--}}

                        {{--                        @endif--}}
                    </div>


                </div>

                <div class="mt-6 flex items-center justify-between gap-x-6">
                    <div class="flex items-center">
                        <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                    </div>
                    <div class="f lex items-center">
                        <a href="/jobs/{{$job->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Update
                        </button>

                    </div>

                </div>
    </form>
    <form id="delete-form" method="POST" action="/jobs/{{$job->id}}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
