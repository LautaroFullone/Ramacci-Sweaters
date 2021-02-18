<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RAMACCI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style scoped>
    .main-container {
        display: grid;
        grid-template-columns: 250px auto;
        font-family: sans-serif;
    }

    .content-container {
        background-color: #fedcd2;
    }

    .form-input-group {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #fff;
    }

    .form-input-group,
    .image-section {
        border-radius: 10px;
    }

    .form-input-group .row-1 {
        display: grid;
        grid-template-columns: 100px auto;
        grid-gap: 20px;
    }

    .form-input-group .row-2 {
        display: grid;
        grid-template-columns: 1fr 1fr 3fr;
        grid-gap: 10px;
        margin-bottom: 10px;
    }

    .form-input-group .row-2 .collection-row {
        display: grid;
        grid-template-columns: auto 75px;
        grid-gap: 10px;
    }

    .form-input-group .row-2 .collection-section {
        background-color: #deb13a;
        height: 60px;
        padding: 5px;
        text-align: center;
        border-radius: 5px;
    }

    .form-input-group .row-2 select {
        height: 34px;
    }

    .form-input-group .row-3 {
        display: grid;
        grid-template-columns: 150px 100px auto;
        grid-gap: 20px;
    }

    .header {
        display: grid;
        grid-template-columns: 50% 50%;
        justify-content: space-between;
        width: 100%;
        height: 80px;
        box-sizing: border-box;
        padding: 20px;
        font-size: 30px;
        background-color: #eee;
        font-family: sans-serif;
        align-items: center;
    }

    .header-text {
        text-transform: uppercase;
    }

    .form-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        font-size: 12px;
        height: calc(100vh - 80px);
        padding: 10px;
    }

    .form-input-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .form-input-group input,
    .form-input-group textarea {
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .form-input-group textarea {
        font-family: sans-serif;
        font-size: 12px;
        padding: 10px;
    }

    .size-checkboxs {
        display: grid;
        grid-template-columns: auto auto;
        margin-top: 20px;
    }

    .size-checkboxs input {
        margin-bottom: 15px;
    }

    .border-right {
        border-right: 1px solid #aaa;
    }

    .pr-20 {
        padding-right: 20px;
    }

    .show-section {
        display: grid;
        grid-template-columns: auto 12px;
        align-content: space-around;
    }

    .button-container {
        display: grid;
        grid-template-columns: auto auto;
        justify-content: space-between;
        margin-top: 20px;
    }

    .button-container input,
    .button-container a {
        width: 170px;
        margin: 0;
        padding: 10px 0;
        border-style: none;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
    }

    .button-container input {
        background-color: #228B22;
    }

    .button-container a {
        background-color: #008B8B;
        text-decoration: none;
        text-align: center;
    }

    .select-simple {
        margin-top: 5px;
    }

    /*-------------------------------------------- IMAGE SECTION -------------------------------------*/
    .image-section {
        width: 100%;
        height: 100%;
        background-color: #fff;
        padding: 20px;
        box-sizing: border-box;
    }

    .image-container {
        width: 100%;
        display: grid;
        grid-template-columns: 66% auto;
        grid-template-rows: 270px;
        grid-gap: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .main-image {
        position: relative;
    }

    .main-image,
    .secondary-images {
        border-radius: 10px;
    }

    .main-image img {
        object-fit: cover;
        border-radius: 10px;
    }

    .secondary-images {
        display: grid;
        grid-template-rows: auto auto;
        align-content: space-between;
        grid-gap: 20px;
    }

    .secondary-images img {
        width: 100%;
        height: 125px;
        object-fit: cover;
        border-radius: 10px;
    }

    .secondary-images .image-2 {
        position: relative;
        width: 100%;
        height: 125px;
    }

    .delete-button {
        position: absolute;
        top: 10px;
        left: calc(100% - 35px);
        color: #fff;
        font-size: 20px;
        padding: 0 5px;
        border-radius: 3px;
        background-color: rgba(0, 0, 0, 0.3);
    }

    .delete-button:hover {
        color: orange;
        cursor: pointer;
    }

    .image-input {
        position: relative;
        margin-top: 50px;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid #aaa;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 500px;
    }

    .image-input label {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 113px;
        height: 30px;
        background-color: #4682b4;
        border-radius: 5px;
        display: grid;
        align-content: center;
        text-align: center;
        font-size: 16px;
        color: #fff;
    }

    .file-button {

        width: 170px;
        padding: 10px 0;
        border-style: none;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        background-color: #228B22;
    }

    .file-button-container {
        margin-top: 30px;
        display: grid;
        grid-template-columns: auto;
        justify-content: center;
    }

    .image-placeholder {
        width: 100%;
        height: 100%;
        color: #777;
        background-color: #aaa;
        font-size: 3rem;
        display: grid;
        grid-template-columns: auto;
        justify-content: center;
        align-content: center;
        border-radius: 10px;
    }

    .image-selection {
        position: relative;
    }

    .disabler {
        position: absolute;
        top: 0;
        left 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 50;
        opacity: .5;
    }

</style>

<body>

    <div class="main-container">
        <!--Sidebar Section-->
            @include('layoutsBack.sidebar')
        <!--End Sidebar Section-->

        <div class="content-container">

            <div class="header">
                <div class="header-text">{{ $product['name'] }}</div>
            </div>

            <form action="/productos/{{ $product['id'] }}" method="POST">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-container">
                    <div class="form-input-group">
                        <div class="row-1">
                            <label for="">Código</label>
                            <label for="">Nombre</label>

                        </div>
                        <div class="row-1">
                            <input type="text" name="code" value="{{ $product['code'] }}">
                            <input type="text" name="name" value="{{ $product['name'] }}">
                        </div>
                        <label for="">Descripción</label>
                        <textarea id="" cols="30" rows="5" name="description">{{ $product['description'] }}</textarea>




                        <div class="row-2">
                            <div class="select-simple">
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
                            </div>
                            <div class="select-simple">
                                <label for="">Género</label>
                                <select name="gender">
                                    <option @if ($product['gender'] == 'dama') selected @endif value="dama">Dama</option>
                                    <option @if ($product['gender'] == 'caballero') selected @endif value="caballero">Caballero</option>
                                </select>
                            </div>
                            <div class="collection-section">
                                <label for="">Colección</label>
                                <div class="collection-row">
                                    <select name="collection_season">
                                        <option @if ($product['collection_season'] == 'otoño') selected @endif value="otoño">Otoño</option>
                                        <option @if ($product['collection_season'] == 'invierno') selected @endif value="invierno">Invierno</option>
                                        <option @if ($product['collection_season'] == 'primavera') selected @endif value="primavera">Primavera</option>
                                        <option @if ($product['collection_season'] == 'verano') selected @endif value="verano">Verano</option>
                                        <option @if ($product['collection_season'] == 'oto-inv') selected @endif value="oto-inv">Otoño - Invierno
                                        </option>
                                        <option @if ($product['collection_season'] == 'prim-ver') selected @endif value="dama">Primavera - Verano
                                        </option>
                                    </select>
                                    <input type="number" name="collection_year"
                                        value="{{ $product['collection_year'] }}">
                                </div>
                            </div>

                        </div>

                        <div class="row-3">
                            <div class="border-right pr-20">
                                <label for="">Stock</label>
                                <input type="text" name=stock value="{{ $product['stock'] }}">
                                <label for="">Precio actual</label>
                                <input type="text" name="price" value="{{ $product['price'] }}">
                                <label for="">Precio anterior</label>
                                <input type="text" name="old_price" value="{{ $product['old_price'] }}">
                            </div>
                            <div class="border-right">
                                <label for="" class="label-size">Talle(s)</label>
                                <div class="size-checkboxs">
                                    <label for="">1 (XS)</label>
                                    <input type="checkbox" name="has_size_1" @if ($product['has_size_1'] == 1) checked @endif>
                                    <label for="">2 (S) </label>
                                    <input type="checkbox" name="has_size_2" @if ($product['has_size_2'] == 1) checked @endif>
                                    <label for="">3 (M) </label>
                                    <input type="checkbox" name="has_size_3" @if ($product['has_size_3'] == 1) checked @endif>
                                    <label for="">4 (L) </label>
                                    <input type="checkbox" name="has_size_4" @if ($product['has_size_4'] == 1) checked @endif>
                                    <label for="">5 (XL)</label>
                                    <input type="checkbox" name="has_size_5" @if ($product['has_size_5'] == 1) checked @endif>
                                </div>
                            </div>
                            <div class="show-section">
                                <label for="">Mostrar en el sitio</label>
                                <input type="checkbox" name="show" @if ($product['show'] == 1) checked @endif>

                                <label for="">Mostrar como Novedad</label>
                                <input type="checkbox" name="in_novelties" @if ($product['in_novelties'] == 1) checked @endif>

                                <label for="">Mostrar como Destacado</label>
                                <input type="checkbox" name="in_populars" @if ($product['in_populars'] == 1) checked @endif>

                                <label for="">Mostrar como Rebaja</label>
                                <input type="checkbox" name="in_discounts" @if ($product['in_discounts'] == 1) checked @endif>
                            </div>
                        </div>

                        <div class="button-container">
                            <a href="/productos" class="">Cancelar</a>
                            <input type="submit" value="Guardar Cambios">
                        </div>
                    </div>

            </form>


            <div class="image-section" id="image-section">
                <div class="image-container">
                    <div class="main-image">
                        @if (isset($images[0]))
                            <img src="/productoimage/{{ $images[0]->id }}" alt="">
                            <a data-imageid="{{ $images[0]->id }}" class="delete-button"><i
                                    class="fa fa-trash"></i></a>
                        @else
                            <div class="image-placeholder"><i class="fa fa-image"></i></div>
                        @endif
                    </div>
                    <div class="secondary-images">
                        <div class="image-2">
                            @if (isset($images[1]))
                                <img src="/productoimage/{{ $images[1]->id }}" alt="">
                                <a data-imageid="{{ $images[1]->id }}" class="delete-button"><i
                                        class="fa fa-trash"></i></a>
                            @else
                                <div class="image-placeholder"><i class="fa fa-image"></i></div>
                            @endif
                        </div>
                        <div class="image-2">
                            @if (isset($images[2]))
                                <img src="/productoimage/{{ $images[2]->id }}" alt="">
                                <a data-imageid="{{ $images[2]->id }}" class="delete-button"><i
                                        class="fa fa-trash"></i></a>
                            @else
                                <div class="image-placeholder"><i class="fa fa-image"></i></div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="image-selection">


                    <!-- form start -->
                    <form action="" method="POST" enctype="multipart/form-data" id="formuploadajax">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        @if (isset($images[2]))
                            <div class="disabler"></div>
                        @endif
                        <div class="image-input">
                            <input type="file" id="image" name="images[]" multiple>
                            <label for="image">
                                <div>
                                    Examinar
                                </div>
                            </label>
                        </div>

                        <div class="file-button-container">
                            <button type="submit" class="file-button">Agregar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>



    </div>
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Para Uploadear -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        $("#formuploadajax").on('submit', function(e) {
            console.log('submiteó');
            e.preventDefault();
            var product_id = {{ $product['id'] }};
            var formData = new FormData(this);


            $.ajax({
                    url: "/api/productos/" + product_id + "/image",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false
                })
                .done(function(res) {
                    // refreshGallery();
                    location.reload();


                    document.getElementById("image").value = null;
                })
                .fail(function() {
                    alert("Hubo un problema subiendo la foto");
                });
        });



        $(document).on('click', '.delete-button', function(e) {
            e.stopPropagation();
            if (!confirm("Está seguro de eliminar la imagen?"))
                return false;


            var id = $(this).data('imageid');
            $.ajax({
                type: 'DELETE',
                url: '/api/productos/deleteimage/' + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: {{ $product['id'] }},
                    "_token": "{{ csrf_token() }}"
                }
            }).done(function() {
                alert('la imagen ha sido eliminada')
                location.reload();
                refreshGallery();
            }).fail(function(jqXHR, textStatus, errorThrown) {
                alert('hubo un problema');
            });

        });

    </script>

    <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            alert(msg);
        }

    </script>
</body>

</html>
