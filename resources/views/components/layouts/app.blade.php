<?php

use Livewire\Volt\Component;

new class extends Component {
//
};
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Laravel App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>
<body class="min-h-screen bg-white dark dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Peated Test" class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Peated Test" class="hidden px-2 dark:flex" />
        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="/bottles" wire:navigate>Bottles</flux:navlist.item>
            <flux:navlist.item icon="inbox" href="/locations" wire:navigate>Locations</flux:navlist.item>
            <flux:navlist.item icon="document-text" wire:navigate href="/distillers">Distillers</flux:navlist.item>
            <flux:navlist.item icon="calendar" wire:navigate href="/brands">Brands</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <flux:header class="!block bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:navbar class="w-full lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />
        </flux:navbar>

        <flux:navbar>
            <livewire:search />
        </flux:navbar>
    </flux:header>
    <flux:main x-data="{ isSearching: false }" @search-opened.window="isSearching = true" @search-closed.window="isSearching = false">
        <div x-show="!isSearching">
            {{ $slot }}
        </div>
        <div x-show="isSearching" id="search-content"></div>
    </flux:main>
    @persist('toast')
        <flux:toast />
    @endpersist
    @fluxScripts
</body>


</html>
