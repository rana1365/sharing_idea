@extends('layout.layout')
@section('content')
    <div class="row">
        @include('layout.sidebar')
        <div class="col-6">
            <h2>Terms </h2>
            <p>Curabitur fringilla nec urna sit amet eleifend. Suspendisse sodales vitae tellus sit amet dictum.
                Vivamus condimentum blandit interdum. Donec ac placerat enim. Pellentesque elementum condimentum massa,
                id condimentum lorem maximus sit amet. Vivamus accumsan imperdiet urna, eget malesuada felis iaculis quis.
                Nunc orci neque, blandit nec lorem eu, mattis porta erat. Etiam et imperdiet tellus. Nulla ac gravida tellus.
                Integer imperdiet lorem sed mattis fermentum. Ut ultricies placerat sapien eu scelerisque. In eget lacus a arcu vulputate tempus.
                Maecenas eget rhoncus tellus. Donec ac justo tortor. Sed rhoncus, arcu sit amet accumsan mattis, urna ex sodales nunc, a volutpat justo erat nec quam.
            </p>
        </div>

        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>

    </div>

@endsection
