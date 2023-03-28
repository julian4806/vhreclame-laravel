<script>
    @if (session('message'))
        alert('{{ session('message') }}');
    @endif
</script>
