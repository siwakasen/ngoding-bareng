<style>
    .owl-carousel a {
        text-decoration: none;
        color: black;
    }
</style>

<div class="owl-carousel owl-theme">
    @foreach ($courses as $item)
        <div class="card-wrapper mb-2">
            <a class="card shadow" style="width: 100%;" href="{{ route('addItemToCart', ['id_course' => $item->id]) }}">
                <img src="{{ asset($item->thumbnail) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->category->name }}</p>
                </div>
                <div class="card-footer">
                    <p class="card-text">Buy: {{ $item->price }}</p>
                </div>
            </a>
        </div>
    @endforeach
    {{-- @if (session('cart_item_added'))
        <script>
            $(document).ready(function() {
                $('#modalBuy').modal('show');
            });
        </script>
        @php
            session()->forget('cart_item_added');
        @endphp
    @endif --}}
</div>
<div class="modal fade" id="modalBuy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 300px;">
        <div class="modal-content">
            <div class="modal-header bg-primary p-2">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Notification</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-body-tertiary rounded-bottom">
                Successfully adding to your cart
            </div>
        </div>
    </div>
</div>
