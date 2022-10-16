<x-layout.header/>
<x-layout.template>
    <section>
        <div class="bg-neutral-200 w-96 h-full pb-8 rounded-lg my-8 mx-auto">
            <p class="text-lg font-bold p-4">Admin Login</p>

            <form action="/login" method="POST">
                @csrf
                <div class="ml-4 mr-12">
                    <label for="email" class="font-semibold block">Email</label>
                    <input name="email" type="email" class="rounded-md p-1 hover:shadow-md w-full" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                </div>
                <div class="ml-4 mr-12 mt-4">
                    <label for="password" class="font-semibold block">Password</label>
                    <input name="password" type="password" class="rounded-md p-1 hover:shadow-md w-full" placeholder="Password" value="{{ old('password') }}">
                    @error('password')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-green-600 w-20 h-8 mt-8 ml-4 text-lg font-semibold rounded-xl text-white hover:bg-green-500">Login</button>
            </form>
            
        </div>
    </section>
</x-layout.template>
