# Layout

* Creamos el Layout siguiendo las especificaciones
* Para ello añadimos las clases en [tailwind.config.js] (../tailwind.config.js)

```json
{
          height: {
                "10v": "10vh",
                "15v": "15vh",
                "65v": "65vh"
            },
            colors: {
                "header": "#155e75",
                "nav": "#e0f2fe",
                "main": "#FFFFFF",
                "footer": "#bfdbfe"
            }
}
```

1. Creo una nueva ruta que retorne una pagina que extienda de layout
 - Creamos la ruta
 - Creo la pagina main.blade.php que extienda de layout
    [main.blade.php](/resources/views/main.blade.php)
2. 
