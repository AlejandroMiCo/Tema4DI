using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Threading.Tasks;
using System.Timers;
using System.Windows.Forms;

namespace Ejercicio4
{
    public delegate double Funcion(double op1, double op2);

    public partial class Form1 : Form
    {
        Dictionary<string, Funcion> operaciones;
        int cont = 0;

        public Form1()
        {
            InitializeComponent();

            operaciones = new Dictionary<string, Funcion>();
            operaciones.Add("+", (op1, op2) => op1 + op2);
            operaciones.Add("-", (op1, op2) => op1 - op2);
            operaciones.Add("*", (op1, op2) => op1 * op2);
            operaciones.Add("/", (op1, op2) => op1 / op2);
        }

        private void CheckedChanged(object sender, EventArgs e)
        {
            string operacion = ((RadioButton)sender).Text;
            lblOperacion.Text = operacion;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Comprueba que por lo menos un checkbox este marcado
            bool chkd = false;
            foreach (var control in Controls)
            {
                if (control.GetType() == typeof(RadioButton))
                {
                    if (((RadioButton)control).Checked)
                    {
                        chkd = true;
                    }
                }
            }

            if (
                Double.TryParse(txtPrimerOperador.Text, out double op1)
                && Double.TryParse(txtSegundoOperador.Text, out double op2)
                && chkd
            )
            {
                lblResult.Text = string.Format(
                    "{0: 0.##}",
                    operaciones[lblOperacion.Text](op1, op2)
                );
            }
        }

        private void textChange(object sender, EventArgs e)
        {
            if (!Double.TryParse(((TextBox)sender).Text, out _))
            {
                ((TextBox)sender).BackColor = Color.Red;
            }
            else
            {
                ((TextBox)sender).BackColor = Color.White;
            }
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            this.Text = ($"{cont / 60, 2}: {cont++ % 60, 2}");
        }
    }
}
