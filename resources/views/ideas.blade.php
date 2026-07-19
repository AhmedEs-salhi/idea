@props([
    'ideas' => $ideas
])

<x-layout title="Home Page">
    <div class="flex gap-5 items-center bg-base-200 p-5 rounded-xl">
        @foreach($ideas as $idea)
            <x-card>
                <div class="card-body">{{ $idea }}</div>
            </x-card>
        @endforeach
    </div>
    <div class="flex justify-end mt-5">
        <a href="/add-idea">
            <button class="btn btn-secondary">Add New Idea</button>
        </a>
    </div>
</x-layout>
