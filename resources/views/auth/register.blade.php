<x-layout>
    <x-slot:title>
        Sign Up
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content w-full flex-col">
            <div class="card w-full max-w-sm bg-base-100 shadow-xl">
                <div class="card-body">
                    <h1 style="font-size: 2.5rem; font-weight: 800; text-align: center; margin-bottom: 1.5rem;">Create Account</h1>

                    <form method="POST" action="{{ route('signup') }}">
                        @csrf

                        <div class="form-control w-full mb-4">
                            <label class="label"><span class="label-text">Name</span></label>
                            <input type="text" name="name" placeholder="John Doe" value="{{ old('name') }}"
                                   class="input input-bordered w-full @error('name') input-error @enderror" required>
                            @error('name')
                                <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-4">
                            <label class="label"><span class="label-text">Email</span></label>
                            <input type="email" name="email" placeholder="mail@example.com" value="{{ old('email') }}"
                                   class="input input-bordered w-full @error('email') input-error @enderror" required>
                            @error('email')
                                <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-4">
                            <label class="label"><span class="label-text">Password</span></label>
                            <input type="password" name="password" placeholder="••••••••"
                                   class="input input-bordered w-full @error('password') input-error @enderror" required>
                            @error('password')
                                <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-6">
                            <label class="label"><span class="label-text">Confirm Password</span></label>
                            <input type="password" name="password_confirmation" placeholder="••••••••"
                                   class="input input-bordered w-full" required>
                        </div>

                        <div class="form-control mt-2">
                            <button type="submit" class="btn btn-primary w-full">Sign Up</button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    <p class="text-center text-sm">
                        Already have an account? 
                        <a href="/login" class="link link-primary">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>