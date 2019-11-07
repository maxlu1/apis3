module.exports = {
    entry:"./webpack/main.ts",
    output: {
        filename:"./bundle.js",
        path: "/var/www/html/testapis3/wp-content/themes/apis3/webpack/app"
    },
    //devtool:"source-map",
    resolve: {
        extensions: ["*",".ts",".tsx",".js"]
    },
    module:{
        rules: [
            {test:/\.tsx?$/, loader:"ts-loader"}
        ]
    }
};
