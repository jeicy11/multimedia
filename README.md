# TAREA MULTIMEDIA INFORMATICA UMSA 2026

## Descripción general

Este proyecto integra desarrollo multimedia, procesamiento de imágenes, animación y sincronización audiovisual. Incluye la digitalización de trámites universitarios, desarrollo 3D, procesamiento de imágenes y producción de contenido audiovisual.

## Estructura del repositorio

* 1_actividades_AB
* 2_actividades_abc
* 3_informe_tecnico
* assets

## 1. Actividades A y B

### A. Trámites UMSA (BPM)

a)  Diagraa de flujo del Modelado del Proceso

Modelado del proceso

Se elaboró un diagrama de flujo que representa el proceso del trámite universitario, identificando entradas, procesos, validaciones y resultados.

Este proyecto corresponde a un sistema de digitalización de trámites universitarios enfocado en la gestión y emisión de certificados académicos. El sistema automatiza el flujo completo del trámite desde la autenticación del estudiante hasta la generación y entrega del certificado digital.

El sistema incluye un diagrama BPM desarrollado con Mermaid Diagram que representa el flujo completo del trámite universitario.

El sistema utiliza archivos JSON para almacenar:

usuarios
certificados
inscripciones
materias
trámites
Modelado BPM

El diagrama de flujo del trámite fue desarrollado utilizando Mermaid Diagram y representa:

decisiones
validaciones
procesos
generación de certificados
flujo de finalización

Diagrama de Flujo:
https://drive.google.com/uc?id=1PLZ5UyYvvhcVyMDUAe3r4zJVRAv7tRDs

b) Sistema BPM
Se implementó un sistema de gestión de trámites utilizando PHP y JSON como almacenamiento de datos. El sistema permite agregar, consultar y actualizar trámites. Se ejecuta en entorno local con XAMPP.
SISTEMA DE DIGITALIZACIÓN DE TRÁMITES UMSA
Descripción

Este proyecto corresponde a un sistema de digitalización de trámites universitarios desarrollado utilizando PHP y almacenamiento de datos en archivos JSON. El objetivo es automatizar procesos administrativos universitarios mediante una estructura modular organizada por funcionalidades.

El sistema permite gestionar usuarios, inscripciones, certificados y administración de trámites académicos.

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
```text
assets/
│
├── css/
├── img/
└── js/

data/
│
├── certificados.json
├── inscripciones.json
├── materias.json
├── tramites.json
└── usuarios.json

includes/
│
├── auth.php
└── funciones.php

modulos/
│
├── admin/
├── certificados/
├── inscripciones/
└── usuarios/
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

### B.b) Fotogrametría

Se generó un modelo tridimensional a partir de fotografías reales de un integrante del grupo. El modelo puede visualizarse en una interfaz web.

Ubicación
1_actividades_grupales/B_desarrollo_3d_vr/fotogrametria_avatar

## 3. Actividades a, b y c

### Clasificación de texturas

Se desarrolló un algoritmo para identificar diferentes superficies en imágenes como césped, tierra, cemento y asfalto.

Ubicación
2_actividades_abc/clasificacion_texturas

### Filtro de suavizado

Se implementó un filtro promedio 3x3 para reducir ruido y suavizar imágenes.

Ubicación
2_actividades_abc/filtro_suavizado

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

### Cover La Vaca Lola

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
