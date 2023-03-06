<div class="h-60 flex bg-slate-200 items-center justify-center">
    <div>
        <h2 class="text-2xl text-center">{{ $slot }}</h2>
        <h2 class="text-center">
            <a href="/" class="hover:text-red-500">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
            <span> > {{ $slot }}</span>
        </h2>
    </div>
</div>
