<x-layout.header/>
<x-layout.template>
    <section>
        <p class="text-4xl text-center mt-8 font-semibold">Available Flights</p>
        @foreach ($flights as $flight)
        <div class="bg-neutral-200 h-32 max-w-4xl mx-auto my-8 flex items-center-align rounded-xl shadow-sm hover:shadow-md">
            <div class="mx-20 mt-8">
                <p>Departure from: {{$flight->departure}} </p>
                <p>Destination: {{$flight->arrival}}</p>
                <p>Date: {{$flight->date}} </p>
            </div>

            <div class="mx-20 mt-10">
                <p>Price: <span class="font-semibold">${{$flight->price}}</span> </p>
                <p>Seats Available: {{144 - $flight->passengersCount}}</p>
            </div>

            <!-- <div class="ml-4 mt-10">
                <p>Aircraft: </p>
            </div> -->

            <!-- Only displays button to reserve seat if there are seats available. -->
            @if($flight->passengersCount <= 144)
                <button class="bg-yellow-500 w-24 h-10 mt-10 ml-auto mr-8 text-lg font-semibold rounded-xl text-white hover:bg-yellow-400"><a href="/flight/{{$flight->flightNumber}}">Select</a></button>

            @else
                <button class="bg-neutral-500 w-36 h-10 mt-10 ml-auto mr-8 text-lg font-semibold rounded-xl text-white"><a href="#">Flight is Full</a></button>
            @endif

        </div>
        @endforeach
    </section>

</x-layout.template>