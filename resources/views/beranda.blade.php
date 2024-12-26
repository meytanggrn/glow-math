<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Glow Math') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="flex justify-center">
            <div class="bg-teal-200 py-10 w-full flex flex-col items-center">
                <img src="{{ asset('build/assets/banner1.png') }}" alt="Banner 1" class="w-4/5 h-auto">
                <h1 class="font-bold text-3xl text-teal-900 text-center">Glow Math Course</h1>
                <h3 class="font-semibold text-xl text-gray-900 text-center">Bimbel SD, SMP, SMA, SNBT dan Kedinasan</h3>
            </div>
        </div>
        <div class="bg-teal-200 min-h-screen flex items-center justify-center py-10">
            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg p-6 shadow-lg ">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px"
                            fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M19 1l-5 5v11l5-4.5V1zM1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5V6c-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6zm22 13.5V6c-.6-.45-1.25-.75-2-1v13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5v2c1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5v-1.1z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Belajar Anti Bosen</h3>
                    <p class="text-center text-gray-600">
                        Sistem pembelajaran yang fleksibel dengan metode sesuai kebutuhan individu dilengkapi dengan
                        pilihan paket yang beragam dijamin buat kamu makin betah untuk belajar.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px"
                            fill="#000000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3 1 9l11 6 9-4.91V17h2V9L12 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Siap Bantai Ujian</h3>
                    <p class="text-center text-gray-600">
                        Beragam latihan soal yang diberikan akan bantu memaksimalkan persiapamu dalam menghadapi
                        berbagai jenis ujian seperti UTS, UAS, UTBK, Ujian Mandiri, hingga Tes Kedinasan.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px"
                            fill="#000000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Tentor Friendly</h3>
                    <p class="text-center text-gray-600">
                        Tentor bersahabat dan menciptakan lingkungan belajar yang fun akan membantu kamu memahami
                        pelajaran sesuai kebutuhanmu sebagai siswa.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px"
                            fill="#000000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Informasi Up-To-Date</h3>
                    <p class="text-center text-gray-600">
                        Bingung dengan peralihan sistem pembelajaran yang berubah-ubah? Tenang aja, tentor akan bantu
                        kamu untuk cari tau segala informasi terkait sekolah dan info pendidikan lanjut lainnya.
                    </p>
                </div>
            </div>

        </div>

        {{-- fasilitas --}}
        <div class="bg-teal-200 min-h-screen items-center justify-center py-10">
            <div class="bg-teal-200 py-10 w-full flex flex-col items-center">
                <h2 class="font-bold text-4xl text-gray-700">Fasilitas Komplit, Belajar Makin Ngibrit</h2>
            </div>

            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/wifi.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 1">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/buku.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 2">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/kantin.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 3">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/printer.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 3">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/mushola.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 3">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('build/assets/fasilitas/minum.png') }}"
                            class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 text-gray-600"
                            alt="Icon Gambar 3">
                    </div>
                </div>
            </div>

        </div>

        {{-- testimoni --}}
        <section class="testimonials bg-zinc-50 py-10">
            <div class="container mx-auto ">
                <div class="text-center pb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Testimoni Alumni Gomifriends!</h2>
                </div>
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper flex">
                        <div class="swiper-slide flex-none">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-01.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-02.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-03.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-04.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-05.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-06.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-07.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-08.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-09.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{ asset('build/assets/testimoni/t-10.jpg') }}"
                                        class="w-64 h-85 mx-auto mb-2" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 15,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </div>

</x-app-layout>
