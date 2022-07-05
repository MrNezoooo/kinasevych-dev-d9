module.exports = {
  prefix: 'tw-',
  important: true,
  purge: [
    './templates/**/*.twig',
  ],
  corePlugins: {
    container: false
  },
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [
    function ({addComponents}) {
      addComponents({
        '.container': {
          maxWidth: '1240px',
          width: '100%',
          margin: '0 auto',
        },
        '.container-inner': {
          maxWidth: '70%',
          width: '100%',
          marginLeft: '85px',
        }
      })
    }
  ]
}
