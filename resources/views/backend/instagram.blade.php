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
                            <div class="table-item-field"><img src="images/{{ $imagen->src }}" ></div>
                            </div>

                        </div>

                    @endforeach

                </div>


            </div>


    </div>
</body>
