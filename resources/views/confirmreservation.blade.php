<x-layout.header/>

<x-layout.template>
<section class="xl:max-w-7xl mx-auto max-w-7xl">
            <div>
                <img src="images/jet3.jpg">
            </div>
            
            <p class="text-center font-semibold text-4xl mt-4 mb-4">Confirm Your Flight Reservation</p>

            <div class="bg-gray-200 w-max h-46 mx-auto mt-4 mb-4 p-4 rounded-md">

                <p class="font-semibold text-center text-xl">Enter your last name and flight number.</p>

                <form name="form2" id="form2" method="GET" action="/reservationsearch" class="px-4 pt-6">
                    <div class="flex">
                        <div class="mr-12">
                            <label for="lastName" class="font-semibold block">Last Name</label>
                            <input type="text" name="lastName" class="border-2 border-black rounded-md p-1" value="{{old('lastName')}}">
                            @error('lastName')
                            <p class="text-red-500 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="flightNumber" class="font-semibold block">Flight Number</label>
                            <input type="text" name="flightNumber" class="border-2 border-black rounded-md p-1" value="{{old('flightNumber')}}">
                            @error('flightNumber')
                            <p class="text-red-500 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="w-max mx-auto mt-4">
                        <button type="submit" class="bg-blue-700 w-40 h-10 mt-4 text-lg font-semibold rounded-xl text-white hover:bg-blue-500">Get Booking Info</button>
                    </div>
                </form>

            </div>
        </section>
</x-layout.template>
