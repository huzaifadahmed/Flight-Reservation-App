<x-layout.header/>

<x-layout.template>
<section class="xl:max-w-7xl mx-auto max-w-7xl">
            <div>
                <img src="images/jet3.jpg">
            </div>
            
            <p class="text-center font-semibold text-4xl mt-4 mb-4">Flight Reservation Details for {{$passenger->firstName}} {{$passenger->lastName}}</p>

            <div class="bg-gray-200 w-max h-46 mx-auto mt-4 mb-4 p-4 rounded-md">

                <div class="bg-neutral-200 h-32 max-w-4xl mx-auto my-8 flex items-center-align rounded-xl shadow-sm hover:shadow-md">
                    <div class="mx-20 mt-8">
                        <p>Departure from: {{$passenger->flight->departure}} </p>
                        <p>Destination: {{$passenger->flight->arrival}}</p>
                        <p>Date: {{$passenger->flight->date}} </p>
                    </div>

                </div>

            </div>
        </section>
</x-layout.template>
