<x-modal-wrapper title="Archived Cards">
    <div class="max-h-96 overflow-y-scroll space-y-2">
        @forelse ($cards as $card)
            <div class="border border-gray-200 rounded-lg px-3 py-2 flex items-center justify-between">
                <div>
                    {{ $card->title }}
                </div>
                <button class="text-sm text-gray-600 hover:text-gray-500">Put back</button>
            </div>
        @empty
            <p class="s">You have no archived cards.</p>    
        @endforelse
    </div>
</x-modal-wrapper>
