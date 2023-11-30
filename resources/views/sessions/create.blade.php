<x-formlayout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounde-xl">
         <div class="registration-form">
        <h1 class="text-center font-bold text-xl">Log In</h1>
      
            <form method="POST" action="/login" class="mt-10">
            @csrf
            
       
                 
               <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                    type="email" name="email" id="email" value="{{old('email')}}"
                    required>
                </div>                  
                   @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror  

                  <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                </div>

                  @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                 

                  <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hpver:bg-blue-500">
                        LOG In
                    
                    </button>
                </div>

                @if ($errors->any())
                        <ul>
                        @foreach ($errors->all() as $error )
                            <li class="text-red-500 text-xs ">{{$error}}</li>
                        @endforeach
                        </ul>
                        @endif
            </form>
        </div>
        </main>
    </section>
 @if (session()->has('success'))
     <div class="text-green-500 mt-2">
       <p>  {{session()->get(success)}} </p>
     </div>
     
 @endif
     
        
        </x-formlayout>