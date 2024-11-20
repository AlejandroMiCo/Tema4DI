using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ejercicio5
{
    public partial class Traspasos : Form
    {

        int cont;
        Icon lizard = Properties.Resources._22284lizard_98837;
        Icon magic = Properties.Resources.if_destructive_magic_2913121_88811;


        public Traspasos()
        {
            InitializeComponent();
            toolTip1.SetToolTip(this.lbxSecundario, lbxSecundario.Items.Count.ToString());
        }

        private void btnAñadir_Click(object sender, EventArgs e)
        {
            if (!lbxPrincipal.Items.Contains(tbxTexto.Text.ToString()) && tbxTexto.Text.Trim() != "")
            {
                lbxPrincipal.Items.Add(tbxTexto.Text.Trim()); //trim? 
            }
            lblNumeroItems.Text = lbxPrincipal.Items.Count.ToString();

        }

        private void btnQuitar_Click(object sender, EventArgs e)
        {
            List<object> selecionados = lbxPrincipal.SelectedItems.Cast<object>().ToList();
            selecionados.ForEach(s => lbxPrincipal.Items.Remove(s));
            lblNumeroItems.Text = lbxPrincipal.Items.Count.ToString();

        }

        private void traspasarDrc_Click(object sender, EventArgs e)
        {
            string[] selecionados = lbxPrincipal.SelectedItems.Cast<string>().ToArray();

            Array.ForEach(selecionados, s =>
            {
                lbxSecundario.Items.Add(s);
                lbxPrincipal.Items.Remove(s);
            });

            lblNumeroItems.Text = lbxPrincipal.Items.Count.ToString();
            toolTip1.SetToolTip(this.lbxSecundario, lbxSecundario.Items.Count.ToString());

        }

        private void TraspasarIzq_Click(object sender, EventArgs e)
        {
            if (lbxSecundario.SelectedIndex > -1) //Controla que haya un indice seleccionado
            {
                lbxPrincipal.Items.Add(lbxSecundario.SelectedItem);
                lbxSecundario.Items.Remove(lbxSecundario.SelectedItem);
                lblNumeroItems.Text = lbxPrincipal.Items.Count.ToString();

            }
            toolTip1.SetToolTip(this.lbxSecundario, lbxSecundario.Items.Count.ToString());
 
        }

        private void lbxPrincipal_SelectedIndexChanged_1(object sender, EventArgs e)
        {
            lblIndicesSelecionados.Text = "";
            var a = lbxPrincipal.SelectedIndices.Cast<int>().ToArray();
            Array.ForEach(a, b => lblIndicesSelecionados.Text += b.ToString());

        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            string titulo = "Traspasos";


            if (this.Text == titulo)
            {
                this.Text = "";
                cont = titulo.Length - 1;
            }
            else
            {
                this.Text = titulo[cont--] + this.Text;
            }

            if (this.Icon == lizard)
            {
                this.Icon = magic;
            }
            else
            {
                this.Icon = lizard;

            }
        }
    }
}
