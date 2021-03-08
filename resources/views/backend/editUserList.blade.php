@include('layoutsBack/headerback')

<body>

    <div class="main-container">
        @include('layoutsBack/sidebar')

        <div class="content-container">
                <div class="header">
                    <div class="header-text">
                        Usuarios
                    </div>

                </div>

            <div class="table">

                <div class="table-header">

                    <div class="table-header-item">Nombre</div>
                    <div class="table-header-item">Email</div>
                    <div class="table-header-item">Rol</div>
                </div>

                <div class="table-content">
                    @foreach ($users as $user)
                    <div class="table-item">
                            <div class="table-item-field">{{ $user->name }}</div>
                            <div class="table-item-field">{{ $user->email }}</div>
                            <div class="table-item-field">{{ $user->role }}</div>
                        <div class="table-item-field">
                            <div class="actions">

                                <form method="POST" action="{{route('showEditUser')}}">
                                    {{ csrf_field()}}
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <button class="action-edit" value="Eliminar"><i
                                            class="fa fa-edit"></i>Editar</button>
                                </form>

                                <form method="POST" action="{{route('destroyUser')}}">
                                    {{ csrf_field()}}
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$user->id}}">
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


</body>
