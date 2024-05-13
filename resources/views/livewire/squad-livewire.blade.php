<x-index-layout>
    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($squads as $squad)
            <div class="bg-slate-400 w-full p-2 rounded-lg">
               <div class="flex justify-center">
                    <img src="img/demo.jpg" alt="">
                </div>
                <div class="bg-blue-950 grid grid-cols-6 p-2">
                    <div class="flex justify-center items-center">
                        <h2 class="text-yellow-600 text-3xl">{{$squad->number}}</h2>
                    </div>
                    <div class="col-span-5 text-gray-100">
                        <h3 class="text-sm text-yellow-600">{{$squad->position->name}}</h3>
                        <h4>{{$squad->fullname}}</h4>
                        <h5 class="text-xs text-yellow-600">{{$squad->birthdate}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-index-layout>
