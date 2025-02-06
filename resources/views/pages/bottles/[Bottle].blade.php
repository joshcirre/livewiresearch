<?php
use function Laravel\Folio\{name};
use App\Models\Bottle;
use Livewire\Volt\Component;

name('bottles.show');

new class extends Component {
    public Bottle $bottle;
};
?>

<x-layouts.app>
    @volt('pages.bottles.show')
        <flux:card class="space-y-8">
            <div class="space-y-4">
                <flux:heading size="lg">{{ $bottle->name }}</flux:heading>
                @if($bottle->description)
                    <flux:subheading class="text-gray-600 dark:text-gray-400">
                        {{ $bottle->description }}
                    </flux:subheading>
                @endif
            </div>

            <div class="space-y-6">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Name -->
                    <div class="space-y-2">
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Name
                        </div>
                        <div class="text-base font-medium text-gray-900 dark:text-gray-100">
                            {{ $bottle->name }}
                        </div>
                    </div>

                    <!-- Website -->
                    @if($bottle->website)
                        <div class="space-y-2">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Website
                            </div>
                            <a href="{{ $bottle->website }}"
                               target="_blank"
                               class="text-base font-medium text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                {{ $bottle->website }}
                            </a>
                        </div>
                    @endif

                    <!-- Year Established -->
                    @if($bottle->year_established)
                        <div class="space-y-2">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Year Established
                            </div>
                            <div class="text-base font-medium text-gray-900 dark:text-gray-100">
                                {{ $bottle->year_established }}
                            </div>
                        </div>
                    @endif

                    <!-- Location -->
                    @if($bottle->location)
                        <div class="space-y-2">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Location
                            </div>
                            <div class="text-base font-medium text-gray-900 dark:text-gray-100">
                                {{ $bottle->location }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </flux:card>
    @endvolt
</x-layouts.app>
