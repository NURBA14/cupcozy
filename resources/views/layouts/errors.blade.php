@if ($errors->any())
<div class="container text-center my-4">
    @foreach ($errors->all() as $error)
        <p class="text-dark mb-2">{{ $error }}</p>
    @endforeach
</div>
@endif