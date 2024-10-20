<x-modal-wrapper title="Edit Card">
    <form wire:submit="updateCard" class="space-y-3">
        <div>
            <x-input-label for="title" value="Title" class="sr-only" />
            <x-text-input wire:model="editCardForm.title" class="w-full" id="title" autofocus/>
            <x-input-error :messages="$errors->get('editCardForm.title')" class="mt-1" />
        </div>

        <div class="flex items-center justify-between">
            <x-primary-button>
                Save
            </x-primary-button>

            <x-secondary-button>
                Archive
            </x-secondary-button>
        </div>
    </form>
</x-modal-wrapper>
