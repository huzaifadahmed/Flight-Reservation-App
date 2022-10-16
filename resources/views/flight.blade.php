<x-layout.header/>

<x-layout.template>

    <section>
        <p class="text-2xl text-center mt-8 font-semibold">Flight from {{$flight->departure}} to {{$flight->arrival}} </p>
        <div class="bg-blue-300 h-48 max-w-4xl mx-auto mb-8 mt-6 pr-4 flex items-center-align rounded-xl shadow-sm hover:shadow-md">
            <div class="mx-14 mt-10">
                <p class="text-lg font-semibold mb-8">Date: {{$flight->date}} </p>
            </div>

            <div class="mx-20 mt-10">
                <p class="mb-8 text-lg font-semibold">Price: ${{$flight->price}} </p>
                <p class="mb-8 text-lg font-semibold">Seats Available: {{132 - $flight->passengersCount}}</p>
            </div>
            <div class="mt-10">
                <p class="text-lg font-semibold">Flight Number: {{$flight->flightNumber}}</p>
            </div>
        </div>

        <div class="bg-neutral-200 h-max max-w-4xl mx-auto rounded-lg mb-8 p-4">
        @if($flight->passengersCount <= 144)
            <p class="text-center font-semibold text-2xl">Reserve Your Seat</p>
            <form method="POST" action="/checkout" class="mt-4">
                @csrf
                <div class="flex">
                    <div class="ml-20">
                        <label for="firstName" class="font-semibold">First Name</label>
                        <input name="firstName" type="text" class="rounded-md p-1 hover:shadow-md" placeholder="John" value="{{ old('firstName') }}">
                        @error('firstName')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="ml-16">
                        <label for="lastName" class="font-semibold">Last Name</label>
                        <input name="lastName" type="text" class="rounded-md p-1 hover:shadow-md" placeholder="Doe" value="{{ old('lastName') }}">
                        @error('lastName')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="ml-16">
                        <label for="email" class="font-semibold">Email</label>
                        <input name="email" type="email" class="rounded-md p-1 hover:shadow-md" placeholder="johndoe@mail.com" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-10 w-max mx-auto">
                    <label for="flightNumber" class="font-semibold">Flight Number</label>
                    <input name="flightNumber" class="bg-neutral-400 rounded-md text-black p-1" value="{{$flight->flightNumber}}">
                    @error('flightNumber')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                </div>


                <div class="w-max mx-auto mt-10">
                    <button type="submit" class="bg-green-600 w-44 h-10 text-lg font-semibold rounded-xl text-white hover:bg-green-500">Purchase Ticket</button>
                </div>


            </form>
        </div>
    @else
        <p class="text-center font-semibold text-2xl">This flight is fully booked.</p>
    @endif
    </section>

</x-layout.template>