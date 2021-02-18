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

    .table {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .header {
        display: grid;
        grid-template-columns: auto auto;
        justify-content: space-between;
        width: 100%;
        height: 80px;
        box-sizing: border-box;
        padding: 20px;
        font-size: 30px;
        font-family: sans-serif;
        align-items: center;
        background-color: #bfd8d2;
    }

    .header button {
        width: 200px;
        height: 100%;
        background-color: #8A2BE2;
        font-size: 16px;
    }

    .header button i,
    .actions button i {
        font-size: 18px;
        margin-right: 10px;
    }

    .table-header,
    .table-item {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr 1fr 1fr 1fr;
        padding: 0 20px;
    }

    .table-header {
        height: 50px;
        align-content: center;
        background-color: #deb13a;
    }

    .table-item {
        border: 1px solid #aaa;
        align-items: center;
    }

    .table-item-field {
        text-transform: capitalize;
    }

    .table-item-field img {
        width: 100%;
        object-fit: cover;
        box-sizing: border-box;
    }

    .item-image {
        height: 80px;
    }

    .table-content {
        height: calc(100vh - 170px);
        overflow: auto;
    }

    .table-item-field .actions {
        display: grid;
        grid-template-columns: auto;
        justify-content: center;
        align-items: space-between;
        height: 100%;
    }

    button {
        width: 100px;
        height: 30px;
        font-family: sans-serif;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .actions button {
        margin: 10px 0;
    }

    .action-edit {
        background-color: #4682b4;
        transition: all .2s;
    }

    .action-edit:hover {
        background-color: blue;
    }

    .action-delete {
        background-color: #ff6347;
        transition: all .2s;
    }

    .action-delete:hover {
        background-color: red;
    }

    a {
        height: 100%;
    }

    .image-modal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        padding: 5px;
        background-color: #fff;
        border: 2px solid #aaa;
        border-radius: 20px;
        display: none;
        opacity: 0;
        transition: opacity .2s;
    }

    .image-modal img {
        width: 100%;
        border-radius: 20px;
    }

    .item-image:hover+.image-modal {
        display: block;
        opacity: 1;

    }

    .no-photo {
        height: 80px;
        margin: 0 10px;
        padding: 0 10px;
        box-sizing: border-box;
        background-color: #eee;
        border-radius: 5px;
        border: 1px solid #aaa;
        text-align: center;
        font-size: 10px;
        display: grid;
        align-content: space-around;
    }

    .no-photo i {
        font-size: 30px;
    }

</style>

<body>
    <div class="main-container">
        <!--Sidebar Section-->
            @include('layoutsBack.sidebar')
        <!--End Sidebar Section-->

        <div class="content-container">

            <div class="header">
                <div class="header-text">Artículos</div>
                <a href="/productos/create">
                    <button type="button" class=""><i class="fa fa-plus"></i>Agregar Artículo</button>
                </a>
            </div>

            <div class="table">

                <div class="table-header">
                    <div class="table-header-item">Código</div>
                    <div class="table-header-item">Artículo</div>
                    <div class="table-header-item">Categoría</div>
                    <div class="table-header-item">Género</div>
                    <div class="table-header-item">Imágen</div>
                    <div class="table-header-item">Acciones</div>
                </div>

                <div class="table-content">

                    @foreach ($products as $product)

                        <div class="table-item">
                            <div class="table-item-field">{{ $product->code }}</div>
                            <div class="table-item-field">{{ $product->name }}</div>
                            <div class="table-item-field">{{ $product->category }}</div>
                            <div class="table-item-field">{{ $product->gender }}</div>
                            <div class="table-item-field">




                                @if ($product->image != null)
                                    <img src="/productoimage/{{ $product['image'] }}" alt="" class="item-image">
                                    <div class="image-modal">
                                        <img src="/productoimage/{{ $product['image'] }}" alt="">
                                    </div>
                                @else
                                    <div class="no-photo">
                                        <i class="fa fa-eye-slash"></i>No hay imágenes para mostrar
                                    </div>
                                @endif



                            </div>
                            <div class="table-item-field">
                                <div class="actions">
                                    <a href="/productos/{{ $product['id'] }}/edit">
                                        <button class="action-edit" value="Editar"><i
                                                class="fa fa-edit"></i>Editar</button>
                                    </a>

                                    <form method="POST" action="/productos/{{ $product['id'] }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="action-delete" value="Eliminar"><i
                                                class="fa fa-trash"></i>Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>


            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <script>
        $(document).on('click', '.action-delete', function() {
            if (!confirm("Está seguro de eliminar el artículo?"))
                return false;


            alert('El artículo ha sido eliminado');


        });

    </script>


</body>

</html>
