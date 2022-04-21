<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach($feedbacks as $feedback)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600">
                            {{ $feedback->firstName }} {{ $feedback->lastName }}
                        </h4>
                        <p class="leading-normal text-gray-700">
                            {{ $feedback->feedback }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
