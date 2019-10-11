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
            var keyValue = e.KeyValue;

          //  MessageBox.Show(keyValue.ToString());
            var posicionX = label2.Location.X;
            var posicionY = label2.Location.Y;

           // MessageBox.Show(posicionX.ToString());
            //MessageBox.Show(posicionY.ToString());

       
               

            if (keyValue == 38)
             {
              //  MessageBox.Show("Arriba");
                label2.Location = new System.Drawing.Point(posicionX , posicionY -1);
                label3.Text = label2.Location.ToString();


             }
                
        // Izquierda
            if (keyValue == 37)
            {
               // MessageBox.Show("Izquierda");
            }
            label2.Location = new System.Drawing.Point(posicionY + 1, posicionX);
            label3.Text = label2.Location.ToString();
            
            if (keyValue == 39)
            {
                 //MessageBox.Show("Derecha");
            
            label2.Location = new System.Drawing.Point(posicionX + 1, posicionY);
            label3.Text = label2.Location.ToString();

            }
               
            if (keyValue == 40)
            {
                label2.Location = new System.Drawing.Point(posicionX , posicionY -1);
                label3.Text = label2.Location.ToString();
                //MessageBox.Show("Abajo");
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
    }
}
