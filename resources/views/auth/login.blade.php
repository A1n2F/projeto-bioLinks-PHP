<x-layout.app>
    <div class="h-full w-full flex items-center justify-center">
        <div class="card bg-slate-700 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">LOGIN</h1>
        
                @if ($message = session()->get('message'))
                    <div>{{ $message }}</div>
                @endif
            
            
                <form action="{{ route('login') }}" method="post" id="login-form">
                    @csrf
            
                    <div>
                        <input name="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered bg-gray-600"/>
                        @error('email')
                            <div class="text-error font-semibold mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                        <br>   
                    <div>
                        <input type="password" name="password" placeholder="Senha" class="input input-bordered bg-gray-600"/>
                        @error('password')
                            <div class="text-error font-semibold mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                        <br>
                </form>

                <div class="card-actions">
                    <button class="btn btn-primary" type="submit" form="login-form">Logar</button>
                </div>
           </div>
        </div>
    </div>
</x-layout.app>

