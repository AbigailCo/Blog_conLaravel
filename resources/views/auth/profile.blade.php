<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <!-- Otros campos del formulario -->

    <div>
        <label for="profile_photo">Foto de Perfil</label>
        <input type="file" name="profile_photo" id="profile_photo">
    </div>

    <button type="submit">Actualizar Perfil</button>
</form>