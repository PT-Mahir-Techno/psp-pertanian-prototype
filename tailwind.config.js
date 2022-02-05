module.exports = {
  content: [
		'./**/*.php'
	],
	theme: {
		container: {
			center: true,
			padding: {
				DEFAULT: '1rem',
				sm: '1rem',
				lg: '2rem',
				xl: '2rem',
				'2xl': '3rem',
			},
		}
	},
	plugins: [
		require('@tailwindcss/forms'),
		require('daisyui'),
	],
	daisyui: {
		themes: [
			{
				light: {
					"primary": "#00A1D5",
					"primary-focus": "#0091C5",
					"primary-content": "#ffffff",
					"secondary": "#FAE100",
					"secondary-focus": "#EAD100",
					"secondary-content": "#ffffff",
					"accent": "#009966",
					"accent-focus": "#008956",
					"accent-content": "#ffffff",
					"neutral": "#3d4451",
					"neutral-focus": "#2a2e37",
					"neutral-content": "#ffffff",
					"base-100": "#ffffff",
					"base-200": "#f9fafb",
					"base-300": "#d1d5db",
					"base-content": "#EFF0F6",
					"info": "#2094f3",
					"success": "#009485",
					"warning": "#ff9900",
					"error": "#ff5724",
				}
			}
		]
	}
}
