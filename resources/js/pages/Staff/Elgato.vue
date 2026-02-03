<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard, login, register } from '@/routes';
</script>

<template>
    <div
        class="flex flex-wrap items-center bg-gradient-to-r from-cyan-950 via-black to-cyan-950 p-6 lg:justify-center lg:p-8"
    >

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <a href="/">
                <img
                    class="w-16 rounded-full p-3"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEX///8AAACtra14eHjz8/OWlpZ0dHQnJyddXV0hISH5+flra2tXV1ecnJyYmJgeHh7Gxsbj4+Pc3Nzt7e25ubkrKyuQkJCBgYE0NDSJiYloaGjZ2dm+vr5hYWHT09M1NTVBQUGysrKjo6NRUVEVFRV91yVFAAAF10lEQVR4nO2djXqqMAyGRUEQhorKjpvOObf7v8YjD8fHn1MdaZO0hrwXgP1s+pM0TQcDRVEURVEURVEURVEURRFDvFsNk1G2X9fpZDZJ6/U+GyXD1S723TB38uW8HKfRfdJxuV3mvptpSbw5FPUDcWfqYrp5uu6svrJZJ3UnZtmw8t3o7lTJBKTuxCRZ+G56F6pkbyWvZZ0E3pP5NnOQ1/KyCnfmid9gY+8eP29hzjuLMYq8liK8Ebn4QNTX8LHxLemKRYGsr+E9HI0xpn1eMg5kPJZE+hrKAObV+ZpQ4HFHN/esL6cy0DOF125cketrWHnTRzbD3FJ4mnF2jxw/XFIvozFh09eQsOvL3bfYMF6YLXXBZ6EnUtat6pxdX8OWT+DQi8AoOnAJfPMkMIreeASOvAk87sU5BFI4St15pxf44lXgcdWgFsi9DLJL9GuiLQWlQJ+TzJkRnUB/y8Q1ZIuGr4X+f4iWfj9bNTMk3tTCt6orCLbhOb838YgUP3rjfyG8JsMWyOvRdwHZ6w9pljmxwxQYhzUIW1LMuAZX2BAGoivFE/iFgxYqzn0ruQvWkhGmjTYg2WmI8+gJlN1b3i2xyQ81hp1SHoC6U7oLjDHbQzCi3RdFzEaVBOuO82SD6TM1FrVF/F6Lqx/1jteUdsig96JjBHWD15Lpv0+iS3RLu8HLdDo7O9iG6tSJeKNwevFVbIkuIxFtIr12V5ElOkynaGvh682HkSXar4lYEeBbgdh73f+/35H8h64BqEdYP7a7UyRbMsXgkQ9AbE/4cQKIf+gF2oYWK5QfN/Ug/hmdXYY/SoiUwUQbpoaf+R2MxFEOE234tBGIYaRcAu3MFMFITQL/uH/WhE2M3+7u0iWMAqMULtDdSE3H7XTn5HAzdT7SNgmk6sEjQ7BC1+WetwctFv3Y8ZIWt8BoBnUwHMMXpqyeVxwp94AGM9ziwCaflDoZB5qB4rR1NAkk7kFwMpjTYYUHE43ARxhLh5/yIzCKliCFDlEGk0CWTA7YSZv9RGMSOEXUcR/YMZR1GNG08DKdz8GCirbbblP8mSvZCLb5tvwRk0C+E1aIQMtQ8IdXgaDA8M7qF0w55gdkFY+ApIFZnYCZepBTICiByMY59C4Q5CJaTH8mE2VO44DEauDxMJPA5WHoxtc3qA2QWwpgBx89Y7cF9k9DGgEtokN1UwemcA/4MjDc/U0kEKgQEviGeYd0d61gCmvAl0FJz4SXyWAKIRtTyMabzEQHUIUTwJchoUQyeQOowhngy/L7UP44lD+Xyl8P5e9p5O9L5fsW8v1D+T6+/DiN/Fib/Hip/Jg3bGN6wfOcWzzj2ROsIIj880P5Z8Dyz/Hl52LIz6fpQU6U/Ly2p8tNnIAvP4nPL326HOEvsEL5ed7yc/V7cN9C/p2ZwSfCDwd976kHd9fk3z+Uf4e0B/eA5d/lRvMGgr2P34OaCvLrYjxJbROnx+jwSgwFWp/mKWoMORaKQtx+hFknCr3WF345M+eayeLrtfWg5p78uolh175cIwjsQf3SHtSg7UEd4WBrQSM+cRWmnWI+jSS/JrtlGhgtqHX1uRJGINiFSB8g/n2L0LY2BG+UyH9nJqzdG9HLq+Lfe+rBm109eHetB2/nhbAskj/xKP4NS9+GSmyiLT6nG9JJ5oz494B78KZzD97lPm7D+T0N3rfVj84U98KYocYsOsHr9aN79F3Y8VlqSuQt/UbMFWQs+C30BP7bRibQHgG0IafvxjFBRAbEHKP8/n1qTyPwCsqrvqXvDmwhm3HG/maYWxYULtU78ybmFxaID7S1+tweG6OgwvQbx2H134n41fE62D9+XsMZf7fkW/en6LJVGPPnXaoptHzPJeupUyolF1Vid2cqTcIcfUaqrw/YmJxkw6fovUvizaHo5l/VRbkJd255TL6cl6NHWQ7pqNwuA59ZuhDvVsNklO0/63Qym6T15z4bJcPV7lk7TlEURVEURVEURVEURVEM/AXrC4beoFUgiAAAAABJRU5ErkJggg=="
                    alt=""
                />
            </a>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                Go back to home
            </h5>

          
        </div>

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <a href="#">
                <img
                    class="rounded-base"
                    src="https://entersaruman.netlify.app/public/elgato-figure.jpg"
                    alt=""
                />
            </a>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                El gato plays some bass stuff
            </h5>

            <p class="m-2 text-sm">
                El gato prefers 4 string basses than 5 string
            </p>
        </div>

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <a href="#">
                <img
                    class="w-16 rounded-full"
                    src="https://media.tenor.com/xQM3D2rSud0AAAAM/shocked-cat.gif"
                    alt=""
                />
            </a>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                El gato recommends
            </h5>

            <ul class="m-2 text-sm">
                <li>
                    ✅
                    <a
                        class="text-sky-600"
                        href="https://play.google.com/store/apps/details?id=com.stonekick.tempo&amp;hl=en&amp;pli=1"
                        target="_blank"
                        >up tempo app</a
                    >
                </li>
                <li>
                    ✅
                    <a
                        class="text-sky-600"
                        href="https://play.google.com/store/search?q=metronome%20beats&amp;c=apps&amp;hl=en"
                        target="_blank"
                        >metronome beats app</a
                    >
                </li>
                <li>
                    ✅
                    <a
                        class="text-sky-600"
                        href=" https://www.youtube.com/@TabEmAll"
                        target="_blank"
                        >Youtube - TAB 'EM ALL</a
                    >
                </li>
            </ul>
        </div>

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-sm border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                Lastest audios by el gato
            </h5>

            <ul class="m-2">
                <li>
                    <span>ELGATO [bass] - Fuel</span>
                    <audio controls="true">
                        <source
                            src="elgato/ELGATO fuel - treble.mp3"
                            type="audio/mpeg"
                        />
                    </audio>
                </li>
                <li>
                    <span>ELGATO [bass] - Memory remains</span>
                    <audio controls="true">
                        <source
                            src="elgato/ELGATO - memory remains.mp3"
                            type="audio/mpeg"
                        />
                    </audio>
                </li>
                <li>
                    <span>ELGATO [guitar] - various</span>
                    <audio controls="true">
                        <source
                            src="elgato/ELGATO - 6 tracks Metallica guitar.mp3"
                            type="audio/mpeg"
                        />
                    </audio>
                </li>
                <li>
                    <span>ELGATO [bass] - various</span>
                    <audio controls="true">
                        <source
                            src="elgato/ELGATO 6 tracks Metallica bass.mp3"
                            type="audio/mpeg"
                        />
                    </audio>
                </li>
            </ul>
        </div>

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <video controls>
                <source
                    src="elgato/GAT - fuel - guitar video-1.mp4"
                    type="video/mp4"
                />
            </video>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                El gato also likes guitar
            </h5>

            <p class="m-2 text-sm">Here playing "Fuel"</p>
        </div>

        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <video controls>
                <source
                    src="elgato/GAT - memory - guitar video-2.mp4"
                    type="video/mp4"
                />
            </video>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                El gato also likes guitar
            </h5>

            <p class="m-2 text-sm">Here playing "The memory remains"</p>
        </div>
        <div
            class="bg-neutral-primary-soft rounded-base m-2 block max-w-72 min-w-72 border-2 border-gray-500 p-1 text-gray-300 shadow-xs"
        >
            <a href="#">
                <img
                    class="w-16 rounded-full"
                    src="https://media.tenor.com/xQM3D2rSud0AAAAM/shocked-cat.gif"
                    alt=""
                />
            </a>

            <h5 class="text-heading m-2 text-xl font-semibold tracking-tight">
                El gato uses:
            </h5>

            <ul class="m-2">
                <li>
                    ✅
                    <a
                        class="text-sm text-sky-600"
                        href="https://zoomcorp.com/es/es/procesadores-multiefectos/bass-effects/b1-four-b1x-four/"
                        target="_blank"
                        >zoom b1</a
                    >
                </li>
                <li>
                    ✅
                    <a
                        class="text-sm text-sky-600"
                        href="https://es.yamaha.com/es/musical-instruments/guitars-basses-amps/products/electric-basses/trbx/lineup.html#d2145611"
                        target="_blank"
                        >yamaha trbx304</a
                    >
                </li>
                <li>
                    ✅
                    <a
                        class="text-sm text-sky-600"
                        href="https://focusrite.com/products/scarlett-solo-3rd-gen"
                        target="_blank"
                        >scarlett solo 3</a
                    >
                </li>
                <li>
                    ✅
                    <a
                        class="text-sm text-sky-600"
                        href="https://www.amazon.com/-/es/dp/B0002H04NE?ref_=ppx_hzsearch_conn_dt_b_fed_asin_title_1&amp;th=1"
                        target="_blank"
                        >D'Addario bass strings</a
                    >
                </li>
            </ul>
        </div>
    </div>
</template>
