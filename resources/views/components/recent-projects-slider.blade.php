<div class="px-6 mt-12 py-6 container mx-auto">
    <div class="row bg-custom-gray p-4 rounded-md">
        <h2 class="text-2xl text-center pb-6 font-bold">Recente Projecten</h2>
        <div class="owl-carousel owl-theme px-12">
            @foreach ($slider as $image)
                <div class="item">
                    <img src="{{ asset('assets/img/foto_gallerij' . $image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
