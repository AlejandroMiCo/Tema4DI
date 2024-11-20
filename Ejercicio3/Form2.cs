using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ejercicio3
{
    public partial class Form2 : Form
    {
        public Form2(string file)
        {
            InitializeComponent();

            string titulo = file.Split('\\').Last().Split('.').First();

            pbcImagen.Size = ClientSize;
            pbcImagen.Image = Image.FromFile(file);

            this.Text = titulo;
        }
    }
}
