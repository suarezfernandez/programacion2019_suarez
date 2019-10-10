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
    public partial class FormSignIn : Form
    {
        public FormSignIn()
        {
            InitializeComponent();
        }

        private void maskedTextBox1_MaskInputRejected(object sender, MaskInputRejectedEventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // llamar el formulario FormConfigure
            var formularioFormConfigure = new FormConfigure();

            // mostrar el formulario
            formularioFormConfigure.Show();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void textUsername_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = textUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

            if ( longitudUsername > 0 && longitudPassword > 0 ) {
                btnSignIn.Enabled = true;
            }
            else
            {
                btnSignIn.Enabled = false;
            }

        }

        private void txtPassword_TextChanged(object sender, EventArgs e)
        {
             var longitudUsername = textUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

            if (longitudUsername > 0 && longitudPassword > 0)
            {
                btnSignIn.Enabled = true;
            }
            else
            {
                btnSignIn.Enabled = false;
            }
        }
    }
}
