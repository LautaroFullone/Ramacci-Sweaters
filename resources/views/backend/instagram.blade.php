@include('layoutsBack/headerback')
<body>


    <div class="main-container">
        @include('layoutsBack/sidebar')

        <div class="content-container">
            <div class="header">
                <div class="header-text">Instagram Feed</div>
                <a href="{{ route('imagenIg') }}">
                    <button type="button" class=""><i class="fa fa-plus"></i>Agregar Imagen al Feed</button>
                </a>
            </div>


            <div class="table">

                <div class="table-header">

                    <div class="table-header-item">Imágen</div>
                </div>

                <div class="table-content">
                    @foreach ($images as $imagen)
                    <div class="table-item">

                        <div class="table-item-field">
                                <img src="images/instagram/{{ $imagen->src }}" alt="" class="item-image">
                                <div class="image-modal">
                                    <img src="images/instagram/{{ $imagen->src }}" alt="">
                                </div>
                        </div>
                        <div class="table-item-field">
                            <div class="actions">
                                
                                <form method="POST" action="{{route('showEdit')}}">
                                    {{ csrf_field()}}
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$imagen->id}}">
                                    <button class="action-edit" value="Eliminar"><i
                                            class="fa fa-edit"></i>Editar</button>
                                </form>

                                <form method="POST" action="{{route('destroyIg')}}">
                                    {{ csrf_field()}}
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$imagen->id}}">
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
</body>
