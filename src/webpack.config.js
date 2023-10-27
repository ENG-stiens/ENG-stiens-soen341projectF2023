// webpack.config.js
const path = require('path');

module.exports = {
    entry: './src/index.js', // Your React app's entry point
    output: {
        path: path.resolve(__dirname, 'dist'), // Output directory
        filename: 'bundle.js', // Output bundle filename
    },
    module: {
        mode: 'development',
    },
    devServer: {
        before: function (app, server, compiler) {
            // Serve PHP files using PHP's built-in server (assuming PHP is in your PATH)
            app.get('*.php', function (req, res) {
                const { spawn } = require('child_process');
                const phpServer = spawn('php', ['-S', '127.0.0.1:8000', '-t', 'public']); // Adjust the path and port as needed
                phpServer.on('exit', (code) => {
                    if (code !== 0) {
                        console.error('PHP server process exited with an error');
                    }
                });
            });
        },
    },
};
