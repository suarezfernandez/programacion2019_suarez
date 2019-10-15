using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace objeto_movimiento
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
          // Obtener el valor de la tecla
            var keyValue = e.KeyValue;

            var posicionX = label2.Location.X;
            var posicionY = label2.Location.Y;
            // MessageBox.Show(keyValue.ToString());

            // MessageBox.Show( posicionX.ToString() );
            // MessageBox.Show( posicionY.ToString() );

            // label1.Location = new System.Drawing.Point(0, 0);

            // Reseteo
            if (keyValue == 82)
            {
                // Centro relativo al padre
                // CentroX
                var anchoPadre = label1.Width;
                var anchoHijo = label2.Width;
                var margenX = label1.Location.X;

                var centroX = ((anchoPadre + anchoHijo) / 2) - margenX;

                // CentroY
                var alturaPadre = label1.Height;
                var alturaHijo = label2.Height;
                var margenY = label1.Location.Y;

                var centroY = ((alturaPadre + alturaHijo) / 2) - margenY;

                // Centro absoluto (al formulario)

                // CentroX
                anchoPadre = this.Width;
                anchoHijo = label2.Width;
                
                // CentroY
                alturaPadre = this.Height;
                alturaHijo = label2.Height;

                // Bordes
                var bordeX = 18;
                var bordeY = 47;

                centroX = (anchoPadre / 2) - (anchoHijo / 2) - bordeX;
                centroY = (alturaPadre / 2 ) - (alturaHijo / 2) - bordeY;

                // MessageBox.Show("Punto de inicio");
                label1.Location = new System.Drawing.Point(centroX, centroY);
            }

            // Raimbow color
            if (keyValue == 67)
            {
                // MessageBox.Show("Color cambiado");

                var random = new Random();

                var numeroAleatorio = random.Next(0, 5);

                // Listado de colores

                Color[] colores = {Color.Blue, Color.Red, Color.Green, Color.Pink, Color.SaddleBrown};

                label2.BackColor = colores[numeroAleatorio];
          
                // Colores en RGB
                var red = random.Next(255);
                var green = random.Next(255);
                var blue = random.Next(255);
                // label2.BackColor = Color.FromArgb(255, 0, 0);

                label1.BackColor = Color.FromArgb(255, 0, 0);

            }

            // Izquierda
            if (keyValue == 37) {

                if (posicionX <= 12) {
                    return;
                }

                // MessageBox.Show("Flecha a la izquierda");
                label2.Location = new System.Drawing.Point(posicionX - 1, posicionY);
                label3.Text = label2.Location.ToString();
            }

            // Izquierda A
            if (keyValue == 65)
            {

                if (posicionX <= 12)
                {
                    return;
                }

                // MessageBox.Show("Flecha a la izquierda");
                label2.Location = new System.Drawing.Point(posicionX - 3, posicionY);
                label3.Text = label2.Location.ToString();
            }  

            // Derecha
            if (keyValue == 39) {

                if (posicionX >= 342)
                {
                    return;
                }
                
                // MessageBox.Show("Flecha a la derecha");
                label2.Location = new System.Drawing.Point(posicionX + 1, posicionY);
                label3.Text = label2.Location.ToString();
            }

            // Derecha D
            if (keyValue == 68)
            {

                if (posicionX >= 342)
                {
                    return;
                }

                // MessageBox.Show("Flecha a la derecha");
                label2.Location = new System.Drawing.Point(posicionX + 3, posicionY);
                label3.Text = label2.Location.ToString();
            }

            // Abajo
            if (keyValue == 40) {

                if (posicionY >= 419)
                {
                    return;
                }

                // MessageBox.Show("Flecha para abajo");
                label2.Location = new System.Drawing.Point(posicionX, posicionY + 1);
                label3.Text = label2.Location.ToString();
            }

            // Abajo S
            if (keyValue == 83)
            {

                if (posicionY >= 419)
                {
                    return;
                }

                // MessageBox.Show("Flecha para abajo");
                label2.Location = new System.Drawing.Point(posicionX, posicionY + 3);
                label3.Text = label2.Location.ToString();
            }

            // Arriba
            if (keyValue == 38) {

                if (posicionY <= 19)
                {
                    return;
                }

                // MessageBox.Show("Flecha para arriba");
                label2.Location = new System.Drawing.Point(posicionX, posicionY - 1);
                label3.Text = label2.Location.ToString();
            }

            // Arriba W
            if (keyValue == 87)
            {

                if (posicionY <= 19)
                {
                    return;
                }

                // MessageBox.Show("Flecha para arriba");
                label2.Location = new System.Drawing.Point(posicionX, posicionY - 3);
                label3.Text = label2.Location.ToString();
            }
            
        
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {

        }

        private void Form1_KeyUp(object sender, KeyEventArgs e)
        {

        }

        private void Form1_PreviewKeyDown(object sender, PreviewKeyDownEventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
