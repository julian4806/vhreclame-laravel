<div class="px-6 mt-12 py-6">
    <div class="row bg-slate-200 p-4 pt-10 rounded-md">
        <h2 class="text-2xl text-center pb-6">Recente Projecten</h2>
        <div class="owl-carousel owl-theme px-12">
            @foreach ($slider as $image)
                <div class="item">
                    <img src="{{ asset('assets/img/foto_gallerij' . $image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
