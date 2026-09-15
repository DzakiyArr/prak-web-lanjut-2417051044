<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="min-h-screen flex items-center justify-center bg-gray-100">

        <div class="w-96 bg-white rounded-xl shadow-md p-8 text-center">

            <img src="{{ asset('icprofile.png') }}"
                 alt="Foto Profil"
                 class="w-36 h-36 rounded-full object-cover mx-auto mb-6">

            <div class="bg-gray-200 rounded-lg p-3 mb-3 text-gray-700">
                <span class="font-semibold">{{ $nama }}</span>
            </div>

            <div class="bg-gray-200 rounded-lg p-3 mb-3 text-gray-700">
                <span class="font-semibold">{{ $NPM }}</span>
            </div>

            <div class="bg-gray-200 rounded-lg p-3 text-gray-700">
                <span class="font-semibold">{{ $Kelas }}</span>
            </div>

        </div>

    </div>

</body>
</html>