<x-index-layout>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
        @foreach ($noticias as $noticia)
            @livewire(Noticia::class,['noticia'=>$noticia])
        @endforeach
    </div>
    <div class="mt-2">
       {{$noticias->links()}}
    </div>
</x-index-layout>

