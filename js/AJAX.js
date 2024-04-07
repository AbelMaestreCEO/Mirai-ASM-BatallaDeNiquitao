const fs = require('fs');
const Router = require('router');

const router = new Router();

// Obtener directorios 
const dirs = fs.readdirSync(__dirname).filter(file => {
    return fs.statSync(file).isDirectory();
});

dirs.forEach(dir => {

    // Leer archivos de cada dir
    fs.readdir(dir, (err, files) => {

        files.forEach(file => {

            // Obtener ruta relativa 
            let route = file.split('.')[0];  
            // Remover extensión .php
            route = route.replace('.php', '');
            // Mapear ruta
            router.when(route, () => {
            loadPage(file); 
            });
        });

    });

});

function loadPage(file) {
    $.ajax({
        url: file
    }).done(data => {
        $('#content').php(data);
    });
}

link.addEventListener('click', e => {

    // Navigate

    return false;

})