namespace Ejercicio4
{
    partial class Form1
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.txtPrimerOperador = new System.Windows.Forms.TextBox();
            this.txtSegundoOperador = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.rdbSuma = new System.Windows.Forms.RadioButton();
            this.rdbResta = new System.Windows.Forms.RadioButton();
            this.rdbMulti = new System.Windows.Forms.RadioButton();
            this.rdbDivi = new System.Windows.Forms.RadioButton();
            this.lblOperacion = new System.Windows.Forms.Label();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.lblResult = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // txtPrimerOperador
            // 
            this.txtPrimerOperador.Location = new System.Drawing.Point(123, 59);
            this.txtPrimerOperador.Name = "txtPrimerOperador";
            this.txtPrimerOperador.Size = new System.Drawing.Size(100, 20);
            this.txtPrimerOperador.TabIndex = 0;
            this.txtPrimerOperador.TextChanged += new System.EventHandler(this.textChange);
            // 
            // txtSegundoOperador
            // 
            this.txtSegundoOperador.Location = new System.Drawing.Point(313, 59);
            this.txtSegundoOperador.Name = "txtSegundoOperador";
            this.txtSegundoOperador.Size = new System.Drawing.Size(100, 20);
            this.txtSegundoOperador.TabIndex = 1;
            this.txtSegundoOperador.TextChanged += new System.EventHandler(this.textChange);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(459, 57);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 2;
            this.button1.Text = "=";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // rdbSuma
            // 
            this.rdbSuma.AutoSize = true;
            this.rdbSuma.Checked = true;
            this.rdbSuma.Location = new System.Drawing.Point(123, 191);
            this.rdbSuma.Name = "rdbSuma";
            this.rdbSuma.Size = new System.Drawing.Size(31, 17);
            this.rdbSuma.TabIndex = 3;
            this.rdbSuma.TabStop = true;
            this.rdbSuma.Text = "+";
            this.rdbSuma.UseVisualStyleBackColor = true;
            this.rdbSuma.CheckedChanged += new System.EventHandler(this.CheckedChanged);
            // 
            // rdbResta
            // 
            this.rdbResta.AutoSize = true;
            this.rdbResta.Location = new System.Drawing.Point(264, 191);
            this.rdbResta.Name = "rdbResta";
            this.rdbResta.Size = new System.Drawing.Size(28, 17);
            this.rdbResta.TabIndex = 4;
            this.rdbResta.Text = "-";
            this.rdbResta.UseVisualStyleBackColor = true;
            this.rdbResta.CheckedChanged += new System.EventHandler(this.CheckedChanged);
            // 
            // rdbMulti
            // 
            this.rdbMulti.AutoSize = true;
            this.rdbMulti.Location = new System.Drawing.Point(415, 191);
            this.rdbMulti.Name = "rdbMulti";
            this.rdbMulti.Size = new System.Drawing.Size(29, 17);
            this.rdbMulti.TabIndex = 5;
            this.rdbMulti.Text = "*";
            this.rdbMulti.UseVisualStyleBackColor = true;
            this.rdbMulti.CheckedChanged += new System.EventHandler(this.CheckedChanged);
            // 
            // rdbDivi
            // 
            this.rdbDivi.AutoSize = true;
            this.rdbDivi.Location = new System.Drawing.Point(576, 191);
            this.rdbDivi.Name = "rdbDivi";
            this.rdbDivi.Size = new System.Drawing.Size(30, 17);
            this.rdbDivi.TabIndex = 6;
            this.rdbDivi.Text = "/";
            this.rdbDivi.UseVisualStyleBackColor = true;
            this.rdbDivi.CheckedChanged += new System.EventHandler(this.CheckedChanged);
            // 
            // lblOperacion
            // 
            this.lblOperacion.AutoSize = true;
            this.lblOperacion.Location = new System.Drawing.Point(260, 59);
            this.lblOperacion.Name = "lblOperacion";
            this.lblOperacion.Size = new System.Drawing.Size(32, 13);
            this.lblOperacion.TabIndex = 7;
            this.lblOperacion.Text = "signo";
            // 
            // timer1
            // 
            this.timer1.Enabled = true;
            this.timer1.Interval = 1000;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // lblResult
            // 
            this.lblResult.AutoSize = true;
            this.lblResult.Location = new System.Drawing.Point(601, 59);
            this.lblResult.Name = "lblResult";
            this.lblResult.Size = new System.Drawing.Size(0, 13);
            this.lblResult.TabIndex = 9;
            // 
            // Form1
            // 
            this.AcceptButton = this.button1;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.lblResult);
            this.Controls.Add(this.lblOperacion);
            this.Controls.Add(this.rdbDivi);
            this.Controls.Add(this.rdbMulti);
            this.Controls.Add(this.rdbResta);
            this.Controls.Add(this.rdbSuma);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.txtSegundoOperador);
            this.Controls.Add(this.txtPrimerOperador);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.Text = "calculadora";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox txtPrimerOperador;
        private System.Windows.Forms.TextBox txtSegundoOperador;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.RadioButton rdbSuma;
        private System.Windows.Forms.RadioButton rdbResta;
        private System.Windows.Forms.RadioButton rdbMulti;
        private System.Windows.Forms.RadioButton rdbDivi;
        private System.Windows.Forms.Label lblOperacion;
        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Label lblResult;
    }
}

