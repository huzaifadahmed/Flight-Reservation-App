<x-layout.header/>

<x-layout.template>
        <section class="xl:max-w-7xl mx-auto max-w-7xl">
            <div>
                <img src="images/jet2.jpg">
            </div>
            
            <p class="text-center font-semibold text-4xl mt-4 mb-4">Select your flight date</p>


            <div class="bg-gray-200 w-max h-36 mx-auto mt-4 mb-4">

                <form name="form" id="form" method="GET" action="/search" class=" px-4 pt-6 flex items-center-align rounded-md">

                    <div class="mx-12">
                        <label for="from" class="font-semibold block">From</label>
                        <select name="from" id="from" class="border-2 border-black rounded-md p-1">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>

                    </div>

                    <div class="mx-12">
                        <label for="to" class="font-semibold block">To</label>
                        <select name="to" class="border-2 border-black rounded-md p-1">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>

                    </div>

                    <div class="mx-12"> 
                        <label for="date" class="font-semibold block">Search for Departing Flights Between:</label>
                        <div>
                            <input type="date" name="fromDate" class="border-2 border-black rounded-md p-1" value="{{old('fromDate')}}">
                            - <input type="date" name="toDate" class="border-2 border-black rounded-md p-1" value="{{old('toDate')}}">
                        </div>
                        @error('date')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <button type="submit" class="bg-blue-700 w-28 h-10 mt-4 text-lg font-semibold rounded-xl text-white hover:bg-blue-500">Search</button>

                </form>
                @error('to')
                <p class="text-red-500 text-sm text-center block mt-4">{{$message}}</p>
                @enderror
            </div>
        </section>
</x-layout.template>