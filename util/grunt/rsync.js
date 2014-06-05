// -------------------------------------
// rsync.js -  Grunt RSYNC way of deploying
// -------------------------------------

module.exports = {
    deploy: {
        files: "deploy/",
        options: {
            host: "vps8063.xlshosting.net",
            port: "1023",
            user: "ftpsecure",
            remoteBase: "/var/www/wp-content/themes/slate_honders"
        }
    }
};
