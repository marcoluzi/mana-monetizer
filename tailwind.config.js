const defaultTheme = require('tailwindcss/defaultTheme')

// Settings
const settingsScreens = require('./tailwind.settings.screens')
const settingsFontSizes = require('./tailwind.settings.fontSizes')

module.exports = {
	theme: {
		screens: settingsScreens,
		fontSize: settingsFontSizes,
		extend: {
			colors: {
				'oxford-blue': '#0F1D49',
				'rich-black': '#060D1E',
				'crayola': '#FFC436',
				'turquoise': '#52D3D8',
			},
			fontFamily: {
				sans: ['system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'Liberation Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
			},
		},
	},
	variants: {
		extend: {
			backgroundColor: ['active'],
		}
	},
	content: [
		'./app/**/*.php',
		'./resources/**/*.html',
		'./resources/**/*.js',
		'./resources/**/*.jsx',
		'./resources/**/*.ts',
		'./resources/**/*.tsx',
		'./resources/**/*.php',
		'./resources/**/*.vue',
		'./resources/**/*.twig',
	],
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
	],
}
