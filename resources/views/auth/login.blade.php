<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/jobs" class="mt-4"> <!-- Reduced top margin -->
        @csrf
        <div class="space-y-8"> <!-- Reduced from space-y-12 -->
            <div class="border-b border-gray-900/10 pb-8"> <!-- Reduced padding bottom -->
                <div class="grid grid-cols-2 gap-x-6 gap-y-6"> <!-- Removed mt-10 and adjusted gap -->
                    <div class="space-y-6"> <!-- Added consistent spacing -->

                        <x-form-field>
                            <x-form-label for="title">email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" placeholder="email" required/>
                                <x-form-error name="email"/>
                            </div>
                        </x-form-field>
                    </div>

                    <div class="space-y-6"> <!-- Added consistent spacing -->
                        <x-form-field>
                            <x-form-label for="title">password</x-form-label>
                            <div class="mt-2">
                                <x-form-input type="password"
                                              name="password"
                                              id="password"
                                              placeholder="password"
                                              required/>
                                <x-form-error name="password"/>
                            </div>
                        </x-form-field>


                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>
</x-layout>
