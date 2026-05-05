document.addEventListener('DOMContentLoaded', function() {
    const filas = document.querySelectorAll('.punto-fila');
    const visorImg = document.getElementById('mapa-visor');
    const iframeMapa = document.getElementById('google-maps-iframe');

    filas.forEach(fila => {
        fila.addEventListener('click', function() {
            // 1. Cambiar estado visual de la fila
            filas.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            // 2. Cambiar la imagen del visor (Derecha)
            const rutaImagen = this.getAttribute('data-img');
            visorImg.style.opacity = '0.3';
            setTimeout(() => {
                visorImg.src = rutaImagen;
                visorImg.style.opacity = '1';
            }, 200);

            // 3. Cambiar el mapa de Google (Inferior)
            const direccion = this.getAttribute('data-place');
            // Formato de URL para Iframe de Google Maps sin API Key
            const nuevaUrl = `https://maps.google.com/maps?q=${encodeURIComponent(direccion)}&t=&z=16&ie=UTF8&iwloc=&output=embed`;
            
            iframeMapa.src = nuevaUrl;
        });
    });
});