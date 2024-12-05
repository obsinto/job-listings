<x-layout>

    <x-slot:heading>
        Create a new Job
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
    <form METHOD="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="title">Salary</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="Salary" required/>

                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>


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

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>

            <x-form-button type="submit">Save</x-form-button>
        </div>
    </form>

</x-layout>
