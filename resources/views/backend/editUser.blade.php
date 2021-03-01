@include('layoutsBack/headerback')
<style>

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
</style>
<body>

    <div class="main-container">
        @include('layoutsBack/sidebar')

        <div class="content-container">
                <div class="header">
                    <div class="header-text">
                        Usuarios
                    </div>
                </div>

                <form action="{{ route('editUser') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-container">
                        <div class="form-input-group">
                            <div class="row-3"><label for="">Nombre</label></div>
                            <div class="row-3"><input type="text" id="name" name="name" value="{{ $user->name }}"></div>

                            <div class="row-3"> <label for="">Email</label></div>
                            <div class="row-3"><input type="text" id="email" name="email" value="{{ $user->email }}"></div>

                            <div class="row-3">
                                <div class="select-simple">
                                    <label for="">Rol</label>
                                    <select name="role">
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-container">
                                <a href="/showEditUserList" class="">Cancelar</a>
                                <input type="submit" value="Guardar Cambios">
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>


</body>
