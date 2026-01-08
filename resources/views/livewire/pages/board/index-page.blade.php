<div class="w-full sm:max-w-2xl mx-auto p-4">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8 sm:mb-13">
        <h2 class="text-lg md:text-xl font-poppins font-medium">Projets</h2>
        <x-button size="md" class="font-medium">Creer un projet</x-button>
    </div>

    <!-- Search -->
    <div class="mb-9 sm:mb-14 flex items-center gap-x-2">
        <x-input name="searh" size="md" placeholder="Recherche">
            <x-slot:prefix>
                <x-lucide-search class="size-4 text-neutral-500"/>
            </x-slot:prefix>
        </x-input>
        <x-button variant="secondary" size="md" class="font-medium">
            <x-lucide-sliders class="size-4 text-neutral-500"/>
            Filtres
        </x-button>
    </div>

    <!-- Boards -->
    <div class="space-y-4 sm:space-y-6 md:space-y-8">
        @if ($boards->isNotEmpty())
            <div>
                @foreach ($boards as $board)
                    <x-board-item wire:key="$board->id" :$board />
                @endforeach
            </div>
            <div>
                {{ $boards->links() }}
            </div>
        @else
            <!-- Empty state -->
            <div class="text-center py-10">
                <div class="p-3.5 mx-auto mb-4 md:mb-6 border border-neutral-200 rounded-xl grid place-items-center shadow-xl w-max">
                    <x-lucide-folder class="size-6" />
                </div>
                <h3 class="font-medium">Votre espace de travail est vide</h3>
                <p class="text-neutral-500 mt-1 text-sm text-pretty">Commencez dès maintenant en créant un projet et transformez vos <br class="hidden sm:block"/> idées en actions concrètes.</p>
                <x-button size="md" class="mt-6 font-medium">Commercer un projet</x-button>
            </div>
        @endif
    </div>

</div>
