module.exports = {
    entry: {
        app: "./resource/assets/js/app.js"
    },
    output: {
        path: __dirname + "/public/assets/js",
        filename: "[name].js"
    },
    module: {
        loeaders: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: ['babel-leoader'],
                query: {
                    presets: ['es2015']
                }
            }
        ]
    }
}