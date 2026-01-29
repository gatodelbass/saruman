<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard, login, register } from '@/routes';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div
        class="flex flex-col items-center bg-gradient-to-r from-cyan-950 via-black to-cyan-950 p-6 lg:justify-center lg:p-8 dark:bg-[#0a0a0a]"
    >
        <header
            class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl"
        >
            <nav class="flex items-center justify-end gap-4 text-gray-300">
                <Link
                    v-if="$page.props.auth.user"
                    :href="dashboard()"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    Dashboard
                </Link>
                <template v-else>
                    <Link
                        :href="login()"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <Link
                        v-if="canRegister"
                        :href="register()"
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <div class="flex w-full items-center justify-center text-gray-300">
            <div
                class="xs:grid-cols-1 grid gap-4 sm:grid-cols-1 lg:grid-cols-2"
            >
                <div>
                    <h1 class="text-5xl font-bold">Enter Saruman</h1>
                    <p class="">we play Metallica stuff.</p>
                </div>
                <div>
                    <img
                        class="border-2 border-gray-800"
                        src="https://entersaruman.netlify.app/public/Sin%20t%C3%ADtulo-1.jpg"
                        alt=""
                    />
                </div>
            </div>
        </div>
        <div
            class="my-10 flex w-full items-center justify-center text-gray-300"
        >
            <div class="grid grid-cols-1">
                <div class="text-sm">
                    <h1 class="text-2xl font-bold">Track list</h1>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/Metallica - Enter Sandman -1.00 semitones.mp3"
                            download=""
                            >Enter sandman
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 123 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/Metallica - Enter Sandman -1.00 semitones.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/Metallica - For Whom The Bell Tolls -1.00 semitones.mp3"
                            download=""
                            >For whom the bells tolls
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 117 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/Metallica - For Whom The Bell Tolls -1.00 semitones.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/02. The Memory Remains.mp3"
                            download=""
                            >The memory remains
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 144 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/02. The Memory Remains.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/Metallica - Creeping Death -1.00 semitones.mp3"
                            download=""
                            >Creeping death
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 196 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/Metallica - Creeping Death -1.00 semitones.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/Chuck Billy (Testament), Jake E. Lee, JOCHEN FLACH - Seek &amp; Destroy -1.00 semitones.mp3"
                            download=""
                            >Seek and destroy
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 140 -202 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/Chuck Billy (Testament), Jake E. Lee, JOCHEN FLACH - Seek &amp; Destroy -1.00 semitones.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>

                    <div
                        class="grid grid-cols-1 rounded-sm border-b-2 border-gray-800 p-2"
                    >
                        <a
                            class="inline text-lg font-semibold text-blue-300"
                            target="_blank"
                            href="tracks/01. Fuel.mp3"
                            download=""
                            >Fuel
                            <span
                                class="rounded-full bg-orange-500 px-2 py-0.5 text-sm font-medium text-black"
                                >Tempo: 108 BPM</span
                            >
                        </a>

                        <audio controls="true">
                            <source
                                src="tracks/01. Fuel.mp3"
                                type="audio/mpeg"
                            />
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="my-10 flex w-full items-center justify-center text-gray-300"
        >
            <div class="grid grid-cols-1">
                <h1 class="text-2xl font-bold">Staff</h1>

                <div
                    class="text-jost relative m-2 w-64 rounded border-1 border-gray-900 bg-gradient-to-br from-gray-700 via-gray-800 to-gray-900 break-words shadow-lg"
                >
                    <div class="px-0">
                       
                        <div class="mt-2 text-center items-center justify-center">
                            <img
                                        src="https://media.tenor.com/xQM3D2rSud0AAAAM/shocked-cat.gif"
                                        class="w-24 m-4 rounded-full border-2 border-gray-700 p-1 align-middle "
                                    />
                            <h3
                                class="mb-1 text-2xl leading-normal font-bold text-slate-700"
                            >
                                <span class="text-2xl">El gato</span>
                            </h3>
                        </div>

                        <div
                            class="mt-2 border-t border-slate-200 py-4 text-center text-sm"
                        >
                            <div
                                class="flex w-full flex-wrap justify-center "
                            >
                               some text
                            </div>

                       
                        

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
