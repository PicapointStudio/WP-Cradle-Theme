# WP-Cradle-Theme
A WordPress barebone starter theme. Easy Peasy.

**cradle**  
/ˈkreɪd(ə)l/  
*noun - a place or process in which something originates or flourishes.*


## Getting started
1. Run `npm install`
2. Then `npm start`
3. 👩‍💻

### Scripts
All scripts are located in assets/scripts. In the js-folder place scripts that you import to assets/scripts/js/main.js. This will compile to assets/scripts/scripts.min.js. For Javascript that you would load only on specific or modules, place it in assets/scripts/specific-load. Compiler will not thouch this. 

### Styles
All styles are located in assets/styles. In the scss-folder place your styles, and import what you need in sthe styles.scss-file, this will compile to assets/styles/styles.min.css. assets/styles/scss/login.scss will compile to assets/styles/login.min.css

**Notes about rems**  
The base font-size is set at 62.5% for having the convenience of sizing rems in a way that is similar to using px: 1.6rem = 16px

### Thanks to
This theme is based on [JointsWP](https://github.com/JeremyEnglert/JointsWP), [Milligram scss](https://github.com/milligram/milligram-scss) and [Foundation sites](https://github.com/foundation/foundation-sites) .