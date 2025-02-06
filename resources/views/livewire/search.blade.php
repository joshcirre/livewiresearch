<?php

use App\Models\Bottle;
use Livewire\Attributes\Url;
use Livewire\Volt\Component;

new class extends Component {
    #[Url()]
    public $search = '';

    public function with()
    {
        return [
            'bottles' => Bottle::where('name', 'like', '%' . $this->search . '%')->get(),
        ];
    }

    public function updating($property, $value)
    {
        if ($property === 'search') {
            $this->dispatch('search-' . (!empty($value) ? 'opened' : 'closed'));
        }
    }

    public function resetSearch()
    {
        $this->search = '';
        $this->dispatch('search-closed');
    }
}; ?>

<div x-data="{ open: false }"
     @search-opened.window="open = true"
     @search-closed.window="open = false"
     class="relative flex items-center w-full gap-2">

    <button
        x-show="open"
        x-transition
        @click="$wire.resetSearch()"
        class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>

    <div class="flex-1">
        <flux:input
            icon="magnifying-glass"
            placeholder="Search for bottles, brands, and people"
            wire:model.live="search"
            x-data
            @focus="$dispatch('search-opened')"
        />
    </div>

    @teleport('#search-content')
        <div x-show="open"
             x-transition
             class="space-y-2">
            @foreach($bottles as $bottle)
                <div class="flex items-center justify-between p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-700">
                    <div class="flex items-center gap-2">
                        <div class="flex-1 text-sm font-medium">
                            <div class="flex items-center gap-1">
                                <a class="text-sm font-medium text-gray-900 dark:text-gray-100" href="/bottles/{{$bottle->id}}">
                                    {{ $bottle->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @if($search && $bottles->isEmpty())
                <div class="p-4 text-sm text-center text-gray-500 dark:text-gray-400">
                    No bottles found matching "{{ $search }}"
                </div>
            @endif
        </div>
    @endteleport
</div>
