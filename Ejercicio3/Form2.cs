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
    public partial class Form2 : Form
    {
        string file;

        public Form2(string file)
        {
            InitializeComponent();
            this.file = file;

        }

        private void Form2_Load(object sender, EventArgs e)
        {
            try
            {
                string titulo = file.Split('\\').Last().Split('.').First();
                Image img = new Bitmap(file);
                pbcImagen.SizeMode = PictureBoxSizeMode.AutoSize;
                pbcImagen.Image = img;
                ClientSize = img.Size;
                pbcImagen.SizeMode = PictureBoxSizeMode.StretchImage;
                this.Text = titulo;

            }
            catch (ArgumentException)
            {
                this.Close();
                MessageBox.Show("Error, archivo no admitido, intentelo con una imagen", "Error",MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
