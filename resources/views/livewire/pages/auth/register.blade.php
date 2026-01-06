<div class="w-full max-w-sm bg-white border border-neutral-200 rounded-lg p-8 space-y-8">
    <div class="space-y-1 text-center">
        <h2 class="font-semibold text-xl font-poppins">Rejoignez la plateforme</h2>
        <p class="text-sm text-neutral-500">Travaillez plus vite. Collaborez mieux. Avancez sans friction.</p>
    </div>
    <form class="space-y-9">
        <div class="space-y-1.5">
            <x-label for="name">Nom complet</x-label>
            <x-input name="name" placeholder="Nom complet"></x-input>
        </div>
        <div class="space-y-1.5">
            <x-label for="email">Adresse e-mail</x-label>
            <x-input type="email" name="email" placeholder="Adresse e-mail"></x-input>
        </div>
        <div class="space-y-1.5">
            <x-label for="password">Mot de passe</x-label>
            <x-input type="password" name="password" placeholder="Mot de passe"></x-input>
        </div>
    </form>
</div>
