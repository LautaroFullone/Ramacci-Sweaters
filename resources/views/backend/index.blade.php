@include('layoutsBack/headerback')

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
