namespace Ejercicio5
{
    partial class Traspasos
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Traspasos));
            this.lbxPrincipal = new System.Windows.Forms.ListBox();
            this.lbxSecundario = new System.Windows.Forms.ListBox();
            this.btnAñadir = new System.Windows.Forms.Button();
            this.btnQuitar = new System.Windows.Forms.Button();
            this.traspasarDrc = new System.Windows.Forms.Button();
            this.TraspasarIzq = new System.Windows.Forms.Button();
            this.tbxTexto = new System.Windows.Forms.TextBox();
            this.lblNumeroItems = new System.Windows.Forms.Label();
            this.lblIndicesSelecionados = new System.Windows.Forms.Label();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.toolTip1 = new System.Windows.Forms.ToolTip(this.components);
            this.SuspendLayout();
            // 
            // lbxPrincipal
            // 
            this.lbxPrincipal.FormattingEnabled = true;
            this.lbxPrincipal.Location = new System.Drawing.Point(50, 36);
            this.lbxPrincipal.Name = "lbxPrincipal";
            this.lbxPrincipal.SelectionMode = System.Windows.Forms.SelectionMode.MultiExtended;
            this.lbxPrincipal.Size = new System.Drawing.Size(231, 173);
            this.lbxPrincipal.TabIndex = 0;
            this.lbxPrincipal.SelectedIndexChanged += new System.EventHandler(this.lbxPrincipal_SelectedIndexChanged_1);
            // 
            // lbxSecundario
            // 
            this.lbxSecundario.FormattingEnabled = true;
            this.lbxSecundario.Location = new System.Drawing.Point(509, 36);
            this.lbxSecundario.Name = "lbxSecundario";
            this.lbxSecundario.Size = new System.Drawing.Size(221, 173);
            this.lbxSecundario.TabIndex = 1;
            // 
            // btnAñadir
            // 
            this.btnAñadir.Location = new System.Drawing.Point(286, 297);
            this.btnAñadir.Name = "btnAñadir";
            this.btnAñadir.Size = new System.Drawing.Size(75, 23);
            this.btnAñadir.TabIndex = 2;
            this.btnAñadir.Text = "Añadir";
            this.btnAñadir.UseVisualStyleBackColor = true;
            this.btnAñadir.Click += new System.EventHandler(this.btnAñadir_Click);
            // 
            // btnQuitar
            // 
            this.btnQuitar.Location = new System.Drawing.Point(436, 297);
            this.btnQuitar.Name = "btnQuitar";
            this.btnQuitar.Size = new System.Drawing.Size(75, 23);
            this.btnQuitar.TabIndex = 3;
            this.btnQuitar.Text = "Quitar";
            this.btnQuitar.UseVisualStyleBackColor = true;
            this.btnQuitar.Click += new System.EventHandler(this.btnQuitar_Click);
            // 
            // traspasarDrc
            // 
            this.traspasarDrc.Location = new System.Drawing.Point(349, 66);
            this.traspasarDrc.Name = "traspasarDrc";
            this.traspasarDrc.Size = new System.Drawing.Size(75, 23);
            this.traspasarDrc.TabIndex = 4;
            this.traspasarDrc.Text = "Traspasar ->";
            this.traspasarDrc.UseVisualStyleBackColor = true;
            this.traspasarDrc.Click += new System.EventHandler(this.traspasarDrc_Click);
            // 
            // TraspasarIzq
            // 
            this.TraspasarIzq.Location = new System.Drawing.Point(349, 133);
            this.TraspasarIzq.Name = "TraspasarIzq";
            this.TraspasarIzq.Size = new System.Drawing.Size(75, 23);
            this.TraspasarIzq.TabIndex = 5;
            this.TraspasarIzq.Text = "<-Traspasar";
            this.TraspasarIzq.UseVisualStyleBackColor = true;
            this.TraspasarIzq.Click += new System.EventHandler(this.TraspasarIzq_Click);
            // 
            // tbxTexto
            // 
            this.tbxTexto.Location = new System.Drawing.Point(173, 235);
            this.tbxTexto.Name = "tbxTexto";
            this.tbxTexto.Size = new System.Drawing.Size(491, 20);
            this.tbxTexto.TabIndex = 6;
            // 
            // lblNumeroItems
            // 
            this.lblNumeroItems.AutoSize = true;
            this.lblNumeroItems.Location = new System.Drawing.Point(377, 413);
            this.lblNumeroItems.Name = "lblNumeroItems";
            this.lblNumeroItems.Size = new System.Drawing.Size(35, 13);
            this.lblNumeroItems.TabIndex = 7;
            this.lblNumeroItems.Text = "label1";
            // 
            // lblIndicesSelecionados
            // 
            this.lblIndicesSelecionados.AutoSize = true;
            this.lblIndicesSelecionados.Location = new System.Drawing.Point(506, 413);
            this.lblIndicesSelecionados.Name = "lblIndicesSelecionados";
            this.lblIndicesSelecionados.Size = new System.Drawing.Size(35, 13);
            this.lblIndicesSelecionados.TabIndex = 8;
            this.lblIndicesSelecionados.Text = "label2";
            // 
            // timer1
            // 
            this.timer1.Enabled = true;
            this.timer1.Interval = 200;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // Traspasos
            // 
            this.AcceptButton = this.btnAñadir;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(850, 542);
            this.Controls.Add(this.lblIndicesSelecionados);
            this.Controls.Add(this.lblNumeroItems);
            this.Controls.Add(this.tbxTexto);
            this.Controls.Add(this.TraspasarIzq);
            this.Controls.Add(this.traspasarDrc);
            this.Controls.Add(this.btnQuitar);
            this.Controls.Add(this.btnAñadir);
            this.Controls.Add(this.lbxSecundario);
            this.Controls.Add(this.lbxPrincipal);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Traspasos";
            this.Text = "Traspasos";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox lbxPrincipal;
        private System.Windows.Forms.ListBox lbxSecundario;
        private System.Windows.Forms.Button btnAñadir;
        private System.Windows.Forms.Button btnQuitar;
        private System.Windows.Forms.Button traspasarDrc;
        private System.Windows.Forms.Button TraspasarIzq;
        private System.Windows.Forms.TextBox tbxTexto;
        private System.Windows.Forms.Label lblNumeroItems;
        private System.Windows.Forms.Label lblIndicesSelecionados;
        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.ToolTip toolTip1;
    }
}

