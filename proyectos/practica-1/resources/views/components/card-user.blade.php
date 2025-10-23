@props(['nombre' => '', 'descripcion' => ''])




<div class="border-2 border-black border-solid" style="box-shadow: 3px 3px 10px rgb(0, 0, 0,  0.15); width: 300px;">


    <div>
        <p>{{ $nombre }}</p>
    </div>

    <div style="margin: 2em;">
        <p>{{ $descripcion }}</p>
    </div>
</div>