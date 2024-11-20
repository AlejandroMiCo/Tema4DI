using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ejercicio2
{
    public partial class Form1 : Form //Icono, cierre (X), informar error a usuario,
    {
        public Form1()
        {
            InitializeComponent();

            foreach (Control control in Controls)
            {
                if (control.GetType() == typeof(TextBox))
                {
                    control.Enter += new EventHandler(this.Form1_Enter);
                }

                if (control is Button)
                {
                    ((Button)control).MouseEnter += btn_MouseEnter;
                    ((Button)control).MouseLeave += btn_MouseLeave;
                }
            }
        }

        private void Form_FormClosing(object sender, FormClosingEventArgs e)
        {
            if (
                MessageBox.Show(
                    "¿Seguro que desea salir?",
                    "Mi Aplicación",
                    MessageBoxButtons.OKCancel,
                    MessageBoxIcon.Question
                ) == DialogResult.Cancel
            )
            {
                e.Cancel = true;
            }
        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (
                byte.TryParse(txtRed.Text, out byte red)
                && byte.TryParse(txtGreen.Text, out byte green)
                && byte.TryParse(txtBlue.Text, out byte blue)
            )
            {
                lblError.Text = "";
                this.BackColor = Color.FromArgb(red, green, blue);
            }
            else
            {
                lblError.Text =
                    "Error, los parametros no cumplen los valores de color, por favor introduzca un numero de 0 a 255";
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            //C:\Users\Alejandro\Desktop\Imagen.png
            try
            {
                pbxImagen.Image = Image.FromFile(txtImagen.Text);
                lblError.Text = "";
            }
            catch (Exception ex)
                when (ex is OutOfMemoryException
                    || ex is FileNotFoundException
                    || ex is ArgumentException
                )
            {
                lblError.Text =
                    "Error, no se encuentra una imagen en la ruta expecificada";
            }
        }

        private void Form1_Enter(object sender, EventArgs e)
        {
            if (sender == txtImagen)
            {
                AcceptButton = btnImagen;
            }
            else
            {
                AcceptButton = btnColor;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            foreach (Control control in Controls)
            {
                if (control.GetType() == typeof(TextBox))
                {
                    control.Text = "";
                }

                if (control.GetType() == typeof(PictureBox))
                {
                    pbxImagen.Image = default;
                }
            }
            lblError.Text = "";

        }

        private void btn_MouseEnter(object sender, EventArgs e)
        {
            ((Button)sender).BackColor = Color.ForestGreen;
        }

        private void btn_MouseLeave(object sender, EventArgs e)
        {
            ((Button)sender).BackColor = Color.White;
        }
    }
}
