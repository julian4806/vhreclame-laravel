<div class="h-60 flex bg-slate-200 items-center justify-center relative">
    <img src="{{ asset('assets/img/' . $image) }}" class="background-image">
    <div class="z-10 text-white bg-[#00000050] p-2 rounded-md shadow-md">
        <h2 class="text-2xl text-center font-bold">{{ $slot }}</h2>
        <h2 class="text-center">
            <a href="/" class="hover:text-red-500">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
            <span> > {{ $slot }}</span>
        </h2>
    </div>```
</div>
