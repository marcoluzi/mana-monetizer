@props(['classes' => ''])

<div {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ' .$classes]) }}>
	<!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
	<div class="mx-auto max-w-3xl">
		{{ $slot }}
	</div>
</div>
