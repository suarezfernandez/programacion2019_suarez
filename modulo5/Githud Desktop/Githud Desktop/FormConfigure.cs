using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Githud_Desktop
{
    public partial class FormConfigure : Form
    {
        public FormConfigure()
        {
            InitializeComponent();
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged_1(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // llamar el formulario FormMake
            var formularioFormMake = new FormMake();

            // mostrar el formulario
            formularioFormMake.Show();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }
        private void txtName_TextChanged(object sender, EventArgs e)
        {
            lblCommit.Text = txtName.Text + "commited 30 minutes ago";
        }
    }
}
