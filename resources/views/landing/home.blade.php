<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumoshive | Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="text-dm-sans">
        <div class="flex justify-between items-center px-20 py-6">
            <div>
                <a href="#">
                    <img class="w-3/4" src="{{ asset('assets/landingpage/lumoshive-logo.png') }}" alt="">
                </a>
            </div>
            <div class="flex justify-between items-center w-3/5">
                <a class="text-sm font-semibold text-black" href="#">Home</a>
                <a class="text-sm font-semibold text-black" href="#">Developer Site</a>
                <a class="text-sm font-semibold text-black" href="#">Developer Site</a>
                <a class="text-sm font-semibold text-black" href="#">Product & Services</a>
                <div class="flex text-sm font-semibold text-black">
                    <button class="mr-2 p-2 px-6 border-black border rounded-full">Login</button>
                    <button class="ml-2  p-2 px-6 border-black border rounded-full">Register</button>
                </div>
            </div>
        </div>
    </header>
    <section class="flex justify-center items-center h-[90vh] px-32 relative">
        <div class="absolute top-14 right-0 flex justify-end">
            <img class="w-4/5 " src="{{ asset('assets/landingpage/hero-side.png') }}" alt="">
        </div>
        <div class="absolute top-32 left-0 flex justify-start">
            <img class="w-4/5" src="{{ asset('assets/landingpage/hero-polygon.png') }}" alt="">
        </div>
        <div class="ml-64">
            <p class="text-4xl font-bold my-10 text-blue-200">Lumoshive</p>
            <p class="text-4xl font-bold my-10 text-blue-200">Efficient and Effective</p>
            <p class="text-xl font-normal my-10 text-blue-200">Your Preferred IT Resource Provider</p>
            <div class="flex text-sm font-semibold">
                <button class="mr-4 p-2 px-6 border-blue-200 text-blue-200 border rounded-full">Corporate Site</button>
                <button class="ml-4  p-2 px-6 border-blue-200 text-blue-200 border rounded-full">Developer Site</button>
            </div>
        </div>
    </section>
    <section class="my-20 relative">
        <div class="absolute w-full top-[-50px] flex justify-center">
            <img class="w-1/2" src="{{ asset('assets/landingpage/group-polygon.png') }}" alt="">
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="text-2xl font-semibold">Our Services</p>
            <p class="text-lg my-10 font-normal w-1/3 text-center">
                We are a digital acceleration expert, specialized in solid end to end
                delivery of tailor-made technology solutions bringing innovative,
                scalable, and competitive results.
            </p>
            <div class="flex justify-center">
                <img class="w-1/3" src="{{ asset('assets/landingpage/gold-puzzle.png') }}" alt="">
                <img class="w-1/3" src="{{ asset('assets/landingpage/blue-puzzle.png') }}" alt="">
            </div>
        </div>
    </section>
    
    <section class="my-44 flex justify-center">
        <div class="rounded-2xl flex w-3/4 p-6 py-12 shadow-lg border">
            <div class="flex flex-col items-center">
                <p class="text-lg font-semibold text-blude-200">
                    Corporate Site
                </p>
                <p class="text-sm font-normal">
                    I’m a company and I need some resources
                </p>
                <img class="my-2" src="{{ asset('assets/landingpage/icons/corporate-site.png') }}" alt="">
                <button class="rounded-full text-center text-white border-black border bg-gradient-to-b from-blue-100 to-black p-2 px-10 text-sm">See More</button>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-lg font-semibold text-blude-200">
                    Corporate Site
                </p>
                <p class="text-sm font-normal">
                    I’m a company and I need some resources
                </p>
                <img class="my-2" src="{{ asset('assets/landingpage/icons/corporate-site.png') }}" alt="">
                <button class="rounded-full text-center text-white border-black border bg-gradient-to-b from-blue-100 to-black p-2 px-10 text-sm">See More</button>
            </div>
        </div>
    </section>
    <section class="my-44 flex justify-center">
        <div class="flex justify-between w-3/4">
            <div class="w-1/2 flex justify-center flex-col">
                <p class="text-4xl text-blue-200">
                    ABOUT US
                </p>
                <p class="text-lg my-4 text-justify text-black">
                    PT. Lumos Inisiatif Indonesia, also known as Lumoshive is a technology resource provider based in jakarta and Batam, Indonesia. We are a group of geeky technical developers who will help you  transform your old-schooled, plain, paper based businesses into new, trendy, innovative business utilizing all available technology. 
                </p>
            </div>
            <div class="w-1/2 pl-12 grid grid-cols-3 gap-3">
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/cost-effectiveness.png') }}" alt="">
                </div>
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/cultural-convergence.png') }}" alt="">
                </div>
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/low-risk.png') }}" alt="">
                </div>
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/mature-team.png') }}" alt="">
                </div>
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/shorter-delivery-time.png') }}" alt="">
                </div>
                <div class="my-1">
                    <img class="w-full" src="{{ asset('assets/landingpage/icons/remote-management.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-44 pt-20 pb-4 flex flex-col items-center bg-gradient-to-b from-blue-200 to-blue-25">
        <div class="w-10/12">
            <div class=" grid grid-cols-3 gap-3">
                <div class="p-2 px-6">
                    <img class="w-1/2" src="{{ asset('assets/landingpage/lumoshive-logo2.png') }}" alt="">
                    <p class="mt-12 text-sm text-justify text-white">
                        We are a group of geeky technical developers who will help you transform your old-schooled, plain, paper based businesses utilizing all available technology 
                    </p>
                </div>
                <div class="p-2 px-6">
                    <a class="p-2 px-4 text-xl bg-gold-100 text-blue-200 font-bold rounded-full" href="#">
                        Quick Link
                    </a>
                    <div class="flex justify-between">
                        <div class="mt-12">
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Home
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Corporate Site
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Developer Site
                            </a>
                        </div>
                        <div class="mt-12">
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Blog
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Product * Services
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                <svg class="stroke-gold-100" viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-2 px-6">
                    <a class="p-2 px-4 text-xl bg-gold-100 text-blue-200 font-bold rounded-full" href="#">
                        Information
                    </a>
                    <div class="flex justify-between">
                        <div class="mt-12">
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                +62 812 354 678
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                inquiry@lumoshive.com
                            </a>
                            <a href="#" class="text-white text-sm flex items-center mb-10">
                                Centennial Tower, 29th Floor Unit D&E Jl. Jend. Gatot Subroto Kav 24-25 Jakarta Selatan, 12930, Indonesia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between my-6">
                <div class="text-xs font-light text-white">
                    ©2020 by PT. Lumos Inisiatif Indonesia
                </div>
                <div>
                    <p>s</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
