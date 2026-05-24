# TAREA MULTIMEDIA INFORMATICA UMSA 2026

## Descripción general

Este proyecto integra desarrollo multimedia, procesamiento de imágenes, animación y sincronización audiovisual. Incluye la digitalización de trámites universitarios, desarrollo 3D, procesamiento de imágenes y producción de contenido audiovisual.

## Estructura del repositorio

* 1_actividades_grupales
* 2_actividades_individuales
* 3_informe_tecnico
* assets

## 1. Actividades A y B

### A. Trámites UMSA (BPM)

Modelado del proceso
Se elaboró un diagrama de flujo que representa el proceso del trámite universitario, identificando entradas, procesos, validaciones y resultados.

Sistema BPM
Se implementó un sistema de gestión de trámites utilizando PHP y JSON como almacenamiento de datos. El sistema permite agregar, consultar y actualizar trámites. Se ejecuta en entorno local con XAMPP.

Ubicación del sistema
1_actividades_grupales/A_tramites_umsa/bpm_json

## 2. Desarrollo 3D y realidad virtual

### Animación en Unity

Se desarrolló una animación sincronizada con música exportada en formato WebGL para ejecución en navegador.

Ubicación
1_actividades_grupales/B_desarrollo_3d_vr/unity_animacion/build_webgl

### Fotogrametría

Se generó un modelo tridimensional a partir de fotografías reales de un integrante del grupo. El modelo puede visualizarse en una interfaz web.

Ubicación
1_actividades_grupales/B_desarrollo_3d_vr/fotogrametria_avatar

## 3. Actividades a, b y c

### Clasificación de texturas

Se desarrolló un algoritmo para identificar diferentes superficies en imágenes como césped, tierra, cemento y asfalto.

Ubicación
2_actividades_individuales/clasificacion_texturas

### Filtro de suavizado

Se implementó un filtro promedio 3x3 para reducir ruido y suavizar imágenes.

Ubicación
2_actividades_individuales/filtro_suavizado

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

Video final del proyecto
[https://drive.google.com/tu_link_aqui](https://drive.google.com/tu_link_aqui)

## Ubicación del archivo final

Video final del proyecto La Vaca Lola:  
[Ver video](https://drive.google.com/file/d/1wabbNqvF8YZiOZ0aJ4S8B4StalLiVqs_/view?usp=sharing)

## 5. Informe técnico

El informe incluye metodología utilizada, herramientas y tecnologías empleadas, capturas de pantalla del proceso y comparación visual entre resultados antes y después del procesamiento de imágenes.

Ubicación
3_informe_tecnico/informe.pdf

## Resultado final

Se obtuvo un sistema multimedia completo que integra procesamiento de imágenes, animación 3D, desarrollo web y sincronización audiovisual.

## Autor

Práctica UMSA Informática Multimedia 2026
Estudiante: Michelle Jeicy Avilés Loza
