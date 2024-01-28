@extends('layouts.main')
@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="w-8/12 flex flex-col items-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="rounded-full bg-gray-300">
                <img class="max-h-40 relative top-3 left-1"
                    src="{{ asset('/storage/images/personal-image/profile-img.webp') }}" alt="profile-img">
            </div>
            <p class="my-10 text-center dark:text-gray-100">As a Full Stack Developer deeply passionate about frontend development, I specialize in
                crafting captivating and intuitive user interfaces. Proficient in Flutter and Laravel, I leverage these
                technologies to seamlessly blend creativity and functionality. With an eye for detail, I excel in designing
                pixel-perfect user experiences that elevate applications to new heights. My commitment to staying on the
                cutting edge of technology ensures that I bring the latest innovations to every project. Let's collaborate
                to turn your ideas into visually stunning and high-performing realities.</p>
        </div>

    </div>
@endsection
