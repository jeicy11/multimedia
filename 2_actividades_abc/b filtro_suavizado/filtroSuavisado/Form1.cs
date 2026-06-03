using System;
using System.Drawing;
using System.Windows.Forms;

namespace clase_18_febrero
{
    public partial class form1 : Form
    {
        public form1()
        {
            InitializeComponent();
        }

        // ===============================
        // CARGAR IMAGEN
        // ===============================
        private void button1_Click(object sender, EventArgs e)
        {
            if (openFileDialog1.ShowDialog() == DialogResult.OK)
            {
                Bitmap bmp = new Bitmap(openFileDialog1.FileName);
                pictureBox1.Image = bmp;
            }
        }

        // ===============================
        // APLICAR FILTRO SUAVIZADO
        // ===============================
        private void button2_Click(object sender, EventArgs e)
        {
            if (pictureBox1.Image == null)
            {
                MessageBox.Show("Carga primero una imagen.");
                return;
            }

            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);

            // ===============================
            // SUAVIZADO
            // ===============================
            for (int x = 1; x < bmp.Width - 1; x++)
            {
                for (int y = 1; y < bmp.Height - 1; y++)
                {
                    int sumaR = 0;
                    int sumaG = 0;
                    int sumaB = 0;

                    // Ventana 3x3
                    for (int i = -1; i <= 1; i++)
                    {
                        for (int j = -1; j <= 1; j++)
                        {
                            Color c =
                                bmp.GetPixel(x + i, y + j);

                            sumaR += c.R;
                            sumaG += c.G;
                            sumaB += c.B;
                        }
                    }

                    int promedioR = sumaR / 9;
                    int promedioG = sumaG / 9;
                    int promedioB = sumaB / 9;

                    bmp2.SetPixel(x, y,
                        Color.FromArgb(
                            promedioR,
                            promedioG,
                            promedioB));
                }
            }

            pictureBox2.Image = bmp2;
        }

        // ===============================
        // SALIR
        // ===============================
        private void button3_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
}

