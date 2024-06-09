<div class="flex justify-between items-center">
    <ul class="flex">
    <li><a href="{{ route('home.index') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Home</a></li>
        <li><a href="{{ route('post.myposts') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">My Posts</a></li>
        <li><a href="{{ route('post.create') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Add Post</a></li>
        <li><a href="{{ route('profile.edit') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Edit profile</a></li>
    </ul>
    <div class="flex items-center">
        @if (auth()->user()->profile_photo)
            <img src="{{ asset('profile_photos/' . auth()->user()->profile_photo) }}" alt="Foto de Perfil" class="rounded-full w-16 h-16 mx-2 border-2 border-gray-300">
        @else
            <img src="{{ asset('images/default_profile_photo.jpg') }}" alt="Foto de Perfil" class="rounded-full w-16 h-16 mx-2 border-2 border-gray-300">
        @endif
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="hover:bg-blue-700 py-2 px-4 rounded transition">Logout</button>
        </form>
    </div>
</div>
