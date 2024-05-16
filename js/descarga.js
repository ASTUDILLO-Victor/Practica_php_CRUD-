
        function descargarCurriculum() {
          // Cambia la ruta a tu archivo de currículum
          var url = 'pdf/CV ASTUDILLO CAMPOVERDE VICTOR MESIAS.pdf';
          var nombreArchivo = 'CV ASTUDILLO CAMPOVERDE VICTOR MESIAS.pdf';
    
          // Crear un elemento <a> temporal para descargar el archivo
          var link = document.createElement('a');
          link.href = url;
          link.download = nombreArchivo;
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
        }
