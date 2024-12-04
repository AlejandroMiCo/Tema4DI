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

namespace Ejercicio3
{
    public partial class Visor_de_imagenes : Form
    {
        string fileContent = string.Empty;
        string filePath = string.Empty;

        public Visor_de_imagenes()
        {
            InitializeComponent();
        }

        private void btnNuevaImagen_Click(object sender, EventArgs e)
        {
            using (OpenFileDialog openFileDialog = new OpenFileDialog())
            {
                openFileDialog.InitialDirectory = "c:\\";
                openFileDialog.Filter = "jpg|*.jpg|png|*.png|All files (*.*)|*.*";
                openFileDialog.RestoreDirectory = true;

                if (openFileDialog.ShowDialog() == DialogResult.OK)
                {
                    Form2 f = new Form2(openFileDialog.FileName);

                    if (cbxModal.Checked)
                    {
                        f.ShowDialog();
                    }
                    else
                    {
                        f.Show();
                    }

                }
            }
        }

        private void cbxModal_CheckedChanged(object sender, EventArgs e)
        {
            if (cbxModal.Checked)
            {
                cbxModal.ForeColor = Color.Red;
            }
            else
            {
                cbxModal.ForeColor = Color.Black;

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
    }
}
