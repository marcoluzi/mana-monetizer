<x-layouts.base>
	<x-container-narrow>
		<div class="flex flex-col justify-center h-screen">
			<x-heading level="1" text="{{ __('Mana Monetizer') }}" additionalClasses="text-center mb-4" />
			<p class="text-lg font-bold text-center mb-16">{{ __('Tap into the Treasure of Your Collection.') }}</p>
			<livewire:csv-form />
		</div>
	</x-container-narrow>
</x-layouts.base>
