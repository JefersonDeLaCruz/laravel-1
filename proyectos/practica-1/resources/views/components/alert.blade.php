<div>
    {{-- componente de alerta reutilizable con bootstrap --}}

    <div class="alert {{ $tipoAlerta }}" role="alert">
        {{ $slot }}
    </div>
    
</div>