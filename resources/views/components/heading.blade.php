@props(['level' => '2', 'text' => '', 'additionalClasses' => ''])

@php
	$tag = 'h' . $level;
	$typescale = [
		'1' => 'text-4xl',
		'2' => 'text-3xl',
		'3' => 'text-2xl',
		'4' => 'text-xl',
		'5' => 'text-lg',
		'6' => 'text-base',
	];
	$class = $typescale[$level] ?? 'text-3xl';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => "$class $additionalClasses font-bold"]) }}>
	{{ $text }}
</{{ $tag }}>
