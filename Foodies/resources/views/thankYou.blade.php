<x-guest-layout>
    <div class="pl-4 pt-4 bg-blue-50 rounded-lg">
        <h5 class="mb-3 text-xl font-semibold tracking-tight text-green-600">Dear {{$reservation->firstName}} {{$reservation->lastName}},</h5>
        <div class="pt-2 font-semibold" style="letter-spacing:1px">
            <p class="card-text">You reserved the table {{$reservation->table_id}} on {{$reservation->resDate}} for {{$reservation->guestsNumber}} guests</p>
            <p>Please Note that you can't cancel this reservation after 3 hours of placing it or fees will apply</p>
            <p class="leading-normal text-gray-700">Looking forward for your visit!</p>

            <button type="submit"
                    class=" mt-4 px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white"><a href="#">contact us</a></button>

            <br>
            <button type="submit"
                    class=" mb-2 mt-4 px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                <a href="/">
                    Home
                </a>
            </button>
        </div>
    </div>
</x-guest-layout>
