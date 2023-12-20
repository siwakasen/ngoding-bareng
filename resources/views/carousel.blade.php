<style>
    .owl-carousel a {
        text-decoration: none;
        color: black;
    }
</style>

<div>
    <div class="owl-carousel owl-theme">
        @foreach ($courses as $item)
            <div class="card-wrapper mb-2">
                    <a class="card shadow" style="width: 100%; "
                        href="{{ route('addItemToCart', ['id_course' => $item->id]) }}">
                        <img src="{{ asset($item->thumbnail) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->category->name }}</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">Buy: {{ $item->price }}</p>
                        </div>
                    </a>
                </a>
            </div>
        @endforeach
    </div>
</div>
