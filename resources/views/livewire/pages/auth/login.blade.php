<div class="w-full max-w-sm bg-white border border-neutral-200 rounded-lg p-8 space-y-8">
    <div class="space-y-1 text-center">
        <h2 class="font-semibold text-xl font-poppins">Connexion à votre espace</h2>
        <p class="text-sm text-neutral-500">Accédez à votre tableau de travail et gérez vos projets en toute simplicité.</p>
    </div>
    <form wire:submit.prevent="login" class="space-y-6">
        <div class="space-y-1.5">
            <x-label for="email">Adresse e-mail</x-label>
            <div class="space-y-0.5">
                <x-input wire:model="form.email" type="email" name="email" placeholder="john@gmail.com"></x-input>
                @error('form.email') <x-error>{{ $message }}</x-error> @enderror
            </div>
        </div>
        <div class="space-y-2">
            <div class="space-y-1.5">
                <x-label for="password">Mot de passe</x-label>
                <div class="space-y-0.5">
                    <x-input wire:model="form.password" type="password" name="password" placeholder="Mot de passe"></x-input>
                    @error('form.password') <x-error>{{ $message }}</x-error> @enderror
                </div>
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2 text-sm text-neutral-600">
                    <input wire:model="remember" type="checkbox" class="rounded border-neutral-300 text-indigo-500 focus:ring-indigo-500">
                    <span>Se souvenir de moi</span>
                </label>
                <x-link class="text-xs">Mot de passe oublier ?</x-link>
            </div>
        </div>
        <x-button type="primary" size="default" class="w-full">
            <x-spinner wire:loading.delay class="w-4 h-4 fill-white"/>
            Se connecter
        </x-button>
    </form>
    <p class="text-xs text-center">Vous n’avez pas de compte ? <x-link :href="route('register')" wire:navigate>Créer un compte</x-link> </p>
</div>
