namespace Ejercicio3
{
    partial class Visor_de_imagenes
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Visor_de_imagenes));
            this.btnNuevaImagen = new System.Windows.Forms.Button();
            this.cbxModal = new System.Windows.Forms.CheckBox();
            this.SuspendLayout();
            // 
            // btnNuevaImagen
            // 
            this.btnNuevaImagen.Location = new System.Drawing.Point(362, 291);
            this.btnNuevaImagen.Name = "btnNuevaImagen";
            this.btnNuevaImagen.Size = new System.Drawing.Size(75, 23);
            this.btnNuevaImagen.TabIndex = 0;
            this.btnNuevaImagen.Text = "button1";
            this.btnNuevaImagen.UseVisualStyleBackColor = true;
            this.btnNuevaImagen.Click += new System.EventHandler(this.btnNuevaImagen_Click);
            // 
            // cbxModal
            // 
            this.cbxModal.AutoSize = true;
            this.cbxModal.Location = new System.Drawing.Point(38, 296);
            this.cbxModal.Name = "cbxModal";
            this.cbxModal.Size = new System.Drawing.Size(55, 17);
            this.cbxModal.TabIndex = 1;
            this.cbxModal.Text = "Modal";
            this.cbxModal.UseVisualStyleBackColor = true;
            this.cbxModal.CheckedChanged += new System.EventHandler(this.cbxModal_CheckedChanged);
            // 
            // Visor_de_imagenes
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoSize = true;
            this.AutoSizeMode = System.Windows.Forms.AutoSizeMode.GrowAndShrink;
            this.ClientSize = new System.Drawing.Size(784, 561);
            this.Controls.Add(this.cbxModal);
            this.Controls.Add(this.btnNuevaImagen);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Visor_de_imagenes";
            this.Text = "Visor de imagenes";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Form_FormClosing);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnNuevaImagen;
        private System.Windows.Forms.CheckBox cbxModal;
    }
}

