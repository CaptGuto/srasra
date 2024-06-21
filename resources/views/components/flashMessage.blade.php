@if (session()->has('message'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="position-fixed top-0 start-50 translate-middle-x bg-success text-white px-5 py-3 rounded shadow">
    <p class="mb-0 text-center">
        {{ session('message') }}
    </p>
</div>
@endif