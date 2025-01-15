<nav class="bg-primary">
    <div class="container flex flex-col justify-between items-center md:flex-row">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}">
                @if ($company)
                    <img class="w-auto max-w-[120px] m-4" src="{{ asset(Storage::url($company->logo)) }}"
                        alt="{{ $company->name }}">
                @else
                    <img class="w-auto max-w-[120px] m-4" src="#"
                        alt="No company info set up done">
                @endif
            </a>
        </div>

        <form action="" method="get" class="md:order-2">
            <div class="flex items-center">
                <input type="text" name="q" id="q" placeholder="Search" class="flex-grow-0 mr-2">
                <button class="px-4 py-2 font-bold bg-gray-200 rounded primary">Compare</button>
            </div>
        </form>

        <div class="flex gap-2 md:order-3">
            <a href="{{ route('login') }}" class="p-2 rounded bg-secondary primary">SignIn</a>
            <a href="{{ route('register') }}" class="border border-[var(--secondary)] p-2 rounded secondary">SignUp</a>
        </div>
    </div>
</nav>
