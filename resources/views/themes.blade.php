<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body class="font-montserrat w-full h-auto min-h-screen flex flex-col">

    <!-- Main Section -->
    <section class="w-full h-screen flex flex-col items-center justify-center text-white bg-fixed bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ $data->main_image }}');">
        <div class="bg-black bg-opacity-50 w-full h-screen absolute"></div>
        <div class="z-10 flex flex-col items-center">
            <span class="uppercase font-extralight text-2xl">The Wedding Of</span>
            <span class="font-berkshire mt-5 text-6xl">{{ $data->groom_name }} & {{ $data->bride_name }}</span>
            <span class="font-extralight text-2xl mt-5">{{ formatDate($data->wedding_date, 'l, F jS Y') }}</span>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="w-full h-auto bg-white flex flex-col items-center p-10 bg-fixed bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/theme_01_bg_profile.webp') }}')">
        <img src="{{ asset('images/bismillah.webp') }}" alt="Bismillah" class="w-1/4 mt-5" />
        <span class="font-light text-xl mt-8">Assalamu'alaikum Warrahmatullahi Wabarakatuh</span>
        <span class="font-light text-xl mt-4">We are very happy to invite you to the wedding of</span>

        <!-- Groom Profile -->
        <img src="{{ $data->groom_photo }}" class="w-48 h-48 rounded-3xl mt-10 drop-shadow-lg" alt="Groom Photo" />
        <span class="font-bold font-berkshire text-5xl mt-8">{{ $data->groom_name }}</span>
        <span class="font-light text-lg mt-4">Putra dari</span>
        <span class="font-light text-lg mt-1">{{ $data->groom_father_name }}</span>
        <span class="font-light text-lg mt-1">&</span>
        <span class="font-light text-lg mt-1">{{ $data->groom_mother_name }}</span>
        <a href="{{ $data->groom_social_media }}" target="_blank"
            class="bg-black h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-2">
            <i class="fa-brands fa-instagram text-white text-xl"></i>
        </a>

        <!-- Bride Profile -->
        <span class="font-bold font-berkshire text-5xl my-20">&</span>
        <img src="{{ $data->bride_photo }}" class="w-48 h-48 rounded-3xl drop-shadow-lg" alt="Bride Photo" />
        <span class="font-bold font-berkshire text-5xl mt-8">{{ $data->bride_name }}</span>
        <span class="font-light text-lg mt-4">Putri dari</span>
        <span class="font-light text-lg mt-1">{{ $data->bride_father_name }}</span>
        <span class="font-light text-lg mt-1">&</span>
        <span class="font-light text-lg mt-1">{{ $data->bride_mother_name }}</span>
        <a href="{{ $data->bride_social_media }}" target="_blank"
            class="bg-black h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-2">
            <i class="fa-brands fa-instagram text-white text-xl"></i>
        </a>
    </section>

    <!-- Wedding Information Section -->
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center"
        style="background-image: url('{{ asset('images/theme_01_bg_info.webp') }}')">
        <div class="w-2/3 h-auto bg-white flex flex-col rounded-[100px]">

            <!-- Countdown -->
            <div class="flex flex-col h-96 rounded-t-[100px] relative bg-cover bg-no-repeat"
                style="background-image: url('{{ $data->main_image }}');">
                <div class="bg-black bg-opacity-75 w-full h-96 absolute rounded-t-[100px] z-0"></div>
                <div class="flex flex-col w-full h-full text-white z-20 items-center justify-center gap-8">
                    <span class="font-light text-7xl">Countdown</span>
                    <span class="font-light text-6xl">{{ countdown($data->wedding_date) }} days</span>
                </div>
            </div>

            <!-- Akad -->
            <div class="flex flex-col py-20 items-center">
                <span class="font-extralight text-4xl">Akad</span>
                <span class="font-medium text-4xl mt-4">{{ formatDate($data->akad_start_date, 'l, F jS Y') }}</span>
                <span class="font-medium text-4xl mt-4">{{ formatDate($data->akad_start_date, 'H:i') }} - {{ formatDate($data->akad_end_date, 'H:i') }}</span>
                <span class="font-extralight text-xl mt-4">{{ $data->akad_place_name }}</span>
                <span class="font-extralight text-xl mt-4">{{ $data->akad_address }}</span>
                <a href="{{ $data->akad_maps }}" target="_blank"
                    class="font-light text-lg mt-4 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See
                    Location</a>
            </div>

            <!-- Reception -->
            <div class="flex flex-col py-20 items-center">
                <span class="font-extralight text-4xl">Wedding Reception</span>
                <span class="font-medium text-4xl mt-4">{{ formatDate($data->reception_start_date, 'l, F jS Y') }}</span>
                <span class="font-medium text-4xl mt-4">{{ formatDate($data->reception_start_date, 'H:i') }} - {{ formatDate($data->reception_end_date, 'H:i') }}</span>
                <span class="font-extralight text-2xl mt-4">{{ $data->reception_place_name }}</span>
                <span class="font-extralight text-2xl mt-4">{{ $data->reception_address }}</span>
                <a href="{{ $data->reception_maps }}" target="_blank"
                    class="font-light text-lg mt-4 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See
                    Location</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <div class="w-full flex flex-col items-center font-poppins p-5">
        <span>Made by <a href="https://develobe.id/" target="_blank" class="text-develobe-500">Manusia Gabut</a></span>
    </div>
</body>
</html>
