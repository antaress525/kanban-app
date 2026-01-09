<div class="p-3.5 flex flex-col h-full">
    <!-- Board Header -->   
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center gap-x-3">
            <div 
                class="size-8 font-medium grid place-items-center rounded-lg" style="background-color: {{ $board->color.'26' }}; color: {{ $board->color }}; background-opacity: 0.1;"
            >
                {{ strtoupper(substr($board->name, 0, 1)) }}
            </div>
            <!-- Board name desktop -->
            <h3 class="text-lg hidden sm:block sm:text-xl truncate font-medium">{{ $board->name }}</h3>

            <!-- Board name mobile -->
            <h3 class="text-lg sm:hidden sm:text-xl truncate font-medium">{{ Str::limit(Str::ucfirst($board->name), 9) }}</h3>
        </div>
        <div class="flex items-center gap-x-2">
            <x-button variant="secondary" size="md" class="font-medium">
                <x-lucide-user-plus class="size-4 text-neutral-500"/>
                Inviter
            </x-button>
            <x-button variant="secondary" size="md" class="font-medium">
                <x-lucide-settings class="size-4 text-neutral-500"/>
                Parametre
            </x-button>
        </div>
    </div>

    <!-- Board action -->
    <div class="flex items-center gap-x-2 justify-end mb-6">
        <x-button variant="secondary" size="md" class="font-medium">
            <x-lucide-sliders-horizontal class="size-4 text-neutral-500"/>
            Filtre
        </x-button>
        <x-input name="search" size="md" class="w-3xs" placeholder="Recherche">
            <x-slot:prefix>
                <x-lucide-search class="size-4 text-neutral-500"/>
            </x-slot:prefix>
        </x-input>
    </div>

    <!-- Columns -->
    <div class="flex flex-1 gap-x-1 overflow-hidden">
        <!-- Todo Column -->
        <x-tasks.column>
            <!-- Column header -->
            <x-tasks.header class="bg-gray-800">A faire</x-tasks.header>

            <!-- Tasks -->
            <x-tasks.container>
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
            </x-tasks.container>

            <!--Tasks empty state -->
            <x-tasks.empty class="hidden" />

            <!-- Add task -->
            <x-button variant="secondary" class="w-full">
                <x-lucide-plus class="size-4 text-neutral-500"/>
                Ajouter
            </x-button>
        </x-tasks.column>

        <!-- In Progress Column -->
        <x-tasks.column>
            <!-- Column header -->
            <x-tasks.header class="bg-orange-500">En cours</x-tasks.header>

            <!-- Tasks -->
            <x-tasks.container>
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
            </x-tasks.container>

            <!--Tasks empty state -->
            <x-tasks.empty class="hidden" />

            <!-- Add task -->
            <x-button variant="secondary" class="w-full">
                <x-lucide-plus class="size-4 text-neutral-500"/>
                Ajouter
            </x-button>
        </x-tasks.column>

        <!-- Done Column -->
        <x-tasks.column>
            <!-- Column header -->
            <x-tasks.header class="bg-blue-500">Revision</x-tasks.header>

            <!-- Tasks -->
            <x-tasks.container>
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
            </x-tasks.container>

            <!--Tasks empty state -->
            <x-tasks.empty class="hidden" />

            <!-- Add task -->
            <x-button variant="secondary" class="w-full">
                <x-lucide-plus class="size-4 text-neutral-500"/>
                Ajouter
            </x-button>
        </x-tasks.column>
        
        <!-- Todo Column -->
        <x-tasks.column>
            <!-- Column header -->
            <x-tasks.header class="bg-green-500">Fait</x-tasks.header>

            <!-- Tasks -->
            <x-tasks.container>
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
                <x-tasks.item />
            </x-tasks.container>

            <!--Tasks empty state -->
            <x-tasks.empty class="hidden" />

            <!-- Add task -->
            <x-button variant="secondary" class="w-full">
                <x-lucide-plus class="size-4 text-neutral-500"/>
                Ajouter
            </x-button>
        </x-tasks.column>
    </div>
</div>
