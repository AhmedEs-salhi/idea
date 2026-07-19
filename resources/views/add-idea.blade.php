<x-layout>
    <div class="flex justify-center bg-base-200 p-5 rounded-xl">
        <form method="POST" action="/add-idea">
            @csrf
            <div class="text-xl">New Idea</div>
            <textarea id="idea" name="idea" class="textarea mt-5 w-2xl"></textarea>
            <p class="text-sm mt-3">Save your ideas here</p>
            <button type="submit" class="mt-3 btn btn-secondary">Save</button>
        </form>
    </div>
</x-layout>
