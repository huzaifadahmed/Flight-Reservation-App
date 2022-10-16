<x-layout.header/>
<x-layout.template>
    <section>
        <div class="bg-neutral-200 w-max h-max mx-auto my-8 rounded-lg px-6 pb-8">
            <p class="text-center p-4 font-bold text-2xl">Create a new flight</p>

            <form method="POST" action="/createflight">
                @csrf
                <div class="flex">
                    <div class="w-1/2">
                        <label for="departure" class="font-semibold block">Departure</label>
                        <select name="departure" class="border-2 border-black rounded-md p-1 w-full">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>
                        @error('departure')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="ml-6 w-1/2">
                        <label for="arrival" class="font-semibold block">Arrival</label>
                        <select name="arrival" class="border-2 border-black rounded-md p-1 w-full">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>
                        @error('arrival')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex mt-4">
                    <div class="">
                        <label for="basePrice" class="font-semibold block">Base Price</label>
                        <input name="basePrice" type="number" class="rounded-md p-1 hover:shadow-md" placeholder="$500" value="{{ old('basePrice') }}" min="1">
                        @error('basePrice')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="ml-6">
                        <label for="date" class="font-semibold block">Date</label>
                        <input name="date" type="date" class="rounded-md p-1 hover:shadow-md" value="{{ old('date') }}">
                        @error('date')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <label for="aircraft" class="font-semibold">Select Aircraft:</label>
                    <select name="aircraft" class="p-1 w-full">
                        <option value="aircraft_1">Aircraft 1</option>
                        <option value="aircraft_2">Aircraft 2</option>
                        <option value="aircraft_3">Aircraft 3</option>
                    </select>
                    @error('aircraft')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                </div>
                <div class="mx-auto w-max mt-8">
                    <button type="submit" class="bg-green-600 w-24 h-10 text-lg font-semibold rounded-xl text-white hover:bg-green-500">Create</button>
                </div>
            </form>

        </div>
    </section>
</x-layout.template>