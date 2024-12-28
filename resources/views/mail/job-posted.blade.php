<x-mail::message>
    Your job "{{ $job->title }}" has posted!

    <x-mail::button :url="url('/jobs/' . $job->id)">
        View your job here!
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
