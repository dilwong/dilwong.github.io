module.exports = function (config) {
    config.addPassthroughCopy('./src/css/')
    config.addPassthroughCopy('./src/fonts/')
    config.addPassthroughCopy('./src/images/')
    return {
      dir: {
        input: './src',
        output: './docs'
      }
    }
  }