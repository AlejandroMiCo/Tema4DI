#define TECLA


using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ejercicio1
{
    public partial class Form1 : Form 
    {

        public Form1()
        {
            InitializeComponent();

            CreateButtons();

            foreach (Control c in this.Controls)
            {
                c.MouseMove += new MouseEventHandler(this.MoverRaton);
            }
        }

        public void MoverRaton(object sender, MouseEventArgs e)
        {
            if (sender == this)
            {
                this.Text = $"Componente en x: {e.X} Componente en y: {e.Y}";
            }
            else
            {
                this.Text =
                    $"Componente en x: {e.X + ((Control)sender).Location.X} Componente en y: {e.Y + ((Control)sender).Location.Y}";
            }
        }

        private void Form1_Leave(object sender, EventArgs e)
        {
            Text = "Mouse Tester";
        }

        private void EventoDown(object sender,MouseEventArgs e)
        {
            if (e.Button == System.Windows.Forms.MouseButtons.Left)
            {
                button1.BackColor = Color.BlanchedAlmond;
            }
            if (e.Button == MouseButtons.Right)
            {
                button2.BackColor = Color.MistyRose;
            }
            if (
                e.Button != System.Windows.Forms.MouseButtons.Left
                && e.Button != System.Windows.Forms.MouseButtons.Right
            )
            {
                button2.BackColor = Color.Thistle;
                button1.BackColor = Color.Tomato;
            }
        }

        private void EventUp(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                button1.BackColor = Color.White;
            }
            if (e.Button == MouseButtons.Right)
            {
                button2.BackColor = Color.White;
            }
            if (e.Button != MouseButtons.Left && e.Button != MouseButtons.Right)
            {
                button2.BackColor = Color.White;
                button1.BackColor = Color.White;
            }
        }

#if TECL
        private void TeclaPulsada(object sender, KeyEventArgs e)
        {
            this.Text = e.KeyValue.ToString();

            if (e.KeyCode == Keys.Escape)
            {
                this.Text = "Mouse Tester";
            }
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e) { }
#else
        private void TeclaPulsada(object sender, KeyEventArgs e)
        {
        }
        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {
            this.Text = e.KeyChar.ToString();
        }
#endif

        public void CreateButtons()
        {
            int cont = 0;

            for (int i = 0; i < 4; i++)
            {
                for (int j = 0; j < 5; j++)
                {
                    Button btn = new Button();
                    btn.Text = $"{++cont}";
                    btn.Location = new Point(150 * (j) + 50, 40 * (i) + 200);
                    btn.Size = new Size(70, 40);
                    btn.Enabled = true;

                    btn.Click += new System.EventHandler(this.btnClick);

                    this.Controls.Add(btn);
                }
            }
        }

        void btnClick(object sender, System.EventArgs e)
        {
            this.Text = ((Button)sender).Text;
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
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
