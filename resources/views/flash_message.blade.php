<div class="flash_message">
    @if(count($errors))
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @elseif(session('status'))
        {{ session('status') }}
    @else
        Welcome to your dayplanner!
    @endif
</div>
