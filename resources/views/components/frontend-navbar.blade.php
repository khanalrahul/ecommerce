<nav class="bg-primary">
    <div class="container flex flex-col items-center justify-between md:flex-row"> 
      <div class="flex items-center justify-between">
        <a href="{{ route('home') }}">
          <img class="w-auto max-w-[120px] m-4" src="{{ asset(Storage::url($company->logo)) }}" alt="{{ $company->name }}">
        </a>
      </div>
  
      <form action="" method="get" class="md:order-2">
        <div class="flex items-center">
          <input type="text" name="q" id="q" placeholder="Search" class="flex-grow-0 mr-2">
          <button class="bg-gray-200 primary font-bold px-4 py-2 rounded">Compare</button>
        </div>
      </form>
  
      <div class="flex gap-2 md:order-3">
        <a href="{{ route('login') }}" class="bg-secondary p-2 rounded primary">SignIn</a>
        <a href="{{ route('register') }}" class="border border-[var(--secondary)] p-2 rounded secondary">SignUp</a>
      </div>
    </div>
  </nav>