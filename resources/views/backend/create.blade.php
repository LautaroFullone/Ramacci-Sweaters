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
        background-color: #bfd8d2;
    }

    .form-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        font-size: 12px;
        height: calc(100vh - 80px);
        padding: 10px;
    }

    .form-input-group {
        border-radius: 10px;
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

</style>

<body>

    <div class="main-container">
        <!--Sidebar Section-->
        @include('layoutsBack.sidebar')
        <!--End Sidebar Section-->

        <div class="content-container">

            <div class="header">
                <div class="header-text">Nuevo artículo</div>
            </div>

            <form action="/productos" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class="form-container">
                    <div class="form-input-group">
                        <div class="row-1">
                            <label for="">Código</label>
                            <label for="">Nombre</label>

                        </div>
                        <div class="row-1">
                            <input type="text" name="code">
                            <input type="text" name="name">
                        </div>
                        <label for="">Descripción</label>
                        <textarea id="" cols="30" rows="5" name="description"></textarea>




                        <div class="row-2">
                            <div class="select-simple">
                                <label for="">Categoría</label>
                                <select name="category">
                                    <option selected value="sweater">Sweater</option>
                                    <option value="remeras">Remeras</option>
                                    <option value="cardigan">Cardigan</option>
                                    <option value="campera">Campera</option>
                                    <option value="chaleco">Chaleco</option>
                                    <option value="pashmina">Pashmina</option>
                                    <option value="bufanda">Bufanda</option>
                                    <option value="ruana">Ruana</option>
                                    <option value="pantalon">Pantalón</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div class="select-simple">
                                <label for="">Género</label>
                                <select name="gender">
                                    <option selected value="dama">Dama</option>
                                    <option value="caballero">Caballero</option>
                                </select>
                            </div>
                            <div class="collection-section">
                                <label for="">Colección</label>
                                <div class="collection-row">
                                    <select name="collection_season">
                                        <option value="otoño" selected>Otoño</option>
                                        <option value="invierno">Invierno</option>
                                        <option value="primavera">Primavera</option>
                                        <option value="verano">Verano</option>
                                        <option value="oto-inv">Otoño - Invierno</option>
                                        <option value="dama">Primavera - Verano</option>
                                    </select>
                                    <input type="number" name="collection_year" value="2020">
                                </div>
                            </div>

                        </div>

                        <div class="row-3">
                            <div class="border-right pr-20">
                                <label for="">Stock</label>
                                <input type="text" name=stock>
                                <label for="">Precio actual</label>
                                <input type="text" name="price">
                                <label for="">Precio anterior</label>
                                <input type="text" name="old_price">
                            </div>
                            <div class="border-right">
                                <label for="" class="label-size">Talle(s)</label>
                                <div class="size-checkboxs">
                                    <label for="">1 (XS)</label>
                                    <input type="checkbox" name="has_size_1">
                                    <label for="">2 (S) </label>
                                    <input type="checkbox" name="has_size_2">
                                    <label for="">3 (M) </label>
                                    <input type="checkbox" name="has_size_3">
                                    <label for="">4 (L) </label>
                                    <input type="checkbox" name="has_size_4">
                                    <label for="">5 (XL)</label>
                                    <input type="checkbox" name="has_size_5">
                                </div>
                            </div>
                            <div class="show-section">
                                <label for="">Mostrar en el sitio</label>
                                <input type="checkbox" name="show" checked>

                                <label for="">Mostrar como Novedad</label>
                                <input type="checkbox" name="in_novelties">

                                <label for="">Mostrar como Destacado</label>
                                <input type="checkbox" name="in_populars">

                                <label for="">Mostrar como Rebaja</label>
                                <input type="checkbox" name="in_discounts">
                            </div>
                        </div>

                        <div class="button-container">
                            <a href="/productos" class="">Cancelar</a>
                            <input type="submit" value="Guardar Cambios">
                        </div>

                    </div>
                </div>









        </div>



    </div>
</body>

</html>
