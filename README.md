# TAREA MULTIMEDIA INFORMATICA UMSA 2026

## Descripción general

Este proyecto integra desarrollo multimedia, procesamiento de imágenes, animación y sincronización audiovisual. Incluye la digitalización de trámites universitarios, desarrollo 3D, procesamiento de imágenes y producción de contenido audiovisual.

## Estructura del repositorio

* 1_actividades_AB
* 2_actividades_abc
* 3_informe
* assets

## 1. Actividades A y B

### A. Trámites UMSA (BPM)

a)  Diagraa de flujo del Modelado del Proceso

Modelado del proceso

1. Metodología utilizada

Modelado del Proceso

Para el desarrollo del proyecto se realizó el modelado de procesos utilizando diagramas de flujo BPM (Business Process Management), con el objetivo de representar gráficamente el funcionamiento completo de los trámites universitarios digitalizados dentro de la Carrera de Informática de la UMSA.

El sistema implementa dos workflows principales:

* F1: Inscripción de Materias.
* F2: Emisión de Certificados.

Cada flujo fue estructurado identificando claramente:

* Entradas del sistema.
* Procesos administrativos.
* Validaciones académicas.
* Roles responsables.
* Resultados finales.

En el Flujo F1 — Inscripción de Materias, el proceso inicia con la solicitud realizada por el estudiante. Posteriormente, Kardex verifica el requisito académico y valido la información correspondiente. Luego, Director 1 y Director 2 realizan las revisiones y aprobaciones necesarias. Finalmente, Kardex registra oficialmente la inscripción y el estudiante recibe el resultado final del trámite.

En el Flujo F2 — Emisión de Certificados, el estudiante solicita un certificado académico. Kardex verifica los datos del historial académico y posteriormente el trámite pasa por las etapas de revisión y aprobación de Director 1 y Director 2. Luego, Caja registra el pago correspondiente y finalmente Kardex genera el certificado digital para que el estudiante pueda descargarlo.

Los diagramas BPM permitieron representar de manera clara el recorrido completo de cada trámite, facilitando la automatización del workflow y permitiendo identificar fácilmente las tareas pendientes, validaciones y responsables en cada etapa del proceso.

Este modelado sirvió como base para la implementación del motor workflow desarrollado en PHP y JSON, permitiendo automatizar los trámites universitarios y reducir significativamente los procesos manuales realizados en papel.

El proyecto implementa diagramas BPM (Business Process Management) para representar el funcionamiento completo de los trámites universitarios digitalizados.

Los diagramas muestran:

* Entradas del sistema.
* Procesos administrativos.
* Validaciones.
* Roles responsables.
* Resultados finales.

Se desarrollaron dos workflows principales:

F1 — Inscripción de Materias
Flujo:

Estudiante → Kardex → Director 1 → Director 2 → Kardex → Estudiante

F2 — Emisión de Certificados

Flujo:

Estudiante → Kardex → Director 1 → Director 2 → Caja → Kardex → Estudiante
Los diagramas BPM sirvieron como base para implementar el motor workflow dinámico desarrollado en PHP y JSON, permitiendo automatizar la asignación de tareas y el avance automático de los trámites universitarios.

Tecnologías utilizadas
PHP
JSON
HTML
CSS
JavaScript
XAMPP
Microsoft Visual Studio
Estructura del proyecto


## Estructura del proyecto

```bash
C:\XAMPP\HTDOCS\PROYECTOUMSADOS
│   bandeja.php
│   index.php
│   login.php
│   logout.php
│   nuevo_tramite.php
│   workflow.php
│
├───controlador
│       workflow.php
│
├───json
│       flujocondicionante.json
│       flujoproceso.json
│       seguimiento.json
│       usuarios.json
│
└───pantallas
        aprobacion_director2.php
        aprobacion_final.php
        descargar_certificado.php
        generar_certificado.php
        mostrar_resultado.php
        pago_certificado.php
        registrar_inscripcion.php
        revision_certificado.php
        revision_director1.php
        solicitar_certificado.php
        solicitar_inscripcion.php
        validar_datos.php
        validar_requisitos.php
        verificar_datos.php
```



## 📁 Archivo del Proyecto

🔗 [Ver archivo en Google Drive](https://drive.google.com/file/d/1nR95-qcEX_gaVqMmSv7hOmQuwVWgapqj/view?usp=drive_link)

---

## 🚀 Descripción

Sistema de gestión de trámites desarrollado en PHP utilizando XAMPP y archivos JSON para el manejo de procesos, usuarios y seguimiento de flujos.

## 🛠 Tecnologías Utilizadas

* PHP
* HTML/CSS
* JSON
* XAMPP
* GitHub

```
```

"http://localhost/umsa/"

Estructura modular

El sistema está organizado por módulos independientes:

Admin
Certificados
Inscripciones
Usuarios

Cada módulo contiene sus propias vistas y funcionalidades.

Almacenamiento de datos

El sistema utiliza archivos JSON como mecanismo de almacenamiento dinámico de información evitando el uso de bases de datos tradicionales.



## B. Desarrollo 3D y realidad virtual

### B.a) Animación sincronizada en Unity

Se desarrolló una animación sincronizada con música exportada en formato WebGL para ejecución en navegador.

# ANIMACIÓN SINCRONIZADA EN UNITY

## Descripción

Este proyecto consiste en el desarrollo de una escena 3D en Unity donde múltiples personajes realizan una coreografía sincronizada con música. El objetivo fue implementar animaciones coordinadas utilizando el sistema Animator de Unity y exportar el proyecto en formato WebGL para ejecución desde navegador web.

---

## Características principales

- Escena 3D interactiva
- Múltiples personajes sincronizados
- Coreografía grupal animada
- Música sincronizada con animaciones
- Exportación WebGL
- Ejecución desde navegador

---

## Tecnologías utilizadas

- Unity 6
- C#
- Animator Controller
- Mecanim Animation System
- Audio Source
- WebGL
- Microsoft Visual Studio
- GitHub

---

## Metodología utilizada

El proyecto fue desarrollado utilizando modelos humanoides importados en Unity. Se configuró un Animator Controller para controlar las secuencias de baile y sincronizar los movimientos de todos los personajes.

La música fue integrada mediante Audio Source sincronizando reproducción y animación. Posteriormente se configuró la iluminación, cámara y escenario de la escena 3D.

Finalmente el proyecto fue exportado en formato WebGL para visualización en navegador.

---

## Estructura del proyecto

```text
Assets/
│
├── Animations/
├── Audio/
├── Materials/
├── Models/
├── Prefabs/
├── Scenes/
├── Scripts/
└── WebGLBuild/
```

---

## Ejecución del proyecto

### Requisitos

- Unity 6
- Navegador web compatible con WebGL

---

## Ejecución en Unity

1. Abrir el proyecto en Unity
2. Cargar la escena principal
3. Presionar Play para ejecutar la animación

---

## Exportación WebGL

1. Abrir File > Build Settings
2. Seleccionar WebGL
3. Presionar Build
4. Abrir index.html generado

---

## Resultado obtenido

El resultado final consiste en una escena 3D donde varios personajes ejecutan una coreografía sincronizada con música en tiempo real.

---

## Capturas del proyecto

Se incluyen capturas de:
- Escena principal
- Animator Controller
- Personajes sincronizados
- Resultado WebGL

---

Link de la animación, que se subio al sitio itch.io:


[1_actividades_grupales/B_desarrollo_3d_vr/unity_animacion/build_webgl](https://jeycy.itch.io/coreografia)

### B.b) Construcción de un Avatar Digital mediante Fotogrametría

Se generó un modelo tridimensional a partir de fotografías reales de un integrante del grupo. El modelo puede visualizarse en una interfaz web.

# CONSTRUCCIÓN DE AVATAR DIGITAL MEDIANTE FOTOGRAMETRÍA

## Descripción

Este proyecto consiste en la generación de un modelo tridimensional realista utilizando técnicas de fotogrametría digital. El proceso fue desarrollado a partir de fotografías reales capturadas alrededor de una persona y posteriormente reconstruidas mediante software especializado.

El modelo final fue optimizado y publicado en una plataforma web interactiva para su visualización desde navegador.

---

## Metodología utilizada

Inicialmente se capturaron más de 100 fotografías alrededor de la persona desde diferentes ángulos con el objetivo de obtener suficiente información visual para la reconstrucción tridimensional.

Las imágenes fueron procesadas utilizando Regard 3D con configuraciones optimizadas de reconstrucción. Debido al procesamiento realizado mediante CPU, el tiempo de generación del modelo superó las tres horas.

El modelo reconstruido fue exportado en formato PLY y posteriormente importado en Blender para eliminar ruido y geometrías incorrectas generadas durante la reconstrucción.

Finalmente el modelo fue exportado en formato GLB para su visualización en plataformas web compatibles con contenido 3D interactivo.

---

## Herramientas y tecnologías empleadas

- Regard 3D
- Blender
- Fotogrametría digital
- Formato PLY
- Formato GLB
- Plataforma web P3D
- GitHub

---

## Proceso realizado

- Captura de fotografías alrededor de la persona
- Reconstrucción de nube de puntos
- Generación de superficie 3D
- Exportación del modelo en formato PLY
- Limpieza y optimización en Blender
- Exportación final en formato GLB
- Publicación web interactiva

---

## Resultados obtenidos

El modelo tridimensional generado presenta una reconstrucción visual aceptable considerando las limitaciones de procesamiento por CPU.

Se obtuvo:

## Triangulización

![Densificación](https://drive.google.com/uc?id=1jwh5AOXq-xOaPDIa7yVndy5SP1Mqm0ll)

## Densificación

![Imagen](https://drive.google.com/uc?id=1-E0S4-4P6J8B2pRKqrAWnACgSthkDMnO)

## Texturización

![Resultado final](https://drive.google.com/uc?id=1E5x4lL71AIRvIzWa8yIutTLbREO6tL2w)

---

- Visualización interactiva desde navegador

## Visualización web

Modelo interactivo:
https://p3d.in/q4KG1

---

## Capturas del proyecto

Se incluyen capturas de:
- Procesamiento en Regard 3D
- Reconstrucción de nube de puntos
- Edición del modelo en Blender
- Resultado final publicado

---

## 3. Actividades a, b y c

### a) Clasificación de texturas

Se desarrolló un algoritmo para identificar diferentes superficies en imágenes como césped, tierra, cemento y asfalto.

# CLASIFICACIÓN DE TEXTURAS

## Descripción

Este proyecto implementa un algoritmo de procesamiento de imágenes a nivel de píxel utilizando C# y Windows Forms. El objetivo es clasificar regiones de una imagen en diferentes tipos de textura mediante el análisis de bloques de píxeles.

El sistema simula la identificación de superficies como césped, tierra, cemento o asfalto utilizando dominancia de color.

---

## Funcionamiento

El algoritmo divide la imagen en bloques de 15x15 píxeles y calcula el promedio RGB de cada bloque. Luego clasifica cada región según la dominancia de color:

- Rojo dominante → categoría roja
- Verde dominante → categoría verde
- Azul dominante → categoría azul
- Colores similares → escala de grises
- Otros casos → color promedio del bloque

---

## Tecnologías utilizadas

- C#
- Windows Forms
- .NET Framework
- Visual Studio
- Bitmap (GDI+)
- Procesamiento de imágenes

---

## Metodología

El procesamiento se realiza directamente sobre los píxeles de la imagen. Se recorren bloques de la imagen, se calcula el promedio de color y se asigna una categoría visual simplificada.

Este enfoque permite una clasificación básica de texturas similar a técnicas de análisis de imágenes satelitales.

---

## Código principal

El procesamiento se basa en:

- Recorrido por bloques de la imagen
- Cálculo de promedio RGB
- Evaluación de dominancia de color
- Asignación de color final por bloque

---

## Ejecución

1. Abrir el proyecto en Visual Studio
2. Ejecutar el formulario principal
3. Cargar una imagen
4. Presionar “Procesar”
5. Visualizar el resultado en pantalla

---

## Resultado

El resultado muestra una imagen segmentada por regiones de color que representan diferentes tipos de textura visual.

---

Captura de pantalla: 

## Resultado del procesamiento

![Resultado](https://drive.google.com/uc?id=1A7qwyQEb_MXljzGpUo2bDCaW-sCp-4h-)

### b) Filtro de suavizado

Se implementó un filtro promedio 3x3 para reducir ruido y suavizar imágenes.

IMPLEMENTACIÓN DE UN FILTRO DE SUAVIZADO
Descripción
Este módulo consiste en la implementación de un filtro de promedio utilizando una ventana de 3x3 píxeles. El objetivo es reducir el ruido en la imagen y suavizar las transiciones de color, obteniendo una imagen con mejor calidad visual.
Metodología utilizada
El filtro recorre cada píxel de la imagen aplicando una ventana de 3x3 sobre sus vecinos. Para cada posición se calcula el promedio de los valores de los píxeles en los canales de color. El valor resultante reemplaza al píxel central generando una imagen suavizada.
Tecnologías utilizadas
•	Python
•	OpenCV
•	NumPy
•	Microsoft Visual Studio
Proceso de implementación
•	Carga de la imagen original
•	Conversión de la imagen a matriz de píxeles
•	Recorrido de la imagen con ventana 3x3
•	Cálculo del promedio de los valores RGB
•	Generación de la imagen filtrada
Código del filtro
import cv2
import numpy as np

imagen = cv2.imread("imagen.jpg")

alto, ancho, canales = imagen.shape

resultado = np.zeros((alto, ancho, canales), dtype=np.uint8)

for i in range(1, alto-1):
    for j in range(1, ancho-1):
        ventana = imagen[i-1:i+2, j-1:j+2]
        resultado[i, j] = np.mean(ventana, axis=(0,1))

cv2.imwrite("resultado.jpg", resultado)
Ejecución en Microsoft Visual Studio
Requisitos
•	Python instalado
•	Microsoft Visual Studio instalado
•	Soporte de Python en Visual Studio
•	OpenCV instalado
Instalación de dependencias:
pip install opencv-python
Ejecución del programa

•	Abrir Microsoft Visual Studio

•	Crear o abrir un proyecto en Python

•	Agregar el archivo filtro.py

•	Pegar el código del filtro

•	Ejecutar el programa desde el botón Run o presionando Ctrl + F5

Resultado esperado
La imagen resultante presenta reducción de ruido y suavizado en las transiciones de color en comparación con la imagen original.

## Comparación de resultados

Gráfico del filtro aplicado:

![Resultado del filtro](https://drive.google.com/uc?id=1rcGw_GA31RI6nGHebnzEZA7lyjdiqNDR)

### c) Cover La Vaca Lola

Este proyecto consiste en la producción multimedia de la canción La Vaca Lola. Se utilizó procesamiento de video para extraer frames del video original, ordenarlos y reconstruir el video. Posteriormente se sincronizó con audio mediante FFmpeg.

Proceso realizado
Extracción de frames desde video
Ordenamiento secuencial de imágenes
Reconstrucción de video a partir de imágenes
Sincronización de audio con video

Tecnologías utilizadas
Python
OpenCV
FFmpeg
Google Colab
Google Drive

## Descripción

Este módulo corresponde a la producción multimedia de la canción “La Vaca Lola”. Se realizó procesamiento de video para extracción de frames, reconstrucción del video y sincronización con audio.

## Proceso realizado

* Extracción de frames desde el video original utilizando OpenCV
* Ordenamiento secuencial de imágenes
* Reconstrucción del video a partir de frames
* Sincronización de audio con FFmpeg

## Tecnologías utilizadas

* Python
* OpenCV
* FFmpeg
* Google Colab
* Google Drive

## Estructura del módulo

vaca/

* baile.mp4 (video original)
* vacalola.mp3 (audio)
* frames/ (imágenes extraídas)
* video.mp4 (video reconstruido)
* videofinal.mp4 (video final sincronizado)

## Ejecución del proyecto

### Requisitos

* Google Colab
* Google Drive montado
* Python con OpenCV instalado

### Pasos de ejecución

1. Montar Google Drive

from google.colab import drive
drive.mount('/content/drive')

2. Cargar el video original

video = cv2.VideoCapture(archivo)

3. Extraer frames del video

Se recorren los frames del video y se guardan como imágenes en la carpeta frames.

4. Ordenar imágenes

imagenes = sorted(os.listdir(directorio), key=lambda x: int(re.findall(r'\d+', x)[0]))

5. Reconstruir el video desde imágenes

Se utiliza cv2.VideoWriter para unir los frames en un video.

6. Sincronizar audio con video

ffmpeg -i video.mp4 -i vacalola.mp3 -c:v copy -c:a copy videofinal.mp4

## Resultado final

El resultado es un video multimedia sincronizado entre imagen y audio.

Video final del proyecto La Vaca Lola:  
https://drive.google.com/file/d/1doGAZBT9V7JoqMQpqM68mt3hApDEiTC2/view


## 5. Informe técnico

El informe incluye metodología utilizada, herramientas y tecnologías empleadas, capturas de pantalla del proceso y comparación visual entre resultados antes y después del procesamiento de imágenes.

Ubicación
3_informe_tecnico/informe.pdf

## Resultado final

Se obtuvo un sistema multimedia completo que integra procesamiento de imágenes, animación 3D, desarrollo web y sincronización audiovisual.

## Autor

Práctica UMSA Informática Multimedia 2026
Estudiante: Michelle Jeicy Avilés Loza
