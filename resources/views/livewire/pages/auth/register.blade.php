<div class="w-full max-w-sm bg-white border border-neutral-200 rounded-lg p-8 space-y-8">
    <div class="space-y-1 text-center">
        <h2 class="font-semibold text-xl font-poppins">Rejoignez la plateforme</h2>
        <p class="text-sm text-neutral-500">Travaillez plus vite. Collaborez mieux. Avancez sans friction.</p>
    </div>
    <form wire:submit="register" class="space-y-6">
        <div class="space-y-1.5">
            <x-label for="name">Nom complet</x-label>
            <div class="space-y-0.5">
                <x-input wire:model="form.name" name="name" placeholder="john doe"></x-input>
                @error('form.name') <x-error>{{ $message }}</x-error> @enderror
            </div>
        </div>
        <div class="space-y-1.5">
            <x-label for="email">Adresse e-mail</x-label>
            <div class="space-y-0.5">
                <x-input wire:model="form.email" type="email" name="email" placeholder="john@gmail.com"></x-input>
                @error('form.email') <x-error>{{ $message }}</x-error> @enderror
            </div>
        </div>
        <div class="space-y-1.5">
            <x-label for="password">Mot de passe</x-label>
            <div class="space-y-0.5">
                <x-input wire:model="form.password" type="password" name="password" placeholder="Mot de passe"></x-input>
                @error('form.password') <x-error>{{ $message }}</x-error> @enderror
            </div>
        </div>
        <x-button type="primary" size="default" class="w-full">
            <x-spinner wire:loading.delay class="w-4 h-4 fill-white"/>
            S’inscrire et démarrer
        </x-button>
        <div class="flex items-center justify-between gap-x-4 text-neutral-400">
            <x-separator class="flex-1"></x-separator>Ou<x-separator class="flex-1"></x-separator>
        </div>
        <x-button type="submit" variant="secondary" size="default" class="w-full shadow">Continuer avec Google</x-button>
    </form>
</div>
