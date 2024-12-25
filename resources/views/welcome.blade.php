<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel EventStream</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container w-full pt-20 mx-auto">
        <div class="w-full px-4 mb-16 leading-normal text-gray-800 md:px-0 md:mt-8">

            <div class="flex flex-wrap">
                <div class="w-full p-3 md:w-2/2 xl:w-3/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-yellow-600 rounded"><i
                                        class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">Latest trade</h5>
                                <h3 class="text-3xl font-bold">
                                    <p>
                                        Your Balance : <span id="value"></span>
                                    </p>
                                </h3>
                            </div>

                            {{-- <div id="value">100</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>


window.onload = function() {
    // var channel = ;
    Echo.channel('trades').listen('NewTrade', function(data) {
    //    document.getElementById('value').innerText = data.trade;
        alert(JSON.stringify(data));
        // console.log(data);
        // const obj = document.getElementById("value");
        // //  animateValue(obj, obj.innerHTML, data.trade, 5000);
        // document.getElementById('value').innerText = data.trade;
    }
    );
}


    // function animateValue(obj, start, end, duration) {
    //   let startTimestamp = null;
    //   const step = (timestamp) => {
    //     if (!startTimestamp) startTimestamp = timestamp;
    //     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    //     obj.innerHTML = Math.floor(progress * (end - start) + start);
    //     if (progress < 1) {
    //       window.requestAnimationFrame(step);
    //     }
    //   };
    //   window.requestAnimationFrame(step);
    // }


</script>

</html>
