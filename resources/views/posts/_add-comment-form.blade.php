@auth
<x-panel>

    <form action="/posts/{{$post->slug}}/comments" method="POST">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" heihgt="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>

        <div>
            <x-form.textarea name="body"></x-form.textarea>

            <x-form.error name="body"/>
        </div>

        <div>
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-panel>
@endauth
