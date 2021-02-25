<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RAMACCI</title>
    <link rel="stylesheet" href="assets/css/stylebackend.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="main-container">
        <!--Sidebar Section-->
            @include('layoutsBack.sidebar')
        <!--End Sidebar Section-->

        <div class="content-container">

            <div class="header">
                <div class="header-text">Nuevo artículo</div>
            </div>

            <form action="/productos/{{ $product['id'] }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class="form-container">
                    <div class="form-input-group">
                        <label for="">Código</label>
                        <input type="text" name="code" value="{{ $product['code'] }}">
                        <label for="">Nombre</label>
                        <input type="text" name="name" value="{{ $product['name'] }}">
                        <label for="">Descripción</label>
                        <textarea id="" cols="30" rows="10" name="description">{{ $product['description'] }}</textarea>
                        <label for="">Categoría</label>
                        <select name="category">
                            <option @if ($product['category'] == 'sweater') selected @endif value="sweater">Sweater</option>
                            <option @if ($product['category'] == 'campera') selected @endif value="campera">Campera</option>
                            <option @if ($product['category'] == 'chaleco') selected @endif value="chaleco">Chaleco</option>
                            <option @if ($product['category'] == 'pashmina') selected @endif value="pashmina">Pashmina</option>
                            <option @if ($product['category'] == 'bufanda') selected @endif value="bufanda">Bufanda</option>
                            <option @if ($product['category'] == 'pantalon') selected @endif value="pantalon">Pantalón</option>
                            <option @if ($product['category'] == 'otro') selected @endif value="otro">Otro</option>
                        </select>
                        <label for="">Género</label>
                        <select name="gender">
                            <option @if ($product['gender'] == 'dama') selected @endif value="dama">Dama</option>
                            <option @if ($product['gender'] == 'caballero') selected @endif value="caballero">Caballero</option>
                        </select>
                        <label for="">Colección</label>
                        <select name="collection_season">
                            <option @if ($product['collection_season'] == 'otoño') selected @endif value="otoño">Otoño</option>
                            <option @if ($product['collection_season'] == 'invierno') selected @endif value="invierno">Invierno</option>
                            <option @if ($product['collection_season'] == 'primavera') selected @endif value="primavera">Primavera</option>
                            <option @if ($product['collection_season'] == 'verano') selected @endif value="verano">Verano</option>
                            <option @if ($product['collection_season'] == 'oto-inv') selected @endif value="oto-inv">Otoño - Invierno</option>
                            <option @if ($product['collection_season'] == 'prim-ver') selected @endif value="dama">Primavera - Verano</option>
                        </select>
                        <input type="text" name="season" value="{{ $product['collection_season'] }}">
                        <input type="number" name="season" value="{{ $product['collection_year'] }}">
                        <label for="">Stock</label>
                        <input type="text" name=stock value="{{ $product['stock'] }}">
                        <label for="">Precio actual</label>
                        <input type="text" name="price" value="{{ $product['price'] }}">
                        <label for="">Talle(s)</label>
                        <input type="checkbox" name="has_size_1" @if ($product['has_size_1'] == 1) checked @endif>
                        <input type="checkbox" name="has_size_2" @if ($product['has_size_2'] == 1) checked @endif>
                        <input type="checkbox" name="has_size_3" @if ($product['has_size_3'] == 1) checked @endif>
                        <input type="checkbox" name="has_size_4" @if ($product['has_size_4'] == 1) checked @endif>
                        <input type="checkbox" name="has_size_5" @if ($product['has_size_5'] == 1) checked @endif>

                        <label for="">Mostrar</label>
                        <input type="checkbox" name="show" @if ($product['show'] == 1) checked @endif>

                        <label for="">en Novedades</label>
                        <input type="checkbox" name="in_novelties" @if ($product['in_novelties'] == 1) checked @endif>

                        <label for="">en Destacados</label>
                        <input type="checkbox" name="in_populars" @if ($product['in_populars'] == 1) checked @endif>

                        <label for="">en Rebajas</label>
                        <input type="checkbox" name="in_discounts" @if ($product['in_discounts'] == 1) checked @endif>


                        <input type="submit" value="Guardar Cambios">
                    </div>
                </div>









        </div>



    </div>
</body>

</html>
