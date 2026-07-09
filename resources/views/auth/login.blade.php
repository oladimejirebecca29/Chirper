<x-layout>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col w-full">
            <div class="card w-full max-w-sm bg-base-100 shadow-xl">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Welcome Back</h1>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="form-control w-full mb-4">
                            <label class="label">
                                <span class="label-text font-semibold">Email Address</span>
                            </label>
                            <input type="email"
                                   name="email"
                                   placeholder="mail@example.com"
                                   value="{{ old('email') }}"
                                   class="input input-bordered w-full @error('email') input-error @enderror"
                                   required
                                   autofocus>
                            @error('email')
                                <span class="text-error text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-4">
                            <label class="label">
                                <span class="label-text font-semibold">Password</span>
                            </label>
                            <input type="password"
                                   name="password"
                                   placeholder="••••••••"
                                   class="input input-bordered w-full @error('password') input-error @enderror"
                                   required>
                            @error('password')
                                <span class="text-error text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-control mt-2">
                            <label class="label cursor-pointer justify-start gap-2">
                                <input type="checkbox"
                                       name="remember"
                                       class="checkbox checkbox-sm">
                                <span class="label-text">Remember me</span>
                            </label>
                        </div>

                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary w-full">
                                Sign In
                            </button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    <p class="text-center text-sm">
                        Don't have an account?
                        <a href="/signup" class="link link-primary font-bold">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>