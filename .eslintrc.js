module.exports = {
    "extends": "standard",
    "installedESLint": true,
    "plugins": [
        "standard",
        "promise"
    ],
    "globals": {
        "Vue": true,
        "VueResource": true,
        "window": true,
        "$": true,
        "zxcvbn": true
    },
    "rules": {
        "no-unused-vars": 0
    }
};
