<x-html
	:title="isset($title) ? $title . ' | ' . config('app.name') : ''"
	class="bg-white h-screen antialiased leading-none"
>
	<x-slot name="head">
		<x-social-meta
			title="{{ $component->title() }}"
			description="{{ __('Tap into the Treasure of Your Collection.') }}"
		/>

		@vite(['resources/sass/app.scss', 'resources/js/app.js'])

		@livewireStyles
		@bukStyles
	</x-slot>

	{{ $slot }}

	<x-layouts.footer />

	@livewireScripts
	@bukScripts
</x-html>
