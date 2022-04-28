<form {{ $attributes }}>
    @csrf
    <div>
    {{ $slot }}
    </div>
</form>