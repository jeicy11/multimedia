using System;
using System.Drawing;
using System.Windows.Forms;

namespace TexturasColores
{
    public partial class Form1 : Form
    {
        Bitmap imagenOriginal;

        public Form1()
        {
            InitializeComponent();
        }

        // ==========================
        // FORM LOAD (LEYENDA)
        // ==========================
        private void Form1_Load(object sender, EventArgs e)
        {
            CrearLeyenda();

            panelInfo.Visible = true;
            panelInfo.BringToFront();
        }

        // ==========================
        // CARGAR IMAGEN
        // ==========================
        private void btnCargar_Click(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Filter = "Imágenes|*.png;*.jpg;*.jpeg;*.bmp";

            if (ofd.ShowDialog() == DialogResult.OK)
            {
                imagenOriginal = new Bitmap(ofd.FileName);
                pictureBox1.Image = imagenOriginal;
            }
        }

        // ==========================
        // PROCESAR IMAGEN
        // ==========================
        private void btnProcesar_Click(object sender, EventArgs e)
        {
            if (imagenOriginal == null)
            {
                MessageBox.Show("Carga una imagen primero");
                return;
            }

            Bitmap resultado = new Bitmap(imagenOriginal.Width, imagenOriginal.Height);

            int bloque = 10;

            for (int x = 0; x < imagenOriginal.Width; x += bloque)
            {
                for (int y = 0; y < imagenOriginal.Height; y += bloque)
                {
                    int sumaR = 0, sumaG = 0, sumaB = 0;
                    int contador = 0;

                    for (int i = x; i < x + bloque && i < imagenOriginal.Width; i++)
                    {
                        for (int j = y; j < y + bloque && j < imagenOriginal.Height; j++)
                        {
                            Color pixel = imagenOriginal.GetPixel(i, j);

                            sumaR += pixel.R;
                            sumaG += pixel.G;
                            sumaB += pixel.B;

                            contador++;
                        }
                    }

                    int promR = sumaR / contador;
                    int promG = sumaG / contador;
                    int promB = sumaB / contador;

                    Color colorFinal;

                    // VEGETACIÓN
                    if (promG > promR + 20 && promG > promB + 20)
                        colorFinal = Color.Lime;

                    // AGUA
                    else if (promB > promR + 20 && promB > promG + 20)
                        colorFinal = Color.Blue;

                    // TIERRA
                    else if (promR > promG + 20 && promR > promB + 20)
                        colorFinal = Color.SaddleBrown;

                    // ASFALTO / SOMBRA
                    else if (promR < 50 && promG < 50 && promB < 50)
                        colorFinal = Color.Black;

                    // NUBES / NIEVE
                    else if (promR > 200 && promG > 200 && promB > 200)
                        colorFinal = Color.White;

                    // ZONA URBANA
                    else if (Math.Abs(promR - promG) < 25 &&
                             Math.Abs(promR - promB) < 25)
                        colorFinal = Color.Gray;

                    // ZONAS SECAS
                    else if (promR > 150 && promG > 150 && promB < 100)
                        colorFinal = Color.Yellow;

                    // ARCILLA / CONSTRUCCIÓN
                    else if (promR > 180 &&
                             promG > 100 &&
                             promG < 180 &&
                             promB < 100)
                        colorFinal = Color.Orange;

                    else
                        colorFinal = Color.FromArgb(promR, promG, promB);

                    for (int i = x; i < x + bloque && i < imagenOriginal.Width; i++)
                    {
                        for (int j = y; j < y + bloque && j < imagenOriginal.Height; j++)
                        {
                            resultado.SetPixel(i, j, colorFinal);
                        }
                    }
                }
            }

            pictureBox2.Image = resultado;
//            MessageBox.Show("Procesamiento terminado");
        }

        // ==========================
        // LEYENDA EN DOS COLUMNAS
        // ==========================
        private void CrearLeyenda()
        {
            panelInfo.Controls.Clear();

            // Columna izquierda
            AgregarItem(Color.Lime, "Vegetación (césped / bosque)", 10, 10);
            AgregarItem(Color.SaddleBrown, "Tierra / suelo / caminos", 10, 40);
            AgregarItem(Color.Blue, "Agua (ríos / lagos / mar)", 10, 70);
            AgregarItem(Color.Gray, "Cemento / ciudad / edificios", 10, 100);

            // Columna derecha
            AgregarItem(Color.Black, "Asfalto / sombras", 320, 10);
            AgregarItem(Color.White, "Nubes / nieve", 320, 40);
            AgregarItem(Color.Yellow, "Zonas secas / pasto seco", 320, 70);
            AgregarItem(Color.Orange, "Arcilla / construcción", 320, 100);
        }

        // ==========================
        // CREAR ITEM DE LEYENDA
        // ==========================
        private void AgregarItem(Color color, string texto, int x, int y)
        {
            Panel cuadro = new Panel();
            cuadro.Size = new Size(20, 20);
            cuadro.BackColor = color;
            cuadro.BorderStyle = BorderStyle.FixedSingle;
            cuadro.Location = new Point(x, y);

            Label lbl = new Label();
            lbl.Text = texto;
            lbl.AutoSize = true;
            lbl.Location = new Point(x + 30, y + 2);

            panelInfo.Controls.Add(cuadro);
            panelInfo.Controls.Add(lbl);
        }
    }
}