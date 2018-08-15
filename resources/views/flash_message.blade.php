<div class="flash_message">
    @if(count($errors))
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @else
        {{ session('status') }}
    @endif
</div>