@if(session('success'))
<div class="container text-center my-4">
    <p class="text-dark mb-0">{{ session('success') }}</p>
</div>
@endif