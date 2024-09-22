@if ($errors->any())
<div class="alert alert-error">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif
