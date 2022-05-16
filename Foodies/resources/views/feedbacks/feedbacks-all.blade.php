<x-guest-layout>
    <div class="container  w-full px-5 py-6 mx-auto ml-auto">
        <h2 class="pl-2 font-semibold max-h-6" style="letter-spacing: 2px"><strong>Feedbacks</strong></h2>
        <br>
        <div class="row gap-y-6">
            @foreach($feedbacks as $feedback)
                <div class="max-w-full  mb-2 rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <div class="inline-flex">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 pt-3">
                                {{ $feedback->firstName }} {{ $feedback->lastName }}
                            </h4>
                            @if($feedback->rating == 5)
                                <img src={{Storage::url('5stars.jpeg')}}
                                    alt="image" height="70" width="200" class="pl-2 pt-3">
                            @endif
                            @if($feedback->rating == 4)
                                <img src={{Storage::url('4stars.jpg')}}
                                    alt="image" height="70" width="200" class="pl-2">
                            @endif
                            @if($feedback->rating == 3)
                                <img src={{Storage::url('3stars.jpg')}}
                                    alt="image" height="70" width="200" class="pl-2">
                            @endif
                            @if($feedback->rating == 2)
                                <img src={{Storage::url('2stars.jpg')}}
                                    alt="image" height="70" width="200" class="pl-2 pt-0">
                            @endif
                            @if($feedback->rating == 1)
                                <img src={{Storage::url('1stars.jpg')}}
                                    alt="image" height="70" width="200" class="pl-2">
                            @endif
                        </div>
                        <p class="leading-normal text-gray-700">
                            {{ $feedback->feedback }}
                        </p>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
</x-guest-layout>
